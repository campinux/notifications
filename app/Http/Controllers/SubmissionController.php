<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\User;
use App\Models\UserCategory;
use App\Models\UserChannel;
use App\Notifications\NewMessage;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function show()
    {
        return view('submission', [
            'categories' => Category::all()
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'category' => ['required', 'exists:category,id'],
            'content' => ['required', 'string', 'min:1']
        ]);

        $usersCategory = UserCategory::where('category_id', $request->category)->get();
        foreach($usersCategory as $userCategory) {
            $data = [];
            $userChannels = UserChannel::where('user_id', $userCategory->user_id)->get(); 
            foreach($userChannels as $userChannel) {
                $data[] = [
                    'user_id' => $userCategory->user_id,
                    'category_id' => $request->category,
                    'channel_id' => $userChannel->channel_id,
                    'content' => $request->content,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            Message::insert($data);
            User::find($userCategory->user_id)->notify(new NewMessage($request->content));
        }
        return redirect()->back()->with('status', 'Message sent!');
    }
}

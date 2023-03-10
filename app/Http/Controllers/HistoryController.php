<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Channel;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function show()
    {
        $data = [];
        $messages = Message::all();
        foreach($messages as $message) {
            $user = User::find($message->user_id);
            $category = Category::find($message->category_id);
            $channel = Channel::find($message->channel_id);
            $data[] = [
                'user_name' => $user->name,
                'content' => $message->content,
                'category' => $category->name,
                'channel' => $channel->name,
                'date' => $message->created_at
            ];
        }
        return view('history', [
            'messages' => $data
        ]);
    }
}

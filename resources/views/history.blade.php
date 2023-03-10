<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>History</title>
    <style>
        body{

            background: aliceblue;
        }
        #table  {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 0;
            margin-top:15%;
            flex-direction: column;

        }
        table {
            text-align: center;
            width: 80%;
            border: 1px solid;
        }
        td,th{
            border: 1px solid
        }
       
    </style>
    <body>
        <div id="table">
            <h1>Log History</h1> <br>

            <table>
                <thead>
                    <th>Username</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Channel</th>
                    <th>Date</th>
                </thead>
                @foreach ($messages as $message)
    <tr>
        <td>{{ $message['user_name'] }}</td>
        <td>{{ $message['category'] }}</td>
        <td>{{ $message['content'] }}</td>
        <td>{{ $message['channel'] }}</td>
        <td>{{ $message['date'] }}</td>
    </tr>
    @endforeach
</table>
<a href="/submission">
    <button class="btn btn-primary btn-lg mt-5">Back to submission</button>
</a>
</div>

</body>
</html>
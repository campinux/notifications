<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Submission</title>
    <style>
        body{

            background: aliceblue;
        }
        #form, h1  {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 0;
            flex-direction: column;
        }
        #form, h1{ margin-top:5%
        }
       
       

    </style>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1>Notification test</h1> <br>
    <div id="form">
        <form action="/submission" method="POST">
            @csrf
            <select name="category" id="category">
                <option selected disabled>Choose a category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select><br>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="Content"></textarea><br>
            <button>Enviar</button>
        </form>
        <a href="/history">
            <button class="btn btn-primary btn-lg mt-5">View History</button>
        </a>
    </div> 
</body>
</html>
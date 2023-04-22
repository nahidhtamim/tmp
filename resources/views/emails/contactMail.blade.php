<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$details['subject']}}</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <b>{{$details['subject']}}</b> <hr>
        </div>
        <div class="card-header">
            <p>Region : {{$details['region']}}</p>
            <p>Name : {{$details['name']}}</p>
            <p>Phone : {{$details['phone']}}</p>
            <p>Email : {{$details['email']}}</p>
            <p>Message : {{$details['content']}}</p>
        </div>
    </div>
</body>
</html>
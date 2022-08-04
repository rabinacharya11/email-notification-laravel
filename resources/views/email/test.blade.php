
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="https://assets.stickpng.com/images/58aff226829958a978a4a6d4.png" alt="Welcome Banner" itemprop="contentUrl">

<h4>Hello {{$data['name']}}, Congraulations, You got registered with <b>Kritana Consmetics</b>. </h4>

<p>Please verify your email address</p>
<h2>{{$data['code']}}</h2>

<p>You can find the verify the email address alternatively by clicking in the link below</p>
<h4><a href="{{$data['url']}}">Verify Email</a></h4>

<p>{{$data['ending']}}</p>
<p>{{$data['sender']}}</p>
</body>






</html>





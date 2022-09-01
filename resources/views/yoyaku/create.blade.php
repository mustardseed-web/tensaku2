<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Document</title>
</head>



<body>
  <h1>予約の新規作成</h1>
  @if (count($errors) > 0)
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  @endif
  @if(session('message'))
  {{session('message')}}
  @endif

  <form action="{{route('store')}}" method="post">
    @csrf
    <h2>予約日第一希望日</h2>
    <input type="date" name="date1" value="{{ old('date1') }}">
    <h2>予約日第二希望日</h2>
    <input type="date" name="date2" value="{{ old('date2') }}">
    <h2>備考</h2>
    <textarea name="body" rows="4" cols="40" value="{{ old('body') }}"></textarea>
    <br>
    <button class="bg-teal-700">送信する</button>
  </form>

</body>

</html>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <h1>index</h1>
  <a href="{{ route('texts.create') }}">新規登録</a>

  @if (session('flash_message'))
  <div>
  {{ session('flash_message') }}
  </div>
  @endif

  <h1>Text</h1>


  @foreach($texts as $text)
  <a href="{{ route('texts.show', [ 'id'=> $text->id ])}}"> {{ $text->id }} </a> : 
  {{ $text->title }} : {{ $text->price}}<br>
  @endforeach
  {{ $texts->links('vendor.pagination.simple-default') }}
</body>
</html>
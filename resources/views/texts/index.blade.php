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
{{ $text->id }} : {{ $text->title }} : {{ $text->price}}<br>
@endforeach
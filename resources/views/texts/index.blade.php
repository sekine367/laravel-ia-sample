@if (session('flash_message'))
<div>
{{ session('flash_message') }}
</div>
@endif

<h1>Text</h1>
@foreach($texts as $text)
{{ $text->title }} : {{ $text->content }} <br>
@endforeach
<h1>index</h1>
<a href="{{ route('samples.create') }}">新規登録</a>

@if (session('flash_message'))
<div>
{{ session('flash_message') }}
</div>
@endif

<h1>Sample</h1>
@foreach($samples as $sample)
<a href="{{ route('samples.show', [ 'id'=> $sample->id ])}}"> {{ $sample->id }} </a> : 
{{ $sample->name }} : {{ $sample->email }} <br>
@endforeach
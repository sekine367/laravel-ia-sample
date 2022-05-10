@if (session('flash_message'))
<div>
{{ session('flash_message') }}
</div>
@endif

<h1>Sample</h1>
@foreach($samples as $sample)
{{ $sample->name }} : {{ $sample->email }} <br>
@endforeach
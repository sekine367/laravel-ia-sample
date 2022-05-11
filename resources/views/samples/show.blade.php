<h1>show</h1>
<a href="{{ route('samples.index')}}">一覧に戻る</a>

{{ $sample->id}} : {{ $sample->name}} {{ $sample->email}} 

<a href="{{ route('samples.edit', [ 'id'=> $sample->id ])}}">編集する</a> 

<form method="post" action="{{ route('samples.delete', [ 'id' => $sample->id ])}}">
  @csrf
  <button>削除する</button>
</form>  
<h1>edit</h1>

<a href="{{ route('samples.show', [ 'id'=> $sample->id ])}}">戻る</a>

<form action="{{ route('samples.update', [ 'id'=> $sample->id ])}}" method="post">
@csrf
  <label>名前</label>
  <input type="text" name="name" value="{{ $sample->name }}">
  <label>メールアドレス</label>
  <input type="text" name="email" value="{{ $sample->eamil }}">
  <button>更新する</button>
</form>
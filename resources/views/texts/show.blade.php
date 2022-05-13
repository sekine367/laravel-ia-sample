<h1>show</h1>
<a href="{{ route('texts.index')}}">一覧に戻る</a>

ID : {{ $text->id}}<br>
タイトル：{{ $text->title}} <br>
値段：{{ $text->price}}円<br>
アドレス：{{ $text->email}}<br> 
内容： {{ $text->content }}<br>
表示：{{ $text->is_visible }}<br>
ユーザー：<a href="{{ route('users.index', [ 'id' => $textUser->id ])}}">
{{ $textUser->name }}
</a><br>

<a href="{{ route('texts.edit', [ 'id'=> $text->id ])}}">編集する</a> 

<form method="post" action="{{ route('texts.delete', [ 'id' => $text->id ])}}">
  @csrf
  <button>削除する</button>
</form>

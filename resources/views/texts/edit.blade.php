<h1>edit</h1>
@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<a href="{{ route('texts.show', [ 'id'=> $text->id ])}}">戻る</a>

<form action="{{ route('texts.update', [ 'id'=> $text->id ])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('patch')
  <label for="">タイトル</label>
  <input type="text" name="title" value="{{ $text->title }}"><br>

  <label for="">内容</label>
  <input type="text" name="content" value="{{ $text->content }}"><br>

  <label for="">金額</label>
  <input type="text" name="price" value="{{ $text->price }}">円<br>

  <label for="">メールアドレス</label>
  <input type="text" name="email" value="{{ $text->email }}"><br>

  <div>
    @if (isset($text->img_path))
       <img src="{{ \Storage::url($text->img_path) }}" width="25%">
    @else
       <img src="{{ \Storage::url('texts/no-image.jpg') }}" width="25%">
    @endif
  </div>
  <div>
    <input type="file" name="img_path">
  </div>

  <input type="radio" name="is_visible"  id="visible" value="1" {{ $text->is_visible  == "1" ? 'checked' : '' }}>
  <label for="visible">表示する</label><br>

  <input type="radio" name="is_visible"  id="invisible" value="0" {{ $text->is_visible  == "0" ? 'checked' : '' }}>
  <label for="invisible">表示しない</label><br>
  <button>送信</button>
</form>
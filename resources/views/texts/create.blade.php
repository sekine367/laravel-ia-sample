create
@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<form action="{{ route('texts.store')}}" method="post">
  @csrf
  <label for="">タイトル</label>
  <input type="text" name="title" value="{{ old('title') }}"><br>

  <label for="">内容</label>
  <input type="text" name="content" value="{{ old('content') }}"><br>

  <label for="">金額</label>
  <input type="text" name="price" value="{{ old('price') }}">円<br>

  <label for="">メールアドレス</label>
  <input type="text" name="email" value="{{ old('email') }}"><br>

  <input type="radio" name="is_visible"  id="visible" value="1" {{ old('is_visible')  == "1" ? 'checked' : '' }}>
  <label for="visible">表示する</label><br>

  <input type="radio" name="is_visible"  id="invisible" value="0" {{ old('is_visible')  == "0" ? 'checked' : '' }}>
  <label for="invisible">表示しない</label><br>
  <button>送信</button>
</form>
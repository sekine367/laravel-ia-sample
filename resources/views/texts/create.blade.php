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
  <input type="text" name="title" value="{{ old('title') }}">
  <label for="">内容</label>
  <input type="text" name="content" value="{{ old('content') }}">
  <button>送信</button>
</form>
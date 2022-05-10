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

<form action="{{ route('samples.store')}}" method="post">
  @csrf
  <input type="text" name="name" value="{{ old('name') }}">
  <input type="text" name="email" value="{{ old('email') }}">
  <button>送信</button>
</form>
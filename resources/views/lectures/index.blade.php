<h1>ようこそ　{{ $user->name }}さん</h1>

<form action="{{ route('lectures.update')}}" method="post">
  @csrf
  @foreach($lecture_checkBox as $lecture)
  <input type="checkbox" name="lecture[]"  id="{{ $lecture['id'] }}" value="{{ $lecture['id'] }}" {{ $lecture['check']  == "1" ? 'checked' : '' }}>
  <label for="{{ $lecture['id'] }}">{{ $lecture['name'] }}</label><br>
  @endforeach
  <button>変更</button>
</form>


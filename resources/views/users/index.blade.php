<h1>{{ $user->name }}</h1>
@foreach($userTexts as $userText)
<a href="{{ route('texts.show', [ 'id'=> $userText->id ])}}"> 
  {{ $userText->id }} 
</a> : {{ $userText->title }} : {{ $userText->price}}<br>
@endforeach
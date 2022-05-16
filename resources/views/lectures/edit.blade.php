<x-app-layout>
<x-slot name="header"></x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('lectures.update')}}" method="post">
                  @csrf
                  @foreach($lecture_checkBox as $lecture)
                  <input type="checkbox" name="lecture[]"  id="{{ $lecture['id'] }}" value="{{ $lecture['id'] }}" {{ $lecture['check']  == "1" ? 'checked' : '' }}>
                  <label for="{{ $lecture['id'] }}">{{ $lecture['name'] }}</label><br>
                  @endforeach
                  <x-button>変更</x-button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
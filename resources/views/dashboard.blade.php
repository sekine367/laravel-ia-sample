<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <nav>
                    <ul>
                        @can('system-only') {{-- システム管理者権限のみに表示される --}}
                        <li><a href="">機能１</a></li>
                        <li><a href="">機能２</a></li>
                        <li><a href="">機能３</a></li>
                        <li><a href="">機能４</a></li>
                        <li><a href="">機能５</a></li>
                        @elsecan('admin-higher') {{-- 管理者権限以上に表示される --}}
                        <li><a href="">機能２</a></li>
                        <li><a href="">機能３</a></li>
                        <li><a href="">機能４</a></li>
                        <li><a href="">機能５</a></li>
                        @elsecan('user-higher') {{-- 一般権限以上に表示される --}}
                        <li><a href="">機能５</a></li>
                        @endcan
                    </ul>
                </nav>   
                You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

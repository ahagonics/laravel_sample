<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

cafe_reviewのindexページです。<br>

@foreach ($errors->all() as $error)
    <li> <span class="error">{{ $error }}</span></li>
@endforeach


{{-- Blade --}}
@foreach ($cafes as $cafe)
    {{-- <a href="{{ route('book.show', $book->id) }}">{{ $book->id }}</a> --}}
    @if ($cafe->is_visible == true)
    <a href="{{ route('cafe_review.show', $cafe->id) }}">{{ $cafe->id }}</a>
    {{ $cafe->name }}<br>
    @endif
@endforeach
 <a href="{{ route ('cafe_review.create') }}">新規作成</a>

</div>
</div>
</div>
</div>
</x-app-layout>

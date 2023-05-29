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

<h1>詳細画面</h1>
<div>{{ $cafe->name }}</div>
<div>{{ $cafe->prefecture }}</div>
<div>{{ $cafe->address }}</div>
<div>{{ $cafe->review }}</div>

<a href="{{ route('cafe_review.index') }}">一覧に戻る</a>
<a href="{{ route('cafe_review.edit',$cafe->id) }}">編集</a>

<form action="{{ route('cafe_review.destroy',$cafe->id) }}" method="POST">
@csrf
@method('delete')
<input type="submit" value="削除">
</form>

</div>
</div>
</div>
</div>
</x-app-layout>

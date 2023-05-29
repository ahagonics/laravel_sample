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

<form action="{{ route('cafe_review.store')}}" method="post">
    @csrf
    <div>
      <label for="name">店名</label>
      <input type="text" id="name" name="name" value="{{ old('name')}}">
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
      </div>
      <div>
        <label for="prefecture">都道府県</label>
        <input type="text" id="prefecture" name="prefecture" value="{{ old('prefecture')}}">
        @if ($errors->has('prefecture'))
         <p class="error">*{{ $errors->first('prefecture') }}</p>
        @endif
        </div>
        <div>
            <label for="address">住所</label>
            <input type="text" id="address" name="address" value="{{ old('address')}}">
            @if ($errors->has('address'))
             <p class="error">*{{ $errors->first('address') }}</p>
            @endif
            </div>
    <div>
      <label for="review">評価</label>
      <input type="double" id="review" name="review" value="{{ old('review')}}">
    </div>
    <div>
        <label>表示の有無</label>
        <input type="radio" name="is_visible" value=1>させる
        <input type="radio" name="is_visible" value=0>させない
      </div>
    <div>
      <input type="submit" value="送信"/>
    </div>
  </form>
  <a href="{{ route('cafe_review.index') }}">{{ __('一覧へ戻る') }}</a>

</div>
</div>
</div>
</div>
</x-app-layout>

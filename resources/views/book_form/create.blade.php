<form action="{{ route('books_form.store')}}" method="post">
    @csrf
    <div>
      <label for="title">お名前</label>
      <input type="text" id="title" name="title" value="{{ old('title')}}">
      @if ($errors->has('title'))
       <p class="error">*{{ $errors->first('title') }}</p>
      @endif
      </div>
    <div>
      <label for="price">値段</label>
      <input type="number" id="price" name="price" value="{{ old('price')}}">
    </div>
    <div>
      <input type="submit" value="送信"/>
    </div>
  </form>
  <a href="{{ route('books_form.index') }}">{{ __('一覧へ戻る') }}</a>

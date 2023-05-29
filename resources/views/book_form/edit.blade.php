<h1>編集画面</h1>
<form action="{{ route('books_form.update', $book->id) }}" method="post">
    @method('put')
    @csrf
    <div>
      <label for="title">タイトル</label>
      <input type="string" id="title" name="title" value="{{ $book->title }}">
      @if ($errors->has('title'))
       <p class="error">*{{ $errors->first('title') }}</p>
      @endif
      </div>
    <div>
      <label for="price">値段</label>
      <input type="number" id="price" name="price" value="{{ $book->price }}">
    </div>
    <div>
      <input type="submit" value="更新する"/>
    </div>
  </form>

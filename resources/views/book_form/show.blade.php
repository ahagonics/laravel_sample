<h1>詳細画面</h1>
<div>{{ $book->id }}</div>
<div>{{ $book->title }}</div>
<div>{{ $book->price }}</div>

<a href="{{ route('books_form.index') }}">一覧に戻る</a>
<a href="{{ route('books_form.edit',$book->id) }}">編集</a>

<form action="{{ route('books_form.destroy',$book->id) }}" method="POST">
@csrf
@method('delete')
<input type="submit" value="削除">
</form>

お問い合わせのindexページです。<br>

@foreach ($errors->all() as $error)
    <li> <span class="error">{{ $error }}</span></li>
@endforeach


{{-- Blade --}}
@foreach ($books as $book)
    {{-- <a href="{{ route('book.show', $book->id) }}">{{ $book->id }}</a> --}}
    <a href="{{ route('books_form.show', $book->id) }}">{{ $book->id }}</a>
    {{ $book->title }}<br>
@endforeach
 <a href="{{ route ('books_form.create') }}">新規作成</a>

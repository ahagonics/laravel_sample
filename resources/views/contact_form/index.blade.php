お問い合わせのindexページです。
@foreach ($errors->all() as $error)
    <li> <span class="error">{{ $error }}</span></li>
@endforeach

<form action="{{ route('contact.confirm')}}" method="post">
    @csrf
    <div>
      <label for="name">お名前</label>
      <input type="text" id="name" name="name" value="{{ old('name')}}">
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
      </div>
    <div>
      <label for="mail">メールアドレス</label>
      <input type="text" id="mail" name="mail" value="{{ old('mail')}}">
    </div>
    <div>
      <label>性別</label>
      <input type="radio" name="gender" value="0">男性
      <input type="radio" name="gender" value="1">女性
      <input type="radio" name="gender" value="2">その他
    </div>
    <div>
      <label for="age">年齢</label>
      <input type="number" id="age" name="age" value="{{ old('age')}}">
    </div>
    <div>
      <label for="messeage">お問合せ内容</label>
      <textarea name="message">{{ old('message')}}</textarea>
    </div>
    <div>
      <input type="submit" value="送信"/>
    </div>
  </form>

{{-- Blade --}}
@foreach ($contacts as $contact)
    <a href="{{ route('contact.show', $contact->id) }}">{{ $contact->id }}</a>
    {{ $contact->name }}
@endforeach

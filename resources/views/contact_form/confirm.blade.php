確認
<form action="{{ route('contact.store') }}" method="post">
@csrf
<div>名前: {{ $request->name }}</div>
<div>メール: {{ $request->mail }}</div>
<div>性別: {{ $request->gender }}</div>
<div>年齢: {{ $request->age }}</div>
<div>お問合せ内容: {{ $request->message }}</div>

<input type="hidden" name="name" value="{{ $request->name }}" />
<input type="hidden" name="mail" value="{{ $request->mail }}" />
<input type="hidden" name="gender" value="{{ $request->gender }}" />
<input type="hidden" name="age" value="{{ $request->age }}" />
<input type="hidden" name="message" value="{{ $request->message }}" />
<button>送信</button>
<div>
    {{-- 戻るボタンにback というname属性を持たせておき、ボタンが押されたかどうかを判定できるようにする --}}
    <input type="submit" name="back" value="戻る">
</div>

</form>

{{-- <h1>resources/views/ContactForm/confirm.badede.php</h1>
<p>お問い合わせ内容確認</p>
<ul>
    <li>
        お名前：
        <p>{{$request->name}}</p>
    </li>
</ul> --}}


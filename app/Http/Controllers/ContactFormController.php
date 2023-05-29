<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; //モデルファイルをEloquent ORM phpでdb操作


class ContactFormController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        // dd($contacts);

        return view('contact_form.index',compact('contacts'));
    }

    public function confirm(Request $request)
    {
        /* Request で送信された内容をデバッグ表示する */
        // dd($request->all());
        /* バリデーションを実施する */
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:100']
        ]);

        /* 戻るボタンが押されたとき(リクエストに、back の内容がある)
         * -> 入力内容を持たせた状態で、入力画面にリダイレクトする
         */
        if ($request->has('back')){
            /* withInput() で、現在の入力内容をリダイレクトのリクエストに付加する */
            return redirect('/ContactForm')->withInput();
        }

        return view('contact_form.confirm', compact('request'));
    }

    public function store(Request $request){
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->gender = $request->gender;
        $contact->age = $request->age;
        $contact->message = $request->message;

        $contact->save(); //保存の後はリダイレクト

        return redirect('contact_form');
    }

    public function show($id){

        $contact = Contact::find($id);
        //dd($contact);

        return view('contact_form.show',compact('contact'));
    }

    public function edit($id){

        $contact = Contact::find($id);

        return view('contact_form.edit',compact('contact'));
    }

    public function update(Request $request, $id){
        $contact = Contact::find($id);

        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->gender = $request->gender;
        $contact->age = $request->age;
        $contact->message = $request->message;

        $contact->save(); //保存の後はリダイレクト

        return redirect('contact_form');
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('contact_form');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cafes = Cafe::all();
        // dd($contacts);

        return view('cafe_review.index',compact('cafes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cafe_review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:50'],
            'prefecture' => ['required'],
            'address' => ['required','max:100'],
            'review' => ['required', 'min:1.0', 'max:5.0'],
            // 'is_visible' => ['required']
        ]);

        $cafe = new Cafe;

        $cafe->name = $request->name;
        $cafe->prefecture = $request->prefecture;
        $cafe->address = $request->address;
        $cafe->review = $request->review;
        $cafe->is_visible = $request->is_visible;

        $cafe->save(); //保存の後はリダイレクト

        return redirect('cafe_review');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $cafe = Cafe::find($id);
        //dd($contact);

        return view('cafe_review.show',compact('cafe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cafe = Cafe::find($id);

        return view('cafe_review.edit',compact('cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:50'],
            'prefecture' => ['required'],
            'address' => ['required','max:100'],
            'review' => ['required', 'min:1.0', 'max:5.0'],
            // 'is_visible' => ['required']
        ]);

        $cafe = Cafe::find($id);

        $cafe->name = $request->name;
        $cafe->prefecture = $request->prefecture;
        $cafe->address = $request->address;
        $cafe->review = $request->review;
        $cafe->is_visible = $request->is_visible;

        $cafe->save(); //保存の後はリダイレクト

        return redirect('cafe_review');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $cafe = Cafe::find($id);
        $cafe->delete();

        return redirect('cafe_review');
    }
}

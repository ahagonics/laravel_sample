<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index(){
        $eloquent = Contact::all();

        $eloquentfind = Contact::find(1);

        $eloquentselect = Contact::select('id','name');
        $where = $eloquentselect->where('id',1)->tosql();
        $where2 = $eloquentselect->where('id',1)->get();
        $array = $where2->toArray();
        //出力がインスタンスになっている
        $queryBuilderGet = DB::table('contacts')->get();
        //Collection
        $queryBuilderFirst = DB::table('contacts')->first();
        //Collectionの中の一つ
        $collection = collect(['aaa', 'bbb']);
        //collection

        dd($eloquent,$eloquentfind, $queryBuilderGet,
        $queryBuilderFirst, $collection,$where,$array);

    }
}

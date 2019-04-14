<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
//        $id = Input::get('id','tiangou');
//        dump(Input::has('name'));
//        echo $id;
//        return'home/index';
//        dump(Input::only(['id','age']));
//        dump(Input::except('id'));

    }

    public function cate(Request $request){
        $id = $request->get('id');
        echo $id;
    }
}

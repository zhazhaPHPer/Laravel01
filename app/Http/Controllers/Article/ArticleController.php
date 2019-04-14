<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {

        return view('article.article');
    }

    public function list()
    {
        $data = [
            ['id'=>1,'title'=>'舔狗','logo'=>'/images/6.gif'],
            ['id'=>2,'title'=>'春梦豪','logo'=>'/images/9.gif'],
            ['id'=>3,'title'=>'舔狗','logo'=>'/images/12.gif'],
            ['id'=>4,'title'=>'春梦豪','logo'=>'/images/37.gif'],
            ['id'=>5,'title'=>'舔狗','logo'=>'/images/41.gif'],
            ['id'=>6,'title'=>'春梦豪','logo'=>'/images/12.gif'],
            ['id'=>7,'title'=>'舔狗','logo'=>'/images/45.gif'],
            ['id'=>8,'title'=>'春梦豪','logo'=>'/images/49.gif'],
            ['id'=>9,'title'=>'舔狗','logo'=>'/images/17.gif'],
            ['id'=>10,'title'=>'春梦豪','logo'=>'/images/20.gif'],
        ];
        $code = [
            'code' => 200,
            'msg' => 'success',
            'data' => $data
        ];
        return json_encode($code);
    }
}

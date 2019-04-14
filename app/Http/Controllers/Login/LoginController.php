<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
     * 登录页面
     * */
    public function index()
    {
        return view('login.login');
    }
    /*
     * 登录方法*/
    public function login(Request $request)
    {
        $user = ['id' => 1 ,'username' => 'tiangou' , 'password' => 123456];
        $data = $request->post('data');
        //dump($request->post());
        if ($data['username'] == $user['username'] && $data['pwd'] == $user['password']){
//            return redirect('article.article');
//             return view('article.article');
//            redirect('article.article');
            $code = [
                'code' => 200,
                'msg' => 'success'
            ];
            return json_encode($code);
//            return redirect('article/article');
//            redirect()->action('ArticleController@index');
        }else{
            $code = [
                'code' => 100,
                'msg' => '账号密码错误'
            ];
            return json_encode($code);
        }
//        return view('login.login');
    }

}

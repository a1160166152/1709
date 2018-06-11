<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/9
 * Time: 10:50
 */

namespace App\Http\Controllers\Login;



use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use yii\debug\models\timeline\Search;

class LoginController extends Controller
{
    public function login()
    {
//        if($request->isMethod('get')){
//            return view('Login.login');
//        }elseif($request->isMethod('post')){
//            $user = DB::table('admin')->where(['username'=>$request->input('username')])->first();
//            error;die;
//        }


    }

    public function request1(Request $request)
    {
        //1.取值 可以取出get数据和post数据
        echo $request->input('name');
        echo $request->input('name','未知');
        //2.判断一个值 是否存在
        $request->has('name');
        $request->hasCookie('name');
        $request->hasFile('name');
        $request->hasHeader('name');
        $request->hasSession('name');
        $request->hasPreviousSession('name');

        if($request->has('name')){
            echo $request->input('name');
        }else{
            echo '无该参数';
        }
        //3.获取所有参数
        $res = $request->all();
        var_dump($res);

        //4.判断 请求类型
        $bool = $request->isMethod('get');
        $bool = $request->isMethod('post');
        $bool = $request->ajax();

        //5.判断请求的路径是否符合特定的格式
        $bool = $request->is('student/*');

        //获取当前地址的url
        $request->url();
    }

    public function response()
    {
        //相应json
        $data = [
            'errCode' => 0,
            'errMsg' => 'success',
            'data' => 'sean'
        ];
        //返回json格式
        return response()->json();

        //4.重定向 with 注册数据
        redirect('session2')->with('message', '我是快闪信息');

        //action()
        redirect()
            ->action('StudentController@session2')
            ->with('message', '我是快闪信息');

        //route()
        redirect()->route('session2')
            ->with('message', '我是快闪数据');
    }

    public function activity()
    {
        
    }
    
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Login extends Controller
{
    //注册页面
    public function register(){
        return view('login/register');
    }


    //执行注册
    public function do_register(Request $request){
        $data=$request->all();
        if (empty($data['l_name'])){
            echo "用户名不能为空";exit;
        }

        if (empty($data['l_pwd'])){
            echo "密码不能为空";exit;
        }

        unset($data['_token']);
        $data['l_pwd']=md5($data['l_pwd']);
        $data['l_time']=time();
        $res=DB::table('login')->insert($data);
        if($res){
            echo "注册成功";
        }else{
            echo "注册失败";
        }
    }


    //登录页面
    public function index(){
        return view('login/index');
    }

    //登录执行操作
    public function login(Request $request){
        $data=$request->all();
        if (empty($data['l_name'])){
            echo "用户名不能为空";exit;
        }

        if (empty($data['l_pwd'])){
            echo "密码不能为空";exit;
        }
        $pwd=md5($data['l_pwd']);
        $where=[
            'l_name'=>$data['l_name'],
            'l_pwd' => $pwd,
        ];
        $res=Db::table('login')->where($where)->first();
        if (empty($res)){
            echo "用户名\密码不正确";
        }else{
            echo "登录成功";
        }
    }
}

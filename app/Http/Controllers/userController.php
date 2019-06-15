<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
class userController extends Controller
{
	//添加页面
    public function index(){
        $redis = new \Redis();
        $redis->connect('127.0.0.1','6379');
        $num = $redis->incr('num');

        return view('addUser');
    }

    //添加数据库
    public function do_add(Request $request){
    	$data=$request->all();
    	if (empty($data['u_name'])){
            echo "账号不能为空";exit;
        }
        if (empty($data['u_pwd'])){
            echo "密码不能为空";exit;
        }
    	$res=DB::table('user')->insert([
    		'u_name'=>$data['u_name'],
    		'u_pwd'=>md5($data['u_pwd']),
    		'login_time'=>time(),
    	]);
    	
    }

    //展示页面
    public function list()
    {
        $redis = new \Redis();
        $redis->connect('127.0.0.1','6379');
        $num = $redis->get('num');
        echo $num."<br/>";
    	$info=DB::table("user")->get()->toArray();
    	return view("list",['info'=>$info]);
    }

    //删除
    public function del(){
    	$u_id = Input::get('u_id');
    	$res=DB::table("user")->where('u_id',$u_id)->delete();
    	if ($res) {
    		echo "删除成功";
    	}else{
    		echo "删除失败";
    	}
    }

    //修改展示页面
    public function update(){
    	$u_id = Input::get('u_id');
    	$data=Db::table('user')->where(['u_id'=>$u_id])->first();
    	// var_dump($data);
    	return view('update',['data'=>$data]);
    }

    //执行修改
    public function do_update(Request $request){
    	$data=$request->all();
    	unset($data['_token']);
    	$res=Db::table('user')->where('u_id',$data['u_id'])->update($data);
    	if ($res) {
    		echo "修改成功";
    	}else{
    		echo "修改失败";
    	}

    }

}

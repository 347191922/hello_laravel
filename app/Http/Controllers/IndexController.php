<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/16
 * Time: 15:18
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
//use Illuminate\View\View;

class IndexController extends Controller
{
    public function index()
    {
        return "狗贼 哪里跑!";
    }
    public function tpl()
    {
        return view('ftr',['name'=>'hello']);
    }
    public function app()
    {
        //判断视图文件是否存在
        if (View::exists('layouts.child')){
            session(['id'=>'1']);
            $id = session('id');
//            dump($id);die;
            return view('layouts.child');
        }else{
            return 111;
        }

    }
}
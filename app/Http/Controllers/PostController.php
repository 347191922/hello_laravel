<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 11:09
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\Contrller;

class PostController extends Controller
{
    /**
     * 显示创建博客文章的表单
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 保存一个新的博客文章
     * @param Request $request
     */
    public function store(Request $request)
    {

    }
}
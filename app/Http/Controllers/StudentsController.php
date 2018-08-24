<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 15:33
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class StudentsController extends Controller
{
    public function test1()
    {
        $list = DB::table('student')->get();
        dump($list);die;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: damon
 * Date: 2019-02-24
 * Time: 22:06
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class LandingController extends BaseController
{
    /* 首页 */
    public function index() { return view("landing/index"); }

    /* 关于 */
    public function about() { return view("landing/about"); }

    /* 试用说明 */
    public function manual() { return view("landing/manual"); }

    /* 用户协议 */
    public function protocol() { return view("landing/protocol"); }
}
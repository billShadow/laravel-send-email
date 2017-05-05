<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestController extends Controller
{

    public function sendemail(Request $request)
    {
        $data = ['email'=>'1096036952@qq.com', 'name'=>'肖斌'];
        Mail::send('welcome', $data, function($message) use($data)
        {
            $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
        });

        // 上面的welcome是view模板。可以定制自己的邮件模板。这里测试方便，直接用的laravel自带的welcome模板
        // data 需要发送的对象信息。  subject 邮件主题。
    }

}

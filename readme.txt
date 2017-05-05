laravel 发送邮件实例说明：

首先配置 config/mail.php  
// 主要配置内容  这里以163为例，其他邮箱只需修改响应的邮件服务器与端口号即可
'host' => 'smtp.163.com',
'port' => 25,
'from' => array('address' => 'bill_xiaobin@163.com', 'name' => 'TestMail'),
'username' => 'bill_xiaobin@163.com', 
// 注意，这里username必须和上一行配置里面的邮件地址一致
//  如果你是配置的.env文件，env里面默认是没有是没有配置 address的值。
'password' => '****',

//重点：还有就是需要注意 如果邮箱密码不行，需要登录163邮箱，在设置中获取一个客户端密码


// 关于报错：
 Expected response code 250 but got code "553", with message "553 Mail from must equal authorized user：
 实际报了这个错误，但是邮件其实已经发送成功！


// 这里还有一个email错误的参考错误链接： http://www.mailenable.com/kb/content/article.asp?ID=ME020032








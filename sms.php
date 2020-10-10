<?php

#注册阿里云账号
#购买短信套餐 
#申请签名  申请短信模板

#API

	访问URL  file_get_contents("http://www.baidu.com?a=1&b=2");



	        CURL
	     GET   
	     POST

	1:封装公共请求参数
			//API 公共参数 https://help.aliyun.com/document_detail/101341.html?spm=a2c4g.11186623.2.12.782f7ce8zAceie
			签名唯一随机数:	   time().mt_rand(11111,999999);

			时间戳：gmdate("Y-m-d\TH:i:s\Z"),//date()

			Action:SendSms

	2: 封装发送短信的参数

	//sendSMS  https://help.aliyun.com/document_detail/101414.html?spm=a2c4g.11186623.6.625.c2457535xOGaa3

	$arr['code'] = mt_rand();
    $json_str = json_encode($arr);


    3：对所有参数进行签名

    	除了Signature签名字段不需要参与加密 其他传值给API的所有参数都要参与加密

    	3.1 
    		封装公共请求参数 封装发送短信的参数
    	
        3.2 ksort()//按键

        3.3 封装一个字符串替换函数 urencode()

        3.4
        		&a=1&b=2&c=3

        		=>a=1&b=2&c=3

        3.5
        	POST&/&
        3.6 对完成待签名的字符串，进行签名


        	$sign = base64_encode(hash_hmac("sha1", $str, $accessKeySecret . "&", true));


     4：CURL之前请求

     		curl_init();
     		curl_setopt(ch, option, value);
     		curl_exec(ch)
     		curl_close(ch)





    //API返回JSON字符串转为 数组
    $arr = json_decode($json_str,true);











/*账号信息*/
$accessKeyId = 'exmwI1PlVLbmpdOA';


$accessKeySecret = 'DUqMlzzIn8BWvSJLVYOFP0ik6WfDAK';

/*固定值参数*/
$param = [
	'RegionId' => "cn-hangzhou",
	'SignName' => 'ABC商城',
	'TemplateCode' => 'SMS_202806638',
	"Timestamp" => gmdate("Y-m-d\TH:i:s\Z"),//date()
];




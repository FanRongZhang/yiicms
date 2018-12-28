<?php
return [
    'adminEmail' => 'admin@example.com',
    'live' => [
        /**
         *  云直播 appID:  和 APIKey 主要用于腾讯云直播common cgi请求。appid 用于表示您是哪个客户，APIKey参与了请求签名sign的生成。
         *  后台用他们来校验common cgi调用的合法性
         *
         */
        'appID' => 1256076067,

        /**
         *  云直播 bizid: 和pushSecretKey 主要用于推流地址的生成，填写错误，会导致推流地址不合法，推流请求被腾讯云直播服务器拒绝
         */
        'bizid' => 21202,

        /**
         *  云直播 推流防盗链key: 和 bizid 主要用于推流地址的生成，填写错误，会导致推流地址不合法，推流请求被腾讯云直播服务器拒绝
         */
        'pushSecretKey' => '1722b2d9e28e27ed0f921a87547d023b',

        /**
         *  云直播 API鉴权key: 和appID 主要用于common cgi请求。appid 用于表示您是哪个客户，APIKey参与了请求签名sign的生成。
         *  后台用他们来校验common cgi调用的合法性。
         */
        'APIKey' => '4eb856ac811dec99b0455d467a7344c7',


        // 云直播 推流有效期单位秒 默认7天
        'validTime' => 3600*24*7
    ],
];

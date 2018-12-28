<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 user-表的模型类 
* @property integer $id   
* @property string $username   
* @property string $realname   真名
* @property integer $sex   
* @property string $avatar   头像
* @property string $sessionid   用户网站COOKIE的会话值
* @property string $usertoken   用户非网站的身份标识token
* @property string $password_hash   
* @property string $password_reset_token   
* @property string $email   
* @property string $mobile   
* @property integer $province   
* @property integer $city   
* @property integer $district   区
* @property integer $provincehome   
* @property integer $cityhome   
* @property integer $districthome   区
* @property integer $viplevel   VIP等级,0表示不是VIP
* @property integer $vipstart   VIP开始时间
* @property integer $vipend   VIP结束时间
* @property string $profession   职业
* @property string $graduatecollege   毕业院校
* @property string $qq   QQ
* @property string $wechat   微信
* @property float $jifen   
* @property integer $infocompletedpercent   VIP等级,0表示不是VIP
* @property integer $isbaned   
* @property integer $created_at   
* @property integer $updated_at   
* @property string $openid   微信公众号的OPENID
* @property integer $is_choice_type   是否选择考试类型 0 未选择 1已选择
* @property string $personality_sign   个性签名
* @property integer $exp   经验值
* @property string $petname   昵称
* @property string $apikey   用户的个人密钥
*/
class User extends \yii\db\ActiveRecord
{
      use UserTrait;
     public static function tableName(){
         return 'user';
     }
}

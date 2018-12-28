<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 sign-报名表表的模型类 
* @property integer $id   
* @property string $for   为了什么事情进行了登记
* @property string $unit   报考单位
* @property string $positioncode   职位编码
* @property string $name   姓名
* @property integer $sex   性别
* @property integer $userid   会员id
* @property string $examnum   准考证号
* @property string $classname   班级名称
* @property float $bsscore   笔试成绩
* @property integer $ispay   是否付款:0.未付款；1.已付款
* @property float $fee   付款金额
* @property integer $paytype   付款方式：1.支付宝，2.微信，3.银行卡，4.现金
* @property datetime $paytime   付款时间
* @property string $tel   电话
* @property string $qq   QQ
* @property string $address   地址
* @property string $service   课程顾问
* @property integer $liverequire   住宿需求：1.两人标间，2.升级一人住
* @property string $livetime   入住时间
* @property integer $created_at   添加时间
* @property integer $updated_at   修改时间
* @property string $note   
* @property string $ip   
* @property string $xuexiao   
* @property string $expirence   类似的培训和考试经历
* @property string $advice   学院建议
*/
class Sign extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'sign';
     }
}

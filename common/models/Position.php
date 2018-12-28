<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 position-职位表的模型类 
* @property integer $id   
* @property string $positioncode   职位编码
* @property integer $examid   地区
* @property string $unit   单位
* @property string $innerorgan   内设机构
* @property string $position   职位
* @property string $positionintro   职位简介
* @property string $duty   拟任职务
* @property string $scope   招录范围
* @property string $object   招录对象
* @property string $edubg   学历
* @property string $degree   学位
* @property string $major   专业
* @property string $major_s   
* @property string $workcity   工作所在城市
* @property integer $number   招考人数
* @property string $other   其他条件
* @property string $remark   备注
* @property integer $created_at   
* @property integer $updated_at   
* @property integer $agefrom   
* @property integer $ageend   
* @property string $jgxz   机构性质
* @property integer $bmdm   部门代码
* @property string $jgcj   机构层级
* @property string $zwsx   职位属性
* @property string $kslb   考试类别
* @property string $zzmm   政治面貌
* @property string $szyf   三支一扶大学生
* @property string $xbzyz   西部志愿者
* @property string $dxscg   大学生村官
* @property string $tgjhjs   特岗计划教师
* @property string $wxz   无限制
* @property string $zyks   面试阶段组织专业考试
* @property string $msryb   面试人员比
* @property string $zwfb   职位分布
* @property string $bmwz   部门网站
* @property string $zxdh   资讯电话
*/
class Position extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'position';
     }
}

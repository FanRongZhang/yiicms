<?php
namespace common\models;

use Yii;
use yii\base\Object;
use yii\db\Exception;

/**
* 构建出来的站点逻辑商品
* @property string $goodstype   商品类型
* @property integer $goodsid   商品编号
 * @property float $price   价格
 * @property string $title   标题
 * @property string $img   图片
 * @property integer $num 数量--购物车映射需要该数据
 * @property bool $needlogistic 需要物流
*/
class SiteGoods extends Object
{

    const GOODS_TYPE_BOOK = 'book';
    const GOODS_TYPE_NET_COURSE = 'netcourse';
    const GOODS_TYPE_COURSE_UNKOWNWAY = 'unkownwaycourse';
    const GOODS_TYPE_XIAN_XIA_KE = 'xianxiake';


    const GOODS_TYPE_XCX_KECHENG = 'xxckecheng';
    const GOODS_TYPE_XCX_YANLIAN_FANGJIAN_WULINGDAO = 'XCX_YANLIAN_FANGJIAN';
    const GOODS_TYPE_XCX_YANLIAN_TIMU = 'XCX_YANLIAN_TIMU';
    const GOODS_TYPE_XCX_BAOBAN = 'XCX_BAOBAN';
    const GOODS_TYPE_XCX_WEIKETANG_YINPIN = 'XCX_WEIKETANG_YINPIN';
    const GOODS_TYPE_XCX_WEIKETANG_SHIPIN = 'XCX_WEIKETANG_SHIPIN';
    const GOODS_TYPE_XCX_ZHIBO = 'XCX_ZHIBO';
    const GOODS_TYPE_XCX_WEIKECHENG = 'XCX_WEIKECHENG';
    const GOODS_TYPE_XCX_JIFEN_RECHARGE = 'XCX_JIFEN_RECHARGE';
    const GOODS_TYPE_XCX_WEIKE_XITI = 'XCX_WEIKE_XITI';
    const GOODS_TYPE_XCX_TIJI = 'XCX_TIJI';

    public function __construct($goodsid = false, $goodstype = false, array $config = [])
    {
        parent::__construct($config);
        if($goodstype || $goodsid){
            if(!$goodstype || !$goodsid){
                throw new Exception('需要同时设置商品的类型和在数据库里面的记录编号');
            }
            if($goodstype){
                if(!self::validType($goodstype)){
                    throw new Exception('无效的类型');
                }
            }
        }
        if($goodstype && $goodsid){
            $this->setType($goodstype);
            $this->setId($goodsid);
        }
    }

    public static function validType($type) {
        return in_array($type,[
            self::GOODS_TYPE_BOOK,
            self::GOODS_TYPE_NET_COURSE,
            self::GOODS_TYPE_COURSE_UNKOWNWAY,
            self::GOODS_TYPE_XCX_KECHENG,
            self::GOODS_TYPE_XCX_YANLIAN_FANGJIAN_WULINGDAO,
            self::GOODS_TYPE_XCX_YANLIAN_TIMU,
            self::GOODS_TYPE_XCX_BAOBAN,
            self::GOODS_TYPE_XCX_WEIKETANG_YINPIN,
            self::GOODS_TYPE_XCX_WEIKETANG_SHIPIN,
            self::GOODS_TYPE_XCX_ZHIBO,
            self::GOODS_TYPE_XCX_WEIKECHENG,
            self::GOODS_TYPE_XCX_JIFEN_RECHARGE,
            self::GOODS_TYPE_XCX_WEIKE_XITI,
            self::GOODS_TYPE_XCX_TIJI,
            self::GOODS_TYPE_XIAN_XIA_KE,
        ]);
    }

    private $goodstype;
    private $goodsid;
    private $price;
    private $jifen = 0.00;
    private $title;
    private $img;
    private $num;
    private $needlogistic;

    public function getJifen(){
        return $this->jifen;
    }

    public function setJifen($value){
        $this->jifen = $value;
    }

    public function getType(){
        return $this->goodstype;
    }

    public function setType($value){
        $this->goodstype = $value;
    }

    public function getId(){
        return $this->goodsid;
    }

    public function setId($value){
        $this->goodsid = $value;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($value){
        $this->price = $value;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($value){
        $this->title = $value;
    }

    public function getImg(){
        return $this->img;
    }

    public function setImg($value){
        $this->img = $value;
    }

    public function getNum(){
        return $this->num;
    }

    public function setNum($value){
        $this->num = $value;
    }

    public function getNeedlogistic(){
        return $this->needlogistic;
    }

    public function setNeedlogistic($value){
        $this->needlogistic = (bool)$value;
    }
}

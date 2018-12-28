<?php
namespace app\services;

use common\models\ArticleFullText;
use common\models\PositionFullText;

/**
 * 内容模型搜索服务
 * @package app\services
 */
class ContentModelSearchService{

    /**
     * 全文搜索
     * @param string $q
     * @param \yii\data\Pagination $pagination
     * @param string $category
     * @return array
     */
    public static function search(string $q, \yii\data\Pagination $pagination,  string $category = '',$aryFields = []){
        $query = ArticleFullText::find();

        if($aryFields){
            $query->fields($aryFields);
        }

        if($category) {
            $query = $query->where([
                'category' => $category
            ]);
        }

        /*
        $query = $query->query([
            "multi_match" => [
                "query" => $q,
                "fields" => ["title","summary","content"],
            ]
        ]);
        */

        $query = $query->query([
            'match' => [
                'title' => $q
            ]
        ]);

        //$list = $query->asArray()->offset($pagination->page*$pagination->pageSize)->limit($pagination->pageSize)->orderBy('createtime desc')->all();
        $list = $query->asArray()->offset($pagination->page*$pagination->pageSize)->limit($pagination->pageSize)->orderBy('createtime desc')->all();
        $pagination->totalCount =  $query->count();

        return $list;
    }

    /**
     * 职位搜索
     * @param string $q
     * @param \yii\data\Pagination $pagination
     * @param string $category
     * @return array
     */
    public static function positionSearch(string $q, $examid, \yii\data\Pagination $pagination){
        $query = PositionFullText::find()->where(['examid'=>$examid]);

        $query = $query->query([
            "multi_match" => [
                "query" => $q,
                "fields" => ["positioncode","unit","innerorgan","position","scope","edubg","degree","major"],
            ]
        ]);

        /*$query = $query->query([
            'match' => [
                'major' => $q
            ]
        ]);*/

        $list = $query->offset($pagination->page*$pagination->pageSize)->limit($pagination->pageSize)->all();
        $pagination->totalCount =  $query->count();

        return $list;
    }


    /**
     * 获取输入提示
     * @param string $q
     * @param \yii\data\Pagination $pagination
     * @param string $category
     * @return array
     */
    public static function suggest(string $q, \yii\data\Pagination $pagination,  string $category = ''){
        $query = ArticleFullText::find()->fields([
            'title',
            'modelid',
            'modeldataid'
        ]);

        if($category) {
            $query = $query->where([
                'category' => $category
            ]);
        }

        /*
        $query = $query->query([
            "multi_match" => [
                "query" => $q,
                "fields" => ["title"],
            ]
        ]);
        */

        $query = $query->query([
            'match' => [
                'title' => $q
            ]
        ]);

        $list = $query->limit(5)->orderBy('createtime desc')->all();

        return $list;
    }

}
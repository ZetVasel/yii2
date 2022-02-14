<?php
namespace app\commands;

use yii\console\Controller;
use linslin\yii2\curl;
use app\models\base;

class HarvestController extends Controller
{
    public function actionGet(){
        $i = 1;
        while ($i < 3) {
            $curl = new curl\Curl();
            $curl->setOption(CURLOPT_FOLLOWLOCATION, true);
            $response = $curl->get('http://api.ias.brdo.com.ua/v1_1/inspections?apiKey=360d858edaac8313a73d237f340138c097ab6304&page='.$i);
            $result = json_decode($response);

                for ($x = 0; $x <= 50; $x++) {
                    if(Base::find()
                        ->where( [ 'internal_id' => $result->items[$x]->internal_id ] )
                        ->exists()){
                        echo 'oops all ready in db';
                    }else {
                        $model = new Base();
                        $model->internal_id = $result->items[$x]->internal_id;
                        $model->last_modify = $result->items[$x]->last_modify;
                        $model->regulator = $result->items[$x]->regulator;
                        $model->save();
                        print_r($model->errors);
                    }
                }
            $i++;
        }
    }
}
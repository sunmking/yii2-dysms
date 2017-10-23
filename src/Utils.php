<?php
/**
 * Created by PhpStorm.
 * User: saviorlv
 * Date: 17/10/23
 * Time: 下午14:10
 */

namespace saviorlv\aliyun;


class Utils
{

    public static function result($params)
    {
        $res = [
            'code' => 404,
            'message' => '发生未知错误'
        ];
        $code = 0;
        if(array_key_exists('sub_code', $params)){
            $code = $params->sub_code;
        }else{
            $code = $params->code;
        }

        if(array_key_exists($code, StateCode::CODE)){
            $res = StateCode::CODE[$code];
        }

        return json_encode($res);
    }

}
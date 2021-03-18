<?php


namespace App\Lib;


class Formatter
{
    static function Infomake($isOk = false, $msg = "", $data = null) {
        return response()->json([
            'isOk' => $isOk,
            'msg' => $msg,
            'data' => $data,
        ]);
    }

    static function Datamake($account=null,$name=null,$type=null)
    {
        return response()->json([
            'account'=>$account,
            'name'=>$name,
            'type'=>$type,
        ]);
    }

    static function Positionmake($lng=null,$lat=null)
    {
        return response()->json([
            'lng'=>$lng,
            'lat'=>$lat,
        ]);
    }
}

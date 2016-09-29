<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 8:50
 */
function create_url($arr){
    $url=$arr['host'];
    foreach ($arr as $k=>$v){
        $url.=strpos($url,'?')?'&':'?';
        $url.=$k.'='.$v;
    }
    return urlencode($url);
}
function p($mix){
    echo "<pre style='position: relative;z-index: 1000;padding: 10px;border-radius: 5px;background: #F5F5F5;border: 1px solid #aaa;font-size: 14px;line-height: 18px;opacity: 0.9;'>";

    if(is_array($mix))
        print_r($mix);
    else
        var_dump($mix);

    echo "</pre>";
}
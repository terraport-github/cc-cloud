<?php

namespace App\Helpers;


class Helper
{
    // URLをaタグのhtmlに置換する
    public static function URLtoHTML(String $url) {
        return preg_replace('/(http\S+((?=\<br)|$))/i', '<a href=${1} target="_blank">${1}</a>', $url);
    }
}
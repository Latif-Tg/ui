<?php

if(!function_exists('getInfoPicture')) {
    function getInfoPicture($info) {
        if($info->info_cover_pic) {
            return 'storage/'.$info->info_cover_pic;
        }
        else {
            return 'img/img26.jpg' ;
        }
    }
}

if(!function_exists('getInfoType')) {
    function getInfoType($info) {
        if($info->receiver_wording == "null") {
            return "PUBLIC";
        }
        else {
            return "PRIVATE";
        }
    }
}

if(!function_exists('getReceiverWording')) {
    function getReceiverWording($info) {
        if($info->receiver_wording == "null") {
            return "ALL";
        }
        else {
            return $info->receiver_wording;
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 18.05.2017
 * Time: 16:59
 */

function getUserLocation($ip = '') {

    $ip = ($ip) ? $ip : $_SERVER['REMOTE_ADDR'];

    $xmlGeo = simplexml_load_file("http://ipgeobase.ru:7020/geo?ip=$ip");

    return $xmlGeo->ip->region;
};

function isTargetLocation() {
   return getUserLocation() == 'Санкт-Петербург';
}
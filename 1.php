<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/25
 * Time: 10:45
 */

$redis = new \Redis();
$redis->connect('127.0.0.1', 8090);
$redis->ping();

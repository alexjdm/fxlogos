<?php
/**
 * Created by PhpStorm.
 * User: alexj
 * Date: 10-04-2016
 * Time: 17:34
 */

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
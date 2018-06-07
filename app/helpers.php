<?php
if (!function_exists('getUniqid')) {
    function getUniqid()
    {
        return md5(str_random() . uniqid() . rand(0,999999));
    }
}
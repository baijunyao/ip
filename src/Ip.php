<?php

namespace Baijunyao\Ip;

/**
* 获取 ip 归属地
*/
class Ip
{
    /**
     * 获取 ip 归属地
     *
     * @param $ip
     *
     * @return array|mixed
     */
    public static function find($ip)
    {
        $url = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        return $data['data'];
    }
}

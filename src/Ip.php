<?php

namespace Baijunyao\Ip;
use GuzzleHttp\Client;

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
        //初始化 client
        $client = new Client();
        $json = $client->get($url)
            ->getBody()
            ->getContents();
        $data = json_decode($json, true);
        return $data['data'];
    }
}

<?php

namespace App\Services\Cps;

use TopClient;

/**
 * 淘宝服务
 */
class TbService
{
    private static $instance;

    private $client;

    private function __construct()
    {
        /**
         * SDK工作目录
         * 存放日志，TOP缓存数据
         */
        if (!defined("TOP_SDK_WORK_DIR"))
        {
            define("TOP_SDK_WORK_DIR", "/tmp/");
        }

        /**
         * 是否处于开发模式
         * 在你自己电脑上开发程序的时候千万不要设为false，以免缓存造成你的代码修改了不生效
         * 部署到生产环境正式运营后，如果性能压力大，可以把此常量设定为false，能提高运行速度（对应的代价就是你下次升级程序时要清一下缓存）
         */
        if (!defined("TOP_SDK_DEV_MODE"))
        {
            define("TOP_SDK_DEV_MODE", true);
        }

        if (!defined("TOP_AUTOLOADER_PATH"))
        {
            define("TOP_AUTOLOADER_PATH", dirname(__FILE__));
        }

        $client = new TopClient();
        $client->appkey = config('taobao.app_key');
        $client->secretKey = config('taobao.secret_key');
        $client->format = config('taobao.format');
        $this->client = $client;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 设置类的多个对象，格式为$obj->setOption()
     * $obj 传入的对象
     * $datas 设置对象属相的值
     * $standard 所有可以设置的对象属性字符串
     */
    private static function options($obj, Array $datas, Array $standard)
    {
        foreach ($datas as $key => $value) {
            if (in_array($key, $standard) && !empty($value) && $key !== 0) {
                $setstr = self::setKey($key);
                $obj->$setstr($value);
            }
        }

        return $obj;
    }

    /**
     * 将字符串组合成骆驼形式的字符串，例如：end_tk_rate 变为 setEndTkRate
     */
    private static function setKey($key)
    {
        $str = '';
        $keyArr = explode('_', $key);
        foreach ($keyArr as $v) {
            $str .= ucfirst($v);
        }

        return 'set'.$str;
    }

    /**
     * 设置类的多个对象，格式为$obj->page_size = $page
     * $obj 传入的对象
     * $datas 设置对象属相的值
     * $standard 所有可以设置的对象属性字符串
     */
    private static function toOptions($obj, Array $datas, Array $standard)
    {
        foreach ($datas as $key => $value) {
            if (in_array($key, $standard) && !empty($value) && $key !== 0) {
                $obj->$key = $value;
            }
        }

        return $obj;
    }

    /**
     * 淘口令创建
     * @param array $params
     * @return bool|\SimpleXMLElement
     */
    public function tbkTpwdCreate(array $params)
    {
        $client = $this->client;
        $standard = ['user_id', 'text', 'url', 'logo', 'ext'];
        $request = new \TbkTpwdCreateRequest();
        $request = self::options($request, $params, $standard);
        $response = $client->execute($request);
        if (empty($response->data)) {
            return false;
        }
        return $response->data->model;
    }
}

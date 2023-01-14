<?php

namespace Morton\Chinaums\Service\Wechat;

use Morton\Chinaums\Service\Wechat\Base;

/**
 * 关闭接口
 */
class Close extends Base
{
    /**
     * @var string 接口地址
     */
    protected $api = '/netpay/close';
    /**
     * @var array $body 请求参数
     */
    protected $body = [
    ];
    /**
     * 必传的值
     * @var array
     */
    protected $require = ['requestTimestamp', 'merOrderId', 'mid', 'tid','instMid'];
}

<?php

namespace Morton\Chinaums\Service\Contract;

use Morton\Chinaums\Service\Contract\Base;
use Morton\Chinaums\Tools\DES;
use Exception;

/**
 * 入网状态查询接口
 */
class ApplyQry extends Base
{
    /**
     * @var string 接口地址
     */
    protected $api = '/self-contract-nmrs/interface/autoReg';
    /**
     * @var array $body 请求参数
     */
    protected $body = [
        'service' => 'apply_qry',
        'sign_type' => 'SHA-256',
    ];
    /**
     * 必传的值
     * @var array
     */
    protected $require = ['service', 'accesser_id', 'sign_type', 'request_date', 'request_seq'];

}

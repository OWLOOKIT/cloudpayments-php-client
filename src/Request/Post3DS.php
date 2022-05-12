<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class Post3DS
 *
 * @package Owlookit\Cloudpayments\Request
 * @see     https://developers.cloudpayments.ru/#obrabotka-3-d-secure
 */
class Post3DS extends BaseRequest
{
    public int $transactionId;
    public string $paRes;

    /**
     * Post3DS constructor.
     *
     * @param  int     $transactionId
     * @param  string  $paRes
     */
    public function __construct(int $transactionId, string $paRes)
    {
        $this->transactionId = $transactionId;
        $this->paRes = $paRes;
    }
}

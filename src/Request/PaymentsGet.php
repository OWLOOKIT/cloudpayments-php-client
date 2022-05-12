<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class PaymentsGet
 *
 * @package Owlookit\Cloudpayments\CardPayment
 * @see     https://developers.cloudpayments.ru/#prosmotr-tranzaktsii
 *
 */
class PaymentsGet extends BaseRequest
{
    public int $transactionId;

    /**
     * PaymentsGet constructor.
     *
     * @param  int  $transactionId
     */
    public function __construct(int $transactionId)
    {
        $this->transactionId = $transactionId;
    }
}

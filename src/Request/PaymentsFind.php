<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class PaymentsFind
 *
 * @package Owlookit\Cloudpayments\CardPayment
 * @see     https://developers.cloudpayments.ru/#proverka-statusa-platezha
 */
class PaymentsFind extends BaseRequest
{
    public string $invoiceId;

    /**
     * PaymentsFind constructor.
     *
     * @param  string  $invoiceId
     */
    public function __construct(string $invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }
}

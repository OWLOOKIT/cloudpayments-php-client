<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class PaymentsList
 * @package Owlookit\Cloudpayments\CardPayment
 * @see https://developers.cloudpayments.ru/#vygruzka-spiska-tranzaktsiy
 */
class PaymentsList extends BaseRequest
{
    /**
     * "Date":"2014-08-09"
     * @var string
     */
    public string $date;
    /**
     * https://developers.cloudpayments.ru/#kody-vremennyh-zon
     * @var string
     */
    public string $timeZone;

    public function __construct(string $date, ?string $timeZone = null)
    {
        $this->date = $date;

        if ($timeZone) {
            $this->timeZone = $timeZone;
        }
    }
}
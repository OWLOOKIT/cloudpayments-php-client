<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class SubscriptionFind
 *
 * @package Owlookit\Cloudpayments\Request
 * @see     https://developers.cloudpayments.ru/#poisk-podpisok
 *
 */
class SubscriptionFind extends BaseRequest
{
    public string $accountId;

    /**
     * SubscriptionFind constructor.
     *
     * @param  string  $accountId
     */
    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }
}

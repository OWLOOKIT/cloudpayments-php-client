<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class SubscriptionGet
 *
 * @package Owlookit\Cloudpayments\Request
 * @see     https://developers.cloudpayments.ru/#zapros-informatsii-o-podpiske
 *
 */
class SubscriptionGet extends BaseRequest
{
    public string $id;

    /**
     * SubscriptionGet constructor.
     *
     * @param  string  $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}

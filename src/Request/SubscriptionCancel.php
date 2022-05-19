<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class SubscriptionCancel
 *
 * @package Owlookit\Cloudpayments\Request
 * @see     https://developers.cloudpayments.ru/#otmena-podpiski-na-rekurrentnye-platezhi
 */
class SubscriptionCancel extends BaseRequest
{
    public string $id;

    /**
     * SubscriptionCancel constructor.
     *
     * @param  string  $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}

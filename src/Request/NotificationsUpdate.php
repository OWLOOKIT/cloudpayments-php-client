<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class NotificationsUpdate
 *
 * @package Owlookit\Cloudpayments\CardPayment
 * @see     https://developers.cloudpayments.ru/#izmenenie-nastroek-uvedomleniy
 */
class NotificationsUpdate extends BaseRequest
{
    /**
     * @see https://developers.cloudpayments.ru/#tipy-operatsiy
     * @var string
     */
    public string $type;
    public ?bool $isEnabled;
    public ?string $address;
    public ?string $httpMethod;
    public ?string $encoding;
    public ?string $format;
}

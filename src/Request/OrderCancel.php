<?php

namespace Owlookit\Cloudpayments\Request;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * Class OrderCancel
 *
 * @package Owlookit\Cloudpayments\Request
 * @see     https://developers.cloudpayments.ru/#otmena-sozdannogo-scheta
 */
class OrderCancel extends BaseRequest
{
    public string $id;
}

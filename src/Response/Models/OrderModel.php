<?php

namespace Owlookit\Cloudpayments\Response\Models;

/**
 * Class OrderModel
 *
 * @package Owlookit\Cloudpayments\Response\Models
 */
class OrderModel extends BaseModel
{
    public ?string $id = null;
    public ?int $number = null;
    public ?float $amount = null;
    public ?string $currency = null;
    public ?int $currencyCode = null;
    public ?string $email = null;
    public ?string $description = null;
    public ?bool $requireConfirmation = null;
    public ?string $url = null;
}

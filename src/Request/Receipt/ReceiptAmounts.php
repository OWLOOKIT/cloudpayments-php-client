<?php

namespace Owlookit\Cloudpayments\Request\Receipt;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * @see https://developers.cloudkassir.ru/#amounts
 */
class ReceiptAmounts extends BaseRequest
{
    public function __construct(
        public ?string $electronic = null,
        public ?string $advancePayment = null,
        public ?string $credit = null,
        public ?string $provision = null,
    ) {
    }
}

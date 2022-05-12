<?php

namespace Owlookit\Cloudpayments\Request\Receipt;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * @see https://developers.cloudkassir.ru/#purveyordata
 */
class ReceiptItemPurveyorData extends BaseRequest
{
    public function __construct(
        public string $name,
        public string $inn,
        public ?string $phone = null,
    ) {
    }
}

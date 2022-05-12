<?php

namespace Owlookit\Cloudpayments\Request\Receipt;

use Owlookit\Cloudpayments\BaseRequest;

/**
 * @see https://developers.cloudkassir.ru/#productcodedata
 */
class ReceiptItemProductCodeData extends BaseRequest
{
    public ?string $codeProductNomenclature = null;
}

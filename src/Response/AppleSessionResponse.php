<?php

namespace Owlookit\Cloudpayments\Response;

use Owlookit\Cloudpayments\Response\Models\AppleSessionModel;
use stdClass;

/**
 * Class NotificationResponse
 *
 * @package Owlookit\Cloudpayments\Response
 */
class AppleSessionResponse extends CloudResponse
{
    /** @var AppleSessionModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param  stdClass  $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new AppleSessionModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}

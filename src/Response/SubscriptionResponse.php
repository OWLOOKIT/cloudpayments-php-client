<?php

namespace Owlookit\Cloudpayments\Response;

use Owlookit\Cloudpayments\Response\Models\SubscriptionModel;
use stdClass;

/**
 * Class SubscriptionResponse
 *
 * @package Owlookit\Cloudpayments\Response
 */
class SubscriptionResponse extends CloudResponse
{
    /** @var SubscriptionModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param  stdClass  $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new SubscriptionModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}

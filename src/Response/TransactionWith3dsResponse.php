<?php

namespace Owlookit\Cloudpayments\Response;

use Owlookit\Cloudpayments\Response\Models\TransactionWith3dsModel;
use stdClass;

/**
 * Class TransactionResponse
 *
 * @package Owlookit\Cloudpayments\Response
 */
class TransactionWith3dsResponse extends CloudResponse
{
    /** @var TransactionWith3dsModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param  stdClass  $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new TransactionWith3dsModel();
        $model->fill($modelDate);

        $this->model = $model;
    }

    /**
     * Нужна ли 3-D Secure аутентификация
     *
     * @return bool
     */
    public function is3dsError(): bool
    {
        return $this->model->paReq !== null && $this->model->acsUrl !== null;
    }
}

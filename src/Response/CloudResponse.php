<?php

namespace Owlookit\Cloudpayments\Response;

use Owlookit\Cloudpayments\BaseRequest;
use Owlookit\Cloudpayments\Response\Models\BaseModel;
use Psr\Http\Message\ResponseInterface;
use stdClass;

/**
 * Class CloudResponse
 *
 * @package Owlookit\Cloudpayments\Response
 */
class CloudResponse extends BaseRequest
{
    public bool $success;
    public ?string $message = null;
    public ?string $warning = null;

    /** @var BaseModel|stdClass */
    public $model;

    /**
     * Заполняет по респонсу
     *
     * @param  ResponseInterface  $response
     * @return static
     */
    public function fillByResponse(ResponseInterface $response): self
    {
        $responseContent = json_decode($response->getBody()->getContents());

        $this->success = $responseContent->Success ?? false;
        $this->message = $responseContent->Message ?? 'Message is not set';
        $this->warning = $responseContent->Warning ?? 'Warning is not set';
        if (! empty($responseContent->Model)) {
            $this->fillModel($responseContent->Model);
        }

        return $this;
    }

    /**
     * Заполняет model свойство
     *
     * @param $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = $modelDate;
        if (is_object($modelDate)) {
            $model = new BaseModel();
            $model->fill($modelDate);
        }

        $this->model = $model;
    }
}

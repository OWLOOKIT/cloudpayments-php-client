<?php

namespace Owlookit\Cloudpayments\Request;

use DateTime;
use Owlookit\Cloudpayments\BaseRequest;
use Owlookit\Cloudpayments\Exceptions\BadTypeException;

/**
 * Class SubscriptionCreate
 *
 * @package Owlookit\Cloudpayments\Request
 * @see     https://developers.cloudpayments.ru/#sozdanie-podpiski-na-rekurrentnye-platezhi
 */
class SubscriptionCreate extends BaseRequest
{
    public string $token;
    public string $accountId;
    public string $description;
    public string $email;
    /**
     * @var int|float
     */
    public $amount;
    public string $currency;
    public bool $requireConfirmation;
    /**
     * "startDate":"2014-08-06T16:46:29.5377246Z",
     * @var DateTime
     */
    public DateTime $startDate;
    public string $interval;
    public int $period;
    public ?int $maxPeriods;
    public ?string $customerReceipt;

    /**
     * SubscriptionCreate constructor.
     *
     * @param          $amount
     * @param  string  $currency
     * @param  string  $description
     * @throws BadTypeException
     */
    public function __construct(string $token, string $accountId, string $description, string $email, $amount, string $currency, bool $requireConfirmation, DateTime $startDate, string $interval, int $period)
    {
        if (! is_numeric($amount)) {
            throw new BadTypeException('Amount isn\'t numeric');
        }

        $this->token = $token;
        $this->accountId = $accountId;
        $this->description = $description;
        $this->email = $email;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->requireConfirmation = $requireConfirmation;
        $this->startDate = $startDate;
        $this->interval = $interval;
        $this->period = $period;

    }
}

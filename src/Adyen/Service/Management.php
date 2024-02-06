<?php

namespace Adyen\Service;

use Adyen\Service\ResourceModel\Management\AllowedOrigins;
use Adyen\Service\ResourceModel\Management\CompanyAccount;
use Adyen\Service\ResourceModel\Management\CompanyWebhooks;
use Adyen\Service\ResourceModel\Management\Me;
use Adyen\Service\ResourceModel\Management\MerchantAccount;
use Adyen\Service\ResourceModel\Management\MerchantClientKey;
use Adyen\Service\ResourceModel\Management\MerchantWebhooks;
use Adyen\Service\ResourceModel\Management\StoreAccount;
use Adyen\Service\ResourceModel\Management\TerminalAccount;

class Management extends \Adyen\Service
{
    /**
     * @var MerchantAccount
     */
    public $merchantAccount;

    /**
     * @var Me
     */
    public $me;

    /**
     * @var CompanyAccount
     */
    public $companyAccount;

    /**
     * @var MerchantClientKey
     */
    public $merchantClientKey;

    /**
     * @var MerchantWebhooks
     */
    public $merchantWebhooks;

    /**
     * @var CompanyWebhooks
     */
    public $companyWebhooks;

    /**
     * @var AllowedOrigins
     */
    public $allowedOrigins;

    /**
     * @var StoreAccount
     */
    public $storeAccount;

    /**
     * @var TerminalAccount
     */
    public $terminal;

    /**
     * Management constructor.
     * @param \Adyen\Client $client
     * @throws \Adyen\AdyenException
     */
    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);
        $this->merchantAccount = new MerchantAccount($this, null);
        $this->me = new Me($this, null);
        $this->companyAccount = new CompanyAccount($this, null);
        $this->storeAccount = new StoreAccount($this, null);
        $this->merchantClientKey = new MerchantClientKey($this, null);
        $this->merchantWebhooks = new MerchantWebhooks($this, null);
        $this->companyWebhooks = new CompanyWebhooks($this, null);
        $this->allowedOrigins = new AllowedOrigins($this, null);
        $this->terminal = new TerminalAccount($this, null);
    }
}

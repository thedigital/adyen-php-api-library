<?php

namespace Adyen\Service\ResourceModel\Management;

class TerminalAccount extends \Adyen\Service\AbstractResource
{
    /**
     * Include applicationInfo key in the request parameters
     *
     * @var bool
     */
    protected $allowApplicationInfo = false;

    /**
     * @param array $queryParams
     * @return mixed
     * @throws \Adyen\AdyenException
     */
    public function list(array $queryParams = [])
    {
        $url = $this->managementEndpoint . "/terminals";
        return $this->requestHttp($url, 'get', $queryParams);
    }
}

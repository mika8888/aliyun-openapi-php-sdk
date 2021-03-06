<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DisableActiveMetricRule
 *
 * @method string getProduct()
 */
class DisableActiveMetricRuleRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cms',
            '2019-01-01',
            'DisableActiveMetricRule',
            'cms'
        );
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

        return $this;
    }
}

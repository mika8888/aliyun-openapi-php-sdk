<?php

namespace Qualitycheck\Request\V20190115;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UploadAudioDataWithRules4Pre
 *
 * @method string getResourceOwnerId()
 * @method string getJsonStr()
 */
class UploadAudioDataWithRules4PreRequest extends \RpcAcsRequest
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
            'Qualitycheck',
            '2019-01-15',
            'UploadAudioDataWithRules4Pre'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $jsonStr
     *
     * @return $this
     */
    public function setJsonStr($jsonStr)
    {
        $this->requestParameters['JsonStr'] = $jsonStr;
        $this->queryParameters['JsonStr'] = $jsonStr;

        return $this;
    }
}

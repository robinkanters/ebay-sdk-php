<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\HalfFinding\Services;

class HalfFindingService extends \DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService
{
    const API_VERSION = '1.2.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\HalfFinding\Types\GetVersionRequest $request
     * @return \DTS\eBaySDK\HalfFinding\Types\GetVersionResponse
     */
    public function getVersion(\DTS\eBaySDK\HalfFinding\Types\GetVersionRequest $request)
    {
        return $this->callOperation(
            'getVersion',
            $request,
            '\DTS\eBaySDK\HalfFinding\Types\GetVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\HalfFinding\Types\FindItemsRequest $request
     * @return \DTS\eBaySDK\HalfFinding\Types\FindItemsResponse
     */
    public function findHalfItems(\DTS\eBaySDK\HalfFinding\Types\FindItemsRequest $request)
    {
        return $this->callOperation(
            'findHalfItems',
            $request,
            '\DTS\eBaySDK\HalfFinding\Types\FindItemsResponse'
        );
    }
}

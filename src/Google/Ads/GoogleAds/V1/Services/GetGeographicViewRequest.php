<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/geographic_view_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GeographicViewService.GetGeographicView][google.ads.googleads.v1.services.GeographicViewService.GetGeographicView].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GetGeographicViewRequest</code>
 */
class GetGeographicViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the geographic view to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the geographic view to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\GeographicViewService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the geographic view to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the geographic view to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}


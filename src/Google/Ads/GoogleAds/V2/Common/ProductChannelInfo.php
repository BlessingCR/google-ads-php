<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Locality of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ProductChannelInfo</code>
 */
class ProductChannelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Value of the locality.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ProductChannelEnum.ProductChannel channel = 1;</code>
     */
    protected $channel = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $channel
     *           Value of the locality.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Value of the locality.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ProductChannelEnum.ProductChannel channel = 1;</code>
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Value of the locality.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ProductChannelEnum.ProductChannel channel = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ProductChannelEnum_ProductChannel::class);
        $this->channel = $var;

        return $this;
    }

}


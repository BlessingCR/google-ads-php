<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/bidding.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manual click-based bidding where user pays per click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ManualCpc</code>
 */
class ManualCpc extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     */
    protected $enhanced_cpc_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $enhanced_cpc_enabled
     *           Whether bids are to be enhanced based on conversion optimizer data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getEnhancedCpcEnabled()
    {
        return $this->enhanced_cpc_enabled;
    }

    /**
     * Returns the unboxed value from <code>getEnhancedCpcEnabled()</code>

     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     * @return bool|null
     */
    public function getEnhancedCpcEnabledUnwrapped()
    {
        return $this->readWrapperValue("enhanced_cpc_enabled");
    }

    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnhancedCpcEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enhanced_cpc_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnhancedCpcEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("enhanced_cpc_enabled", $var);
        return $this;}

}


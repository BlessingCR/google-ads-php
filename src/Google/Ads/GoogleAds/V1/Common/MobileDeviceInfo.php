<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile device criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.MobileDeviceInfo</code>
 */
class MobileDeviceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The mobile device constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_device_constant = 1;</code>
     */
    protected $mobile_device_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $mobile_device_constant
     *           The mobile device constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The mobile device constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_device_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMobileDeviceConstant()
    {
        return $this->mobile_device_constant;
    }

    /**
     * Returns the unboxed value from <code>getMobileDeviceConstant()</code>

     * The mobile device constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_device_constant = 1;</code>
     * @return string|null
     */
    public function getMobileDeviceConstantUnwrapped()
    {
        return $this->readWrapperValue("mobile_device_constant");
    }

    /**
     * The mobile device constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_device_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMobileDeviceConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->mobile_device_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The mobile device constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_device_constant = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMobileDeviceConstantUnwrapped($var)
    {
        $this->writeWrapperValue("mobile_device_constant", $var);
        return $this;}

}


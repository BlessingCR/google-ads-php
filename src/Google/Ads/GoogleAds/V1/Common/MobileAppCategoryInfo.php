<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile app category criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.MobileAppCategoryInfo</code>
 */
class MobileAppCategoryInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_app_category_constant = 1;</code>
     */
    protected $mobile_app_category_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $mobile_app_category_constant
     *           The mobile app category constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_app_category_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMobileAppCategoryConstant()
    {
        return $this->mobile_app_category_constant;
    }

    /**
     * Returns the unboxed value from <code>getMobileAppCategoryConstant()</code>

     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_app_category_constant = 1;</code>
     * @return string|null
     */
    public function getMobileAppCategoryConstantUnwrapped()
    {
        return $this->readWrapperValue("mobile_app_category_constant");
    }

    /**
     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_app_category_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMobileAppCategoryConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->mobile_app_category_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue mobile_app_category_constant = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMobileAppCategoryConstantUnwrapped($var)
    {
        $this->writeWrapperValue("mobile_app_category_constant", $var);
        return $this;}

}


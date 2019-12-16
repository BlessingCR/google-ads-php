<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/conversion_action.proto

namespace Google\Ads\GoogleAds\V2\Resources\ConversionAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings related to the value for conversion events associated with this
 * conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.ConversionAction.ValueSettings</code>
 */
class ValueSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue default_value = 1;</code>
     */
    protected $default_value = null;
    /**
     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue default_currency_code = 2;</code>
     */
    protected $default_currency_code = null;
    /**
     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue always_use_default_value = 3;</code>
     */
    protected $always_use_default_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $default_value
     *           The value to use when conversion events for this conversion action are
     *           sent with an invalid, disallowed or missing value, or when
     *           this conversion action is configured to always use the default value.
     *     @type \Google\Protobuf\StringValue $default_currency_code
     *           The currency code to use when conversion events for this conversion
     *           action are sent with an invalid or missing currency code, or when this
     *           conversion action is configured to always use the default value.
     *     @type \Google\Protobuf\BoolValue $always_use_default_value
     *           Controls whether the default value and default currency code are used in
     *           place of the value and currency code specified in conversion events for
     *           this conversion action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\ConversionAction::initOnce();
        parent::__construct($data);
    }

    /**
     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue default_value = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * Returns the unboxed value from <code>getDefaultValue()</code>

     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue default_value = 1;</code>
     * @return float|null
     */
    public function getDefaultValueUnwrapped()
    {
        return $this->readWrapperValue("default_value");
    }

    /**
     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue default_value = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->default_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The value to use when conversion events for this conversion action are
     * sent with an invalid, disallowed or missing value, or when
     * this conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue default_value = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setDefaultValueUnwrapped($var)
    {
        $this->writeWrapperValue("default_value", $var);
        return $this;}

    /**
     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue default_currency_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDefaultCurrencyCode()
    {
        return $this->default_currency_code;
    }

    /**
     * Returns the unboxed value from <code>getDefaultCurrencyCode()</code>

     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue default_currency_code = 2;</code>
     * @return string|null
     */
    public function getDefaultCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("default_currency_code");
    }

    /**
     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue default_currency_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDefaultCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->default_currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The currency code to use when conversion events for this conversion
     * action are sent with an invalid or missing currency code, or when this
     * conversion action is configured to always use the default value.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue default_currency_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDefaultCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("default_currency_code", $var);
        return $this;}

    /**
     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue always_use_default_value = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getAlwaysUseDefaultValue()
    {
        return $this->always_use_default_value;
    }

    /**
     * Returns the unboxed value from <code>getAlwaysUseDefaultValue()</code>

     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue always_use_default_value = 3;</code>
     * @return bool|null
     */
    public function getAlwaysUseDefaultValueUnwrapped()
    {
        return $this->readWrapperValue("always_use_default_value");
    }

    /**
     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue always_use_default_value = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAlwaysUseDefaultValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->always_use_default_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Controls whether the default value and default currency code are used in
     * place of the value and currency code specified in conversion events for
     * this conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue always_use_default_value = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAlwaysUseDefaultValueUnwrapped($var)
    {
        $this->writeWrapperValue("always_use_default_value", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueSettings::class, \Google\Ads\GoogleAds\V2\Resources\ConversionAction_ValueSettings::class);


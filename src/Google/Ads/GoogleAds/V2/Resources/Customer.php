<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/customer.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.Customer</code>
 */
class Customer extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    protected $id = null;
    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     */
    protected $descriptive_name = null;
    /**
     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     */
    protected $currency_code = null;
    /**
     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     */
    protected $time_zone = null;
    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     */
    protected $tracking_url_template = null;
    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     */
    protected $final_url_suffix = null;
    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     */
    protected $auto_tagging_enabled = null;
    /**
     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     */
    protected $has_partners_badge = null;
    /**
     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     */
    protected $manager = null;
    /**
     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     */
    protected $test_account = null;
    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.CallReportingSetting call_reporting_setting = 10;</code>
     */
    protected $call_reporting_setting = null;
    /**
     * Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionTrackingSetting conversion_tracking_setting = 14;</code>
     */
    protected $conversion_tracking_setting = null;
    /**
     * Remarketing setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.RemarketingSetting remarketing_setting = 15;</code>
     */
    protected $remarketing_setting = null;
    /**
     * Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     * the list is empty, the customer is eligible. This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason pay_per_conversion_eligibility_failure_reasons = 16;</code>
     */
    private $pay_per_conversion_eligibility_failure_reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the customer.
     *           Customer resource names have the form:
     *           `customers/{customer_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the customer.
     *     @type \Google\Protobuf\StringValue $descriptive_name
     *           Optional, non-unique descriptive name of the customer.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           The currency in which the account operates.
     *           A subset of the currency codes from the ISO 4217 standard is
     *           supported.
     *     @type \Google\Protobuf\StringValue $time_zone
     *           The local timezone ID of the customer.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           The URL template for constructing a tracking URL out of parameters.
     *     @type \Google\Protobuf\StringValue $final_url_suffix
     *           The URL template for appending params to the final URL
     *     @type \Google\Protobuf\BoolValue $auto_tagging_enabled
     *           Whether auto-tagging is enabled for the customer.
     *     @type \Google\Protobuf\BoolValue $has_partners_badge
     *           Whether the Customer has a Partners program badge. If the Customer is not
     *           associated with the Partners program, this will be false. For more
     *           information, see https://support.google.com/partners/answer/3125774.
     *     @type \Google\Protobuf\BoolValue $manager
     *           Whether the customer is a manager.
     *     @type \Google\Protobuf\BoolValue $test_account
     *           Whether the customer is a test account.
     *     @type \Google\Ads\GoogleAds\V2\Resources\CallReportingSetting $call_reporting_setting
     *           Call reporting setting for a customer.
     *     @type \Google\Ads\GoogleAds\V2\Resources\ConversionTrackingSetting $conversion_tracking_setting
     *           Conversion tracking setting for a customer.
     *     @type \Google\Ads\GoogleAds\V2\Resources\RemarketingSetting $remarketing_setting
     *           Remarketing setting for a customer.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pay_per_conversion_eligibility_failure_reasons
     *           Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     *           the list is empty, the customer is eligible. This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
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

    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescriptiveName()
    {
        return $this->descriptive_name;
    }

    /**
     * Returns the unboxed value from <code>getDescriptiveName()</code>

     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     * @return string|null
     */
    public function getDescriptiveNameUnwrapped()
    {
        return $this->readWrapperValue("descriptive_name");
    }

    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->descriptive_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptiveNameUnwrapped($var)
    {
        $this->writeWrapperValue("descriptive_name", $var);
        return $this;}

    /**
     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("currency_code");
    }

    /**
     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("currency_code", $var);
        return $this;}

    /**
     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Returns the unboxed value from <code>getTimeZone()</code>

     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @return string|null
     */
    public function getTimeZoneUnwrapped()
    {
        return $this->readWrapperValue("time_zone");
    }

    /**
     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTimeZoneUnwrapped($var)
    {
        $this->writeWrapperValue("time_zone", $var);
        return $this;}

    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return $this->tracking_url_template;
    }

    /**
     * Returns the unboxed value from <code>getTrackingUrlTemplate()</code>

     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     * @return string|null
     */
    public function getTrackingUrlTemplateUnwrapped()
    {
        return $this->readWrapperValue("tracking_url_template");
    }

    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTrackingUrlTemplateUnwrapped($var)
    {
        $this->writeWrapperValue("tracking_url_template", $var);
        return $this;}

    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFinalUrlSuffix()
    {
        return $this->final_url_suffix;
    }

    /**
     * Returns the unboxed value from <code>getFinalUrlSuffix()</code>

     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     * @return string|null
     */
    public function getFinalUrlSuffixUnwrapped()
    {
        return $this->readWrapperValue("final_url_suffix");
    }

    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 11;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFinalUrlSuffixUnwrapped($var)
    {
        $this->writeWrapperValue("final_url_suffix", $var);
        return $this;}

    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getAutoTaggingEnabled()
    {
        return $this->auto_tagging_enabled;
    }

    /**
     * Returns the unboxed value from <code>getAutoTaggingEnabled()</code>

     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     * @return bool|null
     */
    public function getAutoTaggingEnabledUnwrapped()
    {
        return $this->readWrapperValue("auto_tagging_enabled");
    }

    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAutoTaggingEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->auto_tagging_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_tagging_enabled = 8;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAutoTaggingEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("auto_tagging_enabled", $var);
        return $this;}

    /**
     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHasPartnersBadge()
    {
        return $this->has_partners_badge;
    }

    /**
     * Returns the unboxed value from <code>getHasPartnersBadge()</code>

     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     * @return bool|null
     */
    public function getHasPartnersBadgeUnwrapped()
    {
        return $this->readWrapperValue("has_partners_badge");
    }

    /**
     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHasPartnersBadge($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->has_partners_badge = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_partners_badge = 9;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setHasPartnersBadgeUnwrapped($var)
    {
        $this->writeWrapperValue("has_partners_badge", $var);
        return $this;}

    /**
     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Returns the unboxed value from <code>getManager()</code>

     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     * @return bool|null
     */
    public function getManagerUnwrapped()
    {
        return $this->readWrapperValue("manager");
    }

    /**
     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setManager($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->manager = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the customer is a manager.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 12;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setManagerUnwrapped($var)
    {
        $this->writeWrapperValue("manager", $var);
        return $this;}

    /**
     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getTestAccount()
    {
        return $this->test_account;
    }

    /**
     * Returns the unboxed value from <code>getTestAccount()</code>

     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     * @return bool|null
     */
    public function getTestAccountUnwrapped()
    {
        return $this->readWrapperValue("test_account");
    }

    /**
     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setTestAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->test_account = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the customer is a test account.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 13;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setTestAccountUnwrapped($var)
    {
        $this->writeWrapperValue("test_account", $var);
        return $this;}

    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.CallReportingSetting call_reporting_setting = 10;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\CallReportingSetting
     */
    public function getCallReportingSetting()
    {
        return $this->call_reporting_setting;
    }

    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.CallReportingSetting call_reporting_setting = 10;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\CallReportingSetting $var
     * @return $this
     */
    public function setCallReportingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\CallReportingSetting::class);
        $this->call_reporting_setting = $var;

        return $this;
    }

    /**
     * Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionTrackingSetting conversion_tracking_setting = 14;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\ConversionTrackingSetting
     */
    public function getConversionTrackingSetting()
    {
        return $this->conversion_tracking_setting;
    }

    /**
     * Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionTrackingSetting conversion_tracking_setting = 14;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\ConversionTrackingSetting $var
     * @return $this
     */
    public function setConversionTrackingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\ConversionTrackingSetting::class);
        $this->conversion_tracking_setting = $var;

        return $this;
    }

    /**
     * Remarketing setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.RemarketingSetting remarketing_setting = 15;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\RemarketingSetting
     */
    public function getRemarketingSetting()
    {
        return $this->remarketing_setting;
    }

    /**
     * Remarketing setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.RemarketingSetting remarketing_setting = 15;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\RemarketingSetting $var
     * @return $this
     */
    public function setRemarketingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\RemarketingSetting::class);
        $this->remarketing_setting = $var;

        return $this;
    }

    /**
     * Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     * the list is empty, the customer is eligible. This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason pay_per_conversion_eligibility_failure_reasons = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayPerConversionEligibilityFailureReasons()
    {
        return $this->pay_per_conversion_eligibility_failure_reasons;
    }

    /**
     * Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     * the list is empty, the customer is eligible. This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason pay_per_conversion_eligibility_failure_reasons = 16;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayPerConversionEligibilityFailureReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V2\Enums\CustomerPayPerConversionEligibilityFailureReasonEnum\CustomerPayPerConversionEligibilityFailureReason::class);
        $this->pay_per_conversion_eligibility_failure_reasons = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/policy.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Key of the violation. The key is used for referring to a violation
 * when filing an exemption request.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.PolicyViolationKey</code>
 */
class PolicyViolationKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique ID of the violated policy.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue policy_name = 1;</code>
     */
    protected $policy_name = null;
    /**
     * The text that violates the policy if specified.
     * Otherwise, refers to the policy in general
     * (e.g., when requesting to be exempt from the whole policy).
     * If not specified for criterion exemptions, the whole policy is implied.
     * Must be specified for ad exemptions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue violating_text = 2;</code>
     */
    protected $violating_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $policy_name
     *           Unique ID of the violated policy.
     *     @type \Google\Protobuf\StringValue $violating_text
     *           The text that violates the policy if specified.
     *           Otherwise, refers to the policy in general
     *           (e.g., when requesting to be exempt from the whole policy).
     *           If not specified for criterion exemptions, the whole policy is implied.
     *           Must be specified for ad exemptions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique ID of the violated policy.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue policy_name = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPolicyName()
    {
        return $this->policy_name;
    }

    /**
     * Returns the unboxed value from <code>getPolicyName()</code>

     * Unique ID of the violated policy.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue policy_name = 1;</code>
     * @return string|null
     */
    public function getPolicyNameUnwrapped()
    {
        return $this->readWrapperValue("policy_name");
    }

    /**
     * Unique ID of the violated policy.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue policy_name = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPolicyName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->policy_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Unique ID of the violated policy.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue policy_name = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPolicyNameUnwrapped($var)
    {
        $this->writeWrapperValue("policy_name", $var);
        return $this;}

    /**
     * The text that violates the policy if specified.
     * Otherwise, refers to the policy in general
     * (e.g., when requesting to be exempt from the whole policy).
     * If not specified for criterion exemptions, the whole policy is implied.
     * Must be specified for ad exemptions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue violating_text = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getViolatingText()
    {
        return $this->violating_text;
    }

    /**
     * Returns the unboxed value from <code>getViolatingText()</code>

     * The text that violates the policy if specified.
     * Otherwise, refers to the policy in general
     * (e.g., when requesting to be exempt from the whole policy).
     * If not specified for criterion exemptions, the whole policy is implied.
     * Must be specified for ad exemptions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue violating_text = 2;</code>
     * @return string|null
     */
    public function getViolatingTextUnwrapped()
    {
        return $this->readWrapperValue("violating_text");
    }

    /**
     * The text that violates the policy if specified.
     * Otherwise, refers to the policy in general
     * (e.g., when requesting to be exempt from the whole policy).
     * If not specified for criterion exemptions, the whole policy is implied.
     * Must be specified for ad exemptions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue violating_text = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setViolatingText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->violating_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The text that violates the policy if specified.
     * Otherwise, refers to the policy in general
     * (e.g., when requesting to be exempt from the whole policy).
     * If not specified for criterion exemptions, the whole policy is implied.
     * Must be specified for ad exemptions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue violating_text = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setViolatingTextUnwrapped($var)
    {
        $this->writeWrapperValue("violating_text", $var);
        return $this;}

}


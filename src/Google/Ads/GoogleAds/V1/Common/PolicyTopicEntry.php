<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/policy.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Policy finding attached to a resource (e.g. alcohol policy associated with
 * a site that sells alcohol).
 * Each PolicyTopicEntry has a topic that indicates the specific ads policy
 * the entry is about and a type to indicate the effect that the entry will have
 * on serving. It may optionally have one or more evidences that indicate the
 * reason for the finding. It may also optionally have one or more constraints
 * that provide details about how serving may be restricted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.PolicyTopicEntry</code>
 */
class PolicyTopicEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Policy topic this finding refers to. For example, "ALCOHOL",
     * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
     * policy topics is not fixed for a particular API version and may change
     * at any time.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic = 1;</code>
     */
    protected $topic = null;
    /**
     * Describes the negative or positive effect this policy will have on serving.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryType type = 2;</code>
     */
    protected $type = 0;
    /**
     * Additional information that explains policy finding
     * (e.g. the brand name for a trademark finding).
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicEvidence evidences = 3;</code>
     */
    private $evidences;
    /**
     * Indicates how serving of this resource may be affected (e.g. not serving
     * in a country).
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicConstraint constraints = 4;</code>
     */
    private $constraints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $topic
     *           Policy topic this finding refers to. For example, "ALCOHOL",
     *           "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
     *           policy topics is not fixed for a particular API version and may change
     *           at any time.
     *     @type int $type
     *           Describes the negative or positive effect this policy will have on serving.
     *     @type \Google\Ads\GoogleAds\V1\Common\PolicyTopicEvidence[]|\Google\Protobuf\Internal\RepeatedField $evidences
     *           Additional information that explains policy finding
     *           (e.g. the brand name for a trademark finding).
     *     @type \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint[]|\Google\Protobuf\Internal\RepeatedField $constraints
     *           Indicates how serving of this resource may be affected (e.g. not serving
     *           in a country).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Policy topic this finding refers to. For example, "ALCOHOL",
     * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
     * policy topics is not fixed for a particular API version and may change
     * at any time.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Returns the unboxed value from <code>getTopic()</code>

     * Policy topic this finding refers to. For example, "ALCOHOL",
     * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
     * policy topics is not fixed for a particular API version and may change
     * at any time.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic = 1;</code>
     * @return string|null
     */
    public function getTopicUnwrapped()
    {
        return $this->readWrapperValue("topic");
    }

    /**
     * Policy topic this finding refers to. For example, "ALCOHOL",
     * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
     * policy topics is not fixed for a particular API version and may change
     * at any time.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->topic = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Policy topic this finding refers to. For example, "ALCOHOL",
     * "TRADEMARKS_IN_AD_TEXT", or "DESTINATION_NOT_WORKING". The set of possible
     * policy topics is not fixed for a particular API version and may change
     * at any time.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTopicUnwrapped($var)
    {
        $this->writeWrapperValue("topic", $var);
        return $this;}

    /**
     * Describes the negative or positive effect this policy will have on serving.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Describes the negative or positive effect this policy will have on serving.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\PolicyTopicEntryTypeEnum_PolicyTopicEntryType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Additional information that explains policy finding
     * (e.g. the brand name for a trademark finding).
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicEvidence evidences = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvidences()
    {
        return $this->evidences;
    }

    /**
     * Additional information that explains policy finding
     * (e.g. the brand name for a trademark finding).
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicEvidence evidences = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PolicyTopicEvidence[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvidences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\PolicyTopicEvidence::class);
        $this->evidences = $arr;

        return $this;
    }

    /**
     * Indicates how serving of this resource may be affected (e.g. not serving
     * in a country).
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicConstraint constraints = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * Indicates how serving of this resource may be affected (e.g. not serving
     * in a country).
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicConstraint constraints = 4;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint::class);
        $this->constraints = $arr;

        return $this;
    }

}


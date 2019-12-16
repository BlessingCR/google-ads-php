<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/frequency_cap.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A group of fields used as keys for a frequency cap.
 * There can be no more than one frequency cap with the same key.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.FrequencyCapKey</code>
 */
class FrequencyCapKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The level on which the cap is to be applied (e.g. ad group ad, ad group).
     * The cap is applied to all the entities of this level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapLevelEnum.FrequencyCapLevel level = 1;</code>
     */
    protected $level = 0;
    /**
     * The type of event that the cap applies to (e.g. impression).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType event_type = 3;</code>
     */
    protected $event_type = 0;
    /**
     * Unit of time the cap is defined at (e.g. day, week).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2;</code>
     */
    protected $time_unit = 0;
    /**
     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value time_length = 4;</code>
     */
    protected $time_length = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *           The level on which the cap is to be applied (e.g. ad group ad, ad group).
     *           The cap is applied to all the entities of this level.
     *     @type int $event_type
     *           The type of event that the cap applies to (e.g. impression).
     *     @type int $time_unit
     *           Unit of time the cap is defined at (e.g. day, week).
     *     @type \Google\Protobuf\Int32Value $time_length
     *           Number of time units the cap lasts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\FrequencyCap::initOnce();
        parent::__construct($data);
    }

    /**
     * The level on which the cap is to be applied (e.g. ad group ad, ad group).
     * The cap is applied to all the entities of this level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapLevelEnum.FrequencyCapLevel level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * The level on which the cap is to be applied (e.g. ad group ad, ad group).
     * The cap is applied to all the entities of this level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapLevelEnum.FrequencyCapLevel level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FrequencyCapLevelEnum_FrequencyCapLevel::class);
        $this->level = $var;

        return $this;
    }

    /**
     * The type of event that the cap applies to (e.g. impression).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType event_type = 3;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * The type of event that the cap applies to (e.g. impression).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType event_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FrequencyCapEventTypeEnum_FrequencyCapEventType::class);
        $this->event_type = $var;

        return $this;
    }

    /**
     * Unit of time the cap is defined at (e.g. day, week).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2;</code>
     * @return int
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * Unit of time the cap is defined at (e.g. day, week).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FrequencyCapTimeUnitEnum_FrequencyCapTimeUnit::class);
        $this->time_unit = $var;

        return $this;
    }

    /**
     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value time_length = 4;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getTimeLength()
    {
        return $this->time_length;
    }

    /**
     * Returns the unboxed value from <code>getTimeLength()</code>

     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value time_length = 4;</code>
     * @return int|null
     */
    public function getTimeLengthUnwrapped()
    {
        return $this->readWrapperValue("time_length");
    }

    /**
     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value time_length = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setTimeLength($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->time_length = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value time_length = 4;</code>
     * @param int|null $var
     * @return $this
     */
    public function setTimeLengthUnwrapped($var)
    {
        $this->writeWrapperValue("time_length", $var);
        return $this;}

}


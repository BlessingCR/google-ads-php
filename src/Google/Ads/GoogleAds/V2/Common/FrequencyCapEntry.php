<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/frequency_cap.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule specifying the maximum number of times an ad (or some set of ads) can
 * be shown to a user over a particular time period.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.FrequencyCapEntry</code>
 */
class FrequencyCapEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The key of a particular frequency cap. There can be no more
     * than one frequency cap with the same key.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.FrequencyCapKey key = 1;</code>
     */
    protected $key = null;
    /**
     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value cap = 2;</code>
     */
    protected $cap = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Common\FrequencyCapKey $key
     *           The key of a particular frequency cap. There can be no more
     *           than one frequency cap with the same key.
     *     @type \Google\Protobuf\Int32Value $cap
     *           Maximum number of events allowed during the time range by this cap.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\FrequencyCap::initOnce();
        parent::__construct($data);
    }

    /**
     * The key of a particular frequency cap. There can be no more
     * than one frequency cap with the same key.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.FrequencyCapKey key = 1;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\FrequencyCapKey
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The key of a particular frequency cap. There can be no more
     * than one frequency cap with the same key.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.FrequencyCapKey key = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\FrequencyCapKey $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\FrequencyCapKey::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value cap = 2;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Returns the unboxed value from <code>getCap()</code>

     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value cap = 2;</code>
     * @return int|null
     */
    public function getCapUnwrapped()
    {
        return $this->readWrapperValue("cap");
    }

    /**
     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value cap = 2;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setCap($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->cap = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value cap = 2;</code>
     * @param int|null $var
     * @return $this
     */
    public function setCapUnwrapped($var)
    {
        $this->writeWrapperValue("cap", $var);
        return $this;}

}


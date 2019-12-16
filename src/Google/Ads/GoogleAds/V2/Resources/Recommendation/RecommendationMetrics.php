<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V2\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Weekly account performance metrics. For some recommendation types, these
 * are averaged over the past 90-day period and hence can be fractional.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.Recommendation.RecommendationMetrics</code>
 */
class RecommendationMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of ad impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     */
    protected $impressions = null;
    /**
     * Number of ad clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 2;</code>
     */
    protected $clicks = null;
    /**
     * Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 3;</code>
     */
    protected $cost_micros = null;
    /**
     * Number of conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversions = 4;</code>
     */
    protected $conversions = null;
    /**
     * Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue video_views = 5;</code>
     */
    protected $video_views = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $impressions
     *           Number of ad impressions.
     *     @type \Google\Protobuf\DoubleValue $clicks
     *           Number of ad clicks.
     *     @type \Google\Protobuf\Int64Value $cost_micros
     *           Cost (in micros) for advertising, in the local currency for the account.
     *     @type \Google\Protobuf\DoubleValue $conversions
     *           Number of conversions.
     *     @type \Google\Protobuf\DoubleValue $video_views
     *           Number of video views for a video ad campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of ad impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Returns the unboxed value from <code>getImpressions()</code>

     * Number of ad impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @return float|null
     */
    public function getImpressionsUnwrapped()
    {
        return $this->readWrapperValue("impressions");
    }

    /**
     * Number of ad impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Number of ad impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setImpressionsUnwrapped($var)
    {
        $this->writeWrapperValue("impressions", $var);
        return $this;}

    /**
     * Number of ad clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Returns the unboxed value from <code>getClicks()</code>

     * Number of ad clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 2;</code>
     * @return float|null
     */
    public function getClicksUnwrapped()
    {
        return $this->readWrapperValue("clicks");
    }

    /**
     * Number of ad clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Number of ad clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setClicksUnwrapped($var)
    {
        $this->writeWrapperValue("clicks", $var);
        return $this;}

    /**
     * Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCostMicros()
    {
        return $this->cost_micros;
    }

    /**
     * Returns the unboxed value from <code>getCostMicros()</code>

     * Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 3;</code>
     * @return int|string|null
     */
    public function getCostMicrosUnwrapped()
    {
        return $this->readWrapperValue("cost_micros");
    }

    /**
     * Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cost_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCostMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("cost_micros", $var);
        return $this;}

    /**
     * Number of conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversions = 4;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Returns the unboxed value from <code>getConversions()</code>

     * Number of conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversions = 4;</code>
     * @return float|null
     */
    public function getConversionsUnwrapped()
    {
        return $this->readWrapperValue("conversions");
    }

    /**
     * Number of conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversions = 4;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setConversions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->conversions = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Number of conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversions = 4;</code>
     * @param float|null $var
     * @return $this
     */
    public function setConversionsUnwrapped($var)
    {
        $this->writeWrapperValue("conversions", $var);
        return $this;}

    /**
     * Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue video_views = 5;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getVideoViews()
    {
        return $this->video_views;
    }

    /**
     * Returns the unboxed value from <code>getVideoViews()</code>

     * Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue video_views = 5;</code>
     * @return float|null
     */
    public function getVideoViewsUnwrapped()
    {
        return $this->readWrapperValue("video_views");
    }

    /**
     * Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue video_views = 5;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setVideoViews($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->video_views = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue video_views = 5;</code>
     * @param float|null $var
     * @return $this
     */
    public function setVideoViewsUnwrapped($var)
    {
        $this->writeWrapperValue("video_views", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationMetrics::class, \Google\Ads\GoogleAds\V2\Resources\Recommendation_RecommendationMetrics::class);


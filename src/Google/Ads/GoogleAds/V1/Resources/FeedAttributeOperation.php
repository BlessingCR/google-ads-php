<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/feed.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operation to be performed on a feed attribute list in a mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.FeedAttributeOperation</code>
 */
class FeedAttributeOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of list operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.FeedAttributeOperation.Operator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * The feed attribute being added to the list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.FeedAttribute value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           Type of list operation to perform.
     *     @type \Google\Ads\GoogleAds\V1\Resources\FeedAttribute $value
     *           The feed attribute being added to the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of list operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.FeedAttributeOperation.Operator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Type of list operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.FeedAttributeOperation.Operator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Resources\FeedAttributeOperation_Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * The feed attribute being added to the list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.FeedAttribute value = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\FeedAttribute
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The feed attribute being added to the list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.FeedAttribute value = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\FeedAttribute $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\FeedAttribute::class);
        $this->value = $var;

        return $this;
    }

}


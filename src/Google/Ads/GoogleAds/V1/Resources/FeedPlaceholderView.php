<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/feed_placeholder_view.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed placeholder view.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.FeedPlaceholderView</code>
 */
class FeedPlaceholderView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the feed placeholder view.
     * Feed placeholder view resource names have the form:
     * `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The placeholder type of the feed placeholder view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 2;</code>
     */
    protected $placeholder_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the feed placeholder view.
     *           Feed placeholder view resource names have the form:
     *           `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *     @type int $placeholder_type
     *           The placeholder type of the feed placeholder view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\FeedPlaceholderView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the feed placeholder view.
     * Feed placeholder view resource names have the form:
     * `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the feed placeholder view.
     * Feed placeholder view resource names have the form:
     * `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
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
     * The placeholder type of the feed placeholder view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 2;</code>
     * @return int
     */
    public function getPlaceholderType()
    {
        return $this->placeholder_type;
    }

    /**
     * The placeholder type of the feed placeholder view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaceholderType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\PlaceholderTypeEnum_PlaceholderType::class);
        $this->placeholder_type = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/feed_mapping.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed mapping.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.FeedMapping</code>
 */
class FeedMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the feed mapping.
     * Feed mapping resource names have the form:
     * `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The feed of this feed mapping.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     */
    protected $feed = null;
    /**
     * Feed attributes to field mappings. These mappings are a one-to-many
     * relationship meaning that 1 feed attribute can be used to populate
     * multiple placeholder fields, but 1 placeholder field can only draw
     * data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     * field can be mapped to multiple feed attributes. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.resources.AttributeFieldMapping attribute_field_mappings = 5;</code>
     */
    private $attribute_field_mappings;
    /**
     * Status of the feed mapping.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedMappingStatusEnum.FeedMappingStatus status = 6;</code>
     */
    protected $status = 0;
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the feed mapping.
     *           Feed mapping resource names have the form:
     *           `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *     @type \Google\Protobuf\StringValue $feed
     *           The feed of this feed mapping.
     *     @type \Google\Ads\GoogleAds\V2\Resources\AttributeFieldMapping[]|\Google\Protobuf\Internal\RepeatedField $attribute_field_mappings
     *           Feed attributes to field mappings. These mappings are a one-to-many
     *           relationship meaning that 1 feed attribute can be used to populate
     *           multiple placeholder fields, but 1 placeholder field can only draw
     *           data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     *           field can be mapped to multiple feed attributes. Required.
     *     @type int $status
     *           Status of the feed mapping.
     *           This field is read-only.
     *     @type int $placeholder_type
     *           The placeholder type of this mapping (i.e., if the mapping maps feed
     *           attributes to placeholder fields).
     *     @type int $criterion_type
     *           The criterion type of this mapping (i.e., if the mapping maps feed
     *           attributes to criterion fields).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\FeedMapping::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the feed mapping.
     * Feed mapping resource names have the form:
     * `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the feed mapping.
     * Feed mapping resource names have the form:
     * `customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}`
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
     * The feed of this feed mapping.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * Returns the unboxed value from <code>getFeed()</code>

     * The feed of this feed mapping.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @return string|null
     */
    public function getFeedUnwrapped()
    {
        return $this->readWrapperValue("feed");
    }

    /**
     * The feed of this feed mapping.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The feed of this feed mapping.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedUnwrapped($var)
    {
        $this->writeWrapperValue("feed", $var);
        return $this;}

    /**
     * Feed attributes to field mappings. These mappings are a one-to-many
     * relationship meaning that 1 feed attribute can be used to populate
     * multiple placeholder fields, but 1 placeholder field can only draw
     * data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     * field can be mapped to multiple feed attributes. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.resources.AttributeFieldMapping attribute_field_mappings = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeFieldMappings()
    {
        return $this->attribute_field_mappings;
    }

    /**
     * Feed attributes to field mappings. These mappings are a one-to-many
     * relationship meaning that 1 feed attribute can be used to populate
     * multiple placeholder fields, but 1 placeholder field can only draw
     * data from 1 feed attribute. Ad Customizer is an exception, 1 placeholder
     * field can be mapped to multiple feed attributes. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.resources.AttributeFieldMapping attribute_field_mappings = 5;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\AttributeFieldMapping[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeFieldMappings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Resources\AttributeFieldMapping::class);
        $this->attribute_field_mappings = $arr;

        return $this;
    }

    /**
     * Status of the feed mapping.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedMappingStatusEnum.FeedMappingStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the feed mapping.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedMappingStatusEnum.FeedMappingStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\FeedMappingStatusEnum_FeedMappingStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The placeholder type of this mapping (i.e., if the mapping maps feed
     * attributes to placeholder fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 3;</code>
     * @return int
     */
    public function getPlaceholderType()
    {
        return $this->readOneof(3);
    }

    /**
     * The placeholder type of this mapping (i.e., if the mapping maps feed
     * attributes to placeholder fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaceholderType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\PlaceholderTypeEnum_PlaceholderType::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The criterion type of this mapping (i.e., if the mapping maps feed
     * attributes to criterion fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedMappingCriterionTypeEnum.FeedMappingCriterionType criterion_type = 4;</code>
     * @return int
     */
    public function getCriterionType()
    {
        return $this->readOneof(4);
    }

    /**
     * The criterion type of this mapping (i.e., if the mapping maps feed
     * attributes to criterion fields).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedMappingCriterionTypeEnum.FeedMappingCriterionType criterion_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCriterionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\FeedMappingCriterionTypeEnum_FeedMappingCriterionType::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}


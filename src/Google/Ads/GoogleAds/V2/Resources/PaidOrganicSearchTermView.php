<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/paid_organic_search_term_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A paid organic search term view providing a view of search stats across
 * ads and organic listings aggregated by search term at the ad group level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.PaidOrganicSearchTermView</code>
 */
class PaidOrganicSearchTermView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the search term view.
     * Search term view resource names have the form:
     * `customers/{customer_id}/paidOrganicSearchTermViews/{campaign_id}~
     * {ad_group_id}~{URL-base64 search term}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     */
    protected $search_term = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the search term view.
     *           Search term view resource names have the form:
     *           `customers/{customer_id}/paidOrganicSearchTermViews/{campaign_id}~
     *           {ad_group_id}~{URL-base64 search term}`
     *     @type \Google\Protobuf\StringValue $search_term
     *           The search term.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\PaidOrganicSearchTermView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the search term view.
     * Search term view resource names have the form:
     * `customers/{customer_id}/paidOrganicSearchTermViews/{campaign_id}~
     * {ad_group_id}~{URL-base64 search term}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the search term view.
     * Search term view resource names have the form:
     * `customers/{customer_id}/paidOrganicSearchTermViews/{campaign_id}~
     * {ad_group_id}~{URL-base64 search term}`
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
     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSearchTerm()
    {
        return $this->search_term;
    }

    /**
     * Returns the unboxed value from <code>getSearchTerm()</code>

     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @return string|null
     */
    public function getSearchTermUnwrapped()
    {
        return $this->readWrapperValue("search_term");
    }

    /**
     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->search_term = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSearchTermUnwrapped($var)
    {
        $this->writeWrapperValue("search_term", $var);
        return $this;}

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/campaign_draft_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [CampaignDraftService.ListCampaignDraftAsyncErrors][google.ads.googleads.v2.services.CampaignDraftService.ListCampaignDraftAsyncErrors].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.ListCampaignDraftAsyncErrorsResponse</code>
 */
class ListCampaignDraftAsyncErrorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Details of the errors when performing the asynchronous operation.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status errors = 1;</code>
     */
    private $errors;
    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request. `next_page_token` is not returned for the last
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           Details of the errors when performing the asynchronous operation.
     *     @type string $next_page_token
     *           Pagination token used to retrieve the next page of results.
     *           Pass the content of this string as the `page_token` attribute of
     *           the next request. `next_page_token` is not returned for the last
     *           page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\CampaignDraftService::initOnce();
        parent::__construct($data);
    }

    /**
     * Details of the errors when performing the asynchronous operation.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Details of the errors when performing the asynchronous operation.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status errors = 1;</code>
     * @param \Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request. `next_page_token` is not returned for the last
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request. `next_page_token` is not returned for the last
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}


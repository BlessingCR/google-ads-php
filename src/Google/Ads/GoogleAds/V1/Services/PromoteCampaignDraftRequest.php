<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/campaign_draft_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CampaignDraftService.PromoteCampaignDraft][google.ads.googleads.v1.services.CampaignDraftService.PromoteCampaignDraft].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.PromoteCampaignDraftRequest</code>
 */
class PromoteCampaignDraftRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign draft to promote.
     *
     * Generated from protobuf field <code>string campaign_draft = 1;</code>
     */
    protected $campaign_draft = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_draft
     *           The resource name of the campaign draft to promote.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\CampaignDraftService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign draft to promote.
     *
     * Generated from protobuf field <code>string campaign_draft = 1;</code>
     * @return string
     */
    public function getCampaignDraft()
    {
        return $this->campaign_draft;
    }

    /**
     * The resource name of the campaign draft to promote.
     *
     * Generated from protobuf field <code>string campaign_draft = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignDraft($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_draft = $var;

        return $this;
    }

}


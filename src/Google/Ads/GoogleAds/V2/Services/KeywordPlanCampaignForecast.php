<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign forecast.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.KeywordPlanCampaignForecast</code>
 */
class KeywordPlanCampaignForecast extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword+plan_campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 1;</code>
     */
    protected $keyword_plan_campaign = null;
    /**
     * The forecast for the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.ForecastMetrics campaign_forecast = 2;</code>
     */
    protected $campaign_forecast = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $keyword_plan_campaign
     *           The resource name of the Keyword Plan campaign related to the forecast.
     *           `customers/{customer_id}/keywordPlanCampaigns/{keyword+plan_campaign_id}`
     *     @type \Google\Ads\GoogleAds\V2\Services\ForecastMetrics $campaign_forecast
     *           The forecast for the Keyword Plan campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword+plan_campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getKeywordPlanCampaign()
    {
        return $this->keyword_plan_campaign;
    }

    /**
     * Returns the unboxed value from <code>getKeywordPlanCampaign()</code>

     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword+plan_campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 1;</code>
     * @return string|null
     */
    public function getKeywordPlanCampaignUnwrapped()
    {
        return $this->readWrapperValue("keyword_plan_campaign");
    }

    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword+plan_campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword+plan_campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setKeywordPlanCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("keyword_plan_campaign", $var);
        return $this;}

    /**
     * The forecast for the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.ForecastMetrics campaign_forecast = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Services\ForecastMetrics
     */
    public function getCampaignForecast()
    {
        return $this->campaign_forecast;
    }

    /**
     * The forecast for the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.ForecastMetrics campaign_forecast = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Services\ForecastMetrics $var
     * @return $this
     */
    public function setCampaignForecast($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Services\ForecastMetrics::class);
        $this->campaign_forecast = $var;

        return $this;
    }

}


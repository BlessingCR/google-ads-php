<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App engagement ads allow you to write text encouraging a specific action in
 * the app, like checking in, making a purchase, or booking a flight.
 * They allow you to send users to a specific part of your app where they can
 * find what they're looking for easier and faster.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.AppEngagementAdInfo</code>
 */
class AppEngagementAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset headlines = 1;</code>
     */
    private $headlines;
    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset descriptions = 2;</code>
     */
    private $descriptions;
    /**
     * List of image assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset images = 3;</code>
     */
    private $images;
    /**
     * List of video assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdVideoAsset videos = 4;</code>
     */
    private $videos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $headlines
     *           List of text assets for headlines. When the ad serves the headlines will
     *           be selected from this list.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $descriptions
     *           List of text assets for descriptions. When the ad serves the descriptions
     *           will be selected from this list.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $images
     *           List of image assets that may be displayed with the ad.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $videos
     *           List of video assets that may be displayed with the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset headlines = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeadlines()
    {
        return $this->headlines;
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset headlines = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeadlines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdTextAsset::class);
        $this->headlines = $arr;

        return $this;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset descriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset descriptions = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdTextAsset::class);
        $this->descriptions = $arr;

        return $this;
    }

    /**
     * List of image assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset images = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * List of image assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset images = 3;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdImageAsset::class);
        $this->images = $arr;

        return $this;
    }

    /**
     * List of video assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdVideoAsset videos = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * List of video assets that may be displayed with the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdVideoAsset videos = 4;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVideos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdVideoAsset::class);
        $this->videos = $arr;

        return $this;
    }

}


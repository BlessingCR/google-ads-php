<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A responsive search ad.
 * Responsive search ads let you create an ad that adapts to show more text, and
 * more relevant messages, to your customers. Enter multiple headlines and
 * descriptions when creating a responsive search ad, and over time, Google Ads
 * will automatically test different combinations and learn which combinations
 * perform best. By adapting your ad's content to more closely match potential
 * customers' search terms, responsive search ads may improve your campaign's
 * performance.
 * More information at https://support.google.com/google-ads/answer/7684791
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ResponsiveSearchAdInfo</code>
 */
class ResponsiveSearchAdInfo extends \Google\Protobuf\Internal\Message
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
     * First part of text that may appear appended to the url displayed in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 3;</code>
     */
    protected $path1 = null;
    /**
     * Second part of text that may appear appended to the url displayed in the
     * ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 4;</code>
     */
    protected $path2 = null;

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
     *     @type \Google\Protobuf\StringValue $path1
     *           First part of text that may appear appended to the url displayed in the ad.
     *     @type \Google\Protobuf\StringValue $path2
     *           Second part of text that may appear appended to the url displayed in the
     *           ad. This field can only be set when path1 is also set.
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
     * First part of text that may appear appended to the url displayed in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * Returns the unboxed value from <code>getPath1()</code>

     * First part of text that may appear appended to the url displayed in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 3;</code>
     * @return string|null
     */
    public function getPath1Unwrapped()
    {
        return $this->readWrapperValue("path1");
    }

    /**
     * First part of text that may appear appended to the url displayed in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * First part of text that may appear appended to the url displayed in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPath1Unwrapped($var)
    {
        $this->writeWrapperValue("path1", $var);
        return $this;}

    /**
     * Second part of text that may appear appended to the url displayed in the
     * ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Returns the unboxed value from <code>getPath2()</code>

     * Second part of text that may appear appended to the url displayed in the
     * ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 4;</code>
     * @return string|null
     */
    public function getPath2Unwrapped()
    {
        return $this->readWrapperValue("path2");
    }

    /**
     * Second part of text that may appear appended to the url displayed in the
     * ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->path2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Second part of text that may appear appended to the url displayed in the
     * ad. This field can only be set when path1 is also set.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPath2Unwrapped($var)
    {
        $this->writeWrapperValue("path2", $var);
        return $this;}

}


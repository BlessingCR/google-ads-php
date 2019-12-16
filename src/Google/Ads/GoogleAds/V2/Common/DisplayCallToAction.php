<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data for display call to action. The call to action is a piece of the ad
 * that prompts the user to do something. Like clicking a link or making a phone
 * call.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.DisplayCallToAction</code>
 */
class DisplayCallToAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     */
    protected $text = null;
    /**
     * Text color for the display-call-to-action in hexadecimal, e.g. #ffffff for
     * white.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text_color = 2;</code>
     */
    protected $text_color = null;
    /**
     * Identifies the url collection in the ad.url_collections field. If not set
     * the url defaults to final_url.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 3;</code>
     */
    protected $url_collection_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $text
     *           Text for the display-call-to-action.
     *     @type \Google\Protobuf\StringValue $text_color
     *           Text color for the display-call-to-action in hexadecimal, e.g. #ffffff for
     *           white.
     *     @type \Google\Protobuf\StringValue $url_collection_id
     *           Identifies the url collection in the ad.url_collections field. If not set
     *           the url defaults to final_url.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * Text color for the display-call-to-action in hexadecimal, e.g. #ffffff for
     * white.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text_color = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTextColor()
    {
        return $this->text_color;
    }

    /**
     * Returns the unboxed value from <code>getTextColor()</code>

     * Text color for the display-call-to-action in hexadecimal, e.g. #ffffff for
     * white.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text_color = 2;</code>
     * @return string|null
     */
    public function getTextColorUnwrapped()
    {
        return $this->readWrapperValue("text_color");
    }

    /**
     * Text color for the display-call-to-action in hexadecimal, e.g. #ffffff for
     * white.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text_color = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTextColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text_color = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Text color for the display-call-to-action in hexadecimal, e.g. #ffffff for
     * white.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text_color = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextColorUnwrapped($var)
    {
        $this->writeWrapperValue("text_color", $var);
        return $this;}

    /**
     * Identifies the url collection in the ad.url_collections field. If not set
     * the url defaults to final_url.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUrlCollectionId()
    {
        return $this->url_collection_id;
    }

    /**
     * Returns the unboxed value from <code>getUrlCollectionId()</code>

     * Identifies the url collection in the ad.url_collections field. If not set
     * the url defaults to final_url.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 3;</code>
     * @return string|null
     */
    public function getUrlCollectionIdUnwrapped()
    {
        return $this->readWrapperValue("url_collection_id");
    }

    /**
     * Identifies the url collection in the ad.url_collections field. If not set
     * the url defaults to final_url.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUrlCollectionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->url_collection_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Identifies the url collection in the ad.url_collections field. If not set
     * the url defaults to final_url.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUrlCollectionIdUnwrapped($var)
    {
        $this->writeWrapperValue("url_collection_id", $var);
        return $this;}

}


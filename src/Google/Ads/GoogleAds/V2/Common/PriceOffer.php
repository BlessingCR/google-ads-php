<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/extensions.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents one price offer in a price extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.PriceOffer</code>
 */
class PriceOffer extends \Google\Protobuf\Internal\Message
{
    /**
     * Header text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue header = 1;</code>
     */
    protected $header = null;
    /**
     * Description text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     */
    protected $description = null;
    /**
     * Price value of this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.Money price = 3;</code>
     */
    protected $price = null;
    /**
     * Price unit for this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit unit = 4;</code>
     */
    protected $unit = 0;
    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 5;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 6;</code>
     */
    private $final_mobile_urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $header
     *           Header text of this offer.
     *     @type \Google\Protobuf\StringValue $description
     *           Description text of this offer.
     *     @type \Google\Ads\GoogleAds\V2\Common\Money $price
     *           Price value of this offer.
     *     @type int $unit
     *           Price unit for this offer.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * Header text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue header = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Returns the unboxed value from <code>getHeader()</code>

     * Header text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue header = 1;</code>
     * @return string|null
     */
    public function getHeaderUnwrapped()
    {
        return $this->readWrapperValue("header");
    }

    /**
     * Header text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue header = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Header text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue header = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeaderUnwrapped($var)
    {
        $this->writeWrapperValue("header", $var);
        return $this;}

    /**
     * Description text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * Description text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * Description text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Description text of this offer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

    /**
     * Price value of this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.Money price = 3;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Price value of this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.Money price = 3;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\Money $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\Money::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Price unit for this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit unit = 4;</code>
     * @return int
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Price unit for this offer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit unit = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\PriceExtensionPriceUnitEnum_PriceExtensionPriceUnit::class);
        $this->unit = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 5;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 6;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_mobile_urls = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Proximity criterion. The geo point and radius determine what geographical
 * area is included. The address is a description of the geo point that does
 * not affect ad serving.
 * There are two ways to create a proximity. First, by setting an address
 * and radius. The geo point will be automatically computed. Second, by
 * setting a geo point and radius. The address is an optional label that won't
 * be validated.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ProximityInfo</code>
 */
class ProximityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Latitude and longitude.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.GeoPointInfo geo_point = 1;</code>
     */
    protected $geo_point = null;
    /**
     * The radius of the proximity.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue radius = 2;</code>
     */
    protected $radius = null;
    /**
     * The unit of measurement of the radius. Default is KILOMETERS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits radius_units = 3;</code>
     */
    protected $radius_units = 0;
    /**
     * Full address.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AddressInfo address = 4;</code>
     */
    protected $address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Common\GeoPointInfo $geo_point
     *           Latitude and longitude.
     *     @type \Google\Protobuf\DoubleValue $radius
     *           The radius of the proximity.
     *     @type int $radius_units
     *           The unit of measurement of the radius. Default is KILOMETERS.
     *     @type \Google\Ads\GoogleAds\V2\Common\AddressInfo $address
     *           Full address.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Latitude and longitude.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.GeoPointInfo geo_point = 1;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\GeoPointInfo
     */
    public function getGeoPoint()
    {
        return $this->geo_point;
    }

    /**
     * Latitude and longitude.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.GeoPointInfo geo_point = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\GeoPointInfo $var
     * @return $this
     */
    public function setGeoPoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\GeoPointInfo::class);
        $this->geo_point = $var;

        return $this;
    }

    /**
     * The radius of the proximity.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue radius = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Returns the unboxed value from <code>getRadius()</code>

     * The radius of the proximity.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue radius = 2;</code>
     * @return float|null
     */
    public function getRadiusUnwrapped()
    {
        return $this->readWrapperValue("radius");
    }

    /**
     * The radius of the proximity.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue radius = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setRadius($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->radius = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The radius of the proximity.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue radius = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setRadiusUnwrapped($var)
    {
        $this->writeWrapperValue("radius", $var);
        return $this;}

    /**
     * The unit of measurement of the radius. Default is KILOMETERS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits radius_units = 3;</code>
     * @return int
     */
    public function getRadiusUnits()
    {
        return $this->radius_units;
    }

    /**
     * The unit of measurement of the radius. Default is KILOMETERS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits radius_units = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRadiusUnits($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ProximityRadiusUnitsEnum_ProximityRadiusUnits::class);
        $this->radius_units = $var;

        return $this;
    }

    /**
     * Full address.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AddressInfo address = 4;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\AddressInfo
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Full address.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AddressInfo address = 4;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AddressInfo $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\AddressInfo::class);
        $this->address = $var;

        return $this;
    }

}


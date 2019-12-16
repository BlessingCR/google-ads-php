<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile application criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.MobileApplicationInfo</code>
 */
class MobileApplicationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is http://itunes.apple.com/us/app/flood-it!-2/id476943146).
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     */
    protected $app_id = null;
    /**
     * Name of this mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    protected $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $app_id
     *           A string that uniquely identifies a mobile application to Google Ads API.
     *           The format of this string is "{platform}-{platform_native_id}", where
     *           platform is "1" for iOS apps and "2" for Android apps, and where
     *           platform_native_id is the mobile application identifier native to the
     *           corresponding platform.
     *           For iOS, this native identifier is the 9 digit string that appears at the
     *           end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     *           Store link is http://itunes.apple.com/us/app/flood-it!-2/id476943146).
     *           For Android, this native identifier is the application's package name
     *           (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     *           https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
     *           A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     *           and "2-com.labpixies.colordrips" for Android.
     *           This field is required and must be set in CREATE operations.
     *     @type \Google\Protobuf\StringValue $name
     *           Name of this mobile application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is http://itunes.apple.com/us/app/flood-it!-2/id476943146).
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Returns the unboxed value from <code>getAppId()</code>

     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is http://itunes.apple.com/us/app/flood-it!-2/id476943146).
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return string|null
     */
    public function getAppIdUnwrapped()
    {
        return $this->readWrapperValue("app_id");
    }

    /**
     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is http://itunes.apple.com/us/app/flood-it!-2/id476943146).
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is http://itunes.apple.com/us/app/flood-it!-2/id476943146).
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdUnwrapped($var)
    {
        $this->writeWrapperValue("app_id", $var);
        return $this;}

    /**
     * Name of this mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Name of this mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Name of this mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Name of this mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

}


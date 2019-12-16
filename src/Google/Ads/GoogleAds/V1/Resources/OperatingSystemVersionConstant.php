<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/operating_system_version_constant.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile operating system version or a range of versions, depending on
 * `operator_type`. List of available mobile platforms at
 * https://developers.google.com/adwords/api/docs/appendix/codes-formats#mobile-platforms
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.OperatingSystemVersionConstant</code>
 */
class OperatingSystemVersionConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the operating system version constant.
     * Operating system version constant resource names have the form:
     * `operatingSystemVersionConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    protected $id = null;
    /**
     * Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    protected $name = null;
    /**
     * The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4;</code>
     */
    protected $os_major_version = null;
    /**
     * The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5;</code>
     */
    protected $os_minor_version = null;
    /**
     * Determines whether this constant represents a single version or a range of
     * versions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorType operator_type = 6;</code>
     */
    protected $operator_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the operating system version constant.
     *           Operating system version constant resource names have the form:
     *           `operatingSystemVersionConstants/{criterion_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the operating system version.
     *     @type \Google\Protobuf\StringValue $name
     *           Name of the operating system.
     *     @type \Google\Protobuf\Int32Value $os_major_version
     *           The OS Major Version number.
     *     @type \Google\Protobuf\Int32Value $os_minor_version
     *           The OS Minor Version number.
     *     @type int $operator_type
     *           Determines whether this constant represents a single version or a range of
     *           versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\OperatingSystemVersionConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the operating system version constant.
     * Operating system version constant resource names have the form:
     * `operatingSystemVersionConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the operating system version constant.
     * Operating system version constant resource names have the form:
     * `operatingSystemVersionConstants/{criterion_id}`
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
     * The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Name of the operating system.
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

     * Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Name of the operating system.
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

     * Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getOsMajorVersion()
    {
        return $this->os_major_version;
    }

    /**
     * Returns the unboxed value from <code>getOsMajorVersion()</code>

     * The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4;</code>
     * @return int|null
     */
    public function getOsMajorVersionUnwrapped()
    {
        return $this->readWrapperValue("os_major_version");
    }

    /**
     * The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setOsMajorVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->os_major_version = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4;</code>
     * @param int|null $var
     * @return $this
     */
    public function setOsMajorVersionUnwrapped($var)
    {
        $this->writeWrapperValue("os_major_version", $var);
        return $this;}

    /**
     * The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getOsMinorVersion()
    {
        return $this->os_minor_version;
    }

    /**
     * Returns the unboxed value from <code>getOsMinorVersion()</code>

     * The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5;</code>
     * @return int|null
     */
    public function getOsMinorVersionUnwrapped()
    {
        return $this->readWrapperValue("os_minor_version");
    }

    /**
     * The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setOsMinorVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->os_minor_version = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5;</code>
     * @param int|null $var
     * @return $this
     */
    public function setOsMinorVersionUnwrapped($var)
    {
        $this->writeWrapperValue("os_minor_version", $var);
        return $this;}

    /**
     * Determines whether this constant represents a single version or a range of
     * versions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorType operator_type = 6;</code>
     * @return int
     */
    public function getOperatorType()
    {
        return $this->operator_type;
    }

    /**
     * Determines whether this constant represents a single version or a range of
     * versions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorType operator_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOperatorType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\OperatingSystemVersionOperatorTypeEnum_OperatingSystemVersionOperatorType::class);
        $this->operator_type = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Google/Ads/GoogleAds/Util/Testing/tester.proto

namespace Google\Ads\GoogleAds\Util\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.ads.googleads.util.testing.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue wrapper = 1;</code>
     */
    protected $wrapper = null;
    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Foo foo = 2;</code>
     */
    protected $foo = null;
    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.testing.Foo foos = 3;</code>
     */
    private $foos;
    /**
     * Generated from protobuf field <code>int32 presence = 4;</code>
     */
    protected $presence = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $wrapper
     *     @type \Google\Ads\GoogleAds\Util\Testing\Foo $foo
     *     @type \Google\Ads\GoogleAds\Util\Testing\Foo[]|\Google\Protobuf\Internal\RepeatedField $foos
     *     @type int $presence
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\Util\Testing\Tester::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue wrapper = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getWrapper()
    {
        return isset($this->wrapper) ? $this->wrapper : null;
    }

    public function hasWrapper()
    {
        return isset($this->wrapper);
    }

    public function clearWrapper()
    {
        unset($this->wrapper);
    }

    /**
     * Returns the unboxed value from <code>getWrapper()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue wrapper = 1;</code>
     * @return string|null
     */
    public function getWrapperUnwrapped()
    {
        return $this->readWrapperValue("wrapper");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue wrapper = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setWrapper($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->wrapper = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue wrapper = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setWrapperUnwrapped($var)
    {
        $this->writeWrapperValue("wrapper", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Foo foo = 2;</code>
     * @return \Google\Ads\GoogleAds\Util\Testing\Foo
     */
    public function getFoo()
    {
        return isset($this->foo) ? $this->foo : null;
    }

    public function hasFoo()
    {
        return isset($this->foo);
    }

    public function clearFoo()
    {
        unset($this->foo);
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.testing.Foo foo = 2;</code>
     * @param \Google\Ads\GoogleAds\Util\Testing\Foo $var
     * @return $this
     */
    public function setFoo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\Util\Testing\Foo::class);
        $this->foo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.testing.Foo foos = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFoos()
    {
        return $this->foos;
    }

    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.testing.Foo foos = 3;</code>
     * @param \Google\Ads\GoogleAds\Util\Testing\Foo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFoos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\Util\Testing\Foo::class);
        $this->foos = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 presence = 4;</code>
     * @return int
     */
    public function getPresence()
    {
        return isset($this->presence) ? $this->presence : 0;
    }

    public function hasPresence()
    {
        return isset($this->presence);
    }

    public function clearPresence()
    {
        unset($this->presence);
    }

    /**
     * Generated from protobuf field <code>int32 presence = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPresence($var)
    {
        GPBUtil::checkInt32($var);
        $this->presence = $var;

        return $this;
    }

}


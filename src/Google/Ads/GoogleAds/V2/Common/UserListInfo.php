<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A User List criterion. Represents a user list that is defined by the
 * advertiser to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.UserListInfo</code>
 */
class UserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The User List resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     */
    protected $user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $user_list
     *           The User List resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The User List resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUserList()
    {
        return $this->user_list;
    }

    /**
     * Returns the unboxed value from <code>getUserList()</code>

     * The User List resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @return string|null
     */
    public function getUserListUnwrapped()
    {
        return $this->readWrapperValue("user_list");
    }

    /**
     * The User List resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->user_list = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The User List resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUserListUnwrapped($var)
    {
        $this->writeWrapperValue("user_list", $var);
        return $this;}

}


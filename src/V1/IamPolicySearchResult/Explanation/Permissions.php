<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1\IamPolicySearchResult\Explanation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IAM permissions
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicySearchResult.Explanation.Permissions</code>
 */
class Permissions extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of permissions. A sample permission string: `compute.disk.get`.
     *
     * Generated from protobuf field <code>repeated string permissions = 1;</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $permissions
     *           A list of permissions. A sample permission string: `compute.disk.get`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of permissions. A sample permission string: `compute.disk.get`.
     *
     * Generated from protobuf field <code>repeated string permissions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * A list of permissions. A sample permission string: `compute.disk.get`.
     *
     * Generated from protobuf field <code>repeated string permissions = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->permissions = $arr;

        return $this;
    }

}



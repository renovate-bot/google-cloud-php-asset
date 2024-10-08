<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update a saved query.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.UpdateSavedQueryRequest</code>
 */
class UpdateSavedQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The saved query to update.
     * The saved query's `name` field is used to identify the one to update,
     * which has format as below:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.SavedQuery saved_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $saved_query = null;
    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Asset\V1\SavedQuery $savedQuery Required. The saved query to update.
     *
     *                                                      The saved query's `name` field is used to identify the one to update,
     *                                                      which has format as below:
     *
     *                                                      * projects/project_number/savedQueries/saved_query_id
     *                                                      * folders/folder_number/savedQueries/saved_query_id
     *                                                      * organizations/organization_number/savedQueries/saved_query_id
     * @param \Google\Protobuf\FieldMask        $updateMask Required. The list of fields to update.
     *
     * @return \Google\Cloud\Asset\V1\UpdateSavedQueryRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Asset\V1\SavedQuery $savedQuery, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSavedQuery($savedQuery)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\SavedQuery $saved_query
     *           Required. The saved query to update.
     *           The saved query's `name` field is used to identify the one to update,
     *           which has format as below:
     *           * projects/project_number/savedQueries/saved_query_id
     *           * folders/folder_number/savedQueries/saved_query_id
     *           * organizations/organization_number/savedQueries/saved_query_id
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The saved query to update.
     * The saved query's `name` field is used to identify the one to update,
     * which has format as below:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.SavedQuery saved_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1\SavedQuery|null
     */
    public function getSavedQuery()
    {
        return $this->saved_query;
    }

    public function hasSavedQuery()
    {
        return isset($this->saved_query);
    }

    public function clearSavedQuery()
    {
        unset($this->saved_query);
    }

    /**
     * Required. The saved query to update.
     * The saved query's `name` field is used to identify the one to update,
     * which has format as below:
     * * projects/project_number/savedQueries/saved_query_id
     * * folders/folder_number/savedQueries/saved_query_id
     * * organizations/organization_number/savedQueries/saved_query_id
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.SavedQuery saved_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1\SavedQuery $var
     * @return $this
     */
    public function setSavedQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\SavedQuery::class);
        $this->saved_query = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


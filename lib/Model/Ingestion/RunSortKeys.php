<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Ingestion;

/**
 * RunSortKeys Class Doc Comment.
 *
 * @category Class
 * @description Property by which to sort the list of task runs.
 */
class RunSortKeys
{
    /**
     * Possible values of this enum.
     */
    public const STATUS = 'status';

    public const UPDATED_AT = 'updatedAt';

    public const CREATED_AT = 'createdAt';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STATUS,
            self::UPDATED_AT,
            self::CREATED_AT,
        ];
    }
}

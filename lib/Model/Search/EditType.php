<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * EditType Class Doc Comment.
 *
 * @category Class
 *
 * @description Type of edit.
 */
class EditType
{
    /**
     * Possible values of this enum.
     */
    public const REMOVE = 'remove';

    public const REPLACE = 'replace';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REMOVE,
            self::REPLACE,
        ];
    }
}
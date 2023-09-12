<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Recommend;

/**
 * Consequence Class Doc Comment.
 *
 * @category Class
 *
 * @description [Consequences](https://www.algolia.com/doc/guides/managing-results/rules/rules-overview/#consequences) of a rule.
 */
class Consequence extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'params' => '\Algolia\AlgoliaSearch\Model\Recommend\ConsequenceParams',
        'promote' => '\Algolia\AlgoliaSearch\Model\Recommend\Promote[]',
        'filterPromotes' => 'bool',
        'hide' => '\Algolia\AlgoliaSearch\Model\Recommend\ConsequenceHide[]',
        'userData' => 'object',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'params' => null,
        'promote' => null,
        'filterPromotes' => null,
        'hide' => null,
        'userData' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'params' => 'params',
        'promote' => 'promote',
        'filterPromotes' => 'filterPromotes',
        'hide' => 'hide',
        'userData' => 'userData',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'params' => 'setParams',
        'promote' => 'setPromote',
        'filterPromotes' => 'setFilterPromotes',
        'hide' => 'setHide',
        'userData' => 'setUserData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'params' => 'getParams',
        'promote' => 'getPromote',
        'filterPromotes' => 'getFilterPromotes',
        'hide' => 'getHide',
        'userData' => 'getUserData',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(array $data = null)
    {
        if (isset($data['params'])) {
            $this->container['params'] = $data['params'];
        }
        if (isset($data['promote'])) {
            $this->container['promote'] = $data['promote'];
        }
        if (isset($data['filterPromotes'])) {
            $this->container['filterPromotes'] = $data['filterPromotes'];
        }
        if (isset($data['hide'])) {
            $this->container['hide'] = $data['hide'];
        }
        if (isset($data['userData'])) {
            $this->container['userData'] = $data['userData'];
        }
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets params.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Recommend\ConsequenceParams
     */
    public function getParams()
    {
        return $this->container['params'] ?? null;
    }

    /**
     * Sets params.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Recommend\ConsequenceParams $params params
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets promote.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Recommend\Promote[]
     */
    public function getPromote()
    {
        return $this->container['promote'] ?? null;
    }

    /**
     * Sets promote.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Recommend\Promote[] $promote records to promote
     *
     * @return self
     */
    public function setPromote($promote)
    {
        $this->container['promote'] = $promote;

        return $this;
    }

    /**
     * Gets filterPromotes.
     *
     * @return null|bool
     */
    public function getFilterPromotes()
    {
        return $this->container['filterPromotes'] ?? null;
    }

    /**
     * Sets filterPromotes.
     *
     * @param null|bool $filterPromotes Only use in combination with the `promote` consequence. When `true`, promoted results will be restricted to match the filters of the current search. When `false`, the promoted results will show up regardless of the filters.
     *
     * @return self
     */
    public function setFilterPromotes($filterPromotes)
    {
        $this->container['filterPromotes'] = $filterPromotes;

        return $this;
    }

    /**
     * Gets hide.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Recommend\ConsequenceHide[]
     */
    public function getHide()
    {
        return $this->container['hide'] ?? null;
    }

    /**
     * Sets hide.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Recommend\ConsequenceHide[] $hide Records to hide. By default, you can hide up to 50 records per rule.
     *
     * @return self
     */
    public function setHide($hide)
    {
        $this->container['hide'] = $hide;

        return $this;
    }

    /**
     * Gets userData.
     *
     * @return null|object
     */
    public function getUserData()
    {
        return $this->container['userData'] ?? null;
    }

    /**
     * Sets userData.
     *
     * @param null|object $userData Custom JSON object that will be appended to the userData array in the response. This object isn't interpreted by the API. It's limited to 1kB of minified JSON.
     *
     * @return self
     */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}
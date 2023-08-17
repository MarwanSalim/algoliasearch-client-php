<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Recommend;

/**
 * BaseRecommendRequest Class Doc Comment
 *
 * @category Class
 * @package Algolia\AlgoliaSearch
 */
class BaseRecommendRequest extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $modelTypes = [
        'indexName' => 'string',
        'threshold' => 'int',
        'maxRecommendations' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $modelFormats = [
        'indexName' => null,
        'threshold' => null,
        'maxRecommendations' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
    */
    protected static $attributeMap = [
        'indexName' => 'indexName',
        'threshold' => 'threshold',
        'maxRecommendations' => 'maxRecommendations',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @return array
      */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'indexName' => 'setIndexName',
        'threshold' => 'setThreshold',
        'maxRecommendations' => 'setMaxRecommendations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'indexName' => 'getIndexName',
        'threshold' => 'getThreshold',
        'maxRecommendations' => 'getMaxRecommendations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(array $data = null)
    {
        if (isset($data['indexName'])) {
            $this->container['indexName'] = $data['indexName'];
        }
        if (isset($data['threshold'])) {
            $this->container['threshold'] = $data['threshold'];
        }
        if (isset($data['maxRecommendations'])) {
            $this->container['maxRecommendations'] = $data['maxRecommendations'];
        }
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!isset($this->container['indexName']) || $this->container['indexName'] === null) {
            $invalidProperties[] = "'indexName' can't be null";
        }
        if (isset($this->container['threshold']) && ($this->container['threshold'] > 100)) {
            $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 100.";
        }

        if (isset($this->container['threshold']) && ($this->container['threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets indexName
     *
     * @return string
     */
    public function getIndexName()
    {
        return $this->container['indexName'] ?? null;
    }

    /**
     * Sets indexName
     *
     * @param string $indexName algolia index name
     *
     * @return self
     */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return int|null
     */
    public function getThreshold()
    {
        return $this->container['threshold'] ?? null;
    }

    /**
     * Sets threshold
     *
     * @param int|null $threshold Recommendations with a confidence score lower than `threshold` won't appear in results. > **Note**: Each recommendation has a confidence score of 0 to 100. The closer the score is to 100, the more relevant the recommendations are.
     *
     * @return self
     */
    public function setThreshold($threshold)
    {

        if (!is_null($threshold) && ($threshold > 100)) {
            throw new \InvalidArgumentException('invalid value for $threshold when calling BaseRecommendRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($threshold) && ($threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $threshold when calling BaseRecommendRequest., must be bigger than or equal to 0.');
        }

        $this->container['threshold'] = $threshold;

        return $this;
    }

    /**
     * Gets maxRecommendations
     *
     * @return int|null
     */
    public function getMaxRecommendations()
    {
        return $this->container['maxRecommendations'] ?? null;
    }

    /**
     * Sets maxRecommendations
     *
     * @param int|null $maxRecommendations Maximum number of recommendations to retrieve. If 0, all recommendations will be returned.
     *
     * @return self
     */
    public function setMaxRecommendations($maxRecommendations)
    {
        $this->container['maxRecommendations'] = $maxRecommendations;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
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
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}


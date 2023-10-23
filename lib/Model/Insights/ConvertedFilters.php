<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Insights;

/**
 * ConvertedFilters Class Doc Comment.
 *
 * @category Class
 */
class ConvertedFilters extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'eventName' => 'string',
        'eventType' => '\Algolia\AlgoliaSearch\Model\Insights\ConversionEvent',
        'index' => 'string',
        'filters' => 'string[]',
        'userToken' => 'string',
        'timestamp' => 'int',
        'authenticatedUserToken' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'eventName' => null,
        'eventType' => null,
        'index' => null,
        'filters' => null,
        'userToken' => null,
        'timestamp' => 'int64',
        'authenticatedUserToken' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'eventName' => 'eventName',
        'eventType' => 'eventType',
        'index' => 'index',
        'filters' => 'filters',
        'userToken' => 'userToken',
        'timestamp' => 'timestamp',
        'authenticatedUserToken' => 'authenticatedUserToken',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'eventName' => 'setEventName',
        'eventType' => 'setEventType',
        'index' => 'setIndex',
        'filters' => 'setFilters',
        'userToken' => 'setUserToken',
        'timestamp' => 'setTimestamp',
        'authenticatedUserToken' => 'setAuthenticatedUserToken',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'eventName' => 'getEventName',
        'eventType' => 'getEventType',
        'index' => 'getIndex',
        'filters' => 'getFilters',
        'userToken' => 'getUserToken',
        'timestamp' => 'getTimestamp',
        'authenticatedUserToken' => 'getAuthenticatedUserToken',
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
        if (isset($data['eventName'])) {
            $this->container['eventName'] = $data['eventName'];
        }
        if (isset($data['eventType'])) {
            $this->container['eventType'] = $data['eventType'];
        }
        if (isset($data['index'])) {
            $this->container['index'] = $data['index'];
        }
        if (isset($data['filters'])) {
            $this->container['filters'] = $data['filters'];
        }
        if (isset($data['userToken'])) {
            $this->container['userToken'] = $data['userToken'];
        }
        if (isset($data['timestamp'])) {
            $this->container['timestamp'] = $data['timestamp'];
        }
        if (isset($data['authenticatedUserToken'])) {
            $this->container['authenticatedUserToken'] = $data['authenticatedUserToken'];
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
        $invalidProperties = [];

        if (!isset($this->container['eventName']) || null === $this->container['eventName']) {
            $invalidProperties[] = "'eventName' can't be null";
        }
        if (mb_strlen($this->container['eventName']) > 64) {
            $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 64.";
        }

        if (mb_strlen($this->container['eventName']) < 1) {
            $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/[\\x20-\\x7E]{1,64}/', $this->container['eventName'])) {
            $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /[\\x20-\\x7E]{1,64}/.";
        }

        if (!isset($this->container['eventType']) || null === $this->container['eventType']) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if (!isset($this->container['index']) || null === $this->container['index']) {
            $invalidProperties[] = "'index' can't be null";
        }
        if (!isset($this->container['filters']) || null === $this->container['filters']) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if (count($this->container['filters']) > 20) {
            $invalidProperties[] = "invalid value for 'filters', number of items must be less than or equal to 20.";
        }

        if (count($this->container['filters']) < 1) {
            $invalidProperties[] = "invalid value for 'filters', number of items must be greater than or equal to 1.";
        }

        if (!isset($this->container['userToken']) || null === $this->container['userToken']) {
            $invalidProperties[] = "'userToken' can't be null";
        }
        if (mb_strlen($this->container['userToken']) > 129) {
            $invalidProperties[] = "invalid value for 'userToken', the character length must be smaller than or equal to 129.";
        }

        if (mb_strlen($this->container['userToken']) < 1) {
            $invalidProperties[] = "invalid value for 'userToken', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/[a-zA-Z0-9_=\\/+-]{1,129}/', $this->container['userToken'])) {
            $invalidProperties[] = "invalid value for 'userToken', must be conform to the pattern /[a-zA-Z0-9_=\\/+-]{1,129}/.";
        }

        return $invalidProperties;
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
     * Gets eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['eventName'] ?? null;
    }

    /**
     * Sets eventName.
     *
     * @param string $eventName Can contain up to 64 ASCII characters.   Consider naming events consistently—for example, by adopting Segment's [object-action](https://segment.com/academy/collecting-data/naming-conventions-for-clean-data/#the-object-action-framework) framework.
     *
     * @return self
     */
    public function setEventName($eventName)
    {
        if (mb_strlen($eventName) > 64) {
            throw new \InvalidArgumentException('invalid length for $eventName when calling ConvertedFilters., must be smaller than or equal to 64.');
        }
        if (mb_strlen($eventName) < 1) {
            throw new \InvalidArgumentException('invalid length for $eventName when calling ConvertedFilters., must be bigger than or equal to 1.');
        }
        if (!preg_match('/[\\x20-\\x7E]{1,64}/', $eventName)) {
            throw new \InvalidArgumentException("invalid value for {$eventName} when calling ConvertedFilters., must conform to the pattern /[\\x20-\\x7E]{1,64}/.");
        }

        $this->container['eventName'] = $eventName;

        return $this;
    }

    /**
     * Gets eventType.
     *
     * @return \Algolia\AlgoliaSearch\Model\Insights\ConversionEvent
     */
    public function getEventType()
    {
        return $this->container['eventType'] ?? null;
    }

    /**
     * Sets eventType.
     *
     * @param \Algolia\AlgoliaSearch\Model\Insights\ConversionEvent $eventType eventType
     *
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets index.
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->container['index'] ?? null;
    }

    /**
     * Sets index.
     *
     * @param string $index name of the Algolia index
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets filters.
     *
     * @return string[]
     */
    public function getFilters()
    {
        return $this->container['filters'] ?? null;
    }

    /**
     * Sets filters.
     *
     * @param string[] $filters Facet filters.  Each facet filter string must be URL-encoded, such as, `discount:10%25`.
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (count($filters) > 20) {
            throw new \InvalidArgumentException('invalid value for $filters when calling ConvertedFilters., number of items must be less than or equal to 20.');
        }
        if (count($filters) < 1) {
            throw new \InvalidArgumentException('invalid length for $filters when calling ConvertedFilters., number of items must be greater than or equal to 1.');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets userToken.
     *
     * @return string
     */
    public function getUserToken()
    {
        return $this->container['userToken'] ?? null;
    }

    /**
     * Sets userToken.
     *
     * @param string $userToken Anonymous or pseudonymous user identifier.   > **Note**: Never include personally identifiable information in user tokens.
     *
     * @return self
     */
    public function setUserToken($userToken)
    {
        if (mb_strlen($userToken) > 129) {
            throw new \InvalidArgumentException('invalid length for $userToken when calling ConvertedFilters., must be smaller than or equal to 129.');
        }
        if (mb_strlen($userToken) < 1) {
            throw new \InvalidArgumentException('invalid length for $userToken when calling ConvertedFilters., must be bigger than or equal to 1.');
        }
        if (!preg_match('/[a-zA-Z0-9_=\\/+-]{1,129}/', $userToken)) {
            throw new \InvalidArgumentException("invalid value for {$userToken} when calling ConvertedFilters., must conform to the pattern /[a-zA-Z0-9_=\\/+-]{1,129}/.");
        }

        $this->container['userToken'] = $userToken;

        return $this;
    }

    /**
     * Gets timestamp.
     *
     * @return null|int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'] ?? null;
    }

    /**
     * Sets timestamp.
     *
     * @param null|int $timestamp Time of the event in milliseconds in [Unix epoch time](https://wikipedia.org/wiki/Unix_time). By default, the Insights API uses the time it receives an event as its timestamp.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets authenticatedUserToken.
     *
     * @return null|string
     */
    public function getAuthenticatedUserToken()
    {
        return $this->container['authenticatedUserToken'] ?? null;
    }

    /**
     * Sets authenticatedUserToken.
     *
     * @param null|string $authenticatedUserToken user token for authenticated users
     *
     * @return self
     */
    public function setAuthenticatedUserToken($authenticatedUserToken)
    {
        $this->container['authenticatedUserToken'] = $authenticatedUserToken;

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

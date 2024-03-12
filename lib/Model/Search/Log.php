<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * Log Class Doc Comment.
 *
 * @category Class
 */
class Log extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'timestamp' => 'string',
        'method' => 'string',
        'answerCode' => 'string',
        'queryBody' => 'string',
        'answer' => 'string',
        'url' => 'string',
        'ip' => 'string',
        'queryHeaders' => 'string',
        'sha1' => 'string',
        'nbApiCalls' => 'string',
        'processingTimeMs' => 'string',
        'index' => 'string',
        'queryParams' => 'string',
        'queryNbHits' => 'string',
        'innerQueries' => '\Algolia\AlgoliaSearch\Model\Search\LogQuery[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'timestamp' => null,
        'method' => null,
        'answerCode' => null,
        'queryBody' => null,
        'answer' => null,
        'url' => 'uri',
        'ip' => 'ipv4',
        'queryHeaders' => null,
        'sha1' => null,
        'nbApiCalls' => null,
        'processingTimeMs' => null,
        'index' => null,
        'queryParams' => null,
        'queryNbHits' => null,
        'innerQueries' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'timestamp' => 'timestamp',
        'method' => 'method',
        'answerCode' => 'answer_code',
        'queryBody' => 'query_body',
        'answer' => 'answer',
        'url' => 'url',
        'ip' => 'ip',
        'queryHeaders' => 'query_headers',
        'sha1' => 'sha1',
        'nbApiCalls' => 'nb_api_calls',
        'processingTimeMs' => 'processing_time_ms',
        'index' => 'index',
        'queryParams' => 'query_params',
        'queryNbHits' => 'query_nb_hits',
        'innerQueries' => 'inner_queries',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'method' => 'setMethod',
        'answerCode' => 'setAnswerCode',
        'queryBody' => 'setQueryBody',
        'answer' => 'setAnswer',
        'url' => 'setUrl',
        'ip' => 'setIp',
        'queryHeaders' => 'setQueryHeaders',
        'sha1' => 'setSha1',
        'nbApiCalls' => 'setNbApiCalls',
        'processingTimeMs' => 'setProcessingTimeMs',
        'index' => 'setIndex',
        'queryParams' => 'setQueryParams',
        'queryNbHits' => 'setQueryNbHits',
        'innerQueries' => 'setInnerQueries',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'method' => 'getMethod',
        'answerCode' => 'getAnswerCode',
        'queryBody' => 'getQueryBody',
        'answer' => 'getAnswer',
        'url' => 'getUrl',
        'ip' => 'getIp',
        'queryHeaders' => 'getQueryHeaders',
        'sha1' => 'getSha1',
        'nbApiCalls' => 'getNbApiCalls',
        'processingTimeMs' => 'getProcessingTimeMs',
        'index' => 'getIndex',
        'queryParams' => 'getQueryParams',
        'queryNbHits' => 'getQueryNbHits',
        'innerQueries' => 'getInnerQueries',
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
        if (isset($data['timestamp'])) {
            $this->container['timestamp'] = $data['timestamp'];
        }
        if (isset($data['method'])) {
            $this->container['method'] = $data['method'];
        }
        if (isset($data['answerCode'])) {
            $this->container['answerCode'] = $data['answerCode'];
        }
        if (isset($data['queryBody'])) {
            $this->container['queryBody'] = $data['queryBody'];
        }
        if (isset($data['answer'])) {
            $this->container['answer'] = $data['answer'];
        }
        if (isset($data['url'])) {
            $this->container['url'] = $data['url'];
        }
        if (isset($data['ip'])) {
            $this->container['ip'] = $data['ip'];
        }
        if (isset($data['queryHeaders'])) {
            $this->container['queryHeaders'] = $data['queryHeaders'];
        }
        if (isset($data['sha1'])) {
            $this->container['sha1'] = $data['sha1'];
        }
        if (isset($data['nbApiCalls'])) {
            $this->container['nbApiCalls'] = $data['nbApiCalls'];
        }
        if (isset($data['processingTimeMs'])) {
            $this->container['processingTimeMs'] = $data['processingTimeMs'];
        }
        if (isset($data['index'])) {
            $this->container['index'] = $data['index'];
        }
        if (isset($data['queryParams'])) {
            $this->container['queryParams'] = $data['queryParams'];
        }
        if (isset($data['queryNbHits'])) {
            $this->container['queryNbHits'] = $data['queryNbHits'];
        }
        if (isset($data['innerQueries'])) {
            $this->container['innerQueries'] = $data['innerQueries'];
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

        if (!isset($this->container['timestamp']) || null === $this->container['timestamp']) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if (!isset($this->container['method']) || null === $this->container['method']) {
            $invalidProperties[] = "'method' can't be null";
        }
        if (!isset($this->container['answerCode']) || null === $this->container['answerCode']) {
            $invalidProperties[] = "'answerCode' can't be null";
        }
        if (!isset($this->container['queryBody']) || null === $this->container['queryBody']) {
            $invalidProperties[] = "'queryBody' can't be null";
        }
        if (mb_strlen($this->container['queryBody']) > 1000) {
            $invalidProperties[] = "invalid value for 'queryBody', the character length must be smaller than or equal to 1000.";
        }

        if (!isset($this->container['answer']) || null === $this->container['answer']) {
            $invalidProperties[] = "'answer' can't be null";
        }
        if (mb_strlen($this->container['answer']) > 1000) {
            $invalidProperties[] = "invalid value for 'answer', the character length must be smaller than or equal to 1000.";
        }

        if (!isset($this->container['url']) || null === $this->container['url']) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (!isset($this->container['ip']) || null === $this->container['ip']) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if (!isset($this->container['queryHeaders']) || null === $this->container['queryHeaders']) {
            $invalidProperties[] = "'queryHeaders' can't be null";
        }
        if (!isset($this->container['sha1']) || null === $this->container['sha1']) {
            $invalidProperties[] = "'sha1' can't be null";
        }
        if (!isset($this->container['nbApiCalls']) || null === $this->container['nbApiCalls']) {
            $invalidProperties[] = "'nbApiCalls' can't be null";
        }
        if (!isset($this->container['processingTimeMs']) || null === $this->container['processingTimeMs']) {
            $invalidProperties[] = "'processingTimeMs' can't be null";
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
     * Gets timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'] ?? null;
    }

    /**
     * Sets timestamp.
     *
     * @param string $timestamp timestamp of the API request in ISO 8601 format
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'] ?? null;
    }

    /**
     * Sets method.
     *
     * @param string $method HTTP method of the request
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets answerCode.
     *
     * @return string
     */
    public function getAnswerCode()
    {
        return $this->container['answerCode'] ?? null;
    }

    /**
     * Sets answerCode.
     *
     * @param string $answerCode HTTP status code of the response
     *
     * @return self
     */
    public function setAnswerCode($answerCode)
    {
        $this->container['answerCode'] = $answerCode;

        return $this;
    }

    /**
     * Gets queryBody.
     *
     * @return string
     */
    public function getQueryBody()
    {
        return $this->container['queryBody'] ?? null;
    }

    /**
     * Sets queryBody.
     *
     * @param string $queryBody request body
     *
     * @return self
     */
    public function setQueryBody($queryBody)
    {
        if (mb_strlen($queryBody) > 1000) {
            throw new \InvalidArgumentException('invalid length for $queryBody when calling Log., must be smaller than or equal to 1000.');
        }

        $this->container['queryBody'] = $queryBody;

        return $this;
    }

    /**
     * Gets answer.
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->container['answer'] ?? null;
    }

    /**
     * Sets answer.
     *
     * @param string $answer response body
     *
     * @return self
     */
    public function setAnswer($answer)
    {
        if (mb_strlen($answer) > 1000) {
            throw new \InvalidArgumentException('invalid length for $answer when calling Log., must be smaller than or equal to 1000.');
        }

        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'] ?? null;
    }

    /**
     * Sets url.
     *
     * @param string $url URL of the API endpoint
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets ip.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'] ?? null;
    }

    /**
     * Sets ip.
     *
     * @param string $ip IP address of the client that performed the request
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets queryHeaders.
     *
     * @return string
     */
    public function getQueryHeaders()
    {
        return $this->container['queryHeaders'] ?? null;
    }

    /**
     * Sets queryHeaders.
     *
     * @param string $queryHeaders request headers (API keys are obfuscated)
     *
     * @return self
     */
    public function setQueryHeaders($queryHeaders)
    {
        $this->container['queryHeaders'] = $queryHeaders;

        return $this;
    }

    /**
     * Gets sha1.
     *
     * @return string
     */
    public function getSha1()
    {
        return $this->container['sha1'] ?? null;
    }

    /**
     * Sets sha1.
     *
     * @param string $sha1 SHA1 signature of the log entry
     *
     * @return self
     */
    public function setSha1($sha1)
    {
        $this->container['sha1'] = $sha1;

        return $this;
    }

    /**
     * Gets nbApiCalls.
     *
     * @return string
     */
    public function getNbApiCalls()
    {
        return $this->container['nbApiCalls'] ?? null;
    }

    /**
     * Sets nbApiCalls.
     *
     * @param string $nbApiCalls number of API requests
     *
     * @return self
     */
    public function setNbApiCalls($nbApiCalls)
    {
        $this->container['nbApiCalls'] = $nbApiCalls;

        return $this;
    }

    /**
     * Gets processingTimeMs.
     *
     * @return string
     */
    public function getProcessingTimeMs()
    {
        return $this->container['processingTimeMs'] ?? null;
    }

    /**
     * Sets processingTimeMs.
     *
     * @param string $processingTimeMs Processing time for the query in milliseconds. This doesn't include latency due to the network.
     *
     * @return self
     */
    public function setProcessingTimeMs($processingTimeMs)
    {
        $this->container['processingTimeMs'] = $processingTimeMs;

        return $this;
    }

    /**
     * Gets index.
     *
     * @return null|string
     */
    public function getIndex()
    {
        return $this->container['index'] ?? null;
    }

    /**
     * Sets index.
     *
     * @param null|string $index index targeted by the query
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets queryParams.
     *
     * @return null|string
     */
    public function getQueryParams()
    {
        return $this->container['queryParams'] ?? null;
    }

    /**
     * Sets queryParams.
     *
     * @param null|string $queryParams query parameters sent with the request
     *
     * @return self
     */
    public function setQueryParams($queryParams)
    {
        $this->container['queryParams'] = $queryParams;

        return $this;
    }

    /**
     * Gets queryNbHits.
     *
     * @return null|string
     */
    public function getQueryNbHits()
    {
        return $this->container['queryNbHits'] ?? null;
    }

    /**
     * Sets queryNbHits.
     *
     * @param null|string $queryNbHits number of search results (hits) returned for the query
     *
     * @return self
     */
    public function setQueryNbHits($queryNbHits)
    {
        $this->container['queryNbHits'] = $queryNbHits;

        return $this;
    }

    /**
     * Gets innerQueries.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\LogQuery[]
     */
    public function getInnerQueries()
    {
        return $this->container['innerQueries'] ?? null;
    }

    /**
     * Sets innerQueries.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\LogQuery[] $innerQueries queries performed for the given request
     *
     * @return self
     */
    public function setInnerQueries($innerQueries)
    {
        $this->container['innerQueries'] = $innerQueries;

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

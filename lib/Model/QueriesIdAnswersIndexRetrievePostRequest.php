<?php
/**
 * QueriesIdAnswersIndexRetrievePostRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Aurabx\OrthancPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Orthanc API
 *
 * This is the full documentation of the [REST API](https://orthanc.uclouvain.be/book/users/rest.html) of Orthanc.<p>This reference is automatically generated from the source code of Orthanc. A [shorter cheat sheet](https://orthanc.uclouvain.be/book/users/rest-cheatsheet.html) is part of the Orthanc Book.<p>An earlier, manually crafted version from August 2019, is [still available](2019-08-orthanc-openapi.html), but is not up-to-date anymore ([source](https://groups.google.com/g/orthanc-users/c/NUiJTEICSl8/m/xKeqMrbqAAAJ)).
 *
 * The version of the OpenAPI document: 1.12.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurabx\OrthancPHP\Model;

use \ArrayAccess;
use \Aurabx\OrthancPHP\ObjectSerializer;

/**
 * QueriesIdAnswersIndexRetrievePostRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aurabx\OrthancPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QueriesIdAnswersIndexRetrievePostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_queries__id__answers__index__retrieve_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asynchronous' => 'bool',
        'full' => 'bool',
        'permissive' => 'bool',
        'priority' => 'float',
        'simplify' => 'bool',
        'synchronous' => 'bool',
        'targetAet' => 'string',
        'timeout' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asynchronous' => null,
        'full' => null,
        'permissive' => null,
        'priority' => null,
        'simplify' => null,
        'synchronous' => null,
        'targetAet' => null,
        'timeout' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asynchronous' => false,
        'full' => false,
        'permissive' => false,
        'priority' => false,
        'simplify' => false,
        'synchronous' => false,
        'targetAet' => false,
        'timeout' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asynchronous' => 'Asynchronous',
        'full' => 'Full',
        'permissive' => 'Permissive',
        'priority' => 'Priority',
        'simplify' => 'Simplify',
        'synchronous' => 'Synchronous',
        'targetAet' => 'TargetAet',
        'timeout' => 'Timeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asynchronous' => 'setAsynchronous',
        'full' => 'setFull',
        'permissive' => 'setPermissive',
        'priority' => 'setPriority',
        'simplify' => 'setSimplify',
        'synchronous' => 'setSynchronous',
        'targetAet' => 'setTargetAet',
        'timeout' => 'setTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asynchronous' => 'getAsynchronous',
        'full' => 'getFull',
        'permissive' => 'getPermissive',
        'priority' => 'getPriority',
        'simplify' => 'getSimplify',
        'synchronous' => 'getSynchronous',
        'targetAet' => 'getTargetAet',
        'timeout' => 'getTimeout'
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
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
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
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('asynchronous', $data ?? [], null);
        $this->setIfExists('full', $data ?? [], null);
        $this->setIfExists('permissive', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('simplify', $data ?? [], null);
        $this->setIfExists('synchronous', $data ?? [], null);
        $this->setIfExists('targetAet', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets asynchronous
     *
     * @return bool|null
     */
    public function getAsynchronous()
    {
        return $this->container['asynchronous'];
    }

    /**
     * Sets asynchronous
     *
     * @param bool|null $asynchronous If `true`, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible.
     *
     * @return self
     */
    public function setAsynchronous($asynchronous)
    {
        if (is_null($asynchronous)) {
            throw new \InvalidArgumentException('non-nullable asynchronous cannot be null');
        }
        $this->container['asynchronous'] = $asynchronous;

        return $this;
    }

    /**
     * Gets full
     *
     * @return bool|null
     */
    public function getFull()
    {
        return $this->container['full'];
    }

    /**
     * Sets full
     *
     * @param bool|null $full If set to `true`, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
     *
     * @return self
     */
    public function setFull($full)
    {
        if (is_null($full)) {
            throw new \InvalidArgumentException('non-nullable full cannot be null');
        }
        $this->container['full'] = $full;

        return $this;
    }

    /**
     * Gets permissive
     *
     * @return bool|null
     */
    public function getPermissive()
    {
        return $this->container['permissive'];
    }

    /**
     * Sets permissive
     *
     * @param bool|null $permissive If `true`, ignore errors during the individual steps of the job.
     *
     * @return self
     */
    public function setPermissive($permissive)
    {
        if (is_null($permissive)) {
            throw new \InvalidArgumentException('non-nullable permissive cannot be null');
        }
        $this->container['permissive'] = $permissive;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return float|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float|null $priority In asynchronous mode, the priority of the job. The lower the value, the higher the priority.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets simplify
     *
     * @return bool|null
     */
    public function getSimplify()
    {
        return $this->container['simplify'];
    }

    /**
     * Sets simplify
     *
     * @param bool|null $simplify If set to `true`, report the DICOM tags in human-readable format (using the symbolic name of the tags)
     *
     * @return self
     */
    public function setSimplify($simplify)
    {
        if (is_null($simplify)) {
            throw new \InvalidArgumentException('non-nullable simplify cannot be null');
        }
        $this->container['simplify'] = $simplify;

        return $this;
    }

    /**
     * Gets synchronous
     *
     * @return bool|null
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     *
     * @param bool|null $synchronous If `true`, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts.
     *
     * @return self
     */
    public function setSynchronous($synchronous)
    {
        if (is_null($synchronous)) {
            throw new \InvalidArgumentException('non-nullable synchronous cannot be null');
        }
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets targetAet
     *
     * @return string|null
     */
    public function getTargetAet()
    {
        return $this->container['targetAet'];
    }

    /**
     * Sets targetAet
     *
     * @param string|null $targetAet AET of the target modality. By default, the AET of Orthanc is used, as defined in the `DicomAet` configuration option.
     *
     * @return self
     */
    public function setTargetAet($targetAet)
    {
        if (is_null($targetAet)) {
            throw new \InvalidArgumentException('non-nullable targetAet cannot be null');
        }
        $this->container['targetAet'] = $targetAet;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return float|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param float|null $timeout Timeout for the C-MOVE command, in seconds
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        if (is_null($timeout)) {
            throw new \InvalidArgumentException('non-nullable timeout cannot be null');
        }
        $this->container['timeout'] = $timeout;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



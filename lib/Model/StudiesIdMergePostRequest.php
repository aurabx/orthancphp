<?php
/**
 * StudiesIdMergePostRequest
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
 * StudiesIdMergePostRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Aurabx\OrthancPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StudiesIdMergePostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_studies__id__merge_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asynchronous' => 'bool',
        'keepSource' => 'bool',
        'permissive' => 'bool',
        'priority' => 'float',
        'resources' => 'string[]',
        'synchronous' => 'bool'
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
        'keepSource' => null,
        'permissive' => null,
        'priority' => null,
        'resources' => null,
        'synchronous' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asynchronous' => false,
        'keepSource' => false,
        'permissive' => false,
        'priority' => false,
        'resources' => false,
        'synchronous' => false
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
        'keepSource' => 'KeepSource',
        'permissive' => 'Permissive',
        'priority' => 'Priority',
        'resources' => 'Resources',
        'synchronous' => 'Synchronous'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asynchronous' => 'setAsynchronous',
        'keepSource' => 'setKeepSource',
        'permissive' => 'setPermissive',
        'priority' => 'setPriority',
        'resources' => 'setResources',
        'synchronous' => 'setSynchronous'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asynchronous' => 'getAsynchronous',
        'keepSource' => 'getKeepSource',
        'permissive' => 'getPermissive',
        'priority' => 'getPriority',
        'resources' => 'getResources',
        'synchronous' => 'getSynchronous'
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
        $this->setIfExists('keepSource', $data ?? [], null);
        $this->setIfExists('permissive', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('synchronous', $data ?? [], null);
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
     * Gets keepSource
     *
     * @return bool|null
     */
    public function getKeepSource()
    {
        return $this->container['keepSource'];
    }

    /**
     * Sets keepSource
     *
     * @param bool|null $keepSource If set to `true`, instructs Orthanc to keep a copy of the original resources in their source study. By default, the original resources are deleted from Orthanc.
     *
     * @return self
     */
    public function setKeepSource($keepSource)
    {
        if (is_null($keepSource)) {
            throw new \InvalidArgumentException('non-nullable keepSource cannot be null');
        }
        $this->container['keepSource'] = $keepSource;

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
     * Gets resources
     *
     * @return string[]|null
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[]|null $resources The list of DICOM resources (studies, series, and/or instances) to be merged into the study of interest (mandatory option)
     *
     * @return self
     */
    public function setResources($resources)
    {
        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }
        $this->container['resources'] = $resources;

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



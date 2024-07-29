<?php
/**
 * EnvelopeApprovalPageDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DocStudio Api Documentation
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: R110.5
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocStudio\Client\Model;

use \ArrayAccess;
use \DocStudio\Client\ObjectSerializer;

/**
 * EnvelopeApprovalPageDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnvelopeApprovalPageDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnvelopeApprovalPageDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_elements' => 'int',
        'size_requested' => 'int',
        'number_of_elements' => 'int',
        'data' => '\DocStudio\Client\Model\EnvApprovalSearchResultDTO[]',
        'initiators' => '\DocStudio\Client\Model\EnvelopeSenderDTO[]',
        'templates' => '\DocStudio\Client\Model\EnvelopeTemplateInfoDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_elements' => 'int64',
        'size_requested' => 'int64',
        'number_of_elements' => 'int64',
        'data' => null,
        'initiators' => null,
        'templates' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_elements' => false,
        'size_requested' => false,
        'number_of_elements' => false,
        'data' => false,
        'initiators' => false,
        'templates' => false
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
        'total_elements' => 'totalElements',
        'size_requested' => 'sizeRequested',
        'number_of_elements' => 'numberOfElements',
        'data' => 'data',
        'initiators' => 'initiators',
        'templates' => 'templates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_elements' => 'setTotalElements',
        'size_requested' => 'setSizeRequested',
        'number_of_elements' => 'setNumberOfElements',
        'data' => 'setData',
        'initiators' => 'setInitiators',
        'templates' => 'setTemplates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_elements' => 'getTotalElements',
        'size_requested' => 'getSizeRequested',
        'number_of_elements' => 'getNumberOfElements',
        'data' => 'getData',
        'initiators' => 'getInitiators',
        'templates' => 'getTemplates'
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
        $this->setIfExists('total_elements', $data ?? [], null);
        $this->setIfExists('size_requested', $data ?? [], null);
        $this->setIfExists('number_of_elements', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('initiators', $data ?? [], null);
        $this->setIfExists('templates', $data ?? [], null);
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
     * Gets total_elements
     *
     * @return int|null
     */
    public function getTotalElements()
    {
        return $this->container['total_elements'];
    }

    /**
     * Sets total_elements
     *
     * @param int|null $total_elements Total elements by request
     *
     * @return self
     */
    public function setTotalElements($total_elements)
    {
        if (is_null($total_elements)) {
            throw new \InvalidArgumentException('non-nullable total_elements cannot be null');
        }
        $this->container['total_elements'] = $total_elements;

        return $this;
    }

    /**
     * Gets size_requested
     *
     * @return int|null
     */
    public function getSizeRequested()
    {
        return $this->container['size_requested'];
    }

    /**
     * Sets size_requested
     *
     * @param int|null $size_requested Requested size
     *
     * @return self
     */
    public function setSizeRequested($size_requested)
    {
        if (is_null($size_requested)) {
            throw new \InvalidArgumentException('non-nullable size_requested cannot be null');
        }
        $this->container['size_requested'] = $size_requested;

        return $this;
    }

    /**
     * Gets number_of_elements
     *
     * @return int|null
     */
    public function getNumberOfElements()
    {
        return $this->container['number_of_elements'];
    }

    /**
     * Sets number_of_elements
     *
     * @param int|null $number_of_elements Fetched records count
     *
     * @return self
     */
    public function setNumberOfElements($number_of_elements)
    {
        if (is_null($number_of_elements)) {
            throw new \InvalidArgumentException('non-nullable number_of_elements cannot be null');
        }
        $this->container['number_of_elements'] = $number_of_elements;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \DocStudio\Client\Model\EnvApprovalSearchResultDTO[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \DocStudio\Client\Model\EnvApprovalSearchResultDTO[]|null $data Data records
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets initiators
     *
     * @return \DocStudio\Client\Model\EnvelopeSenderDTO[]|null
     */
    public function getInitiators()
    {
        return $this->container['initiators'];
    }

    /**
     * Sets initiators
     *
     * @param \DocStudio\Client\Model\EnvelopeSenderDTO[]|null $initiators Approval initiators
     *
     * @return self
     */
    public function setInitiators($initiators)
    {
        if (is_null($initiators)) {
            throw new \InvalidArgumentException('non-nullable initiators cannot be null');
        }


        $this->container['initiators'] = $initiators;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \DocStudio\Client\Model\EnvelopeTemplateInfoDTO[]|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \DocStudio\Client\Model\EnvelopeTemplateInfoDTO[]|null $templates Templates
     *
     * @return self
     */
    public function setTemplates($templates)
    {
        if (is_null($templates)) {
            throw new \InvalidArgumentException('non-nullable templates cannot be null');
        }


        $this->container['templates'] = $templates;

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



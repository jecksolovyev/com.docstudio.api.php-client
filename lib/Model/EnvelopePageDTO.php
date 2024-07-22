<?php
/**
 * EnvelopePageDTO
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
 * The version of the OpenAPI document: R110.4
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
 * EnvelopePageDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnvelopePageDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnvelopePageDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_elements' => 'int',
        'size_requested' => 'int',
        'number_of_elements' => 'int',
        'data' => '\DocStudio\Client\Model\EnvelopeToMailboxDTO[]',
        'search_fields' => '\DocStudio\Client\Model\EnvelopeSearchField[]',
        'columns' => '\DocStudio\Client\Model\EnvelopeViewColumn[]',
        'senders' => '\DocStudio\Client\Model\EnvelopeSenderDTO[]',
        'templates' => '\DocStudio\Client\Model\EnvelopeTemplateInfoDTO[]',
        'senders_info' => '\DocStudio\Client\Model\EnvelopePageDTO',
        'templates_info' => '\DocStudio\Client\Model\EnvelopePageDTO'
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
        'search_fields' => null,
        'columns' => null,
        'senders' => null,
        'templates' => null,
        'senders_info' => null,
        'templates_info' => null
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
        'search_fields' => false,
        'columns' => false,
        'senders' => false,
        'templates' => false,
        'senders_info' => false,
        'templates_info' => false
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
        'search_fields' => 'searchFields',
        'columns' => 'columns',
        'senders' => 'senders',
        'templates' => 'templates',
        'senders_info' => 'sendersInfo',
        'templates_info' => 'templatesInfo'
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
        'search_fields' => 'setSearchFields',
        'columns' => 'setColumns',
        'senders' => 'setSenders',
        'templates' => 'setTemplates',
        'senders_info' => 'setSendersInfo',
        'templates_info' => 'setTemplatesInfo'
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
        'search_fields' => 'getSearchFields',
        'columns' => 'getColumns',
        'senders' => 'getSenders',
        'templates' => 'getTemplates',
        'senders_info' => 'getSendersInfo',
        'templates_info' => 'getTemplatesInfo'
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
        $this->setIfExists('search_fields', $data ?? [], null);
        $this->setIfExists('columns', $data ?? [], null);
        $this->setIfExists('senders', $data ?? [], null);
        $this->setIfExists('templates', $data ?? [], null);
        $this->setIfExists('senders_info', $data ?? [], null);
        $this->setIfExists('templates_info', $data ?? [], null);
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
     * @return \DocStudio\Client\Model\EnvelopeToMailboxDTO[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \DocStudio\Client\Model\EnvelopeToMailboxDTO[]|null $data Data records
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
     * Gets search_fields
     *
     * @return \DocStudio\Client\Model\EnvelopeSearchField[]|null
     */
    public function getSearchFields()
    {
        return $this->container['search_fields'];
    }

    /**
     * Sets search_fields
     *
     * @param \DocStudio\Client\Model\EnvelopeSearchField[]|null $search_fields Search fields
     *
     * @return self
     */
    public function setSearchFields($search_fields)
    {
        if (is_null($search_fields)) {
            throw new \InvalidArgumentException('non-nullable search_fields cannot be null');
        }
        $this->container['search_fields'] = $search_fields;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return \DocStudio\Client\Model\EnvelopeViewColumn[]|null
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param \DocStudio\Client\Model\EnvelopeViewColumn[]|null $columns Saved columns to display
     *
     * @return self
     */
    public function setColumns($columns)
    {
        if (is_null($columns)) {
            throw new \InvalidArgumentException('non-nullable columns cannot be null');
        }
        $this->container['columns'] = $columns;

        return $this;
    }

    /**
     * Gets senders
     *
     * @return \DocStudio\Client\Model\EnvelopeSenderDTO[]|null
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \DocStudio\Client\Model\EnvelopeSenderDTO[]|null $senders Senders
     *
     * @return self
     */
    public function setSenders($senders)
    {
        if (is_null($senders)) {
            throw new \InvalidArgumentException('non-nullable senders cannot be null');
        }


        $this->container['senders'] = $senders;

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
     * Gets senders_info
     *
     * @return \DocStudio\Client\Model\EnvelopePageDTO|null
     */
    public function getSendersInfo()
    {
        return $this->container['senders_info'];
    }

    /**
     * Sets senders_info
     *
     * @param \DocStudio\Client\Model\EnvelopePageDTO|null $senders_info senders_info
     *
     * @return self
     */
    public function setSendersInfo($senders_info)
    {
        if (is_null($senders_info)) {
            throw new \InvalidArgumentException('non-nullable senders_info cannot be null');
        }
        $this->container['senders_info'] = $senders_info;

        return $this;
    }

    /**
     * Gets templates_info
     *
     * @return \DocStudio\Client\Model\EnvelopePageDTO|null
     */
    public function getTemplatesInfo()
    {
        return $this->container['templates_info'];
    }

    /**
     * Sets templates_info
     *
     * @param \DocStudio\Client\Model\EnvelopePageDTO|null $templates_info templates_info
     *
     * @return self
     */
    public function setTemplatesInfo($templates_info)
    {
        if (is_null($templates_info)) {
            throw new \InvalidArgumentException('non-nullable templates_info cannot be null');
        }
        $this->container['templates_info'] = $templates_info;

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



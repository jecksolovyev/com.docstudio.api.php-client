<?php
/**
 * ActivityLogRecordDTO
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
 * ActivityLogRecordDTO Class Doc Comment
 *
 * @category Class
 * @description Data records
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ActivityLogRecordDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityLogRecordDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mailbox_uuid' => 'string',
        'mailbox_name' => 'string',
        'action' => '\DocStudio\Client\Model\ActivityLogAction',
        'object_name' => 'string',
        'object_type' => '\DocStudio\Client\Model\ActivityLogObjectType',
        'object_id' => 'string',
        'operator_id' => 'string',
        'operator_name' => 'string',
        'timestamp' => '\DateTime',
        'source' => '\DocStudio\Client\Model\OperationSource',
        'ip' => 'string',
        'browser' => 'string',
        'os' => 'string',
        'error_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mailbox_uuid' => 'uuid',
        'mailbox_name' => null,
        'action' => null,
        'object_name' => null,
        'object_type' => null,
        'object_id' => 'uuid',
        'operator_id' => 'uuid',
        'operator_name' => null,
        'timestamp' => 'date-time',
        'source' => null,
        'ip' => null,
        'browser' => null,
        'os' => null,
        'error_code' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mailbox_uuid' => false,
        'mailbox_name' => false,
        'action' => false,
        'object_name' => false,
        'object_type' => false,
        'object_id' => false,
        'operator_id' => false,
        'operator_name' => false,
        'timestamp' => false,
        'source' => false,
        'ip' => false,
        'browser' => false,
        'os' => false,
        'error_code' => false
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
        'mailbox_uuid' => 'mailboxUuid',
        'mailbox_name' => 'mailboxName',
        'action' => 'action',
        'object_name' => 'objectName',
        'object_type' => 'objectType',
        'object_id' => 'objectId',
        'operator_id' => 'operatorId',
        'operator_name' => 'operatorName',
        'timestamp' => 'timestamp',
        'source' => 'source',
        'ip' => 'ip',
        'browser' => 'browser',
        'os' => 'os',
        'error_code' => 'errorCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailbox_uuid' => 'setMailboxUuid',
        'mailbox_name' => 'setMailboxName',
        'action' => 'setAction',
        'object_name' => 'setObjectName',
        'object_type' => 'setObjectType',
        'object_id' => 'setObjectId',
        'operator_id' => 'setOperatorId',
        'operator_name' => 'setOperatorName',
        'timestamp' => 'setTimestamp',
        'source' => 'setSource',
        'ip' => 'setIp',
        'browser' => 'setBrowser',
        'os' => 'setOs',
        'error_code' => 'setErrorCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailbox_uuid' => 'getMailboxUuid',
        'mailbox_name' => 'getMailboxName',
        'action' => 'getAction',
        'object_name' => 'getObjectName',
        'object_type' => 'getObjectType',
        'object_id' => 'getObjectId',
        'operator_id' => 'getOperatorId',
        'operator_name' => 'getOperatorName',
        'timestamp' => 'getTimestamp',
        'source' => 'getSource',
        'ip' => 'getIp',
        'browser' => 'getBrowser',
        'os' => 'getOs',
        'error_code' => 'getErrorCode'
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
        $this->setIfExists('mailbox_uuid', $data ?? [], null);
        $this->setIfExists('mailbox_name', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('object_name', $data ?? [], null);
        $this->setIfExists('object_type', $data ?? [], null);
        $this->setIfExists('object_id', $data ?? [], null);
        $this->setIfExists('operator_id', $data ?? [], null);
        $this->setIfExists('operator_name', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('browser', $data ?? [], null);
        $this->setIfExists('os', $data ?? [], null);
        $this->setIfExists('error_code', $data ?? [], null);
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
     * Gets mailbox_uuid
     *
     * @return string|null
     */
    public function getMailboxUuid()
    {
        return $this->container['mailbox_uuid'];
    }

    /**
     * Sets mailbox_uuid
     *
     * @param string|null $mailbox_uuid UUID of mailbox
     *
     * @return self
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        if (is_null($mailbox_uuid)) {
            throw new \InvalidArgumentException('non-nullable mailbox_uuid cannot be null');
        }
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets mailbox_name
     *
     * @return string|null
     */
    public function getMailboxName()
    {
        return $this->container['mailbox_name'];
    }

    /**
     * Sets mailbox_name
     *
     * @param string|null $mailbox_name Name of mailbox
     *
     * @return self
     */
    public function setMailboxName($mailbox_name)
    {
        if (is_null($mailbox_name)) {
            throw new \InvalidArgumentException('non-nullable mailbox_name cannot be null');
        }
        $this->container['mailbox_name'] = $mailbox_name;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \DocStudio\Client\Model\ActivityLogAction|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \DocStudio\Client\Model\ActivityLogAction|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets object_name
     *
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->container['object_name'];
    }

    /**
     * Sets object_name
     *
     * @param string|null $object_name Object name
     *
     * @return self
     */
    public function setObjectName($object_name)
    {
        if (is_null($object_name)) {
            throw new \InvalidArgumentException('non-nullable object_name cannot be null');
        }
        $this->container['object_name'] = $object_name;

        return $this;
    }

    /**
     * Gets object_type
     *
     * @return \DocStudio\Client\Model\ActivityLogObjectType|null
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param \DocStudio\Client\Model\ActivityLogObjectType|null $object_type object_type
     *
     * @return self
     */
    public function setObjectType($object_type)
    {
        if (is_null($object_type)) {
            throw new \InvalidArgumentException('non-nullable object_type cannot be null');
        }
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string|null $object_id Object UUID
     *
     * @return self
     */
    public function setObjectId($object_id)
    {
        if (is_null($object_id)) {
            throw new \InvalidArgumentException('non-nullable object_id cannot be null');
        }
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets operator_id
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param string|null $operator_id Operator UUID
     *
     * @return self
     */
    public function setOperatorId($operator_id)
    {
        if (is_null($operator_id)) {
            throw new \InvalidArgumentException('non-nullable operator_id cannot be null');
        }
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets operator_name
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     *
     * @param string|null $operator_name Operator name
     *
     * @return self
     */
    public function setOperatorName($operator_name)
    {
        if (is_null($operator_name)) {
            throw new \InvalidArgumentException('non-nullable operator_name cannot be null');
        }
        $this->container['operator_name'] = $operator_name;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Action timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \DocStudio\Client\Model\OperationSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \DocStudio\Client\Model\OperationSource|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip IP address
     *
     * @return self
     */
    public function setIp($ip)
    {
        if (is_null($ip)) {
            throw new \InvalidArgumentException('non-nullable ip cannot be null');
        }
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets browser
     *
     * @return string|null
     */
    public function getBrowser()
    {
        return $this->container['browser'];
    }

    /**
     * Sets browser
     *
     * @param string|null $browser Browser
     *
     * @return self
     */
    public function setBrowser($browser)
    {
        if (is_null($browser)) {
            throw new \InvalidArgumentException('non-nullable browser cannot be null');
        }
        $this->container['browser'] = $browser;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string|null $os Operation System
     *
     * @return self
     */
    public function setOs($os)
    {
        if (is_null($os)) {
            throw new \InvalidArgumentException('non-nullable os cannot be null');
        }
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param int|null $error_code Error code
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        if (is_null($error_code)) {
            throw new \InvalidArgumentException('non-nullable error_code cannot be null');
        }
        $this->container['error_code'] = $error_code;

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



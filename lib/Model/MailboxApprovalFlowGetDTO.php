<?php
/**
 * MailboxApprovalFlowGetDTO
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
 * The version of the OpenAPI document: R125.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * MailboxApprovalFlowGetDTO Class Doc Comment
 *
 * @category Class
 * @description Data records
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MailboxApprovalFlowGetDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MailboxApprovalFlowGetDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shared_for_account' => 'bool',
        'shared_for_mailboxes' => '\DocStudio\Client\Model\MailboxNameUuidDTO[]',
        'name' => 'string',
        'flow_type' => 'string',
        'approvers' => '\DocStudio\Client\Model\EnvelopeApproverGetDTO[]',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shared_for_account' => null,
        'shared_for_mailboxes' => null,
        'name' => null,
        'flow_type' => null,
        'approvers' => null,
        'uuid' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shared_for_account' => false,
        'shared_for_mailboxes' => false,
        'name' => false,
        'flow_type' => false,
        'approvers' => false,
        'uuid' => false
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
        'shared_for_account' => 'sharedForAccount',
        'shared_for_mailboxes' => 'sharedForMailboxes',
        'name' => 'name',
        'flow_type' => 'flowType',
        'approvers' => 'approvers',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shared_for_account' => 'setSharedForAccount',
        'shared_for_mailboxes' => 'setSharedForMailboxes',
        'name' => 'setName',
        'flow_type' => 'setFlowType',
        'approvers' => 'setApprovers',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shared_for_account' => 'getSharedForAccount',
        'shared_for_mailboxes' => 'getSharedForMailboxes',
        'name' => 'getName',
        'flow_type' => 'getFlowType',
        'approvers' => 'getApprovers',
        'uuid' => 'getUuid'
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

    public const FLOW_TYPE_AUTO = 'auto';
    public const FLOW_TYPE_MANUAL = 'manual';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlowTypeAllowableValues()
    {
        return [
            self::FLOW_TYPE_AUTO,
            self::FLOW_TYPE_MANUAL,
        ];
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('shared_for_account', $data ?? [], null);
        $this->setIfExists('shared_for_mailboxes', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('flow_type', $data ?? [], null);
        $this->setIfExists('approvers', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['flow_type'] === null) {
            $invalidProperties[] = "'flow_type' can't be null";
        }
        $allowedValues = $this->getFlowTypeAllowableValues();
        if (!is_null($this->container['flow_type']) && !in_array($this->container['flow_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'flow_type', must be one of '%s'",
                $this->container['flow_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['approvers'] === null) {
            $invalidProperties[] = "'approvers' can't be null";
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
     * Gets shared_for_account
     *
     * @return bool|null
     */
    public function getSharedForAccount()
    {
        return $this->container['shared_for_account'];
    }

    /**
     * Sets shared_for_account
     *
     * @param bool|null $shared_for_account shared_for_account
     *
     * @return self
     */
    public function setSharedForAccount($shared_for_account)
    {
        if (is_null($shared_for_account)) {
            throw new \InvalidArgumentException('non-nullable shared_for_account cannot be null');
        }
        $this->container['shared_for_account'] = $shared_for_account;

        return $this;
    }

    /**
     * Gets shared_for_mailboxes
     *
     * @return \DocStudio\Client\Model\MailboxNameUuidDTO[]|null
     */
    public function getSharedForMailboxes()
    {
        return $this->container['shared_for_mailboxes'];
    }

    /**
     * Sets shared_for_mailboxes
     *
     * @param \DocStudio\Client\Model\MailboxNameUuidDTO[]|null $shared_for_mailboxes shared_for_mailboxes
     *
     * @return self
     */
    public function setSharedForMailboxes($shared_for_mailboxes)
    {
        if (is_null($shared_for_mailboxes)) {
            throw new \InvalidArgumentException('non-nullable shared_for_mailboxes cannot be null');
        }


        $this->container['shared_for_mailboxes'] = $shared_for_mailboxes;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets flow_type
     *
     * @return string
     */
    public function getFlowType()
    {
        return $this->container['flow_type'];
    }

    /**
     * Sets flow_type
     *
     * @param string $flow_type flow_type
     *
     * @return self
     */
    public function setFlowType($flow_type)
    {
        if (is_null($flow_type)) {
            throw new \InvalidArgumentException('non-nullable flow_type cannot be null');
        }
        $allowedValues = $this->getFlowTypeAllowableValues();
        if (!in_array($flow_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'flow_type', must be one of '%s'",
                    $flow_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flow_type'] = $flow_type;

        return $this;
    }

    /**
     * Gets approvers
     *
     * @return \DocStudio\Client\Model\EnvelopeApproverGetDTO[]
     */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
     * Sets approvers
     *
     * @param \DocStudio\Client\Model\EnvelopeApproverGetDTO[] $approvers approvers
     *
     * @return self
     */
    public function setApprovers($approvers)
    {
        if (is_null($approvers)) {
            throw new \InvalidArgumentException('non-nullable approvers cannot be null');
        }
        $this->container['approvers'] = $approvers;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

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



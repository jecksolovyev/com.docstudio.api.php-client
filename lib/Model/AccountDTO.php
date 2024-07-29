<?php
/**
 * AccountDTO
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
 * AccountDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'name' => 'string',
        'inn' => 'string',
        'created_at' => '\DateTime',
        'modified_at' => '\DateTime',
        'mailboxes' => '\DocStudio\Client\Model\MailboxSimpleDTO[]',
        'users' => '\DocStudio\Client\Model\AccountUserDTO[]',
        'logo' => 'string',
        'brand' => 'string',
        'currency' => 'string',
        'timezone' => 'string',
        'allow_create_personal_mailbox_with_role' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'name' => null,
        'inn' => null,
        'created_at' => 'date-time',
        'modified_at' => 'date-time',
        'mailboxes' => null,
        'users' => null,
        'logo' => null,
        'brand' => null,
        'currency' => null,
        'timezone' => null,
        'allow_create_personal_mailbox_with_role' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uuid' => false,
        'name' => false,
        'inn' => false,
        'created_at' => false,
        'modified_at' => false,
        'mailboxes' => false,
        'users' => false,
        'logo' => false,
        'brand' => false,
        'currency' => false,
        'timezone' => false,
        'allow_create_personal_mailbox_with_role' => false
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
        'uuid' => 'uuid',
        'name' => 'name',
        'inn' => 'inn',
        'created_at' => 'createdAt',
        'modified_at' => 'modifiedAt',
        'mailboxes' => 'mailboxes',
        'users' => 'users',
        'logo' => 'logo',
        'brand' => 'brand',
        'currency' => 'currency',
        'timezone' => 'timezone',
        'allow_create_personal_mailbox_with_role' => 'allowCreatePersonalMailboxWithRole'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'inn' => 'setInn',
        'created_at' => 'setCreatedAt',
        'modified_at' => 'setModifiedAt',
        'mailboxes' => 'setMailboxes',
        'users' => 'setUsers',
        'logo' => 'setLogo',
        'brand' => 'setBrand',
        'currency' => 'setCurrency',
        'timezone' => 'setTimezone',
        'allow_create_personal_mailbox_with_role' => 'setAllowCreatePersonalMailboxWithRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'inn' => 'getInn',
        'created_at' => 'getCreatedAt',
        'modified_at' => 'getModifiedAt',
        'mailboxes' => 'getMailboxes',
        'users' => 'getUsers',
        'logo' => 'getLogo',
        'brand' => 'getBrand',
        'currency' => 'getCurrency',
        'timezone' => 'getTimezone',
        'allow_create_personal_mailbox_with_role' => 'getAllowCreatePersonalMailboxWithRole'
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
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('inn', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('modified_at', $data ?? [], null);
        $this->setIfExists('mailboxes', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('allow_create_personal_mailbox_with_role', $data ?? [], null);
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
        if ((mb_strlen($this->container['name']) > 256)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['inn']) && (mb_strlen($this->container['inn']) > 128)) {
            $invalidProperties[] = "invalid value for 'inn', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['inn']) && (mb_strlen($this->container['inn']) < 8)) {
            $invalidProperties[] = "invalid value for 'inn', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 20)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 0)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) > 40)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) < 0)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 0.";
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
     * @param string|null $uuid Account UUID
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
     * @param string $name Account Name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 256)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AccountDTO., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AccountDTO., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets inn
     *
     * @return string|null
     */
    public function getInn()
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     *
     * @param string|null $inn Account TAX number
     *
     * @return self
     */
    public function setInn($inn)
    {
        if (is_null($inn)) {
            throw new \InvalidArgumentException('non-nullable inn cannot be null');
        }
        if ((mb_strlen($inn) > 128)) {
            throw new \InvalidArgumentException('invalid length for $inn when calling AccountDTO., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($inn) < 8)) {
            throw new \InvalidArgumentException('invalid length for $inn when calling AccountDTO., must be bigger than or equal to 8.');
        }

        $this->container['inn'] = $inn;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Account creation date
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime|null
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime|null $modified_at Account last modification date
     *
     * @return self
     */
    public function setModifiedAt($modified_at)
    {
        if (is_null($modified_at)) {
            throw new \InvalidArgumentException('non-nullable modified_at cannot be null');
        }
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets mailboxes
     *
     * @return \DocStudio\Client\Model\MailboxSimpleDTO[]|null
     */
    public function getMailboxes()
    {
        return $this->container['mailboxes'];
    }

    /**
     * Sets mailboxes
     *
     * @param \DocStudio\Client\Model\MailboxSimpleDTO[]|null $mailboxes mailboxes
     *
     * @return self
     */
    public function setMailboxes($mailboxes)
    {
        if (is_null($mailboxes)) {
            throw new \InvalidArgumentException('non-nullable mailboxes cannot be null');
        }
        $this->container['mailboxes'] = $mailboxes;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \DocStudio\Client\Model\AccountUserDTO[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \DocStudio\Client\Model\AccountUserDTO[]|null $users users
     *
     * @return self
     */
    public function setUsers($users)
    {
        if (is_null($users)) {
            throw new \InvalidArgumentException('non-nullable users cannot be null');
        }
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Account logo in base64 format (svg, png, jpeg)
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Account brand logo in base64 format (svg, png, jpeg)
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Account currency for billing purposes
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 20)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AccountDTO., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($currency) < 0)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AccountDTO., must be bigger than or equal to 0.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone Account timezone for billing purposes
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        if ((mb_strlen($timezone) > 40)) {
            throw new \InvalidArgumentException('invalid length for $timezone when calling AccountDTO., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($timezone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $timezone when calling AccountDTO., must be bigger than or equal to 0.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets allow_create_personal_mailbox_with_role
     *
     * @return string|null
     */
    public function getAllowCreatePersonalMailboxWithRole()
    {
        return $this->container['allow_create_personal_mailbox_with_role'];
    }

    /**
     * Sets allow_create_personal_mailbox_with_role
     *
     * @param string|null $allow_create_personal_mailbox_with_role Create personal mailbox for self-registered corporate user with role UUID
     *
     * @return self
     */
    public function setAllowCreatePersonalMailboxWithRole($allow_create_personal_mailbox_with_role)
    {
        if (is_null($allow_create_personal_mailbox_with_role)) {
            throw new \InvalidArgumentException('non-nullable allow_create_personal_mailbox_with_role cannot be null');
        }
        $this->container['allow_create_personal_mailbox_with_role'] = $allow_create_personal_mailbox_with_role;

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



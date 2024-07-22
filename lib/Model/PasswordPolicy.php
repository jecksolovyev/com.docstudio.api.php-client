<?php
/**
 * PasswordPolicy
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
 * PasswordPolicy Class Doc Comment
 *
 * @category Class
 * @description Password policy
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PasswordPolicy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PasswordPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'min_length' => 'int',
        'max_length' => 'int',
        'uppercase' => 'int',
        'lowercase' => 'int',
        'digit' => 'int',
        'special_symbol' => 'int',
        'repeat_character' => 'int',
        'allow_whitespace' => 'bool',
        'prevent_common_passwords' => 'bool',
        'prevent_common_words' => 'bool',
        'expiration_days' => 'int',
        'notify_before_days' => 'int',
        'prevent_reuse_months' => 'int',
        'prevent_reuse_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'min_length' => 'int32',
        'max_length' => 'int32',
        'uppercase' => 'int32',
        'lowercase' => 'int32',
        'digit' => 'int32',
        'special_symbol' => 'int32',
        'repeat_character' => 'int32',
        'allow_whitespace' => null,
        'prevent_common_passwords' => null,
        'prevent_common_words' => null,
        'expiration_days' => 'int32',
        'notify_before_days' => 'int32',
        'prevent_reuse_months' => 'int32',
        'prevent_reuse_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'min_length' => false,
        'max_length' => false,
        'uppercase' => false,
        'lowercase' => false,
        'digit' => false,
        'special_symbol' => false,
        'repeat_character' => false,
        'allow_whitespace' => false,
        'prevent_common_passwords' => false,
        'prevent_common_words' => false,
        'expiration_days' => false,
        'notify_before_days' => false,
        'prevent_reuse_months' => false,
        'prevent_reuse_count' => false
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
        'min_length' => 'minLength',
        'max_length' => 'maxLength',
        'uppercase' => 'uppercase',
        'lowercase' => 'lowercase',
        'digit' => 'digit',
        'special_symbol' => 'specialSymbol',
        'repeat_character' => 'repeatCharacter',
        'allow_whitespace' => 'allowWhitespace',
        'prevent_common_passwords' => 'preventCommonPasswords',
        'prevent_common_words' => 'preventCommonWords',
        'expiration_days' => 'expirationDays',
        'notify_before_days' => 'notifyBeforeDays',
        'prevent_reuse_months' => 'preventReuseMonths',
        'prevent_reuse_count' => 'preventReuseCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_length' => 'setMinLength',
        'max_length' => 'setMaxLength',
        'uppercase' => 'setUppercase',
        'lowercase' => 'setLowercase',
        'digit' => 'setDigit',
        'special_symbol' => 'setSpecialSymbol',
        'repeat_character' => 'setRepeatCharacter',
        'allow_whitespace' => 'setAllowWhitespace',
        'prevent_common_passwords' => 'setPreventCommonPasswords',
        'prevent_common_words' => 'setPreventCommonWords',
        'expiration_days' => 'setExpirationDays',
        'notify_before_days' => 'setNotifyBeforeDays',
        'prevent_reuse_months' => 'setPreventReuseMonths',
        'prevent_reuse_count' => 'setPreventReuseCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_length' => 'getMinLength',
        'max_length' => 'getMaxLength',
        'uppercase' => 'getUppercase',
        'lowercase' => 'getLowercase',
        'digit' => 'getDigit',
        'special_symbol' => 'getSpecialSymbol',
        'repeat_character' => 'getRepeatCharacter',
        'allow_whitespace' => 'getAllowWhitespace',
        'prevent_common_passwords' => 'getPreventCommonPasswords',
        'prevent_common_words' => 'getPreventCommonWords',
        'expiration_days' => 'getExpirationDays',
        'notify_before_days' => 'getNotifyBeforeDays',
        'prevent_reuse_months' => 'getPreventReuseMonths',
        'prevent_reuse_count' => 'getPreventReuseCount'
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
        $this->setIfExists('min_length', $data ?? [], null);
        $this->setIfExists('max_length', $data ?? [], null);
        $this->setIfExists('uppercase', $data ?? [], null);
        $this->setIfExists('lowercase', $data ?? [], null);
        $this->setIfExists('digit', $data ?? [], null);
        $this->setIfExists('special_symbol', $data ?? [], null);
        $this->setIfExists('repeat_character', $data ?? [], null);
        $this->setIfExists('allow_whitespace', $data ?? [], null);
        $this->setIfExists('prevent_common_passwords', $data ?? [], null);
        $this->setIfExists('prevent_common_words', $data ?? [], null);
        $this->setIfExists('expiration_days', $data ?? [], null);
        $this->setIfExists('notify_before_days', $data ?? [], null);
        $this->setIfExists('prevent_reuse_months', $data ?? [], null);
        $this->setIfExists('prevent_reuse_count', $data ?? [], null);
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
     * Gets min_length
     *
     * @return int|null
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param int|null $min_length min_length
     *
     * @return self
     */
    public function setMinLength($min_length)
    {
        if (is_null($min_length)) {
            throw new \InvalidArgumentException('non-nullable min_length cannot be null');
        }
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int|null $max_length max_length
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        if (is_null($max_length)) {
            throw new \InvalidArgumentException('non-nullable max_length cannot be null');
        }
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets uppercase
     *
     * @return int|null
     */
    public function getUppercase()
    {
        return $this->container['uppercase'];
    }

    /**
     * Sets uppercase
     *
     * @param int|null $uppercase uppercase
     *
     * @return self
     */
    public function setUppercase($uppercase)
    {
        if (is_null($uppercase)) {
            throw new \InvalidArgumentException('non-nullable uppercase cannot be null');
        }
        $this->container['uppercase'] = $uppercase;

        return $this;
    }

    /**
     * Gets lowercase
     *
     * @return int|null
     */
    public function getLowercase()
    {
        return $this->container['lowercase'];
    }

    /**
     * Sets lowercase
     *
     * @param int|null $lowercase lowercase
     *
     * @return self
     */
    public function setLowercase($lowercase)
    {
        if (is_null($lowercase)) {
            throw new \InvalidArgumentException('non-nullable lowercase cannot be null');
        }
        $this->container['lowercase'] = $lowercase;

        return $this;
    }

    /**
     * Gets digit
     *
     * @return int|null
     */
    public function getDigit()
    {
        return $this->container['digit'];
    }

    /**
     * Sets digit
     *
     * @param int|null $digit digit
     *
     * @return self
     */
    public function setDigit($digit)
    {
        if (is_null($digit)) {
            throw new \InvalidArgumentException('non-nullable digit cannot be null');
        }
        $this->container['digit'] = $digit;

        return $this;
    }

    /**
     * Gets special_symbol
     *
     * @return int|null
     */
    public function getSpecialSymbol()
    {
        return $this->container['special_symbol'];
    }

    /**
     * Sets special_symbol
     *
     * @param int|null $special_symbol special_symbol
     *
     * @return self
     */
    public function setSpecialSymbol($special_symbol)
    {
        if (is_null($special_symbol)) {
            throw new \InvalidArgumentException('non-nullable special_symbol cannot be null');
        }
        $this->container['special_symbol'] = $special_symbol;

        return $this;
    }

    /**
     * Gets repeat_character
     *
     * @return int|null
     */
    public function getRepeatCharacter()
    {
        return $this->container['repeat_character'];
    }

    /**
     * Sets repeat_character
     *
     * @param int|null $repeat_character repeat_character
     *
     * @return self
     */
    public function setRepeatCharacter($repeat_character)
    {
        if (is_null($repeat_character)) {
            throw new \InvalidArgumentException('non-nullable repeat_character cannot be null');
        }
        $this->container['repeat_character'] = $repeat_character;

        return $this;
    }

    /**
     * Gets allow_whitespace
     *
     * @return bool|null
     */
    public function getAllowWhitespace()
    {
        return $this->container['allow_whitespace'];
    }

    /**
     * Sets allow_whitespace
     *
     * @param bool|null $allow_whitespace allow_whitespace
     *
     * @return self
     */
    public function setAllowWhitespace($allow_whitespace)
    {
        if (is_null($allow_whitespace)) {
            throw new \InvalidArgumentException('non-nullable allow_whitespace cannot be null');
        }
        $this->container['allow_whitespace'] = $allow_whitespace;

        return $this;
    }

    /**
     * Gets prevent_common_passwords
     *
     * @return bool|null
     */
    public function getPreventCommonPasswords()
    {
        return $this->container['prevent_common_passwords'];
    }

    /**
     * Sets prevent_common_passwords
     *
     * @param bool|null $prevent_common_passwords prevent_common_passwords
     *
     * @return self
     */
    public function setPreventCommonPasswords($prevent_common_passwords)
    {
        if (is_null($prevent_common_passwords)) {
            throw new \InvalidArgumentException('non-nullable prevent_common_passwords cannot be null');
        }
        $this->container['prevent_common_passwords'] = $prevent_common_passwords;

        return $this;
    }

    /**
     * Gets prevent_common_words
     *
     * @return bool|null
     */
    public function getPreventCommonWords()
    {
        return $this->container['prevent_common_words'];
    }

    /**
     * Sets prevent_common_words
     *
     * @param bool|null $prevent_common_words prevent_common_words
     *
     * @return self
     */
    public function setPreventCommonWords($prevent_common_words)
    {
        if (is_null($prevent_common_words)) {
            throw new \InvalidArgumentException('non-nullable prevent_common_words cannot be null');
        }
        $this->container['prevent_common_words'] = $prevent_common_words;

        return $this;
    }

    /**
     * Gets expiration_days
     *
     * @return int|null
     */
    public function getExpirationDays()
    {
        return $this->container['expiration_days'];
    }

    /**
     * Sets expiration_days
     *
     * @param int|null $expiration_days expiration_days
     *
     * @return self
     */
    public function setExpirationDays($expiration_days)
    {
        if (is_null($expiration_days)) {
            throw new \InvalidArgumentException('non-nullable expiration_days cannot be null');
        }
        $this->container['expiration_days'] = $expiration_days;

        return $this;
    }

    /**
     * Gets notify_before_days
     *
     * @return int|null
     */
    public function getNotifyBeforeDays()
    {
        return $this->container['notify_before_days'];
    }

    /**
     * Sets notify_before_days
     *
     * @param int|null $notify_before_days notify_before_days
     *
     * @return self
     */
    public function setNotifyBeforeDays($notify_before_days)
    {
        if (is_null($notify_before_days)) {
            throw new \InvalidArgumentException('non-nullable notify_before_days cannot be null');
        }
        $this->container['notify_before_days'] = $notify_before_days;

        return $this;
    }

    /**
     * Gets prevent_reuse_months
     *
     * @return int|null
     */
    public function getPreventReuseMonths()
    {
        return $this->container['prevent_reuse_months'];
    }

    /**
     * Sets prevent_reuse_months
     *
     * @param int|null $prevent_reuse_months prevent_reuse_months
     *
     * @return self
     */
    public function setPreventReuseMonths($prevent_reuse_months)
    {
        if (is_null($prevent_reuse_months)) {
            throw new \InvalidArgumentException('non-nullable prevent_reuse_months cannot be null');
        }
        $this->container['prevent_reuse_months'] = $prevent_reuse_months;

        return $this;
    }

    /**
     * Gets prevent_reuse_count
     *
     * @return int|null
     */
    public function getPreventReuseCount()
    {
        return $this->container['prevent_reuse_count'];
    }

    /**
     * Sets prevent_reuse_count
     *
     * @param int|null $prevent_reuse_count prevent_reuse_count
     *
     * @return self
     */
    public function setPreventReuseCount($prevent_reuse_count)
    {
        if (is_null($prevent_reuse_count)) {
            throw new \InvalidArgumentException('non-nullable prevent_reuse_count cannot be null');
        }
        $this->container['prevent_reuse_count'] = $prevent_reuse_count;

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



<?php
/**
 * DataProviderDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * My Data My Consent - Developer API
 *
 * Unleashing the power of consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@mydatamyconsent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDataMyConsent\Model;

use \ArrayAccess;
use \MyDataMyConsent\ObjectSerializer;

/**
 * DataProviderDetails Class Doc Comment
 *
 * @category Class
 * @description DataProviderDetails: Data provider details.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DataProviderDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataProviderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => 'string',
        'logo_url' => 'string',
        'website' => 'string',
        'support_email' => 'string',
        'help_line_number' => 'string',
        'privacy_policy' => 'string',
        'term_of_service' => 'string',
        'data_protection_officer' => '\MyDataMyConsent\Model\DataProtectionOfficer',
        'supported_document_types' => '\MyDataMyConsent\Model\SupportedDocumentType[]',
        'supported_account_types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'category' => null,
        'logo_url' => null,
        'website' => null,
        'support_email' => null,
        'help_line_number' => null,
        'privacy_policy' => null,
        'term_of_service' => null,
        'data_protection_officer' => null,
        'supported_document_types' => null,
        'supported_account_types' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'category' => false,
		'logo_url' => false,
		'website' => false,
		'support_email' => false,
		'help_line_number' => false,
		'privacy_policy' => false,
		'term_of_service' => false,
		'data_protection_officer' => false,
		'supported_document_types' => false,
		'supported_account_types' => false
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
        'id' => 'id',
        'name' => 'name',
        'category' => 'category',
        'logo_url' => 'logoUrl',
        'website' => 'website',
        'support_email' => 'supportEmail',
        'help_line_number' => 'helpLineNumber',
        'privacy_policy' => 'privacyPolicy',
        'term_of_service' => 'termOfService',
        'data_protection_officer' => 'dataProtectionOfficer',
        'supported_document_types' => 'supportedDocumentTypes',
        'supported_account_types' => 'supportedAccountTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'logo_url' => 'setLogoUrl',
        'website' => 'setWebsite',
        'support_email' => 'setSupportEmail',
        'help_line_number' => 'setHelpLineNumber',
        'privacy_policy' => 'setPrivacyPolicy',
        'term_of_service' => 'setTermOfService',
        'data_protection_officer' => 'setDataProtectionOfficer',
        'supported_document_types' => 'setSupportedDocumentTypes',
        'supported_account_types' => 'setSupportedAccountTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'logo_url' => 'getLogoUrl',
        'website' => 'getWebsite',
        'support_email' => 'getSupportEmail',
        'help_line_number' => 'getHelpLineNumber',
        'privacy_policy' => 'getPrivacyPolicy',
        'term_of_service' => 'getTermOfService',
        'data_protection_officer' => 'getDataProtectionOfficer',
        'supported_document_types' => 'getSupportedDocumentTypes',
        'supported_account_types' => 'getSupportedAccountTypes'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('website', $data ?? [], null);
        $this->setIfExists('support_email', $data ?? [], null);
        $this->setIfExists('help_line_number', $data ?? [], null);
        $this->setIfExists('privacy_policy', $data ?? [], null);
        $this->setIfExists('term_of_service', $data ?? [], null);
        $this->setIfExists('data_protection_officer', $data ?? [], null);
        $this->setIfExists('supported_document_types', $data ?? [], null);
        $this->setIfExists('supported_account_types', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['data_protection_officer'] === null) {
            $invalidProperties[] = "'data_protection_officer' can't be null";
        }
        if ($this->container['supported_document_types'] === null) {
            $invalidProperties[] = "'supported_document_types' can't be null";
        }
        if ($this->container['supported_account_types'] === null) {
            $invalidProperties[] = "'supported_account_types' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {

        if (is_null($logo_url)) {
            throw new \InvalidArgumentException('non-nullable logo_url cannot be null');
        }

        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {

        if (is_null($website)) {
            throw new \InvalidArgumentException('non-nullable website cannot be null');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets support_email
     *
     * @return string|null
     */
    public function getSupportEmail()
    {
        return $this->container['support_email'];
    }

    /**
     * Sets support_email
     *
     * @param string|null $support_email support_email
     *
     * @return self
     */
    public function setSupportEmail($support_email)
    {

        if (is_null($support_email)) {
            throw new \InvalidArgumentException('non-nullable support_email cannot be null');
        }

        $this->container['support_email'] = $support_email;

        return $this;
    }

    /**
     * Gets help_line_number
     *
     * @return string|null
     */
    public function getHelpLineNumber()
    {
        return $this->container['help_line_number'];
    }

    /**
     * Sets help_line_number
     *
     * @param string|null $help_line_number help_line_number
     *
     * @return self
     */
    public function setHelpLineNumber($help_line_number)
    {

        if (is_null($help_line_number)) {
            throw new \InvalidArgumentException('non-nullable help_line_number cannot be null');
        }

        $this->container['help_line_number'] = $help_line_number;

        return $this;
    }

    /**
     * Gets privacy_policy
     *
     * @return string|null
     */
    public function getPrivacyPolicy()
    {
        return $this->container['privacy_policy'];
    }

    /**
     * Sets privacy_policy
     *
     * @param string|null $privacy_policy privacy_policy
     *
     * @return self
     */
    public function setPrivacyPolicy($privacy_policy)
    {

        if (is_null($privacy_policy)) {
            throw new \InvalidArgumentException('non-nullable privacy_policy cannot be null');
        }

        $this->container['privacy_policy'] = $privacy_policy;

        return $this;
    }

    /**
     * Gets term_of_service
     *
     * @return string|null
     */
    public function getTermOfService()
    {
        return $this->container['term_of_service'];
    }

    /**
     * Sets term_of_service
     *
     * @param string|null $term_of_service term_of_service
     *
     * @return self
     */
    public function setTermOfService($term_of_service)
    {

        if (is_null($term_of_service)) {
            throw new \InvalidArgumentException('non-nullable term_of_service cannot be null');
        }

        $this->container['term_of_service'] = $term_of_service;

        return $this;
    }

    /**
     * Gets data_protection_officer
     *
     * @return \MyDataMyConsent\Model\DataProtectionOfficer
     */
    public function getDataProtectionOfficer()
    {
        return $this->container['data_protection_officer'];
    }

    /**
     * Sets data_protection_officer
     *
     * @param \MyDataMyConsent\Model\DataProtectionOfficer $data_protection_officer data_protection_officer
     *
     * @return self
     */
    public function setDataProtectionOfficer($data_protection_officer)
    {

        if (is_null($data_protection_officer)) {
            throw new \InvalidArgumentException('non-nullable data_protection_officer cannot be null');
        }

        $this->container['data_protection_officer'] = $data_protection_officer;

        return $this;
    }

    /**
     * Gets supported_document_types
     *
     * @return \MyDataMyConsent\Model\SupportedDocumentType[]
     */
    public function getSupportedDocumentTypes()
    {
        return $this->container['supported_document_types'];
    }

    /**
     * Sets supported_document_types
     *
     * @param \MyDataMyConsent\Model\SupportedDocumentType[] $supported_document_types supported_document_types
     *
     * @return self
     */
    public function setSupportedDocumentTypes($supported_document_types)
    {

        if (is_null($supported_document_types)) {
            throw new \InvalidArgumentException('non-nullable supported_document_types cannot be null');
        }

        $this->container['supported_document_types'] = $supported_document_types;

        return $this;
    }

    /**
     * Gets supported_account_types
     *
     * @return string[]
     */
    public function getSupportedAccountTypes()
    {
        return $this->container['supported_account_types'];
    }

    /**
     * Sets supported_account_types
     *
     * @param string[] $supported_account_types supported_account_types
     *
     * @return self
     */
    public function setSupportedAccountTypes($supported_account_types)
    {

        if (is_null($supported_account_types)) {
            throw new \InvalidArgumentException('non-nullable supported_account_types cannot be null');
        }

        $this->container['supported_account_types'] = $supported_account_types;

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



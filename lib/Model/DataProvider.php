<?php
/**
 * DataProvider
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
 * Unleashing the power of data consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.
 *
 * The version of the OpenAPI document: v1
 * Contact: support@mydatamyconsent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * DataProvider Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataProvider implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataProvider';

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
        'supported_document_types' => 'string[]',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['support_email'] = $data['support_email'] ?? null;
        $this->container['help_line_number'] = $data['help_line_number'] ?? null;
        $this->container['privacy_policy'] = $data['privacy_policy'] ?? null;
        $this->container['term_of_service'] = $data['term_of_service'] ?? null;
        $this->container['data_protection_officer'] = $data['data_protection_officer'] ?? null;
        $this->container['supported_document_types'] = $data['supported_document_types'] ?? null;
        $this->container['supported_account_types'] = $data['supported_account_types'] ?? null;
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
        if ($this->container['supported_document_types'] === null) {
            $invalidProperties[] = "'supported_document_types' can't be null";
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
        $this->container['term_of_service'] = $term_of_service;

        return $this;
    }

    /**
     * Gets data_protection_officer
     *
     * @return \MyDataMyConsent\Model\DataProtectionOfficer|null
     */
    public function getDataProtectionOfficer()
    {
        return $this->container['data_protection_officer'];
    }

    /**
     * Sets data_protection_officer
     *
     * @param \MyDataMyConsent\Model\DataProtectionOfficer|null $data_protection_officer data_protection_officer
     *
     * @return self
     */
    public function setDataProtectionOfficer($data_protection_officer)
    {
        $this->container['data_protection_officer'] = $data_protection_officer;

        return $this;
    }

    /**
     * Gets supported_document_types
     *
     * @return string[]
     */
    public function getSupportedDocumentTypes()
    {
        return $this->container['supported_document_types'];
    }

    /**
     * Sets supported_document_types
     *
     * @param string[] $supported_document_types supported_document_types
     *
     * @return self
     */
    public function setSupportedDocumentTypes($supported_document_types)
    {
        $this->container['supported_document_types'] = $supported_document_types;

        return $this;
    }

    /**
     * Gets supported_account_types
     *
     * @return string[]|null
     */
    public function getSupportedAccountTypes()
    {
        return $this->container['supported_account_types'];
    }

    /**
     * Sets supported_account_types
     *
     * @param string[]|null $supported_account_types supported_account_types
     *
     * @return self
     */
    public function setSupportedAccountTypes($supported_account_types)
    {
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



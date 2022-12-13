<?php
/**
 * ConsentDetails
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
 * ConsentDetails Class Doc Comment
 *
 * @category Class
 * @description ConsentDetails : Consent details.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConsentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'request_id' => 'string',
        'template_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'purpose' => 'string',
        'status' => '\MyDataMyConsent\Model\DataConsentStatus',
        'transaction_id' => 'string',
        'approved_at_utc' => '\DateTime',
        'data_access_expires_at_utc' => '\DateTime',
        'revoked_at_utc' => '\DateTime',
        'collectables' => '\MyDataMyConsent\Model\CollectibleTypes[]',
        'identifiers' => '\MyDataMyConsent\Model\ConsentedIdentifier[]',
        'documents' => '\MyDataMyConsent\Model\ConsentedDocument[]',
        'medical_records' => '\MyDataMyConsent\Model\ConsentedMedicalRecord[]',
        'financial_accounts' => '\MyDataMyConsent\Model\ConsentedFinancialAccountField[]'
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
        'request_id' => null,
        'template_id' => null,
        'title' => null,
        'description' => null,
        'purpose' => null,
        'status' => null,
        'transaction_id' => null,
        'approved_at_utc' => 'date-time',
        'data_access_expires_at_utc' => 'date-time',
        'revoked_at_utc' => 'date-time',
        'collectables' => null,
        'identifiers' => null,
        'documents' => null,
        'medical_records' => null,
        'financial_accounts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'request_id' => false,
		'template_id' => false,
		'title' => false,
		'description' => false,
		'purpose' => false,
		'status' => false,
		'transaction_id' => false,
		'approved_at_utc' => false,
		'data_access_expires_at_utc' => false,
		'revoked_at_utc' => false,
		'collectables' => false,
		'identifiers' => false,
		'documents' => false,
		'medical_records' => false,
		'financial_accounts' => false
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
        'request_id' => 'requestId',
        'template_id' => 'templateId',
        'title' => 'title',
        'description' => 'description',
        'purpose' => 'purpose',
        'status' => 'status',
        'transaction_id' => 'transactionId',
        'approved_at_utc' => 'approvedAtUtc',
        'data_access_expires_at_utc' => 'dataAccessExpiresAtUtc',
        'revoked_at_utc' => 'revokedAtUtc',
        'collectables' => 'collectables',
        'identifiers' => 'identifiers',
        'documents' => 'documents',
        'medical_records' => 'medicalRecords',
        'financial_accounts' => 'financialAccounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'request_id' => 'setRequestId',
        'template_id' => 'setTemplateId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'purpose' => 'setPurpose',
        'status' => 'setStatus',
        'transaction_id' => 'setTransactionId',
        'approved_at_utc' => 'setApprovedAtUtc',
        'data_access_expires_at_utc' => 'setDataAccessExpiresAtUtc',
        'revoked_at_utc' => 'setRevokedAtUtc',
        'collectables' => 'setCollectables',
        'identifiers' => 'setIdentifiers',
        'documents' => 'setDocuments',
        'medical_records' => 'setMedicalRecords',
        'financial_accounts' => 'setFinancialAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'request_id' => 'getRequestId',
        'template_id' => 'getTemplateId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'purpose' => 'getPurpose',
        'status' => 'getStatus',
        'transaction_id' => 'getTransactionId',
        'approved_at_utc' => 'getApprovedAtUtc',
        'data_access_expires_at_utc' => 'getDataAccessExpiresAtUtc',
        'revoked_at_utc' => 'getRevokedAtUtc',
        'collectables' => 'getCollectables',
        'identifiers' => 'getIdentifiers',
        'documents' => 'getDocuments',
        'medical_records' => 'getMedicalRecords',
        'financial_accounts' => 'getFinancialAccounts'
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
        $this->setIfExists('request_id', $data ?? [], null);
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('purpose', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('approved_at_utc', $data ?? [], null);
        $this->setIfExists('data_access_expires_at_utc', $data ?? [], null);
        $this->setIfExists('revoked_at_utc', $data ?? [], null);
        $this->setIfExists('collectables', $data ?? [], null);
        $this->setIfExists('identifiers', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('medical_records', $data ?? [], null);
        $this->setIfExists('financial_accounts', $data ?? [], null);
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
        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['approved_at_utc'] === null) {
            $invalidProperties[] = "'approved_at_utc' can't be null";
        }
        if ($this->container['data_access_expires_at_utc'] === null) {
            $invalidProperties[] = "'data_access_expires_at_utc' can't be null";
        }
        if ($this->container['collectables'] === null) {
            $invalidProperties[] = "'collectables' can't be null";
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
     * @param string $id Consent id.
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
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Consent request id.
     *
     * @return self
     */
    public function setRequestId($request_id)
    {

        if (is_null($request_id)) {
            throw new \InvalidArgumentException('non-nullable request_id cannot be null');
        }

        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id Consent request template id.
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {

        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }

        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Consent title.
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Consent description.
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string|null $purpose Consent purpose.
     *
     * @return self
     */
    public function setPurpose($purpose)
    {

        if (is_null($purpose)) {
            throw new \InvalidArgumentException('non-nullable purpose cannot be null');
        }

        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \MyDataMyConsent\Model\DataConsentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \MyDataMyConsent\Model\DataConsentStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id Transaction id.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {

        if (is_null($transaction_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_id cannot be null');
        }

        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets approved_at_utc
     *
     * @return \DateTime
     */
    public function getApprovedAtUtc()
    {
        return $this->container['approved_at_utc'];
    }

    /**
     * Sets approved_at_utc
     *
     * @param \DateTime $approved_at_utc Consent approval datetime in UTC timezone.
     *
     * @return self
     */
    public function setApprovedAtUtc($approved_at_utc)
    {

        if (is_null($approved_at_utc)) {
            throw new \InvalidArgumentException('non-nullable approved_at_utc cannot be null');
        }

        $this->container['approved_at_utc'] = $approved_at_utc;

        return $this;
    }

    /**
     * Gets data_access_expires_at_utc
     *
     * @return \DateTime
     */
    public function getDataAccessExpiresAtUtc()
    {
        return $this->container['data_access_expires_at_utc'];
    }

    /**
     * Sets data_access_expires_at_utc
     *
     * @param \DateTime $data_access_expires_at_utc Data access expiration datetime in UTC timezone.
     *
     * @return self
     */
    public function setDataAccessExpiresAtUtc($data_access_expires_at_utc)
    {

        if (is_null($data_access_expires_at_utc)) {
            throw new \InvalidArgumentException('non-nullable data_access_expires_at_utc cannot be null');
        }

        $this->container['data_access_expires_at_utc'] = $data_access_expires_at_utc;

        return $this;
    }

    /**
     * Gets revoked_at_utc
     *
     * @return \DateTime|null
     */
    public function getRevokedAtUtc()
    {
        return $this->container['revoked_at_utc'];
    }

    /**
     * Sets revoked_at_utc
     *
     * @param \DateTime|null $revoked_at_utc Consent revocation datetime in UTC timezone.
     *
     * @return self
     */
    public function setRevokedAtUtc($revoked_at_utc)
    {

        if (is_null($revoked_at_utc)) {
            throw new \InvalidArgumentException('non-nullable revoked_at_utc cannot be null');
        }

        $this->container['revoked_at_utc'] = $revoked_at_utc;

        return $this;
    }

    /**
     * Gets collectables
     *
     * @return \MyDataMyConsent\Model\CollectibleTypes[]
     */
    public function getCollectables()
    {
        return $this->container['collectables'];
    }

    /**
     * Sets collectables
     *
     * @param \MyDataMyConsent\Model\CollectibleTypes[] $collectables List of supported collectible types.
     *
     * @return self
     */
    public function setCollectables($collectables)
    {

        if (is_null($collectables)) {
            throw new \InvalidArgumentException('non-nullable collectables cannot be null');
        }

        $this->container['collectables'] = $collectables;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \MyDataMyConsent\Model\ConsentedIdentifier[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \MyDataMyConsent\Model\ConsentedIdentifier[]|null $identifiers Consented identity details.
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {

        if (is_null($identifiers)) {
            throw new \InvalidArgumentException('non-nullable identifiers cannot be null');
        }

        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \MyDataMyConsent\Model\ConsentedDocument[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \MyDataMyConsent\Model\ConsentedDocument[]|null $documents List of consented documents.
     *
     * @return self
     */
    public function setDocuments($documents)
    {

        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }

        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets medical_records
     *
     * @return \MyDataMyConsent\Model\ConsentedMedicalRecord[]|null
     */
    public function getMedicalRecords()
    {
        return $this->container['medical_records'];
    }

    /**
     * Sets medical_records
     *
     * @param \MyDataMyConsent\Model\ConsentedMedicalRecord[]|null $medical_records List of consented medical records.
     *
     * @return self
     */
    public function setMedicalRecords($medical_records)
    {

        if (is_null($medical_records)) {
            throw new \InvalidArgumentException('non-nullable medical_records cannot be null');
        }

        $this->container['medical_records'] = $medical_records;

        return $this;
    }

    /**
     * Gets financial_accounts
     *
     * @return \MyDataMyConsent\Model\ConsentedFinancialAccountField[]|null
     */
    public function getFinancialAccounts()
    {
        return $this->container['financial_accounts'];
    }

    /**
     * Sets financial_accounts
     *
     * @param \MyDataMyConsent\Model\ConsentedFinancialAccountField[]|null $financial_accounts List of consented financial accounts.
     *
     * @return self
     */
    public function setFinancialAccounts($financial_accounts)
    {

        if (is_null($financial_accounts)) {
            throw new \InvalidArgumentException('non-nullable financial_accounts cannot be null');
        }

        $this->container['financial_accounts'] = $financial_accounts;

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



<?php
/**
 * DataConsent
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.2.1
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
 * DataConsent Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataConsent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataConsent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'organization_id' => 'string',
        'requested_by_org_id' => 'string',
        'transaction_id' => 'string',
        'start_date_time' => '\DateTime',
        'expiry_date_time' => '\DateTime',
        'description' => 'string',
        'purpose_code' => 'string',
        'purpose_link' => 'string',
        'location' => 'string',
        'agreement_id' => 'string',
        'data_life_unit' => '\MyDataMyConsent\Model\DataLifeUnit',
        'data_life_value' => 'int',
        'data_fetch_frequency_unit' => '\MyDataMyConsent\Model\DataFetchFrequencyUnit',
        'data_fetch_frequency_unit_value' => 'int',
        'data_fetch_type' => '\MyDataMyConsent\Model\DataFetchType',
        'status' => '\MyDataMyConsent\Model\DataConsentStatus',
        'created_at_utc' => '\DateTime',
        'approved_at_utc' => '\DateTime',
        'rejected_at_utc' => '\DateTime',
        'user' => '\MyDataMyConsent\Model\ApplicationUser',
        'organization' => '\MyDataMyConsent\Model\Organization',
        'requested_by_org' => '\MyDataMyConsent\Model\Organization',
        'agreement' => '\MyDataMyConsent\Model\DataProcessingAgreement',
        'identity_claims' => '\MyDataMyConsent\Model\IdentityClaim[]',
        'identifiers' => '\MyDataMyConsent\Model\DataConsentIdentifier[]',
        'requested_financial_accounts' => '\MyDataMyConsent\Model\DataConsentRequestedFinancialAccount[]',
        'requested_documents' => '\MyDataMyConsent\Model\DataConsentRequestedDocument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'user_id' => 'uuid',
        'organization_id' => 'uuid',
        'requested_by_org_id' => 'uuid',
        'transaction_id' => null,
        'start_date_time' => 'date-time',
        'expiry_date_time' => 'date-time',
        'description' => null,
        'purpose_code' => null,
        'purpose_link' => null,
        'location' => null,
        'agreement_id' => 'uuid',
        'data_life_unit' => null,
        'data_life_value' => 'int32',
        'data_fetch_frequency_unit' => null,
        'data_fetch_frequency_unit_value' => 'int32',
        'data_fetch_type' => null,
        'status' => null,
        'created_at_utc' => 'date-time',
        'approved_at_utc' => 'date-time',
        'rejected_at_utc' => 'date-time',
        'user' => null,
        'organization' => null,
        'requested_by_org' => null,
        'agreement' => null,
        'identity_claims' => null,
        'identifiers' => null,
        'requested_financial_accounts' => null,
        'requested_documents' => null
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
        'user_id' => 'userId',
        'organization_id' => 'organizationId',
        'requested_by_org_id' => 'requestedByOrgId',
        'transaction_id' => 'transactionId',
        'start_date_time' => 'startDateTime',
        'expiry_date_time' => 'expiryDateTime',
        'description' => 'description',
        'purpose_code' => 'purposeCode',
        'purpose_link' => 'purposeLink',
        'location' => 'location',
        'agreement_id' => 'agreementId',
        'data_life_unit' => 'dataLifeUnit',
        'data_life_value' => 'dataLifeValue',
        'data_fetch_frequency_unit' => 'dataFetchFrequencyUnit',
        'data_fetch_frequency_unit_value' => 'dataFetchFrequencyUnitValue',
        'data_fetch_type' => 'dataFetchType',
        'status' => 'status',
        'created_at_utc' => 'createdAtUtc',
        'approved_at_utc' => 'approvedAtUtc',
        'rejected_at_utc' => 'rejectedAtUtc',
        'user' => 'user',
        'organization' => 'organization',
        'requested_by_org' => 'requestedByOrg',
        'agreement' => 'agreement',
        'identity_claims' => 'identityClaims',
        'identifiers' => 'identifiers',
        'requested_financial_accounts' => 'requestedFinancialAccounts',
        'requested_documents' => 'requestedDocuments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'organization_id' => 'setOrganizationId',
        'requested_by_org_id' => 'setRequestedByOrgId',
        'transaction_id' => 'setTransactionId',
        'start_date_time' => 'setStartDateTime',
        'expiry_date_time' => 'setExpiryDateTime',
        'description' => 'setDescription',
        'purpose_code' => 'setPurposeCode',
        'purpose_link' => 'setPurposeLink',
        'location' => 'setLocation',
        'agreement_id' => 'setAgreementId',
        'data_life_unit' => 'setDataLifeUnit',
        'data_life_value' => 'setDataLifeValue',
        'data_fetch_frequency_unit' => 'setDataFetchFrequencyUnit',
        'data_fetch_frequency_unit_value' => 'setDataFetchFrequencyUnitValue',
        'data_fetch_type' => 'setDataFetchType',
        'status' => 'setStatus',
        'created_at_utc' => 'setCreatedAtUtc',
        'approved_at_utc' => 'setApprovedAtUtc',
        'rejected_at_utc' => 'setRejectedAtUtc',
        'user' => 'setUser',
        'organization' => 'setOrganization',
        'requested_by_org' => 'setRequestedByOrg',
        'agreement' => 'setAgreement',
        'identity_claims' => 'setIdentityClaims',
        'identifiers' => 'setIdentifiers',
        'requested_financial_accounts' => 'setRequestedFinancialAccounts',
        'requested_documents' => 'setRequestedDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'organization_id' => 'getOrganizationId',
        'requested_by_org_id' => 'getRequestedByOrgId',
        'transaction_id' => 'getTransactionId',
        'start_date_time' => 'getStartDateTime',
        'expiry_date_time' => 'getExpiryDateTime',
        'description' => 'getDescription',
        'purpose_code' => 'getPurposeCode',
        'purpose_link' => 'getPurposeLink',
        'location' => 'getLocation',
        'agreement_id' => 'getAgreementId',
        'data_life_unit' => 'getDataLifeUnit',
        'data_life_value' => 'getDataLifeValue',
        'data_fetch_frequency_unit' => 'getDataFetchFrequencyUnit',
        'data_fetch_frequency_unit_value' => 'getDataFetchFrequencyUnitValue',
        'data_fetch_type' => 'getDataFetchType',
        'status' => 'getStatus',
        'created_at_utc' => 'getCreatedAtUtc',
        'approved_at_utc' => 'getApprovedAtUtc',
        'rejected_at_utc' => 'getRejectedAtUtc',
        'user' => 'getUser',
        'organization' => 'getOrganization',
        'requested_by_org' => 'getRequestedByOrg',
        'agreement' => 'getAgreement',
        'identity_claims' => 'getIdentityClaims',
        'identifiers' => 'getIdentifiers',
        'requested_financial_accounts' => 'getRequestedFinancialAccounts',
        'requested_documents' => 'getRequestedDocuments'
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
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['organization_id'] = $data['organization_id'] ?? null;
        $this->container['requested_by_org_id'] = $data['requested_by_org_id'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['expiry_date_time'] = $data['expiry_date_time'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['purpose_code'] = $data['purpose_code'] ?? null;
        $this->container['purpose_link'] = $data['purpose_link'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['agreement_id'] = $data['agreement_id'] ?? null;
        $this->container['data_life_unit'] = $data['data_life_unit'] ?? null;
        $this->container['data_life_value'] = $data['data_life_value'] ?? null;
        $this->container['data_fetch_frequency_unit'] = $data['data_fetch_frequency_unit'] ?? null;
        $this->container['data_fetch_frequency_unit_value'] = $data['data_fetch_frequency_unit_value'] ?? null;
        $this->container['data_fetch_type'] = $data['data_fetch_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['created_at_utc'] = $data['created_at_utc'] ?? null;
        $this->container['approved_at_utc'] = $data['approved_at_utc'] ?? null;
        $this->container['rejected_at_utc'] = $data['rejected_at_utc'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['requested_by_org'] = $data['requested_by_org'] ?? null;
        $this->container['agreement'] = $data['agreement'] ?? null;
        $this->container['identity_claims'] = $data['identity_claims'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['requested_financial_accounts'] = $data['requested_financial_accounts'] ?? null;
        $this->container['requested_documents'] = $data['requested_documents'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string|null $organization_id organization_id
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets requested_by_org_id
     *
     * @return string|null
     */
    public function getRequestedByOrgId()
    {
        return $this->container['requested_by_org_id'];
    }

    /**
     * Sets requested_by_org_id
     *
     * @param string|null $requested_by_org_id requested_by_org_id
     *
     * @return self
     */
    public function setRequestedByOrgId($requested_by_org_id)
    {
        $this->container['requested_by_org_id'] = $requested_by_org_id;

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
     * @param string|null $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime|null
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime|null $start_date_time start_date_time
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets expiry_date_time
     *
     * @return \DateTime|null
     */
    public function getExpiryDateTime()
    {
        return $this->container['expiry_date_time'];
    }

    /**
     * Sets expiry_date_time
     *
     * @param \DateTime|null $expiry_date_time expiry_date_time
     *
     * @return self
     */
    public function setExpiryDateTime($expiry_date_time)
    {
        $this->container['expiry_date_time'] = $expiry_date_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets purpose_code
     *
     * @return string|null
     */
    public function getPurposeCode()
    {
        return $this->container['purpose_code'];
    }

    /**
     * Sets purpose_code
     *
     * @param string|null $purpose_code purpose_code
     *
     * @return self
     */
    public function setPurposeCode($purpose_code)
    {
        $this->container['purpose_code'] = $purpose_code;

        return $this;
    }

    /**
     * Gets purpose_link
     *
     * @return string|null
     */
    public function getPurposeLink()
    {
        return $this->container['purpose_link'];
    }

    /**
     * Sets purpose_link
     *
     * @param string|null $purpose_link purpose_link
     *
     * @return self
     */
    public function setPurposeLink($purpose_link)
    {
        $this->container['purpose_link'] = $purpose_link;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets agreement_id
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreement_id'];
    }

    /**
     * Sets agreement_id
     *
     * @param string|null $agreement_id agreement_id
     *
     * @return self
     */
    public function setAgreementId($agreement_id)
    {
        $this->container['agreement_id'] = $agreement_id;

        return $this;
    }

    /**
     * Gets data_life_unit
     *
     * @return \MyDataMyConsent\Model\DataLifeUnit|null
     */
    public function getDataLifeUnit()
    {
        return $this->container['data_life_unit'];
    }

    /**
     * Sets data_life_unit
     *
     * @param \MyDataMyConsent\Model\DataLifeUnit|null $data_life_unit data_life_unit
     *
     * @return self
     */
    public function setDataLifeUnit($data_life_unit)
    {
        $this->container['data_life_unit'] = $data_life_unit;

        return $this;
    }

    /**
     * Gets data_life_value
     *
     * @return int|null
     */
    public function getDataLifeValue()
    {
        return $this->container['data_life_value'];
    }

    /**
     * Sets data_life_value
     *
     * @param int|null $data_life_value data_life_value
     *
     * @return self
     */
    public function setDataLifeValue($data_life_value)
    {
        $this->container['data_life_value'] = $data_life_value;

        return $this;
    }

    /**
     * Gets data_fetch_frequency_unit
     *
     * @return \MyDataMyConsent\Model\DataFetchFrequencyUnit|null
     */
    public function getDataFetchFrequencyUnit()
    {
        return $this->container['data_fetch_frequency_unit'];
    }

    /**
     * Sets data_fetch_frequency_unit
     *
     * @param \MyDataMyConsent\Model\DataFetchFrequencyUnit|null $data_fetch_frequency_unit data_fetch_frequency_unit
     *
     * @return self
     */
    public function setDataFetchFrequencyUnit($data_fetch_frequency_unit)
    {
        $this->container['data_fetch_frequency_unit'] = $data_fetch_frequency_unit;

        return $this;
    }

    /**
     * Gets data_fetch_frequency_unit_value
     *
     * @return int|null
     */
    public function getDataFetchFrequencyUnitValue()
    {
        return $this->container['data_fetch_frequency_unit_value'];
    }

    /**
     * Sets data_fetch_frequency_unit_value
     *
     * @param int|null $data_fetch_frequency_unit_value data_fetch_frequency_unit_value
     *
     * @return self
     */
    public function setDataFetchFrequencyUnitValue($data_fetch_frequency_unit_value)
    {
        $this->container['data_fetch_frequency_unit_value'] = $data_fetch_frequency_unit_value;

        return $this;
    }

    /**
     * Gets data_fetch_type
     *
     * @return \MyDataMyConsent\Model\DataFetchType|null
     */
    public function getDataFetchType()
    {
        return $this->container['data_fetch_type'];
    }

    /**
     * Sets data_fetch_type
     *
     * @param \MyDataMyConsent\Model\DataFetchType|null $data_fetch_type data_fetch_type
     *
     * @return self
     */
    public function setDataFetchType($data_fetch_type)
    {
        $this->container['data_fetch_type'] = $data_fetch_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \MyDataMyConsent\Model\DataConsentStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \MyDataMyConsent\Model\DataConsentStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at_utc
     *
     * @return \DateTime|null
     */
    public function getCreatedAtUtc()
    {
        return $this->container['created_at_utc'];
    }

    /**
     * Sets created_at_utc
     *
     * @param \DateTime|null $created_at_utc created_at_utc
     *
     * @return self
     */
    public function setCreatedAtUtc($created_at_utc)
    {
        $this->container['created_at_utc'] = $created_at_utc;

        return $this;
    }

    /**
     * Gets approved_at_utc
     *
     * @return \DateTime|null
     */
    public function getApprovedAtUtc()
    {
        return $this->container['approved_at_utc'];
    }

    /**
     * Sets approved_at_utc
     *
     * @param \DateTime|null $approved_at_utc approved_at_utc
     *
     * @return self
     */
    public function setApprovedAtUtc($approved_at_utc)
    {
        $this->container['approved_at_utc'] = $approved_at_utc;

        return $this;
    }

    /**
     * Gets rejected_at_utc
     *
     * @return \DateTime|null
     */
    public function getRejectedAtUtc()
    {
        return $this->container['rejected_at_utc'];
    }

    /**
     * Sets rejected_at_utc
     *
     * @param \DateTime|null $rejected_at_utc rejected_at_utc
     *
     * @return self
     */
    public function setRejectedAtUtc($rejected_at_utc)
    {
        $this->container['rejected_at_utc'] = $rejected_at_utc;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \MyDataMyConsent\Model\Organization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \MyDataMyConsent\Model\Organization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets requested_by_org
     *
     * @return \MyDataMyConsent\Model\Organization|null
     */
    public function getRequestedByOrg()
    {
        return $this->container['requested_by_org'];
    }

    /**
     * Sets requested_by_org
     *
     * @param \MyDataMyConsent\Model\Organization|null $requested_by_org requested_by_org
     *
     * @return self
     */
    public function setRequestedByOrg($requested_by_org)
    {
        $this->container['requested_by_org'] = $requested_by_org;

        return $this;
    }

    /**
     * Gets agreement
     *
     * @return \MyDataMyConsent\Model\DataProcessingAgreement|null
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     *
     * @param \MyDataMyConsent\Model\DataProcessingAgreement|null $agreement agreement
     *
     * @return self
     */
    public function setAgreement($agreement)
    {
        $this->container['agreement'] = $agreement;

        return $this;
    }

    /**
     * Gets identity_claims
     *
     * @return \MyDataMyConsent\Model\IdentityClaim[]|null
     */
    public function getIdentityClaims()
    {
        return $this->container['identity_claims'];
    }

    /**
     * Sets identity_claims
     *
     * @param \MyDataMyConsent\Model\IdentityClaim[]|null $identity_claims identity_claims
     *
     * @return self
     */
    public function setIdentityClaims($identity_claims)
    {
        $this->container['identity_claims'] = $identity_claims;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \MyDataMyConsent\Model\DataConsentIdentifier[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \MyDataMyConsent\Model\DataConsentIdentifier[]|null $identifiers identifiers
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets requested_financial_accounts
     *
     * @return \MyDataMyConsent\Model\DataConsentRequestedFinancialAccount[]|null
     */
    public function getRequestedFinancialAccounts()
    {
        return $this->container['requested_financial_accounts'];
    }

    /**
     * Sets requested_financial_accounts
     *
     * @param \MyDataMyConsent\Model\DataConsentRequestedFinancialAccount[]|null $requested_financial_accounts requested_financial_accounts
     *
     * @return self
     */
    public function setRequestedFinancialAccounts($requested_financial_accounts)
    {
        $this->container['requested_financial_accounts'] = $requested_financial_accounts;

        return $this;
    }

    /**
     * Gets requested_documents
     *
     * @return \MyDataMyConsent\Model\DataConsentRequestedDocument[]|null
     */
    public function getRequestedDocuments()
    {
        return $this->container['requested_documents'];
    }

    /**
     * Sets requested_documents
     *
     * @param \MyDataMyConsent\Model\DataConsentRequestedDocument[]|null $requested_documents requested_documents
     *
     * @return self
     */
    public function setRequestedDocuments($requested_documents)
    {
        $this->container['requested_documents'] = $requested_documents;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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



<?php
/**
 * PostQualificationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * qualification-client
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PostQualificationRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostQualificationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostQualificationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'qualification_type' => 'string',
        'lc_src' => 'string',
        'lc_tgt' => 'string',
        'rank' => 'string',
        'status' => 'string',
        'certificate' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'qualification_type' => null,
        'lc_src' => null,
        'lc_tgt' => null,
        'rank' => null,
        'status' => null,
        'certificate' => null,
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'qualification_type' => 'qualification_type',
        'lc_src' => 'lc_src',
        'lc_tgt' => 'lc_tgt',
        'rank' => 'rank',
        'status' => 'status',
        'certificate' => 'certificate',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qualification_type' => 'setQualificationType',
        'lc_src' => 'setLcSrc',
        'lc_tgt' => 'setLcTgt',
        'rank' => 'setRank',
        'status' => 'setStatus',
        'certificate' => 'setCertificate',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qualification_type' => 'getQualificationType',
        'lc_src' => 'getLcSrc',
        'lc_tgt' => 'getLcTgt',
        'rank' => 'getRank',
        'status' => 'getStatus',
        'certificate' => 'getCertificate',
        'type' => 'getType'
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
        return self::$swaggerModelName;
    }

    const RANK_PRO = 'pro';
    const RANK_STANDARD = 'standard';
    const RANK_UNTESTED = 'untested';
    const RANK_PROOFREAD = 'proofread';
    const RANK_SUPER_WORKER = 'super_worker';
    const STATUS_APPROVED = 'approved';
    const STATUS_REVOKED = 'revoked';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRankAllowableValues()
    {
        return [
            self::RANK_PRO,
            self::RANK_STANDARD,
            self::RANK_UNTESTED,
            self::RANK_PROOFREAD,
            self::RANK_SUPER_WORKER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_REVOKED,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['qualification_type'] = isset($data['qualification_type']) ? $data['qualification_type'] : null;
        $this->container['lc_src'] = isset($data['lc_src']) ? $data['lc_src'] : null;
        $this->container['lc_tgt'] = isset($data['lc_tgt']) ? $data['lc_tgt'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRankAllowableValues();
        if (!is_null($this->container['rank']) && !in_array($this->container['rank'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rank', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets qualification_type
     *
     * @return string
     */
    public function getQualificationType()
    {
        return $this->container['qualification_type'];
    }

    /**
     * Sets qualification_type
     *
     * @param string $qualification_type qualification_type
     *
     * @return $this
     */
    public function setQualificationType($qualification_type)
    {
        $this->container['qualification_type'] = $qualification_type;

        return $this;
    }

    /**
     * Gets lc_src
     *
     * @return string
     */
    public function getLcSrc()
    {
        return $this->container['lc_src'];
    }

    /**
     * Sets lc_src
     *
     * @param string $lc_src Language source
     *
     * @return $this
     */
    public function setLcSrc($lc_src)
    {
        $this->container['lc_src'] = $lc_src;

        return $this;
    }

    /**
     * Gets lc_tgt
     *
     * @return string
     */
    public function getLcTgt()
    {
        return $this->container['lc_tgt'];
    }

    /**
     * Sets lc_tgt
     *
     * @param string $lc_tgt Language target
     *
     * @return $this
     */
    public function setLcTgt($lc_tgt)
    {
        $this->container['lc_tgt'] = $lc_tgt;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return string
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param string $rank Rank of qualification
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $allowedValues = $this->getRankAllowableValues();
        if (!is_null($rank) && !in_array($rank, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rank', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of qualification
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string $certificate URL of a worker certification file
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


<?php
namespace ZeDb;

/**
 * Basic Entity
 */
abstract class Entity implements EntityAware
{
    /**
     * @var array
     */
    protected $_data = array();

    /**
     * Convert the entity to an array of keys and values
     * @return array
     */
    public function toArray()
    {
        return $this->_data;
    }

    public function getId()
    {
        if ( array_key_exists('id', $this->_data) ){
            return $this->_data['id'];
        } else {
            return null;
        }
    }

    public function setId(\int $id)
    {
        $this->_data['id'] = $id;
    }
}
<?php
namespace ZeDb;

use ZeDb\EntityAware;

interface Model
{
    /**
     * Persists an entity into the model
     * @abstract
     * @param EntityAware|array $entities
     * @return Model
     */
    public function persist($entities);

    /**
     * Saves the persisted entities into the database
     * @abstract
     * @return \bool
     */
    public function flush();

    /**
     * Save an entity directly in the database
     * @abstract
     * @param EntityAware $entity
     */
    public function save(EntityAware $entity);

    /**
     * Get an entity by Id
     * @abstract
     * @param int $id
     * @return EntityAware | null
     */
    public function get($id);
}
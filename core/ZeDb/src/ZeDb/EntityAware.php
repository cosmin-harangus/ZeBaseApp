<?php
namespace ZeDb;

interface EntityAware
{
    public function getId();
    public function setId(\int $id);
    public function toArray();
}
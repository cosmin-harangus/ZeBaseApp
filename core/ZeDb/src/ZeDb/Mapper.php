<?php
namespace ZeDb;

interface Mapper extends Entity
{
    public function getModel();
    public function __call($name, $args);
}
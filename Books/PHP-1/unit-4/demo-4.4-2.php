<?php

/**
 *
 */
abstract class DomainObject
{
    public static function create()
    {
        return new static();
    }
}

class User Extends DomainObject{};

class Docuemnt Extends DomainObject{};

var_dump(Docuemnt::create());
<?php
// Copyright 1999-2020. Plesk International GmbH.

namespace PleskX\Api\Struct\Server;

class AdminDomainList extends \PleskX\Api\Struct
{
    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var bool */
    public $main;

    /** @var string */
    public $guid;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'name',
            'type',
            'main',
            'guid'
        ]);
    }
}

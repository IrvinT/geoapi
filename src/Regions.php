<?php

namespace Geo\Component;

use \Geo\Component\Api;

class Regions extends Api
{
    protected $endpoint = "regions";
    protected $URL = null;

    /**
     * Available parameters for searching
     */
    protected $params = [
        'code',
        'nom',
    ];

    /**
     * Available fields in return
     */
    protected $fields = [
        'code',
        'nom',
    ];


    public function __construct()
    {
        $this->availableParams = $this->params;
        $this->availableFields = $this->fields;

        $this->URL = parent::BASE_URL.$this->endpoint;
    }
}

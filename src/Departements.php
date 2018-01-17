<?php

namespace Geo\Component;

use \Geo\Component\Api;

class Departements extends Api
{
    protected $endpoint = "departements";
    protected $URL = null;

    /**
     * Available parameters for searching
     */
    protected $params = [
        'code',
        'codeRegion',
        'nom',
    ];

    /**
     * Available fields in return
     */
    protected $fields = [
        'nom',
        'code',
        'codeRegion',
        'region',
    ];


    public function __construct()
    {
        $this->availableParams = $this->params;
        $this->availableFields = $this->fields;

        $this->URL = parent::BASE_URL.$this->endpoint;
    }
}

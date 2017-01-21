<?php

namespace Modules\User\DTOs;

class UserMarkupDTO
{
    /**
     * @var float
     */
    public $markup = 1;

    /**
     * @var int
     */
    public $vat = 0;

    public function __construct($markup, $vat)
    {
        $this->markup = $markup;
        $this->vat = $vat;
    }
}
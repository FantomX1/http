<?php

namespace Fracture\Http\Headers;

abstract class Common implements Abstracted
{

    protected $fieldName = 'Unspecified';

    protected $headerValue = '';


    /**
     * @param string $headerValue
     */
    public function __construct($headerValue = '')
    {
        $this->headerValue = $headerValue;
    }


    /**
     * @param string $headerValue
     */
    public function setValue($headerValue = '')
    {
        $this->headerValue = $headerValue;
    }


    public function getFieldName()
    {
        return $this->fieldName;
    }

    public function getFormatedValue()
    {
        return $this->headerValue;
    }
}

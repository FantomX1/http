<?php

namespace Fracture\Http\Headers;

class ContentType extends Common
{

    protected $headerName = 'Content-Type';


    /**
     * @param string $headerValue
     * @return array
     */
    protected function extractData($headerValue)
    {
        $result = [];
        $parts = preg_split('#;\s?#', $headerValue, -1, \PREG_SPLIT_NO_EMPTY);

        if (count($parts) === 0) {
            return [];
        }

        $result['value'] = array_shift($parts);

        foreach ($parts as $item) {
            list($key, $value) = explode('=', $item . '=');
            $result[ $key ] = $value;
        }

        return $result;
    }


    /**
     * @param string $type
     * @return bool
     */
    public function match($type)
    {
        return array_key_exists('value', $this->data) && $this->data['value'] === $type;
    }
}

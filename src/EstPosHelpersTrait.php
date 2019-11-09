<?php

namespace AhmetBedir\LaravelEstPos;

use Symfony\Component\Serializer\Encoder\XmlEncoder;

/**
 * EstPost Helpers Trait
 */
trait EstPosHelpersTrait
{
    /**
     * Create XML
     *
     * @param array $nodes
     * @param string $encoding
     * @return string|boolean
     */
    public function createXML(array $nodes, $encoding = 'UTF-8')
    {
        $rootNodeName = array_keys($nodes)[0];
        $encoder = new XmlEncoder($rootNodeName);
        $xml = $encoder->encode($nodes[$rootNodeName], 'xml', [
            'xml_encoding'  => $encoding
        ]);

        return $xml;
    }

    /**
     * Check Data or return null
     *
     * @param mixed $data
     * @return null|string
     */
    public function firstOrNull($data)
    {
        if (isset($data)) {
            if ((is_object($data) || is_array($data)) && !count((array) $data)) {
                $data = null;
            }
        } else {
            $data = null;
        }

        return (string) $data;
    }

    /**
     * Is Success
     *
     * @return boolean
     */
    public function isSuccess()
    {
        $success = false;
        if (isset($this->response) && $this->response->status == 'approved') {
            $success = true;
        }

        return $success;
    }

    /**
     * Is Error
     *
     * @return boolean
     */
    public function isError()
    {
        return !$this->isSuccess();
    }
}

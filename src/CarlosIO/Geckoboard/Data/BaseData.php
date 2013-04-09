<?php

namespace CarlosIO\Geckoboard\Data;

/**
 * Contains BaseData class
 */


/**
 * Class BaseData
 *
 * @package CarlosIO\Geckoboard\Data
 */

abstract class BaseData implements ArraySerializable
{
    abstract public function toArray();

    /**
     * @param $array
     * @param $key
     * @param $value
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    protected function addToArrayItem(&$array, $key, $value)
    {
        if (null !== $value) {
            $array[$key] = $value;
        }

        return $this;
    }

}

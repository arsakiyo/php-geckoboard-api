<?php

namespace CarlosIO\Geckoboard\Data\Highchart;


/**
 * Class Data
 *
 * @package CarlosIO\Geckoboard\Data\Highchart
 */

use CarlosIO\Geckoboard\Data\BaseData;

/**
 * Contains Data class
 */
class Data extends BaseData
{
    /**
     * @var string Hex representation of the RGB color code
     */
    protected $color;

    /**
     * @var \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    protected $dataLabels;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $legendIndex;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $sliced;

    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * @param string $color
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param \CarlosIO\Geckoboard\Data\Highchart\DataLabel $dataLabels
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setDataLabels($dataLabels)
    {
        $this->dataLabels = $dataLabels;

        return $this;
    }

    /**
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function getDataLabels()
    {
        return $this->dataLabels;
    }

    /**
     * @param string $id
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $legendIndex
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setLegendIndex($legendIndex)
    {
        $this->legendIndex = $legendIndex;

        return $this;
    }

    /**
     * @return int
     */
    public function getLegendIndex()
    {
        return $this->legendIndex;
    }

    /**
     * @param string $name
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param boolean $sliced
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setSliced($sliced)
    {
        $this->sliced = $sliced;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isSliced()
    {
        return $this->sliced;
    }

    /**
     * @param int $x
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $y
     * @return \CarlosIO\Geckoboard\Data\Highchart\Data
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Returns an array representation of this object
     *
     * @return array
     */
    public function toArray()
    {
        $result = array();

        $this
            ->addToArrayItem($result, 'color', $this->getColor())
            ->addToArrayItem($result, 'dataLabels', $this->getDataLabels() ? $this->getDataLabels()->toArray() : null)
            ->addToArrayItem($result, 'id', $this->getId())
            ->addToArrayItem($result, 'legendIndex', $this->getLegendIndex())
            ->addToArrayItem($result, 'name', $this->getName())
            ->addToArrayItem($result, 'sliced', $this->isSliced())
            ->addToArrayItem($result, 'x', $this->getX())
            ->addToArrayItem($result, 'y', $this->getY());

        return $result;

    }

}

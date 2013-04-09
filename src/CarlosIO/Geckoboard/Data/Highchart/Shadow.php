<?php

namespace CarlosIO\Geckoboard\Data\Highchart;


/**
 * Class Shadow
 *
 * @package CarlosIO\Geckoboard\Data\Highchart
 */

use CarlosIO\Geckoboard\Data\BaseData;

/**
 * Contains Shadow class
 */
class Shadow extends BaseData
{
    /**
     * @var string Hex representation of the RGB color code
     */
    protected $color;

    /**
     * @var int
     */
    protected $offsetX;

    /**
     * @var int
     */
    protected $offsetY;

    /**
     * @var int
     */
    protected $opacity;

    /**
     * @var int
     */
    protected $width;

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
     * @param int $offsetX
     * @return \CarlosIO\Geckoboard\Data\Highchart\Shadow
     */
    public function setOffsetX($offsetX)
    {
        $this->offsetX = $offsetX;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffsetX()
    {
        return $this->offsetX;
    }

    /**
     * @param int $offsetY
     * @return \CarlosIO\Geckoboard\Data\Highchart\Shadow
     */
    public function setOffsetY($offsetY)
    {
        $this->offsetY = $offsetY;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffsetY()
    {
        return $this->offsetY;
    }

    /**
     * @param int $opacity
     * @return \CarlosIO\Geckoboard\Data\Highchart\Shadow
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * @return int
     */
    public function getOpacity()
    {
        return $this->opacity;
    }

    /**
     * @param int $width
     * @return \CarlosIO\Geckoboard\Data\Highchart\Shadow
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
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
            ->addToArrayItem($result, 'offsetX', $this->getOffsetX())
            ->addToArrayItem($result, 'offsetY', $this->getOffsetY())
            ->addToArrayItem($result, 'opacity', $this->getOpacity())
            ->addToArrayItem($result, 'width', $this->getWidth());

        return $result;

    }

}

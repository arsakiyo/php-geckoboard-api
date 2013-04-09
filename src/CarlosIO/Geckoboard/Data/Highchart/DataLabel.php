<?php

namespace CarlosIO\Geckoboard\Data\Highchart;


/**
 * Class DataLabel
 *
 * @package CarlosIO\Geckoboard\Data\Highchart
 */

use CarlosIO\Geckoboard\Data\BaseData;

/**
 * Contains DataLabel class
 */
class DataLabel extends BaseData
{
    const ALIGN_LEFT   = 'left';
    const ALIGN_RIGHT  = 'right';
    const ALIGN_CENTER = 'center';

    /**
     * @var string
     */
    protected $align;

    /**
     * @var string Hex representation of the RGB color code
     */
    protected $backgroundColor;

    /**
     * @var string Hex representation of the RGB color code
     */
    protected $borderColor;

    /**
     * @var int
     */
    protected $borderRadius;

    /**
     * @var int
     */
    protected $borderWidth;

    /**
     * @var string Hex representation of the RGB color code
     */
    protected $color;

    /**
     * @var boolean
     */
    protected $crop;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var boolean
     */
    protected $inside;

    /**
     * @var int
     */
    protected $padding;

    /**
     * @var int
     */
    protected $rotation;

    /**
     * @var \CarlosIO\Geckoboard\Data\Highchart\Shadow
     */
    protected $shadow;

    /**
     * @var \stdClass
     */
    protected $style;

    /**
     * @var boolean
     */
    protected $useHtml;

    /**
     * @var string
     */
    protected $verticalAlign;

    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * @var int
     */
    protected $zIndex;

    /**
     * @param string $align
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setAlign($align)
    {
        $this->align = $align;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * @param string $backgroundColor
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $borderColor
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * @param int $borderRadius
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setBorderRadius($borderRadius)
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    /**
     * @return int
     */
    public function getBorderRadius()
    {
        return $this->borderRadius;
    }

    /**
     * @param int $borderWidth
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = $borderWidth;

        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * @param string $color
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
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
     * @param boolean $crop
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setCrop($crop)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isCrop()
    {
        return $this->crop;
    }

    /**
     * @param boolean $enabled
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param string $format
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param boolean $inside
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setInside($inside)
    {
        $this->inside = $inside;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isInside()
    {
        return $this->inside;
    }

    /**
     * @param int $padding
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setPadding($padding)
    {
        $this->padding = $padding;

        return $this;
    }

    /**
     * @return int
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * @param int $rotation
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setRotation($rotation)
    {
        $this->rotation = $rotation;

        return $this;
    }

    /**
     * @return int
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    /**
     * @param \CarlosIO\Geckoboard\Data\Highchart\Shadow $shadow
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setShadow($shadow)
    {
        $this->shadow = $shadow;

        return $this;
    }

    /**
     * @return \CarlosIO\Geckoboard\Data\Highchart\Shadow
     */
    public function getShadow()
    {
        return $this->shadow;
    }

    /**
     * @param \stdClass $style
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * @return \stdClass
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param boolean $useHtml
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setUseHtml($useHtml)
    {
        $this->useHtml = $useHtml;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isUseHtml()
    {
        return $this->useHtml;
    }

    /**
     * @param string $verticalAlign
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setVerticalAlign($verticalAlign)
    {
        $this->verticalAlign = $verticalAlign;

        return $this;
    }

    /**
     * @return string
     */
    public function getVerticalAlign()
    {
        return $this->verticalAlign;
    }

    /**
     * @param int $x
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
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
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
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
     * @param int $zIndex
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataLabel
     */
    public function setZIndex($zIndex)
    {
        $this->zIndex = $zIndex;

        return $this;
    }

    /**
     * @return int
     */
    public function getZIndex()
    {
        return $this->zIndex;
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
            ->addToArrayItem($result, 'align', $this->getAlign())
            ->addToArrayItem($result, 'backgroundColor', $this->getBackgroundColor())
            ->addToArrayItem($result, 'borderColor', $this->getBorderColor())
            ->addToArrayItem($result, 'borderRadius', $this->getBorderRadius())
            ->addToArrayItem($result, 'borderWidth', $this->getBorderWidth())
            ->addToArrayItem($result, 'color', $this->getColor())
            ->addToArrayItem($result, 'crop', $this->isCrop())
            ->addToArrayItem($result, 'enabled', $this->isEnabled())
            ->addToArrayItem($result, 'format', $this->getFormat())
            ->addToArrayItem($result, 'inside', $this->isInside())
            ->addToArrayItem($result, 'padding', $this->getPadding())
            ->addToArrayItem($result, 'rotation', $this->getRotation())
            ->addToArrayItem($result, 'shadow', $this->getShadow() ? $this->getShadow()->toArray() : null)
            ->addToArrayItem($result, 'style', $this->getStyle())
            ->addToArrayItem($result, 'useHTML', $this->isUseHtml())
            ->addToArrayItem($result, 'verticalAlign', $this->getVerticalAlign())
            ->addToArrayItem($result, 'x', $this->getX())
            ->addToArrayItem($result, 'y', $this->getY())
            ->addToArrayItem($result, 'zIndex', $this->getZIndex());

        return $result;
    }
}

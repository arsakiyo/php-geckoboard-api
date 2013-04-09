<?php

namespace CarlosIO\Geckoboard\Data\Highchart;

use CarlosIO\Geckoboard\Data\BaseData;
use CarlosIO\Geckoboard\Data\Highchart\DataItem;

/**
 * Contains Series class
 */


/**
 * Class Series
 *
 * @package CarlosIO\Geckoboard\Data\Highchart
 */

class Series extends BaseData
{
    const TYPE_AREA       = 'area';
    const TYPE_AREASPLINE = 'areaspline';
    const TYPE_BAR        = 'bar';
    const TYPE_COLUMN     = 'column';
    const TYPE_LINE       = 'line';
    const TYPE_PIE        = 'pie';
    const TYPE_SCATTER    = 'scatter';
    const TYPE_SPLINE     = 'spline';

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $index;

    /**
     * @var int
     */
    protected $legendIndex;

    /**
     * @var string
     */
    protected $stack;

    /**
     * @var string
     */
    protected $xAxis;

    /**
     * @var string
     */
    protected $yAxis;

    /**
     * @var \CarlosIO\Geckoboard\Data\Highchart\DataItem[]
     */
    protected $data;

    /**
     * @param \CarlosIO\Geckoboard\Data\Highchart\DataItem[] $data
     *
     * @return \CarlosIO\Geckoboard\Data\Highchart\Series
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return \CarlosIO\Geckoboard\Data\Highchart\DataItem[]
     */
    public function getData()
    {
        if (null === $this->data) {
            $this->data = array();
        }

        return $this->data;
    }

    /**
     * @param \CarlosIO\Geckoboard\Data\Highchart\DataItem $data
     *
     * @return \CarlosIO\Geckoboard\Data\Highchart\Series
     */
    public function addData(DataItem $data)
    {
        $this->getData();

        $this->data[] = $data;

        return $this;
    }

    /**
     * @param int $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $legendIndex
     */
    public function setLegendIndex($legendIndex)
    {
        $this->legendIndex = $legendIndex;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $stack
     */
    public function setStack($stack)
    {
        $this->stack = $stack;
    }

    /**
     * @return string
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $xAxis
     */
    public function setXAxis($xAxis)
    {
        $this->xAxis = $xAxis;
    }

    /**
     * @return string
     */
    public function getXAxis()
    {
        return $this->xAxis;
    }

    /**
     * @param string $yAxis
     */
    public function setYAxis($yAxis)
    {
        $this->yAxis = $yAxis;
    }

    /**
     * @return string
     */
    public function getYAxis()
    {
        return $this->yAxis;
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
            ->addToArrayItem($result, 'type', $this->getType())
            ->addToArrayItem($result, 'name', $this->getName())
            ->addToArrayItem($result, 'index', $this->getIndex())
            ->addToArrayItem($result, 'legendIndex', $this->getLegendIndex())
            ->addToArrayItem($result, 'stack', $this->getStack())
            ->addToArrayItem($result, 'xAxis', $this->getXAxis())
            ->addToArrayItem($result, 'yAxis', $this->getYAxis())
            ->addToArrayItem(
                $result,
                'data',
                array_map(
                    function ($item) {
                        return $item->toArray;
                    },
                    $this->getData()
                )
            );

        return $result;

    }


}

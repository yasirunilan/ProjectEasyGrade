<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart\SteppedAreaChartOptions;

/**
 * @author Christophe Meneses
 */
class SteppedAreaChart extends Chart
{
    /**
     * @var SteppedAreaChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new SteppedAreaChartOptions();
    }


    /**
     * Returns the chart type.
     *
     * @return string
     */
    protected function getType()
    {
        return 'SteppedAreaChart';
    }

    /**
     * Returns library used by chart.
     *
     * @return string
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * Returns the chart package.
     *
     * @return string
     */
    public function getPackage()
    {
        return 'corechart';
    }

    /**
     * @return SteppedAreaChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options SteppedAreaChartOptions
     *
     * @return SteppedAreaChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}

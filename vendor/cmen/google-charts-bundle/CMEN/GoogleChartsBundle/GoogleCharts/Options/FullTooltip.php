<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class FullTooltip extends AdvancedTooltip
{
    /**
     * What information to display when the user hovers over a pie slice. The following values are supported :
     * 'both' - [Default] Display both the absolute value of the slice and the percentage of the whole.
     * 'value' - Display only the absolute value of the slice.
     * 'percentage' - Display only the percentage of the whole represented by the slice.
     *
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     *
     * @return FullTooltip
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}

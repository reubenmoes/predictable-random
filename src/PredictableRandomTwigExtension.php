<?php
/**
 * Predictable Random plugin for Craft CMS 3.x
 *
 * Creates a predictable random number based on a seed value.
 *
 * @link      http://hai-studio.com
 * @copyright Copyright (c) 2017 Tobias Toft
 */

namespace haistudio\predictablerandom;

/**
 * @author    Tobias Toft
 * @package   PredictableRandom
 * @since     1.0.0
 */
class TwigExtension extends \Twig_Extension
{

    private $seed = 1;
    

    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'PredictableRandom';
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('predictableRandom', [$this, 'generateNumber']),
            new \Twig_SimpleFunction('setPredictableRandomSeed', [$this, 'setRandomSeed'])
        ];
    }

    /**
     * Generate predictable random number
     *
     * @param null $param
     *
     * @return string
     */
    public function generateNumber($param = null)
    {
        $min = $param[0];
        $max = $param[1];

        mt_srand($this->seed);
        $result = mt_rand($min, $max);
        $this->seed++;
        srand();

        return $result;
    }

    /**
     * Set predictable random seed number
     *
     * @param null $param
     *
     * @return void
     */
    public function setRandomSeed($param = null)
    {
        $this->seed = $param;
    }

    /**
     * Get predictable random seed number
     *
     * @return integer
     */
    public function getRandomSeed($param = null)
    {
        return $this->seed;
    }
}

<?php
/**
 * Predictable Random plugin for Craft CMS 3.x
 *
 * Generates a predictable random number based on a starting seed.
 *
 * @link      http://www.hai-studio.com
 * @copyright Copyright (c) 2017 Tobias Toft
 */

namespace haistudio\predictablerandom;


use Craft;


/**
 * @author    Tobias Toft
 * @package   PredictableRandom
 * @since     1.0.0
 */
class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();

        if (Craft::$app->getRequest()->getIsSiteRequest()) {
            // Add in our Twig extension
            Craft::$app->getView()->getTwig()->addExtension(new TwigExtension());
        }
    }
}

<?php
/**
 * ArhamPlugin plugin for Craft CMS 3.x
 *
 * Plugin base structures for Craft 3.x
 *
 * @link      https://github.com/aanimation/craft3pluginbase
 * @copyright Copyright (c) 2020 Arham
 */

namespace aanimation\arhamplugin\variables;

use aanimation\arhamplugin\ArhamPlugin;

use Craft;

/**
 * ArhamPlugin Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.arhamPlugin }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Arham
 * @package   ArhamPlugin
 * @since     1.0.0
 */
class ArhamPluginVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.arhamPlugin.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.arhamPlugin.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}

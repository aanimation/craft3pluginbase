<?php
/**
 * ArhamPlugin plugin for Craft CMS 3.x
 *
 * Plugin base structures for Craft 3.x
 *
 * @link      https://github.com/aanimation/craft3pluginbase
 * @copyright Copyright (c) 2020 Arham
 */

namespace aanimation\arhamplugin\console\controllers;

use aanimation\arhamplugin\ArhamPlugin;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Arham Command
 *
 * The first line of this class docblock is displayed as the description
 * of the Console Command in ./craft help
 *
 * Craft can be invoked via commandline console by using the `./craft` command
 * from the project root.
 *
 * Console Commands are just controllers that are invoked to handle console
 * actions. The segment routing is plugin-name/controller-name/action-name
 *
 * The actionIndex() method is what is executed if no sub-commands are supplied, e.g.:
 *
 * ./craft arham-plugin/arham
 *
 * Actions must be in 'kebab-case' so actionDoSomething() maps to 'do-something',
 * and would be invoked via:
 *
 * ./craft arham-plugin/arham/do-something
 *
 * @author    Arham
 * @package   ArhamPlugin
 * @since     1.0.0
 */
class ArhamController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle arham-plugin/arham console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console ArhamController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle arham-plugin/arham/do-something console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console ArhamController actionDoSomething() method\n";

        return $result;
    }
}

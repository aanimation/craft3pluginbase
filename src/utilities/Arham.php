<?php
/**
 * ArhamPlugin plugin for Craft CMS 3.x
 *
 * Plugin base structures for Craft 3.x
 *
 * @link      https://github.com/aanimation/craft3pluginbase
 * @copyright Copyright (c) 2020 Arham
 */

namespace aanimation\arhamplugin\utilities;

use aanimation\arhamplugin\ArhamPlugin;
use aanimation\arhamplugin\assetbundles\arhamutility\ArhamUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * ArhamPlugin Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Arham
 * @package   ArhamPlugin
 * @since     1.0.0
 */
class Arham extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('arham-plugin', 'Arham');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'arhamplugin-arham';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@aanimation/arhamplugin/assetbundles/arhamutility/dist/img/Arham-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(ArhamUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'arham-plugin/_components/utilities/Arham_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}

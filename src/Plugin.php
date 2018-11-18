<?php
/**
 * @todo Add documentation.
 */

namespace HenriqueSilverio\PluginCraft;

/**
 * @todo Add documentation.
 */
final class Plugin
{
    /**
     * @todo Add documentation.
     */
    const VERSION = '0.0.1';

    /**
     * @todo Add documentation.
     */
    protected static $instance;

    /**
     * @todo Add documentation.
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @todo Add documentation.
     */
    public function start()
    {
        add_action('init', [$this, 'loadTranslation']);
    }

    /**
     * @todo Add documentation.
     */
    public function loadTranslation()
    {
        $path = dirname(dirname(plugin_basename(__FILE__))) . '/languages';

        load_plugin_textdomain('wp-plugin-craft', false, $path);
    }
}

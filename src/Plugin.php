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
    public static function get_instance()
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
        add_action('init', [$this, 'load_translation']);
    }

    /**
     * @todo Add documentation.
     * @see load_plugin_textdomain()
     */
    public function load_translation()
    {
        $path = dirname(dirname(plugin_basename(__FILE__))) . '/languages';

        load_plugin_textdomain('wp-plugin-craft', false, $path);
    }
}

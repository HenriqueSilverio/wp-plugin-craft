<?php

namespace HenriqueSilverio\PluginCraft;

final class Plugin
{
    const VERSION = '0.0.1';

    protected static $instance;

    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function start()
    {
        add_action('init', [$this, 'load_plugin_textdomain']);
    }

    public function load_plugin_textdomain()
    {
        $locale = apply_filters('plugin_locale', get_locale(), 'wp-plugin-craft');
        load_textdomain('wp-plugin-craft', WP_LANG_DIR . 'wp-plugin-craft/wp-plugin-craft-' . $locale . '.mo');
        load_plugin_textdomain('wp-plugin-craft', false, dirname(dirname(plugin_basename(__FILE__))) . '/languages');
    }
}

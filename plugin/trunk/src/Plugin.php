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
    const VERSION = '1.0.0';

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
    {}
}

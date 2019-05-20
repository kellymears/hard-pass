<?php

namespace TinyPixel\HardPass;

/**
 * HardPass
 *
 * @author Kelly Mears <developers@tinypixel.dev>
 * @license MIT License
 */
class HardPass
{
    /**
     * Construct
     *
     * @param object Blacklist collection
     * @return void
     */
    public function __construct($blacklist)
    {
        // set blacklist
        $this->blacklist = $blacklist;

        // generous plugin dependencies
        $this->dependencies = ['wp-editor', 'wp-element', 'wp-plugins', 'wp-dom-ready', 'wp-edit-post'];

        // hooks
        add_action('rest_api_init', [$this, 'registerRoutes']);
        add_action('enqueue_block_editor_assets', [$this, 'enqueueAssets']);
    }

    /**
     * Register REST Routes
     *
     * @param void
     * @return void
     */
    public function registerRoutes()
    {
        register_rest_route('hardpass/v2', 'blacklist', [
            'methods' => 'GET',
            'callback' => [$this, 'restCallback'],
        ]);
    }

    /**
     * REST Callback
     *
     * @param void
     * @return object JSON service for REST Route
     */
    public function restCallback()
    {
        return $this->blacklist->toJson();
    }

    /**
     * Enqueue Block Editor Plugin Assets
     *
     * @param void
     * @return void
     */
    public function enqueueAssets()
    {
        wp_enqueue_script(
            'hardpass/blacklist',
            plugins_url('/hard-pass/dist/blacklist.js'),
            $this->dependencies,
            '',
            null,
            true
        );
    }
}

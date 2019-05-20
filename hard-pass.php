<?php
/**
 * Plugin Name: Hard Pass
 * Description: Developer tool for maintaing a hardcoded block blacklist
 **/

namespace TinyPixel;

require __DIR__ .'/vendor/autoload.php';

use \TinyPixel\HardPass\HardPass;

new Hardpass(collect(require __DIR__ .'/blacklist.config.php'));

<?php

declare(strict_types=1);

/*
 * Plugin Name: My Symfony Plugin
 * Description: A simple Symfony plugin for WordPress.
 * Version: 1.0.0
 * Author: Your Company
 * Author URI: https://example.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: app-plugin
 */

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/vendor/autoload.php';

use MySymfonyPlugin\Kernel;

// Instantiate the kernel
$kernel = new Kernel();

// Optionally, get the container if needed
$container = $kernel->getContainer();

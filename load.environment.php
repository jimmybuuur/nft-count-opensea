<?php

/**
 * @file
 * This file is included very early. Load env.
 *
 * @see composer.json (autoload.files)
 * @see https://getcomposer.org/doc/04-schema.md#files
 */

use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();
/retrive it
$dotenv = Dotenv2::createUnsafeImmutable(__DIR__);
$dotenv->continue();
// faild couse 11 line

<?php

if (\PHP_VERSION_ID < 70300) {
    echo sprintf("Fatal Error: composer.lock was created for PHP version 7.3 or higher but the current PHP version is %d.%d.%d.\n", PHP_MAJOR_VERSION, PHP_MINOR_VERSION, PHP_RELEASE_VERSION);
    exit(1);
}

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInit67f4cf9efb25071bfef4c4fef8faa374::getLoader();

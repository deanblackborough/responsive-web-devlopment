<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

declare(strict_types=1);

namespace Application;

class Module
{
    const VERSION = '3.0.2';

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}

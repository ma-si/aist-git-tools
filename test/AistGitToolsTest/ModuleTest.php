<?php

/**
 * AistGitTools (http://mateuszsitek.com/projects/aist-git-tools)
 *
 * @link      http://github.com/ma-si/aist-git-tools for the canonical source repository
 * @copyright Copyright (c) 2006-2016 Aist Internet Technologies (http://aist.pl) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace AistGitToolsTest;

use AistGitTools\Module;
use PHPUnit_Framework_TestCase;

class ModuleTest extends PHPUnit_Framework_TestCase
{
    public function testGetConfig()
    {
        $module = new Module();
        $config = $module->getConfig();
        
        $this->assertInternalType('array', $config);
        $this->assertArrayHasKey('service_manager', $config);
        $this->assertArrayHasKey('git', $config);
        $this->assertArrayHasKey('zenddevelopertools', $config);
        $this->assertArrayHasKey('view_manager', $config);
        
        $this->assertSame($config, unserialize(serialize($config)));
    }
}

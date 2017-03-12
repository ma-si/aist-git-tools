<?php

/**
 * AistGitTools (http://mateuszsitek.com/projects/aist-git-tools)
 *
 * @link      http://github.com/ma-si/aist-git-tools for the canonical source repository
 * @copyright Copyright (c) 2006-2017 Aist Internet Technologies (http://aist.pl) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace AistGitToolsTest\Filter;

use AistGitTools\Filter\GitVersionFilter;
use PHPUnit_Framework_TestCase;

class GitVersionFilterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getValuesForFilterTest
     * @param $input
     * @param $expected
     */
    public function testFilter($input, $expected)
    {
        $filter = new GitVersionFilter();

        $this->assertEquals($expected, $filter->filter($input));
    }

    /**
     * @return array
     */
    public function getValuesForFilterTest()
    {
        $obj = new \stdClass;

        return [
            [
                'git version 2.11.0' . PHP_EOL,
                '2.11.0',
            ],
            [
                'git version 2.0.0',
                '2.0.0',
            ],
            [
                '2.1.0',
                '2.1.0',
            ],
            [
                $obj,
                $obj,
            ],
            [
                null,
                '',
            ],
            [
                null,
                null,
            ],
        ];
    }
}
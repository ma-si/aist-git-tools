<?php

/**
 * AistGitTools (http://mateuszsitek.com/projects/aist-git-tools)
 *
 * @link      http://github.com/ma-si/aist-git-tools for the canonical source repository
 * @copyright Copyright (c) 2006-2017 Aist Internet Technologies (http://aist.pl) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace AistGitTools\Filter;

use Zend\Filter\PregReplace;

class GitVersionFilter extends PregReplace
{
    protected $options = [
        'pattern'     => [
            '/^git version /',
            '/\n/',
        ],
        'replacement' => '',
    ];
}

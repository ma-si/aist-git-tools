<?php

/**
 * AistGitTools (http://mateuszsitek.com/projects/aist-git-tools)
 *
 * @link      http://github.com/ma-si/aist-git-tools for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Aist Internet Technologies (http://aist.pl) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

return array(
    'service_manager' => array(
        'invokables' => array(
            'git.toolbar' => 'AistGitTools\Collector\GitCollector',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'template_map' => array(
            'zend-developer-tools/toolbar/git-data' => __DIR__ . '/../view/zend-developer-tools/toolbar/git-data.phtml',
        ),
    ),
    'zenddevelopertools' => array(
        'profiler' => array(
            'collectors' => array(
                'git.toolbar' => 'git.toolbar',
            ),
        ),
        'toolbar' => array(
            'entries' => array(
                'git.toolbar'  => 'zend-developer-tools/toolbar/git-data',
            ),
        ),
    ),
    'git' => array(
        'hooks' => array(
            'applypatch-msg',
            'pre-applypatch',
            'post-applypatch',
            'pre-commit',
            'prepare-commit-msg',
            'commit-msg',
            'post-commit',
            'pre-rebase',
            'post-checkout',
            'post-merge',
            'pre-receive',
            'update',
            'post-receive',
            'post-update',
            'pre-auto-gc',
            'post-rewrite',
            'pre-push',
        ),
    ),
);

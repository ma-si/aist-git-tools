<?php

/**
 * AistGitTools (http://mateuszsitek.com/projects/aist-git-tools)
 *
 * @link      http://github.com/ma-si/aist-git-tools for the canonical source repository
 * @copyright Copyright (c) 2006-2017 Aist Internet Technologies (http://aist.pl) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

return [
    'service_manager' => [
        'invokables' => [
            'git.toolbar' => 'AistGitTools\Collector\GitCollector',
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'template_map' => [
            'zend-developer-tools/toolbar/git-data' => __DIR__ . '/../view/zend-developer-tools/toolbar/git-data.phtml',
        ],
    ],
    'zenddevelopertools' => [
        'profiler' => [
            'collectors' => [
                'git.toolbar' => 'git.toolbar',
            ],
        ],
        'toolbar' => [
            'entries' => [
                'git.toolbar' => 'zend-developer-tools/toolbar/git-data',
            ],
        ],
    ],
    'git' => [
        'hooks' => [
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
        ],
    ],
];

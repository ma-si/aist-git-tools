<?php

/**
 * AistGitTools (http://mateuszsitek.com/projects/aist-git-tools)
 *
 * @link      http://github.com/ma-si/aist-git-tools for the canonical source repository
 * @copyright Copyright (c) 2006-2016 Aist Internet Technologies (http://aist.pl) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace AistGitTools\Collector;

use AistGitTools\Filter\GitVersionFilter;
use Gitonomy\Git\Repository;
use Zend\Mvc\MvcEvent;
use ZendDeveloperTools\Collector\CollectorInterface;

/**
 * Git Data Collector.
 */
class GitCollector implements CollectorInterface
{
    /**
     * Hooks from config.
     *
     * @var array
     */
    private $hooks = [];

    /**
     * Enabled hooks.
     *
     * @var array
     */
    private $enabledHooks = [];

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'git.toolbar';
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {
        return 15;
    }

    /**
     * @inheritdoc
     */
    public function collect(MvcEvent $e)
    {
        $config = $e->getApplication()->getServiceManager()->get('Config');
        foreach ($config['git']['hooks'] as $hook) {
            $enabled = $this->hasHook($hook);
            $this->hooks[$hook] = $enabled;
            if ($enabled) {
                $this->enabledHooks[] = $hook;
            }
        }
    }

    /**
     * @param string $name
     * @return boolean
     */
    public function hasHook($name)
    {
        return $this->getRepository()->getHooks()->has($name);
    }

    /**
     * Get repository.
     *
     * @return \Gitonomy\Git\Repository
     */
    public function getRepository()
    {
        $directory = $this->getDirectory();
        $repository = new Repository($directory);

        return $repository;
    }

    /**
     * Application repository path.
     *
     * @return string
     */
    public function getDirectory()
    {
        return getcwd();
    }

    /**
     * Hooks from config.
     *
     * @return array
     */
    public function getHooks()
    {
        return $this->hooks;
    }

    /**
     * Enabled hooks.
     *
     * @return array
     */
    public function getEnabledHooks()
    {
        return $this->enabledHooks;
    }

    /**
     * Git Version.
     *
     * @return string
     */
    public function getGitVersion()
    {
        $filter = new GitVersionFilter();
        $repository = $this->getRepository();

        return $filter->filter($repository->run('version'));
    }

    /**
     * Repository size in KB.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->getRepository()->getSize() . 'KB';
    }

    /**
     * Repository tags.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getRepository()->getReferences()->getTags();
    }

    /**
     * Remote names "git remote".
     *
     * @return array
     */
    public function getRemoteNames()
    {
        $remotes = explode(PHP_EOL, $this->getRepository()->run('remote'));

        return $remotes;
    }

    /**
     * Remotes "git remote -v".
     *
     * @return array
     */
    public function getRemotes()
    {
        $remotes = explode(PHP_EOL, $this->getRepository()->run('remote', ['-v']));

        return $remotes;
    }
}

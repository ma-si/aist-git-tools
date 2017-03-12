Aist Git Tools [![SensioLabsInsight](https://insight.sensiolabs.com/projects/d5905635-cc2b-4845-acb2-7548a67d8945/small.png)](https://insight.sensiolabs.com/projects/d5905635-cc2b-4845-acb2-7548a67d8945)
==============
Module providing git toolbar for the [Zend Developer Tools](https://github.com/zendframework/ZendDeveloperTools).

[![Build Status](https://travis-ci.org/ma-si/aist-git-tools.svg?branch=master)](https://travis-ci.org/ma-si/aist-git-tools)
[![Total Downloads](https://poser.pugx.org/aist/aist-git-tools/downloads)](https://packagist.org/packages/aist/aist-git-tools)
[![Reference Status](https://www.versioneye.com/php/aist:aist-git-tools/reference_badge.svg?style=flat)](https://www.versioneye.com/php/aist:aist-git-tools/references)
[![Dependency Status](https://www.versioneye.com/user/projects/55d83a578d9c4b0018000001/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55d83a578d9c4b0018000001)
[![Packagist](https://img.shields.io/packagist/v/aist/aist-git-tools.svg)]()
[![Code Climate](https://codeclimate.com/github/ma-si/aist-git-tools/badges/gpa.svg)](https://codeclimate.com/github/ma-si/aist-git-tools)
[![Stories in Ready](https://badge.waffle.io/ma-si/aist-git-tools.svg?label=ready&title=Ready)](http://waffle.io/ma-si/aist-git-tools)

[![License](https://poser.pugx.org/aist/aist-git-tools/license)](https://packagist.org/packages/aist/aist-git-tools)


About
=====
Information of the application repository data like this:

![git toolbar for zend developer tools](https://github.com/ma-si/aist-git-tools/blob/master/data/docs/toolbar.png)

- [x] git version info
- [x] directory info
- [x] repository size
- [x] branches list
- [x] highlight current branch
- [x] tags list
- [x] enabled hooks list
- [x] remotes list
- [x] zend component installer
- [ ] git time metrics (GTM)
- [ ] git flow


Installation
============
Installation of this module uses composer. For composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

1. Install the module via composer by running:
    ```bash
    composer require aist/aist-git-tools dev-master
    ```
   or download it directly from github and place it in your application's `module/` directory.
2. Add the `AistGitTools` module to the module section of your `config/application.config.php`


Credits
-------
Git Logo by Jason Long is licensed under the Creative Commons Attribution 3.0 Unported License.

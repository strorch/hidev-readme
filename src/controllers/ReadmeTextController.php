<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\controllers;

/**
 * Goal for README.txt file.
 */
class ReadmeTextController extends \hidev\controllers\TemplateController
{
    public function getTemplate()
    {
        return 'readme-txt';
    }
}

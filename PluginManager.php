<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\Maker;

use Eccube\Plugin\AbstractPluginManager;

class PluginManager extends AbstractPluginManager
{

    /**
     * Image folder path (cop source)
     * @var type
     */
    protected $imgSrc;
    /**
     *Image folder path (copy destination)
     * @var type
     */
    protected $imgDst;

    public function __construct()
    {
    }

    public function install($config, $app)
    {
        $this->migrationSchema($app, __DIR__ . '/Migration', $config['code']);
    }

    public function uninstall($config, $app)
    {
        $this->migrationSchema($app, __DIR__ . '/Migration', $config['code'], 0);
    }

    public function enable($config, $app)
    {

    }

    public function disable($config, $app)
    {

    }

    public function update($config, $app)
    {

    }

}

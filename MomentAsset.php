<?php

namespace goryachev\yii2fullcalendar;

/**
 * Asset bundle for moment.js
 *
 * @category assets
 * @package yii2fullcalendar
 * @version 1.0.0
 * 
 * @access public
 * 
 * @author Alexander Goryachev <mail@a-goryachev.ru>
 * @copyright (c) 2014, Alexander Goryachev <mail@a-goryachev.ru>
 * @license http://opensource.org/licenses/BSD-3-Clause
 * @link http://www.a-goryachev.ru
 * @link https://github.com/a-goryachev
 * 
 */
class MomentAsset extends \yii\web\AssetBundle{
    public $sourcePath='@vendor/bower/moment/min';
    public $js=[
        'moment-with-locales.min.js'
    ];
}

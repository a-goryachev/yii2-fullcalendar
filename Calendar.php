<?php

namespace goryachev\yii2fullcalendar;

/**
 * Fullcalendar plugin wrapper.
 *
 * @category widgets
 * @package yii2fullcalendar
 * 
 * @version 1.1.0
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
class Calendar extends \yii\base\Widget{
    
    /**
     * Fullcalendar plugin options.
     * @link http://fullcalendar.io/docs/
     * 
     * All callback options (for example: 'viewRenderer', 'eventClick', etc)
     * must be an \yii\web\JsExpression object or null.
     * 
     * @var array
     */
    public $pluginOptions=[];
    
    public $htmlOptions=[];
    
    /**
     * Enable google calendar support.
     * 
     * For using google calendar, set plugin options like below:
     * <code>
     * $pluginOptions['googleCalendarApiKey']=<YOUR API KEY>;
     * 
     * $pluginOptions['events']['googleCalendarId']=<YOUR GOOGLE CALENDAR ID>
     * </code>
     * 
     * For more information, read fullcalendar documentation
     * @link http://fullcalendar.io/docs/google_calendar/ Google calendar
     * @since 1.1.0
     * @var boolean
     */
    public $googleCalendar=false;
    
    public function run(){
        /* check id */
        if(!isset($this->htmlOptions['id'])){
            $this->htmlOptions['id']=$this->getId();
        }
        /* check language */
        if(!isset($pluginOptions['lang'])){
            $this->pluginOptions['lang']=\Yii::$app->language;
        }
        
        
        FullcalendarAsset::register($this->getView());
        /* google calendar */
        if($this->googleCalendar===true){
            GooglecalendarAsset::register($this->getView());
        }
        
        $pluginOptions=\yii\helpers\Json::encode($this->pluginOptions);
        $this->getView()->registerJs('jQuery("#'.$this->getId().'").fullCalendar('.$pluginOptions.');');
        return \yii\helpers\Html::tag('div', '', $this->htmlOptions);
    }
    
}

<?php
/**
 * Created by PhpStorm.
 * User: 124
 * Date: 2017/6/26
 * Time: 16:33
 * 主要用于页面跳转
 */
class Indexcontroller extends Yaf_Controller_Abstract
{

    public function indexAction()
    {
        return $this->getView()->make('index',[]);
    }

    public function defaultAction()
    {
        return $this->getView()->make('index_v3', []);
    }

}
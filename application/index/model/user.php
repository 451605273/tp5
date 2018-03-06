<?php
namespace app\index\model;
use think\Model;
class user extends Model{
	protected function initialize(){
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }
    public function getCar(){
    	return $this->hasOne('Car', 'uid', 'user_id');
    }


}
<?php
namespace app\index\model;
use think\Model;
class goods extends Model{
	private $goods;
     //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    	//添加
    	$goods = new goods;
    	//更改
    	// $goodsUpdata = goods::get(1);
    }


    // 添加数据
	public function add(){
		$goods->goodsName = '诺基亚';
		$goods->price = '300';
		$goods->save();
	}
	// 修改
	public function updata(){
		$goods->save([
			'goodsName' => '摩托罗拉',
		],['id' => 1]);
	}
	//查询范围

	protected function scopeEmail($query){
		$query->where('email','haiyang@qq.com');
	}



}
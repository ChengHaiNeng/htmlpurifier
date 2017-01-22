<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function show(){
        $this->display();
    }

    public function add(){
    	$goods = new \Model\GoodsModel();//實例化GoodsModel對象
    	//兩個邏輯：展示、收集
    	if(IS_POST){
    		//提交表單
    		
    		$data = $goods->create();
    		//htmlpurifier
    		$data['goods_introduce'] = \fanXSS($_POST['goods_introduce']);
    		if($goods->add($data)){
    			$this->success("添加商品成功",U("show"),2);
    		}else{
    			$this->error("添加商品失敗",U("add"),2);
    		}
    	}else{
    		//展示表單
    		$this->display();
    	}
        
    }

    public function update(){
        $this->display();
    }
}
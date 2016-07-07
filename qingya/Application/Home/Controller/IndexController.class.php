<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	/*
	 * 首页
	 */
    public function index(){
    	 $model = D("commodity");
    	$data=$model->select();
    	$this->display('index');
    }
    
    /**
     * 列表
     */
    public function goodsList(){
    	$model = D("commodity");
    	$data=$model->select();
    	$this->display('list');
    }
}
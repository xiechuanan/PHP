<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	/**
	 * 后台
	 */
    public function index(){
    	$model = D("commodity");
    	$data=$model->select();
    	$this->display('index');
    }
    
}
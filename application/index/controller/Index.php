<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;

class Index extends Base
{
    public function index()
    {
        $article = Db::query("call get_admin()");
        var_dump($article);
        exit;
    	$articleres=db('article')->order('id desc')->paginate(3);
        $page = $articleres->render();
    	$this->assign(['articleres'=>$articleres,'page'=>$page]);
        return $this->fetch();
    }




}

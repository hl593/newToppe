<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Released under the MIT License.
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\index\model\IndexModel;
use cmf\controller\HomeBaseController;

class IndexController extends HomeBaseController
{
    /**
     *质保录入界面
     */
    public function index()
    {
        return $this->fetch(':index');
    }

    /**
     *质保录入
     */
    public function add(){
        if($_POST['sex'] == '男'){
            $_POST['sex'] = 0;
        }else{
            $_POST['sex'] = 1;
        }
        $user = new IndexModel($_POST);
        $info = $user ->save();
        if($info){
            $this->success('操作成功！');
        }else{
            $this->success('操作失败，请重试！');
        }
    }

    public function ws()
    {
        return $this->fetch(':ws');
    }
}

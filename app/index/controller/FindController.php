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

use app\index\model\FindModel;
use cmf\controller\HomeBaseController;

class FindController extends HomeBaseController
{
    /**
     *质保查询页面
     */
    public function find(){
        return $this->fetch(':StoreInfo');
    }

    public function add(){
        return $this->fetch(':inpuiresucceed');
    }
    public function ws()
    {
        return $this->fetch(':ws');
    }
}

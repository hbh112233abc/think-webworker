<?php
// +----------------------------------------------------------------------
// | ThinkPHP Webworker [Webworker Extension For ThinkPHP]
// +----------------------------------------------------------------------
// | ThinkPHP Webworker 扩展
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: axguowen <axguowen@qq.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);

namespace think\webworker\support\think;

/**
 * 中间件管理类
 * @package think
 */
class Middleware extends \think\Middleware
{
    /**
     * 全局执行队列
     * @var array
     */
    protected $baseQueue;
    
    /**
     * 初始化默认数据
     * @access public
     * @return $this
     */
    public function initDefaultData()
    {
        // 未初始化全局执行队列
        if(is_null($this->baseQueue)){
            // 初始化全局执行队列
            $this->baseQueue = $this->queue;
            // 返回
            return $this;
        }
        // 设置当前执行队列为全局执行队列
        $this->queue = $this->baseQueue;
        // 返回
        return $this;
    }
}

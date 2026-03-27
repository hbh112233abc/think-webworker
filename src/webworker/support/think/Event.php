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
 * 事件管理类
 * @package think
 */
class Event extends \think\Event
{
    /**
     * 全局监听者
     * @var array
     */
    protected $baseListener;

    /**
     * 全局事件别名
     * @var array
     */
    protected $baseBind;

    /**
     * 初始化默认数据
     * @access public
     * @return $this
     */
    public function initDefaultData()
    {
        return $this->initListener()->initBind();
    }

	/**
	 * 初始化全局监听者
	 * @access protected
	 * @return $this
	 */
	protected function initListener()
	{
        // 如果未初始化全局监听者
        if(is_null($this->baseListener)){
            // 初始化全局监听者
            $this->baseListener = $this->listener;
            // 返回
            return $this;
        }
        // 设置当前监听者为全局监听者
        $this->listener = $this->baseListener;
        // 返回
        return $this;
    }

	/**
	 * 初始化全局事件别名
	 * @access protected
	 * @return $this
	 */
	protected function initBind()
	{
        // 如果未初始化全局事件别名
        if(is_null($this->baseBind)){
            // 初始化全局事件别名
            $this->baseBind = $this->bind;
            // 返回
            return $this;
        }
        // 设置当前事件别名为全局事件别名
        $this->bind = $this->baseBind;
        // 返回
        return $this;
    }
}

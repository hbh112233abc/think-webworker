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
 * 配置管理类
 * @package think
 */
class Config extends \think\Config
{
    /**
     * 全局配置参数
     * @var array
     */
    protected $baseConfig;

    /**
     * 初始化默认数据
     * @access public
     * @return $this
     */
    public function initDefaultData()
    {
        // 如果未初始化全局配置参数
        if(is_null($this->baseConfig)){
            // 设置全局配置
            $this->baseConfig = $this->config;
            // 返回
            return $this;
        }
        // 设置配置为基础配置参数
        $this->config = $this->baseConfig;
        // 返回
        return $this;
    }
}

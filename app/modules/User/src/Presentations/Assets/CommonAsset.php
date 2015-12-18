<?php 

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Presentations\Assets;

/**
 * 这是一个资源包管理类。
 *
 * @author shsrain <shsrain@163.com>
 */
class CommonAsset {

    /**
     * 图片存放路径。
     *
     * @var String
     */
	public $images;

    /**
     * javascript脚本存放路径。
     *
     * @var String
     */
	public $js;

    /**
     * css样式表存放路径。
     *
     * @var String
     */
	public $css;

    /**
     * 字体文件存放路径。
     *
     * @var String
     */
	public $fonts;

    /**
     * html文件存放路径。
     *
     * @var String
     */
	public $html;

	public function __construct() {

	} 
}
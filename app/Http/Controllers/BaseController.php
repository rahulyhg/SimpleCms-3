<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Http\Controllers;

use App\Http\Controllers\AbstractController as Controller;

/**
 * 这是抽象控制器类。
 *
 * @author shsrain <shsrain@163.com>
 */
abstract class BaseController extends Controller
{
    /**
     * 通过编辑权限保护方法的列表。
     *
     * @var string[]
     */
    protected $edits = [];

    /**
     * 通过博客权限保护方法的列表。
     *
     * @var string[]
     */
    protected $blogs = [];

    /**
     * 创建一个新的实例。
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

		//
    }
}

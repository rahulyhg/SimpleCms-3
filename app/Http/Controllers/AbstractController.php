<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;

/**
 * 这是抽象控制器类。
 *
 * @author shsrain <shsrain@163.com>
 */
abstract class AbstractController extends Controller
{
    /**
	 * 通过用户权限保护方法的列表。
     *
     * @var string[]
     */
    protected $users = [];

    /**
     * 由 mods 权限保护方法的列表。
     *
     * @var string[]
     */
    protected $mods = [];

    /**
	 * 通过管理员权限的保护方法的列表。
     *
     * @var string[]
     */
    protected $admins = [];

    /**
     * 创建一个新的实例。
     *
     * @return void
     */
    public function __construct()
    {
		//
    }

    /**
     * 设置权限。
     *
     * @param string $action
     * @param string $permission
     *
     * @return void
     */
    protected function setPermission($action, $permission)
    {
        $this->{$permission.'s'}[] = $action;
    }

    /**
     * 设置权限组。
     *
     * @param string[] $permissions
     *
     * @return void
     */
    protected function setPermissions($permissions)
    {
        foreach ($permissions as $action => $permission) {
            $this->setPermission($action, $permission);
        }
    }
}

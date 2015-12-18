<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Repositories;

/**
 * 这是一个 Blog 接口。
 *
 * @author shsrain <shsrain@163.com>
 */
interface BlogInterface {

    /**
     * 获取
     *
     * @return Array
     */
	public function get();

    /**
     * 获取所有
     *
     * @return Array
     */
	public function all();

    /**
     * 获取一条
     *
     * @return Array
     */
	public function find();

    /**
     * 创建
     *
     * @return Array
     */
	public function create();

    /**
     * 保存
     *
     * @return Array
     */
	public function save();

    /**
     * 更新
     *
     * @return Array
     */
	public function update();

    /**
     * 删除
     *
     * @return Array
     */
	public function delete();

    /**
     * 条件
     *
     * @return Array
     */
	public function where();

    /**
     * 统计
     *
     * @return Array
     */
	public function count();

    /**
     * 存在性
     *
     * @return Array
     */
	public function exists();
}

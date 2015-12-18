<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Repositories;

use App\Repositories\Document\Facades\DocumentRepository;
use Blog\Repositories\BlogInterface;
use Blog\Repositories\Traits\BlogTrait;
use Route;

/**
 * 这是一个博客模块。
 *
 * @author shsrain <shsrain@163.com>
 */
class Blog implements BlogInterface {

	use BlogTrait;

    /**
     * 获取所有
     *
     * @return Array
     */
	public function get(){

        return DocumentRepository::with('article')
				 ->with('byMember')
				 ->with('category')
				 ->where('model_id','=',2)
				 ->paginate(10);
	}

    /**
     * 获取所有
     *
     * @return Array
     */
	public function all(){

	}

    /**
     * 获取一条
     *
     * @return Array
     */
	public function find(){

	}

    /**
     * 创建
     *
     * @return Array
     */
	public function create(){

	}

    /**
     * 保存
     *
     * @return Array
     */
	public function save(){

	}

    /**
     * 更新
     *
     * @return Array
     */
	public function update(){

	}

    /**
     * 删除
     *
     * @return Array
     */
	public function delete(){

	}

    /**
     * 条件
     *
     * @return Array
     */
	public function where(){

	}

    /**
     * 统计
     *
     * @return Array
     */
	public function count(){

	}

    /**
     * 存在性
     *
     * @return Array
     */
	public function exists(){

	}
}

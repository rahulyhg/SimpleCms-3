<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Repositories\Traits;

/**
 * 这是一个Comment Module trait.
 *
 * @author shsrain <shsrain@163.com>
 */
trait CommentTrait
{
    /**
     * 禁言
     *
     * @return Array
     */
	public function gag(){

	}

    /**
     * 禁止回复
     *
     * @return Array
     */
	public function ban(){

	}

    /**
     * 举报
     *
     * @return Array
     */
	public function report(){

	}

    /**
     * 反对
     *
     * @return Array
     */
	public function against(){

	}

    /**
     * 支持
     *
     * @return Array
     */
	public function agree(){

	}

    /**
     * 图文回复
     *
     * @return Array
     */
	public function withPhoto(){

	}

    /**
     * 网址回复
     *
     * @return Array
     */
	public function withUrl(){

	}

}

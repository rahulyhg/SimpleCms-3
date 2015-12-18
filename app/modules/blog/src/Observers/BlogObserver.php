<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Observers;

use GrahamCampbell\BootstrapCMS\Facades\PageRepository;

/**
 * 这是Question上的观察类。
 *
 * @author shsrain <shsrain@163.com>
 */
class BlogObserver
{
    /**
     * 处理Question创建。
     *
     * @return void
     */
    public function created()
    {
        //
    }

    /**
     * 处理Question更新。
     *
     * @return void
     */
    public function updated()
    {
        //
    }

    /**
     * 处理Question删除。
     *
     * @return void
     */
    public function deleted()
    {
       //
    }

    /**
     * 处理Question保存。
     *
     * @return void
     */
    public function saved()
    {
        //
    }

    /**
     * 处理Question恢复。
     *
     * @return void
     */
    public function restored()
    {
        //
    }
}

<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Article\Relations;

/**
 * 这是一个belongs to article trait.
 *
 * @author shsrain <shsrain@163.com>
 */
trait HasOneArticleRelationTrait
{
    /**
     * 得到article的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->hasOne('App\Repositories\Article\Models\ArticleModel', 'id', 'id');
    }
}

<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Category\Relations;

/**
 * 这是一个 belongs to category trait。
 *
 * @author shsrain <shsrain@163.com>
 */
trait BelongsToCategoryRelationTrait
{
    /**
     * 得到 category 的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Repositories\Category\Models\CategoryModel', 'category_id', 'id');
    }
}

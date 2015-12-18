<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Document\Relations;

/**
 * 这是一个has many document trait.
 *
 * @author shsrain <shsrain@163.com>
 */
trait HasManyDocumentRelationTrait
{
    /**
     * 得到 document 的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneOrMany
     */
    public function document()
    {
        return $this->hasMany('App\Repositories\Document\Models\DocumentModel','category_id', 'id');
    }
}

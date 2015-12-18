<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\UcenterMember\Relations;

/**
 * 这是一个 belongs to ucentermember trait。
 *
 * @author shsrain <shsrain@163.com>
 */
trait BelongsToUcenterMemberRelationTrait
{
    /**
     * 得到 ucentermember 的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo('App\Repositories\UcenterMember\Models\UcenterMemberModel', 'uid', 'id');
    }
}

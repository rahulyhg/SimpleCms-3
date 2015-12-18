<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Member\Relations;

/**
 * 这是一个belongs to member trait。
 *
 * @author shsrain <shsrain@163.com>
 */
trait BelongsToMemberRelationTrait
{
    /**
     * 得到 member 的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function byMember()
    {
        return $this->belongsTo('App\Repositories\Member\Models\MemberModel', 'uid', 'uid');
    }
}

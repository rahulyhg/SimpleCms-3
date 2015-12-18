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
 * 这是一个has one member trait。
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
trait HasOneMemberRelationTrait
{
    /**
     * 得到 member 的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function member()
    {
        return $this->hasOne('App\Repositories\Member\Models\MemberModel', 'uid', 'id');
    }
}

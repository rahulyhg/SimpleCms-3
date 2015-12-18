<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Http\Middleware;

use Closure;

/**
 * 这是一个问答的中间件。
 *
 * @author shsrain <shsrain@163.com>
 */
class BlogMiddleware
{
    /**
     * 处理传入请求。
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		//

        return $next($request);
    }
}

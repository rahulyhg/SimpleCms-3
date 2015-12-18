<?php 

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

/* 
 * 便捷方法助手。
 *
 * @author shsrain <shsrain@163.com>
 */

if (! function_exists('success')) {

	/**
	 * success
	 *
	 * 操作成功响应宏的便捷方法。
	 *
	 * @param	string
	 * @param	string
	 * @param	init
	 * @return	Response
	 */
    function success($jumpUrl,$message='操作成功！',$waitSecond =5)
    {
        return response()->success($jumpUrl,$message,$waitSecond);	
    }
}

if (! function_exists('error')) {

	/**
	 * error
	 *
	 * 操作失败响应宏的便捷方法。
	 *
	 * @param	string
	 * @param	string
	 * @param	init
	 * @return	Response
	 */
    function error($jumpUrl,$message='操作失败！',$waitSecond =5)
    {
        return response()->error($jumpUrl,$message,$waitSecond);	
    }
}

if (! function_exists('theme')) {

	/**
	 * theme
	 *
	 * 主题化模板响应宏的便捷方法。
	 *
	 * @param	string
	 * @param	array
	 * @return	Response
	 */
    function theme($path,$data=[])
    {
        return response()->theme($path,$data);	
    }
}
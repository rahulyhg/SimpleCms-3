<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Presentations\BladeExtensions;

/**
 * 这是一个 Blade 模板的扩展语法类。
 *
 * @author shsrain <shsrain@163.com>
 */
class PhpBladeExtension {

	/**
     * php标签。
     *
     * @param  View  $view
     * @param        $compiler
     * @return String
     */
	public function php($view, $compiler){

		$compiler->directive('php',function($expression){
			return "<?php";
		});	
	}

	/**
     * endphp标签。
     *
     * @param  View  $view
     * @param        $compiler
     * @return String
     */
	public function endphp($view, $compiler){

		$compiler->directive('endphp',function($expression){
			return "?>";
		});
	}

	/**
     * datetime标签。
     *
     * @param  View  $view
     * @param        $compiler
     * @return String
     */
	public function datetime($view, $compiler){

		$compiler->directive('datetime',function($expression){
			$segments = explode(',', preg_replace("/[\(\)\\\"\']/", '', $expression));
			return date('Y-m-d',$segments[0]);
		});
	}

	/**
     * @evals($var++)标签。
     *
     * @param  View  $view
     * @param        $compiler
     * @return String
     */
	public function evals($view, $compiler){

		return preg_replace('/\@evals\((.+)\)/', '<?php ${1}; ?>', $view);	
	}
}

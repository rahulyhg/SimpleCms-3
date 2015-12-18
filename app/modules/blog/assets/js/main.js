/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Function RequestEvent事件绑定。
 * 
 * @author shsrain <shsrain@163.com>
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/**
 * RequestEvent:搜索。
 * 
 * submit Object <button> 
 * form   Object <form> 
 */
function bindingSearchEvent( submit, form ){

	submit.click( function () {
		if( validateSearchForm() == true){
			//SearchEventHandle(form);
			form.submit();
		}
	});
}

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Function 表单验证处理。
 * 
 * @author shsrain <shsrain@163.com>
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/**
 * 表单验证:账号绑定。
 *
 * @return Boolean
 */
function validateSearchForm(){

	var searchkeywords = $("input[name='searchkeywords']").val(); 

	if(isNull(searchkeywords) == true){
		popMessage('请输入要搜索的内容。');
		return false;
	}

	return true;
}

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Function Request处理。
 * 
 * @author shsrain <shsrain@163.com>
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/**
 * 搜索。
 *
 * form   Object <form> 
 */
function SearchEventHandle( form )
{
	var url = form.attr('action');
	var type = 'post';
	var dataType='html';
	var data = {
		username: $("input[name='searchkeywords']").val(), 
	};

	$.ajax({
	   type: type,
	   url: url,
	   data: data,
	   dataType: dataType,
	   beforeSend:function (XMLHttpRequest) {
			popMessage("<b>数据提交中</b>…");
			$('#J_ajaxSubmit_search').attr("disabled",true);			
		},
	   success: function(response){
			$('#J_ajaxSubmit_search').attr("disabled",false);	
			if(response !=false){
				document.write(response);
			}
	   },
	   error: function(msg){
			popMessage("<b>服务器似乎开了小差</b>!");
			$('#J_ajaxSubmit_search').attr("disabled",false);
	   }
	});	
}

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Function Helper方法。
 * 
 * @author shsrain <shsrain@163.com>
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/**
 * 弹窗提示信息。
 *
 * message String
 */
function popMessage( message ){
	 $("body").append($("#J_myModal").html());
	 $('#myModal').find('.modal-content').html(message);
	 $('#myModal').modal();
}

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Function 验证方法。
 * 
 * @author shsrain <shsrain@163.com>
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

 /*
 * 用途：检查输入字符串是否为空或者全部都是空格
 * 输入：str
 * 返回：
 * 如果全是空返回true,否则返回false
 */
function isNull( str ){

	if ( str == "" ) return true;
	var regu = "^[ ]+$";
	var re = new RegExp(regu);
	return re.test(str);
}

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Bootstrap.
 * 
 * @author shsrain <shsrain@163.com>
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

$(document).ready(function(){ 
	bindingSearchEvent($('#J_ajaxSubmit_search'),$("form[id='J_ajaxForm_search']"));
}); 
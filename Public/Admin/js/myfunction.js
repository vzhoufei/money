


/**
*ajax异步处理
*url  连接
*obj 元素本身this
*attrs 属性
*id
*/
function changeTableVal(url,obj,attrs,id)
{
	var status = $(obj).attr(attrs);
  if(status == 0){i = 1;}else{i = 0;}
  $.post(url ,{'attr': i ,'id':id} ,function(res){

	if(res == 1){

  		$(obj).attr('src','/Public/images/'+i+'.png').attr('x',i);
	}else{
		alert('服务器繁忙！');
	}

  } )

}



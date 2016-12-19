define(["text!./我的.html","css!./我的.css"],function(mine){
	
	return{
		init:function(){
			//if($(".home").children().size()>0) return;
			$(".mine").html(mine).show().siblings("div").hide();
		}
	}
	
})
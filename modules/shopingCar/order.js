define(["text!./购物车.html","css!./购物车.css"],function(order){
	
	return{
		init:function(){
			//if($(".home").children().size()>0) return;
			$(".order").html(order).show().siblings("div").hide();
		}
	}
	
})
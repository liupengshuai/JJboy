define(["text!./首页.html","css!./首页.css"],function(homePage){
	
	return{
		init:function(){
			$(".home").html(homePage).show().siblings("div").hide();
			$.ajax({
				type:"get",
				url:"data/homeData.json",
				async:true,
				success:function(resData){
					$("#temp1").load("./tem/tep.html",function(){
						var home=baidu.template("temp",resData);
						$(".home").html(home);
//						$("img.lazy").lazyload();
						var mySwiper = new Swiper('.swiper-container',{
							autoplay: 1000,
							loop:true
							})
						var n=0
							$(".shoping_car").click(function(e){
								console.log(1)
								e.stopPropagation();
								var target=$(this).parent().parent().children("div").children("img").clone();
								$(target).appendTo($(this).parent().parent().children().eq(0));
								var x=(e.clientX)/100-1+"rem",y=(e.clientY)/100-2+"rem";
								$(target).css({
									"position":"fixed",
									"left":x,
									"top":y,
									"animation":"firstAnimation",
									"animationDuration": "1s"
								})
								var t = setTimeout(function(){
										target.remove();
									},1000);
									 var a =++n;
									$(".myfooter").find("span").html(a)
							})
										
						
					})
		
				}
			});
			
			
		}
		
		
			

	
	}
	
})
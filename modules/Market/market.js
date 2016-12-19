define(["text!./闪送超市.html","css!./闪送超市.css"],function(market){
	
	return{
		init:function(){
			$(".market").html(market).show().siblings("div").hide();
			$.ajax({
				type:"get",
				url:"data/getCategoryProducts.json",
				async:true,
				success:function(resDate){
					$("#temp1").load("tem/tep1.html",function(){
						var market=baidu.template("temp_1",resDate);
						$("#woqu").html(market).show().siblings("div").hide();
						var n=0
							$(".myA").click(function(e){
								console.log(1)
								e.stopPropagation();
								e.preventDefault();
								var target=$(this).parent().prev().children("img").clone();
								$(target).appendTo($(this).parent());
								var x=(e.clientX)/100-2.5+"rem",y=(e.clientY)/100-1+"rem";
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
						$(".box12").on("click",function(){
						console.log(1)
						var id = this.id;
						console.log(id);
						$("#temp1").load("tem/tep2.html",function(){
						var myhtml = baidu.template("temp_2",{Date:resDate.data.products[id]});
						$(".main_right").html(myhtml)
						});
						
					})

						
					});
					
				}
			});
			

		}
	}
	
})













						
					


					
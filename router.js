define(["Backbone"], function(Backbone){
	var Router = Backbone.Router.extend({
		routes:{
			"":"homepage",
			home: "homepage",
			market:"market",
			order:"order",
			mine:"mine",
			
		},
		homepage: function(){
			require(["modules/homePage/homePage.js","swiper"],function(homepage){
				homepage.init();
				
			});
			
			
		},
		market: function(){
			require(["modules/Market/market.js"],function(market){
				market.init();
			});
			
		},
		order: function(){
			require(["modules/shopingCar/order.js"],function(order){
				order.init();
			});
			
		},
		mine: function(){
			require(["modules/Mine/mine.js"],function(mine){
				mine.init();
			});
			
		}
	});
	return new Router();
});
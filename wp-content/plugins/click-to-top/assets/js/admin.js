;(function($){
	$(document).ready(function(){
		$('.notic-click-dissmiss').on('click',function(){
			var url = new URL(location.href);
			url.searchParams.append('cdismissed',1);
			location.href= url;
		});
		$('.clickto-dismiss').on('click',function(e){
			e.preventDefault();
			var url = new URL(location.href);
			url.searchParams.append('clickhide',1);
			location.href= url;
		});
	});
})(jQuery);
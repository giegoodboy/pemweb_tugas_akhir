jQuery(function($){
	$(document).ready(function() {		
		if(cur_page_data.pageid == 1 || cur_page_data.pagename == "home"){
			$('.header_icon').css('padding','2.4em 0 0.6em');
				
		}
		else{
			$('.header_icon').css('padding','1em 0 0.6em');
			$('.tag_line p').css('margin','-34px auto 45px');
		}
	});
	
});

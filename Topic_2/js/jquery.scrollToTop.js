//scroll contact form
$(function () {
	//catch click on a tag
	$("a").click(function(){
		//check if has hash
		if (this.hash) {
			//get rid of the # sign
			var hash = this.hash.substr(1);

			//get the position of the <a name>
			var $toElement = $("a[name=" + hash +"]");
			var toPosition = $toElement.position().top;

			// scroll to the element
			$("body, html").animate({
				scrollTop : toPosition
			}, 2000, "easeOutExpo");

			//don't jump
			return false;
		}
	});
	if(location.hash){
		var hash = location.hash;
		window.scroll(0,0);
		$("a[href=" + hash + "]").click();
	}
});
//hover
$(function(){
    $('a').hover(function(){
        $(this).css('color','red');
    },function(){
        $(this).css('color','white');
});
});

$(function(){
    $('li').hover(function(){
        $(this).toggleClass('active');
    });
});
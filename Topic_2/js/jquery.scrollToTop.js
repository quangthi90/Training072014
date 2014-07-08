//scroll contact form
$(function () {
	//catch click on a tag
	$("#contact").click(function(){
		//console.log(this.hash);
		//check if has hash
		if (this.hash) {
			//get rid of the # sign
			var hash = this.hash.substr(1);
					//console.log(this.hash);
			//get the position of the <a name>
			var $toElement = $("a[name=" + hash +"]");
			var toPosition = $toElement.offset().top;
				console.log($toElement);
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
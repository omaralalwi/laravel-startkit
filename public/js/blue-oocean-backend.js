/*
* this is made by blueoocean Team
* 
*/
$(document).ready(function() {


 /* start languages navigator function */
 //not needed I solved it by using Navs
/*
* best way to make this job dynamically according to config(app.locals)
* this is work with this files: views\backend\sections\language-navigator.blade ,, views\backend\sections\multilanguage-form.blade
*/
// all form divs that have data-localpref attribute
//let allForms = document.querySelectorAll('data-localpref')[0].innerHTML;
//let allForms = $("div").closest("[data-localpref='en']");
/*
$('#local-navigator .nav-item .local-navigator-item').click(function(){
    // Check to see the initial state of the element
    var isActive = $(this).hasClass('active-item'); //if needed to check if itemis active or not
    var localpref = $(this).attr("data-localpref"); //getmy custom Data Attribute 'data-localpref' value

// find the specefic item

	if(!isActive){// if this item ready have active-item no changes happen
		$('#local-navigator .nav-item')
			.find('.local-navigator-item')
				.toggleClass('active-item')
				.siblings().toggleClass('active-item');
	}

});
*/
 /* End languages navigator function  */

  
}); // close document ready



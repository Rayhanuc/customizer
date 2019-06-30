;(function($){
	wp.customize('cust_services_heading',function(value){
		value.bind(function(newvalue){
			$("#service-heading").html(newvalue);
		});
	});
	wp.customize('cust_services_icon_color',function (value){
		value.bind(function(newvalue){
			$(".service-icon i").css("color",newvalue);
		});
	});
	/*wp.customize('cust_about_heading',function (value){
		value.bind(function(aboutvalue){
			$("#about-heading").html(aboutvalue);
		});
	});
	wp.customize('cust_about_description',function (value){
		value.bind(function(aboutvalue){
			$("#about-discription").html(aboutvalue);
		});
	});*/
	wp.customize('_cs_customize_options[about_heading]',function (value){
		value.bind(function(aboutvalue){
			$("#about-heading").html(aboutvalue);
		});
	});
	wp.customize('_cs_customize_options[about_description]',function (value){
		value.bind(function(aboutvalue){
			$("#about-discription").html(aboutvalue);
		});
	});
})(jQuery);
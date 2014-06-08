(function(global){
	jQuery(function(){
		var $arrow     = jQuery("#menuToggleArrow"),
				$slideMenu = jQuery("#secondary");
		$arrow.on("click", function(e){
			e.preventDefault();
			$slideMenu.slideToggle(400, function(){
				$arrow.toggleClass("flip-vertical");
			});
		});
	});
})(window);
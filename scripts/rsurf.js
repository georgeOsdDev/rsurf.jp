(function(global){
	jQuery(function(){
		var $arrow     = jQuery("#menuToggleArrow"),
		$menuLabel = jQuery("#menu-toggle-arrow"),
		$slideMenu = jQuery("#secondary");
		$menuLabel.on("click", function(e){
			e.preventDefault();
			$slideMenu.slideToggle(400, function(){
				$arrow.toggleClass("flip-vertical");
			});
		});

		setTimeout(function(){
			if($menuLabel.css("display") !== "none")  $menuLabel.click();
		},1000);
	});
})(window);
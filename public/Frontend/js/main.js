
(function ($) {
  "use strict";

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");


	function adjustLayout() {
		const MainSidebar = document.getElementById("sidebar");
		const TopBar = document.getElementById("top-bar");
		const PageContent = document.getElementById("page___content");
		gsap.fromTo('#sidebar [data-fade-out]' , {
			opacity: 0, 
			y:50 ,
		 } , {
		   opacity:1 , 
		   y:0 , 
		   ease:"power3.inOut" , 
		   duration:1 ,
		   stagger: {amount:.3},
		   
		 })
		MainSidebar.style.top = `${TopBar.clientHeight}px`;
		document.body.style.marginTop = `${TopBar.clientHeight}px`;
	  
		if (window.innerWidth > 991.98) {
		  if (!MainSidebar.classList.contains("active")) {
			PageContent.style.paddingLeft = `${MainSidebar.clientWidth}px`;
		  } else {
			PageContent.style.paddingLeft = `0`;
		  }
		} else {
		  PageContent.style.paddingLeft = `0`;
		}
	  }
	  
	  adjustLayout();


  });
})(jQuery);


window.addEventListener('load' , ()=> {
	gsap.fromTo('.banner-title .char' , {
		opacity:0, 
		y:50
      },
      {
		duration: 1.5, 
		opacity:1, 
		y:0, 
		stagger: 0.03, 
		ease: "elastic(1.2, 1)",
      },)
})


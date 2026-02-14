$(document).ready(function(){
	AOS.init();


	// scrolling header
	const header = document.querySelector(".header");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });


	// Hamburger
	$(".hamburger").click(function(){
	    $(this).toggleClass("active");
	    $('.menu-wrapper').toggleClass("nav-active");
	});


	// Heading Animation
	const headings = document.querySelectorAll('.heading-ani');
	const duration = 5; // matches CSS

	const observer = new IntersectionObserver((entries) => {
	  entries.forEach(entry => {
	    if(entry.isIntersecting){
	      const h = entry.target;
	      if(!h.classList.contains('animate')){
	        h.classList.add('animate');
	        setTimeout(()=> h.classList.add('revealed'), duration);
	      }
	    }
	  });
	},{threshold:0.9}); // 50% visible
	headings.forEach(h => observer.observe(h));




	// Parallax effect for content
  document.addEventListener("scroll", () => {
    const items = document.querySelectorAll(".parallax-item");
    const scrollY = window.scrollY;
    items.forEach(item => {
      const speed = item.getAttribute("data-speed");
      item.style.transform = `translateY(${scrollY / speed}px)`;
    });
  });

	

		



	
});

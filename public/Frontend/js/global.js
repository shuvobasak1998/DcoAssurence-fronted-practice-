function adjustLayout() {
  const MainSidebar = document.getElementById("sidebar");
  const TopBar = document.getElementById("top-bar");
  const PageContent = document.getElementById("page___content");
  gsap.fromTo(
    "#sidebar [data-fade-out]",
    {
      opacity: 0,
      y: 50,
    },
    {
      opacity: 1,
      y: 0,
      ease: "power3.inOut",
      duration: 1,
      stagger: { amount: 0.3 },
    }
  );

  MainSidebar.style.top = `${TopBar.clientHeight}px`;
  document.body.style.marginTop = `${TopBar.clientHeight}px`;

  if (window.innerWidth > 991.98) {
    if (!MainSidebar.classList.contains("active")) {
      if (PageContent) {
        PageContent.style.paddingLeft = `${MainSidebar.clientWidth}px`;
      }
    } else {
      if (PageContent) {
        PageContent.style.paddingLeft = `0`;
      }
    }
  } else {
    if (PageContent) {
      PageContent.style.paddingLeft = `0`;
    }
  }
}

adjustLayout();

window.addEventListener("resize", adjustLayout);

// Slider Part
const slideTl = gsap.timeline();
const SliderOptions = {
  animate: () => {
    slideTl.clear();
    slideTl.play();
    slideTl.fromTo(".slideshow", { opacity: 0 }, { opacity: 1, duration: 0.8 });
    slideTl.fromTo(
      ".slide-title .char",
      {
        opacity: 0,
        y: 100,
      },
      {
        opacity: 1,
        y: 0,
        ease: "elastic(2, .8)",
        duration: 1.9,
        stagger: { amount: 0.2 },
      },
      "<"
    );
  },
};

const toggleSlideBtns = document.querySelectorAll(
  ` [data-toggle-slide="true"] `
);
toggleSlideBtns.forEach((btn) => {
  if (btn) {
    SliderOptions.animate();
    btn.addEventListener("click", SliderOptions.animate);
  }
});
// hover effects
VanillaTilt.init(document.querySelectorAll(`[data-auto-transform="true"]`), {
  max: 19,
  perspective: 800,
  speed: 400,
  glare: true,
  "max-glare": 0.3,
  scale: 1,
  transition: true,
  axis: null,
  reset: true,
  easing: "cubic-bezier(.03,.98,.52,.99)",
});


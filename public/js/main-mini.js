document.querySelector(".nav-hamb").addEventListener("click",function(e){e.preventDefault();var t=document.querySelector(".mobile-nav-list"),i=document.querySelector(".scrolled-nav"),s=document.body;this.classList.contains("active-nav")?(this.classList.remove("active-nav"),t.classList.remove("active-nav-list"),s.classList.remove("disable_scroll")):(this.classList.add("active-nav"),t.classList.add("active-nav-list"),s.classList.add("disable_scroll"),i.classList.remove("scrolled-nav"))}),window.addEventListener("scroll",function(){let e=document.querySelector(".navbar");window.scrollY>0?e.classList.add("scrolled-nav"):e.classList.remove("scrolled-nav")});const faqBoxes=document.querySelectorAll(".faq-box");faqBoxes.forEach(e=>{let t=e.querySelector(".answer");t.style.height="0px",t.style.transition="height 0.3s ease",e.addEventListener("click",function(){faqBoxes.forEach(e=>{let i=e.querySelector(".answer");i!==t&&"0px"!==i.style.height&&(i.style.height="0px")}),"0px"===t.style.height?t.style.height=`${t.scrollHeight}px`:t.style.height="0px"})}),document.querySelectorAll(".xsm-tab").forEach(function(e){e.addEventListener("click",function(t){t.preventDefault();var i=e.parentNode;i.classList.contains("active-tab")?i.classList.remove("active-tab"):(document.querySelectorAll(".active-tab").forEach(function(e){e.classList.remove("active-tab")}),i.classList.add("active-tab"))})}),document.querySelectorAll(".dropdown-tag").forEach(function(e){e.addEventListener("click",function(t){if(window.innerWidth<1024){t.preventDefault();var i=e.parentNode;i.classList.contains("active-dd-tab")?i.classList.remove("active-dd-tab"):(document.querySelectorAll(".active-dd-tab").forEach(function(e){e.classList.remove("active-dd-tab")}),i.classList.add("active-dd-tab"))}})}),document.querySelectorAll(".tab").forEach(function(e){e.addEventListener("click",function(t){t.preventDefault(),e.scrollIntoView({behavior:"smooth",block:"nearest",inline:"center"}),document.querySelectorAll(".tab").forEach(function(e){e.classList.remove("active-tab-type1")}),e.classList.add("active-tab-type1")})});const tabs=document.querySelectorAll(".tab"),contents=document.querySelectorAll(".tab-content");tabs.forEach(e=>{e.addEventListener("click",t=>{t.preventDefault(),tabs.forEach(e=>e.classList.remove("active-tab-type1")),e.classList.add("active-tab-type1");let i=e.getAttribute("data-tab");contents.forEach(e=>e.classList.remove("active-content")),document.getElementById(`tab-${i}`).classList.add("active-content")})});const horizontaltabs=document.querySelectorAll(".horizontal-tab"),horizontalcontents=document.querySelectorAll(".horizontal-content");horizontaltabs.forEach(e=>{e.addEventListener("click",t=>{t.preventDefault(),horizontaltabs.forEach(e=>e.classList.remove("active-horizontal-tab")),e.classList.add("active-horizontal-tab");let i=e.getAttribute("data-tab");horizontalcontents.forEach(e=>e.classList.remove("active-horizontal")),document.getElementById(`h-tab-${i}`).classList.add("active-horizontal")})}),document.querySelectorAll(".playvideo").forEach(function(e){e.addEventListener("click",function(){var e=document.getElementById("60secvideo");e.play(),e.parentNode.classList.add("videoplayed")})}),document.addEventListener("DOMContentLoaded",function(){if(document.querySelector(".home")){let e=document.getElementById("videoModal"),t=document.getElementById("openModal"),i=document.getElementById("closeModal"),s=document.getElementById("video1");t.addEventListener("click",t=>{t.preventDefault(),e.classList.remove("opacity-0"),e.classList.remove("invisible"),s.src="https://www.youtube.com/embed/4AGOSlKxPuE?si=sWSnX8RsQ5CXEl2z";let i=s.src,a=i.indexOf("?")>-1?"&":"?";s.src=i+a+"autoplay=1"}),i.addEventListener("click",()=>{e.classList.add("opacity-0"),e.classList.add("invisible"),s.src=""}),window.addEventListener("click",t=>{t.target===e&&(e.classList.add("opacity-0"),e.classList.add("invisible"),s.src="")});var a,n,l,o=new Swiper(".testimonial-swiper",{slidesPerView:1,spaceBetween:30,loop:!0,navigation:{nextEl:".custom-next",prevEl:".custom-prev"}});function r(){var e=window.innerWidth;e<1024&&!n?n=new Swiper(".how-it-works-swiper",{slidesPerView:1.1,spaceBetween:16,loop:!0,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{768:{slidesPerView:1.8,spaceBetween:30}}}):e>=1024&&n&&(n.destroy(!0,!0),n=void 0),window.innerWidth<1280&&!a?a=new Swiper(".blog-holder",{slidesPerView:1.1,spaceBetween:16,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{480:{slidesPerView:1.3},600:{slidesPerView:1.6},800:{slidesPerView:2.1,spaceBetween:32}}}):e>=1280&&a&&(a.destroy(!0,!0),a=void 0)}function c(){var e=0,t=document.querySelectorAll(".testimonial");t.forEach(function(t){t.style.minHeight="0px",e=Math.max(e,t.offsetHeight)}),t.forEach(function(t){t.style.minHeight=e+"px"})}function d(){let e=document.querySelectorAll(".blog-box"),t=0;e.forEach(e=>{e.style.height="auto"}),e.forEach(e=>{let i=e.offsetHeight;i>t&&(t=i)}),e.forEach(e=>{e.style.height=`${t}px`})}window.addEventListener("load",r),window.addEventListener("resize",r),c(),window.addEventListener("resize",function(){c()}),window.onload=d,window.onresize=d}if(document.querySelector(".who-we-serve")){function v(){new Swiper(".swiper-service-experts",{slidesPerView:"auto",spaceBetween:16,loop:!0,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{480:{spaceBetween:40}}}),window.innerWidth<1280&&new Swiper(".blog-holder",{slidesPerView:"auto",spaceBetween:16,loop:!0,breakpoints:{480:{spaceBetween:32}}})}v(),window.addEventListener("resize",function(){let e=document.querySelector(".swiper-service-experts");e&&e.swiper&&e.swiper.destroy(!0,!0);let t=document.querySelector(".blog-holder");t&&t.swiper&&t.swiper.destroy(!0,!0),v()})}if(document.querySelector(".website-builder")){function r(){var e=window.innerWidth;window.innerWidth<1280&&!a?a=new Swiper(".blog-holder",{slidesPerView:1.1,spaceBetween:16,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{480:{slidesPerView:1.3},600:{slidesPerView:1.6},800:{slidesPerView:2.1,spaceBetween:32}}}):e>=1280&&a&&(a.destroy(!0,!0),a=void 0)}function d(){let e=document.querySelectorAll(".blog-box"),t=0;e.forEach(e=>{e.style.height="auto"}),e.forEach(e=>{let i=e.offsetHeight;i>t&&(t=i)}),e.forEach(e=>{e.style.height=`${t}px`})}window.addEventListener("load",r),window.addEventListener("resize",r),window.onload=d,window.onresize=d}if(document.querySelector(".industry")){function r(){var e=window.innerWidth;e<1024&&!n?o=new Swiper(".how-it-works-swiper",{slidesPerView:1.2,spaceBetween:30,loop:!0,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{768:{slidesPerView:1.8}}}):e>=1024&&n&&(n.destroy(!0,!0),n=void 0)}window.addEventListener("load",r),window.addEventListener("resize",r)}if(document.querySelector(".feature3-voolt-marketing")){function r(){var e=window.innerWidth;e<1024&&!n?o=new Swiper(".how-it-works-swiper",{slidesPerView:1.2,spaceBetween:30,loop:!0,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{768:{slidesPerView:1.8}}}):e>=1024&&n&&(n.destroy(!0,!0),n=void 0)}function p(){var e=window.innerWidth;e<1024&&!l?l=new Swiper(".charged-swiper",{slidesPerView:1.1,spaceBetween:16,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{425:{slidesPerView:"auto"},768:{spaceBetween:32}}}):e>=1024&&l&&(l.destroy(!0,!0),l=void 0)}window.addEventListener("load",r),window.addEventListener("resize",r),window.addEventListener("load",p),window.addEventListener("resize",p)}let h=document.getElementById("60-sec-popup"),$=document.querySelectorAll("a.open-60-sec-popup"),u=document.getElementById("close-60-sec-popup");$.forEach(e=>{e.addEventListener("click",e=>{e.preventDefault(),h.classList.remove("opacity-0"),h.classList.remove("invisible")})}),u.addEventListener("click",()=>{h.classList.add("opacity-0"),h.classList.add("invisible")}),window.addEventListener("click",e=>{e.target===h&&(h.classList.add("opacity-0"),h.classList.add("invisible"))})});
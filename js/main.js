(function ($) {
  "use strict";
  
  // Spinner (অপটিমাইজ: টাইমআউট 1ms থেকে 500ms করলাম যাতে লোড স্মুথ হয়)
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 500); // চেঞ্জ: 1 থেকে 500ms - মোবাইলে লোড ভালো হবে
  };
  spinner();
  
  // Initiate the wowjs (অ্যানিমেশন ইনিট: মোবাইল অফ করলাম যাতে পারফর্ম্যান্স ভালো হয়)
  new WOW({
    mobile: false // চেঞ্জ: মোবাইলে অ্যানিমেশন অফ (reduced-motion সাপোর্ট)
  }).init();
  
  // Sticky Navbar (অপটিমাইজ: স্ক্রোল থ্রেশহোল্ড 0 থেকে 45px করলাম, মোবাইলে শ্যাডো অ্যাড)
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) { // চেঞ্জ: 0 থেকে 45px - মোবাইলে ভালো লাগবে
      $('.navbar').addClass('position-fixed bg-dark shadow-sm');
    } else {
      $('.navbar').removeClass('position-fixed bg-dark shadow-sm');
    }
  });
  
  // Back to top button (অপটিমাইজ: থ্রেশহোল্ড 300 থেকে 200px করলাম, অ্যানিমেশন টাইম 1000ms করলাম স্মুথের জন্য)
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) { // চেঞ্জ: 300 থেকে 200px
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1000, 'easeInOutExpo'); // চেঞ্জ: 1500 থেকে 1000ms - ফাস্টার
    return false;
  });
  
  // Testimonials carousel (অপটিমাইজ: smartSpeed 800ms করলাম, মোবাইলে অটোপ্লে পজ করলাম)
  $('.testimonial-carousel').owlCarousel({
    autoplay: true,
    smartSpeed: 800, // চেঞ্জ: 1000 থেকে 800ms - স্মুথ
    loop: true,
    nav: false,
    dots: true,
    items: 1,
    dotsData: true,
    responsive: {
      0: {
        items: 1,
        autoplay: false // চেঞ্জ: মোবাইলে অটোপ্লে অফ (ব্যাটারি সেভ)
      },
      768: {
        items: 1
      }
    }
  });
  
  // নতুন: Pulse অ্যানিমেশন হ্যান্ডেল (যদি .pulse ক্লাস থাকে, JS দিয়ে ট্রিগার)
  const pulseElements = document.querySelectorAll('.pulse');
  pulseElements.forEach(el => {
    el.style.animation = 'pulse 1.5s infinite'; // CSS অ্যানিমেশন ট্রিগার
  });
  
  // নতুন: Intersection Observer দিয়ে অ্যানিমেশন ট্রিগার (পারফর্ম্যান্স ভালো)
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-slideUp'); // চেঞ্জ: স্ক্রোলে অ্যানিমেট
      }
    });
  });
  document.querySelectorAll('.card, .hero').forEach(el => observer.observe(el));
  
})(jQuery);

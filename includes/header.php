<!-- Header Start -->
<!-- Favicon -->
    <link rel="icon" type="image/webp" href="https://studentadmission.uk/img/logo.webp">
        <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


<header>
  <div class="header-content">
    <div class="logo">
      <a href="https://studentadmission.uk" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
        <img src="https://studentadmission.uk/img/logo.webp" alt="STUDENT ADMISSION LONDON" loading="lazy">
        <div class="logo-text">
          <div style="font-weight:700; font-size: 1.1rem; line-height: 1.2;">STUDENT ADMISSION LONDON</div>
          <div style="font-size:11px; color:var(--muted)">British Council Certified Consultant</div>
        </div>
      </a>
    </div>
    
    <nav aria-label="Main navigation">
      <div class="hamburger" id="hamburgerMenu" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>

      <ul id="navMenu">
        <li class="menu-close-btn" onclick="toggleMenu()">&times;</li>
        
        <li><a href="https://studentadmission.uk">Home</a></li>
        <li><a href="https://studentadmission.uk/about.php">About</a></li>
        <li><a href="https://studentadmission.uk/service.php">Services</a></li>
        <li><a href="https://studentadmission.uk/blogs.php">Blogs</a></li>
        <li><a href="https://studentadmission.uk/testimonial.php">Testimonial</a></li>
        <li><a href="https://studentadmission.uk/contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="contact-info d-none-mobile">
      <div style="text-align: right;">
        <span style="font-size: 0.75rem; color: var(--muted); display: block;"> </span>
        <a href="tel:+447446969466" style="text-decoration: none; color: var(--primary); font-weight: 700;">+447446969466</a>
      </div>
      <a class="cta-btn" href="https://studentadmission.uk/forms/application_form.php" style="text-decoration:none;">Free Apply Now</a>
    </div>
  </div>
</header>


<!-- Header End -->


<script>
function toggleMenu() {
    const nav = document.body;
    const navMenu = document.getElementById('navMenu');
    const hamburger = document.getElementById('hamburgerMenu');
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('open');
    // মেনু যখন ওপেন থাকবে তখন পেজ স্ক্রল হওয়া বন্ধ থাকবে (UX Improvement)
    if(navMenu.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = 'auto';
    }
}
</script>

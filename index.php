<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
</head>

<!-- Hero/Automatic Slideshow -->
<style>
.hero-slideshow {
  position: relative;
  max-width: 100%;
  margin: auto;
  height: 80vh;
  overflow: hidden;
}
.hero-slideshow img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: none; /* hidden initially */
  position: absolute;
  top: 0;
  left: 0;
}
.hero-slideshow img.active {
  display: block;
}
/* Optional: fade animation */
.fade {
  animation-name: fade;
  animation-duration: 0.8s;
}
@keyframes fade {
  from {opacity: 0.4;}
  to {opacity: 1;}
}
</style>
<div class="hero-slideshow">
  <img src="img/carousel-1.jpg" class="active fade" alt="UK Study Image 1">
  <img src="img/carousel-2.jpg" class="fade" alt="UK Study Image 2">
</div>

<!-- Caption (ইমেজের নিচে মুভ) -->
<div class="hero-caption" style="text-align: center; margin-top: 05px; margin-bottom: 20px;"> <!-- নিচে মার্জিন দিয়ে পজিশন -->
  <div class="title-center">
    <h3>Welcome</h3>
    <h1 class="display-1" id="hero-title" style="font-size: clamp(2rem, 5vw, 4rem);">STUDENT ADMISSION LONDON</h1>
  </div>
  <p class="fs-5 mb-5" style="font-size: clamp(1rem, 3vw, 1.5rem);">
    British Council Certified Consultant<br>
    APPLY NOW FOR 2026 JAN | FEB | MAY INTAKE
  </p>
  <a href="https://studentadmission.uk/consultation-booking-form.php" class="cta-btn">
    Book Your Free Consultation
  </a>
</div>

<script>
let slideIndex = 0;
const slides = document.querySelectorAll(".hero-slideshow img");
function showSlides() {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });
  slideIndex++;
  if (slideIndex > slides.length) slideIndex = 1;
  slides[slideIndex - 1].classList.add("active");
  setTimeout(showSlides, 1000); // 4 সেকেন্ড (0.4s খুব দ্রুত, তাই 4s করা হলো)
}
// Initialize slideshow
showSlides();
</script>
<!-- end of Hero -->

<!-- About Section -->
<div class="about-section card" aria-labelledby="about-title">
  <div class="about-text animated fadeIn">
    <h2 id="about-title" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">About Our Agency</h2>
    <p style="font-size: clamp(0.9rem, 2.5vw, 1.1rem);">Established in 2021, Student Admission London is a globally recognized and reputable education agency offering ‘Free Online Consultations’ worldwide. We help and advise international students who want to pursue higher education abroad.</p>
    <ul class="list-group list-group-flush animated slideUp">
      <li class="list-group-item"><i class="fa fa-check-circle me-1"></i>APPLY WITH FREE ENGLISH TEST</li>
      <li class="list-group-item"><i class="fa fa-check-circle me-1"></i>SCHOLARSHIP UP TO €7000</li>
      <li class="list-group-item"><i class="fa fa-check-circle me-1"></i>Expert Visa Consultant</li>
    </ul>
    <div class="row animated slideUp" style="display: flex; flex-wrap: wrap; gap: 10px;">
      <a href="https://studentadmission.uk/consultation-booking-form.php" class="cta-btn">Scholarship Eligibility Check</a>
      <a href="https://studentadmission.uk/application_form.php" class="cta-btn">APPLY WITH MOI</a>
    </div>
  </div>
  <div class="about-image animated zoomIn">
    <img class="img-fluid" src="img/about.png" alt="Agency team and office" loading="lazy">
  </div>
</div>

<!-- Service Section -->
<div class="service-section card" aria-labelledby="service-title">
  <h2 id="service-title" class="animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem); text-align: center; margin-bottom: 40px;">How We Help You</h2>

  <div class="service-item animated slideUp" style="margin-bottom: 30px;">
    <div class="row g-0 align-items-center" style="display: flex; flex-wrap: wrap;">
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="International Student Counseling" loading="lazy">
      </div>
      <div class="col-md-7">
        <h2 class="text-uppercase">International Student Counseling</h2>
        <p>At Student Admission UK, our certified education consultants provide one-on-one guidance to international students — helping them make confident, informed decisions about studying in the UK and beyond.</p>
        <a class="cta-btn" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>

  <div class="service-item animated slideUp" style="margin-bottom: 30px;">
    <div class="row g-0 align-items-center" style="display: flex; flex-wrap: wrap;">
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" src="img/service-2.jpg" alt="Scholarship Assistance" loading="lazy">
      </div>
      <div class="col-md-7">
        <h2 class="text-uppercase">Scholarship Assistance</h2>
        <p>Studying in the UK is a dream for many students, but tuition fees and living expenses can be a major concern. At STUDENT ADMISSION, we help turn that dream into reality through our dedicated Scholarship Assistance service.</p>
        <a class="cta-btn" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>

  <div class="service-item animated slideUp" style="margin-bottom: 30px;">
    <div class="row g-0 align-items-center" style="display: flex; flex-wrap: wrap;">
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" src="img/service-3.jpg" alt="Higher Study Budget Planing" loading="lazy">
      </div>
      <div class="col-md-7">
        <h2 class="text-uppercase">Higher Study Budget Planing</h2>
        <p>Planning your higher studies abroad is exciting — but managing the budget can feel overwhelming for many students and parents. Tuition fees, accommodation, living expenses, visa fees, travel, and unexpected costs… everything adds up quickly.</p>
        <a class="cta-btn" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>

  <div class="service-item animated slideUp" style="margin-bottom: 30px;">
    <div class="row g-0 align-items-center" style="display: flex; flex-wrap: wrap;">
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" src="img/service-4.jpg" alt="University Interview Preparation" loading="lazy">
      </div>
      <div class="col-md-7">
        <h2 class="text-uppercase">University Interview Preparation</h2>
        <p>Securing a place at a UK university is a life-changing opportunity—and for many courses, scholarships, and competitive programs, the University Interview is a crucial part of the admission process.</p>
        <a class="cta-btn" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>
  
</div>
  
  <!-- Add other service items similarly -->
</div>

<!-- Banner Section -->
<div class="banner-section card" aria-labelledby="banner-title">
  <h2 id="banner-title" class="animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Want to be a UK Student?</h2>
  <p class="animated fadeIn" style="font-size: clamp(0.9rem, 2.5vw, 1.1rem);">Student Admission London provides expert guidance for international students who want to study in the UK...</p>
  <div class="position-relative animated slideUp">
    <input class="form-control border-0 bg-dark rounded-pill w-100 py-4 ps-4 pe-5" type="text" placeholder="Your email">
    <button type="button" class="btn btn-primary py-3 px-4 position-absolute top-0 end-0 me-2 cta-btn">SignUp</button>
  </div>
</div>

<!-- Blogs Section -->
<div class="blogs-section card" aria-labelledby="blogs-title">
  <h2 id="blogs-title" class="animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Our Recent Posts</h2>
  <div class="blog-grid animated slideUp">
    <div class="blog-item">
      <img class="img-fluid" src="https://studentadmission.uk/img/Blog-1.png" alt="Higher Education blog" loading="lazy">
      <a href="https://studentadmission.uk/Higher_Education_the_Right_Path_for_You__Find_Out_.php" target="_blank">Higher Education the Right Path for You? Find Out!</a>
    </div>
    <div class="blog-item">
      <img class="img-fluid" src="https://studentadmission.uk/img/Blog-2.png" alt="Higher Education blog" loading="lazy">
      <a href="https://studentadmission.uk/Higher_Education_the_Right_Path_for_You__Find_Out_.php" target="_blank">Higher Education the Right Path for You? Find Out!</a>
    </div>
    <div class="blog-item">
      <img class="img-fluid" src="https://studentadmission.uk/img/Blog-3.png" alt="Higher Education blog" loading="lazy">
      <a href="https://studentadmission.uk/Higher_Education_the_Right_Path_for_You__Find_Out_.php" target="_blank">Higher Education the Right Path for You? Find Out!</a>
    </div>
    <!-- Add all other blog items similarly -->
  </div>
</div>

<!-- Reviews Section -->
<section id="reviews" class="reviews-section card animated fadeIn">
  <div class="container">
    <h2 class="section-title" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Student Reviews</h2>
    <p class="section-subtitle" style="font-size: clamp(0.9rem, 2.5vw, 1.1rem);">Let Us know, what you feel about STUDENT ADMISSION LONDON.</p>
    <div class="review-form-card animated slideUp">
      <h3>Leave a Review</h3>
      <!-- Google Login Button -->
      <div id="g_id_onload"
           data-client_id="160791480238-e61l8viqge00hfdeee1gp1mfhmpe0h84.apps.googleusercontent.com"
           data-callback="handleGoogleLogin"
           data-auto_prompt="false">
      </div>
      <div class="g_id_signin"
           data-type="standard"
           data-shape="pill"
           data-theme="outline"
           data-text="signin_with"
           data-size="large">
      </div>
      <!-- Review Form -->
      <form id="reviewForm" class="review-form">
        <input type="hidden" name="google_sub" id="google_sub">
        <input type="hidden" name="picture" id="picture">
        <div class="form-row">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" id="name" name="name" readonly class="form-control rounded-pill">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" name="email" readonly class="form-control rounded-pill">
          </div>
        </div>
        <div class="form-group">
          <label>WhatsApp Number</label>
          <input type="tel" name="whatsapp" class="form-control rounded-pill" required>
        </div>
        <div class="form-group">
          <label>Service Used</label>
          <select name="service_used" class="form-control rounded-pill" required>
            <option value="">Select service</option>
            <option>End-to-End UK Admission & Relocation Service</option>
            <option>UK Admission Support Services</option>
          </select>
        </div>
        <div class="form-group">
          <label>Rating</label>
          <select name="rating" class="form-control rounded-pill" required>
            <option value="">Select Rating</option>
            <option value="5">★★★★★</option>
            <option value="4">★★★★☆</option>
            <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
        </div>
        <div class="form-group">
          <label>Your Review</label>
          <textarea name="review" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="submit-btn cta-btn">Submit Verified Review</button>
      </form>
      <p id="reviewMessage" class="review-message"></p>
    </div>
    <!-- Approved Reviews List -->
    <div class="reviews-list" id="reviewsList">
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Improved Google Login with better error handling -->
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
function parseJwt(token) {
  try {
    const base64Url = token.split('.')[1];
    const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    return JSON.parse(decodeURIComponent(atob(base64).split('').map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)).join('')));
  } catch (e) {
    console.error("JWT Parse Error:", e);
    return null;
  }
}
async function handleGoogleLogin(response) {
  try {
    console.log("Google Credential Received:", response.credential); // Debugging
    const user = parseJwt(response.credential);
    if (!user) {
      alert("Invalid Google response. Please try again.");
      return;
    }
    document.getElementById('google_sub').value = user.sub;
    document.getElementById('name').value = user.name;
    document.getElementById('email').value = user.email;
    document.getElementById('picture').value = user.picture || '';
    // Send to backend
    const authRes = await fetch('/api/google-auth.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        google_sub: user.sub,
        name: user.name,
        email: user.email,
        picture: user.picture
      })
    });
    const authData = await authRes.json();
    console.log("Backend Response:", authData); // Debugging
    if (authData.success) {
      document.getElementById('reviewForm').style.display = 'block';
      document.getElementById('reviewMessage').innerHTML = '<span style="color:green">Login successful! Now you can submit review.</span>';
    } else {
      alert(authData.error || 'Login failed. Please try again.');
    }
  } catch (err) {
    console.error("Google Login Error:", err);
    alert("Google login failed. Please check your internet or try again later.");
  }
}
// Review Form Submit with validation
document.getElementById('reviewForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  if (!this.checkValidity()) { 
    this.reportValidity(); // Browser validation
    return; // Stop submit if invalid
  }
  const formData = new FormData(this);
  const payload = Object.fromEntries(formData.entries());
  const res = await fetch('/api/submit-review.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(payload)
  });
  const data = await res.json();
  if (data.success) {
    alert('Thank you! Your verified review has been submitted.');
    this.reset();
  } else {
    alert(data.error || 'Something went wrong');
  }
});
</script>

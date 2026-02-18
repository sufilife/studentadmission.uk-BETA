<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet"> 
    <link rel="manifest" href="/manifest.json">
</head>

<div class="hero-wrapper">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" alt="University Campus">
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <div class="container text-center mt-5">
        <div class="welcome-section animated fadeIn">
            <h4 class="side-lines">Welcome</h4>
            <h1 class="side-lines main-title">STUDENT ADMISSION LONDON</h1>
            <h3 class="side-lines mt-3 lead">British Council Certified Consultant</h3>
            <h4 <button class= "cta-btn mt-4" href="https://studentadmission.uk/consultation-booking-form.php">APPLY NOW FOR 2026 FEB | MAY | SEPT INTAKE</button> </h4>
            <h4 <button class="cta-btn mt-4" href="https://studentadmission.uk/consultation-booking-form.php">Book Your Free Consultation</button> </h4>
        </div>
    </div>
</div>

<hr class="section-divider">

<div class="container mt-5">
    <div class="about-section card border-0 shadow-sm p-4" aria-labelledby="about-title">
        <div class="row align-items-center"> <div class="col-lg-7 col-md-12 about-text animated fadeIn">
                <h2 id="about-title" class="side-lines main-title" "mb-4">About Our Agency</h2>
                <div class="row">
            <div class="col-12">
                <div class="about-text animated fadeIn">
                    <p class="lead-text">Established in 2021, Student Admission London is a globally recognized and reputable education agency offering ‘Free Online Consultations’ worldwide. We help and advise international students who want to pursue higher education abroad.</p>
                    
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item border-0 ps-0"><i class="fa fa-check-circle text-success me-2"></i>APPLY WITH FREE ENGLISH TEST</li>
                        <li class="list-group-item border-0 ps-0"><i class="fa fa-check-circle text-success me-2"></i>SCHOLARSHIP UP TO £7000</li>
                        <li class="list-group-item border-0 ps-0"><i class="fa fa-check-circle text-success me-2"></i>Expert Visa Consultant</li>
                    </ul>
                    
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://studentadmission.uk/consultation-booking-form.php" class="cta-btn">Scholarship Eligibility Check</a>
                        <a href="https://studentadmission.uk/application_form.php" class="cta-btn btn-outline">APPLY WITH MOI</a>
                    </div>
                </div>

                <div class="about-image-wrapper text-center animated zoomIn">
                    <img class="img-fluid about-img-balanced" src="img/About_index.png" alt="Agency team" loading="lazy">
                </div>

        </div> </div>
</div>

<hr class="section-divider">

<!-- Service Section (অরিজিনাল কনটেন্ট রাখা, .service-section class + animation + responsive for items + touch-friendly buttons) -->
<div class="service-section card" aria-labelledby="service-title">
  <h2 id="service-title" class="side-lines main-title" "animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">How We Help You</h2>
  <div class= "service-item animated slideUp">
    <div class="row g-0 align-items-center" style="display: flex; flex-wrap: wrap;">
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="International Student Counseling" loading="lazy">
      </div>
      <div class="col-md-7">
        <h3 class="text-uppercase">International Student Counseling</h3>
        <p>At Student Admission UK, our certified education consultants provide one-on-one guidance to international students — helping them make confident, informed decisions about studying in the UK and beyond.</p>
        <a class="cta-btn" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>
  <!-- Add other service items similarly -->
</div>

<hr class="section-divider">

<!-- Banner Start (অরিজিনাল কনটেন্ট রাখা, .banner-section class + animation + fluid input + responsive) -->
<div class="banner-section card" aria-labelledby="banner-title">
  <h2 id="banner-title" class="side-lines main-title" "animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Want to be a UK Student?</h2>
  <p class="animated fadeIn" style="font-size: clamp(0.9rem, 2.5vw, 1.1rem);">Student Admission London provides expert guidance for international students who want to study in the UK...</p>
  <div class="position-relative animated slideUp">
    <input class="form-control border-0 bg-dark rounded-pill w-100 py-4 ps-4 pe-5" type="text" placeholder="Your email">
    <button type="button" class="btn btn-primary py-3 px-4 position-absolute top-0 end-0 me-2 cta-btn">SignUp</button>
  </div>
</div>

<hr class="section-divider">

<!-- Blogs Start (অরিজিনাল কনটেন্ট রাখা, .blogs-section class + animation + grid responsive + lazy images) -->
<div class="blogs-section card" aria-labelledby="blogs-title">
  <h2 id="blogs-title" class= "side-lines main-title" "animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Our Recent Posts</h2>
  <div class="blog-grid animated slideUp">
    <div class="blog-item">
      <img class="img-fluid" src="https://studentadmission.uk/img/Blog-1.png" alt="Higher Education blog" loading="lazy">
      <a href="https://studentadmission.uk/Higher_Education_the_Right_Path_for_You__Find_Out_.php" target="_blank">Higher Education the Right Path for You? Find Out!</a>
    </div>
    <div class="blog-item">
      <img class="img-fluid" src="https://studentadmission.uk/img/Blog-1.png" alt="Higher Education blog" loading="lazy">
      <a href="https://studentadmission.uk/Higher_Education_the_Right_Path_for_You__Find_Out_.php" target="_blank">Higher Education the Right Path for You? Find Out!</a>
    
    <div class="blog-item">
      <img class="img-fluid" src="https://studentadmission.uk/img/Blog-1.png" alt="Higher Education blog" loading="lazy">
      <a href="https://studentadmission.uk/Higher_Education_the_Right_Path_for_You__Find_Out_.php" target="_blank">Higher Education the Right Path for You? Find Out!</a>
    </div>
    <!-- Add all other blog items similarly -->
  </div>
</div>

<hr class="section-divider">

<!-- Reviews Section (অরিজিনাল কনটেন্ট, responsive form with grid, animation opt, touch-friendly) -->
<section id="reviews" class="reviews-section card animated fadeIn">
  <div class="container">
    <h2 class="side-lines main-title" "section-title" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Student Reviews</h2>
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
      <form id="reviewForm" class="mx-auto" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; max-width:800px;">
        <input type="hidden" name="google_sub" id="google_sub">
        <input type="hidden" name="picture" id="picture">
        <div class="field">
          <label>Full Name</label>
          <input type="text" name="name" id="name" class="form-control rounded-pill" readonly>
        </div>
        <div class="field">
          <label>Email Address</label>
          <input type="email" name="email" id="email" class="form-control rounded-pill" readonly>
        </div>
        <div class="field">
          <label>WhatsApp Number</label>
          <input type="tel" name="whatsapp" class="form-control rounded-pill" required>
        </div>
        <div class="field">
          <label>Which service did you use?</label>
          <select name="service_used" class="form-control rounded-pill" required>
            <option value="">Select service</option>
            <option>End-to-End UK Admission & Relocation Service</option>
            <option>UK Admission Support Services</option>
          </select>
        </div>
        <div class="field">
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
        <div class="field" style="grid-column: span 2;">
          <label>Your Review</label>
          <textarea name="review" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="cta-btn rounded-pill px-5 mt-3" style="grid-column: span 2;">
          Submit Verified Review
        </button>
      </form>
      <p id="reviewMessage" class="review-message"></p>
    </div>
    <!-- Approved Reviews List -->
    <div class="reviews-list" id="reviewsList">
      <p class="loading-text">Loading reviews...</p>
    </div>
  </div>
</section>
<!-- Google Identity Services -->
<script src="https://accounts.google.com/gsi/client" async defer></script>

<script>
function parseJwt(token) {
  const base64Url = token.split('.')[1];
  const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
  return JSON.parse(decodeURIComponent(atob(base64).split('').map(c =>
    '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)
  ).join('')));
}

async function handleGoogleLogin(response) {
  try {
    const user = parseJwt(response.credential);

    // Autofill form fields
    document.getElementById('google_sub').value = user.sub;
    document.getElementById('name').value = user.name;
    document.getElementById('email').value = user.email;
    document.getElementById('picture').value = user.picture;

    // Send user to backend (register/login)
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

    if (!authData.success) {
      alert('Login failed');
      return;
    }

    // Show review form
    document.getElementById('reviewForm').style.display = 'block';

  } catch (err) {
    console.error(err);
    alert('Google login failed');
  }
}
</script>


<!-- =====  Review Submit  -->
<script>
document.getElementById('reviewForm').addEventListener('submit', async function(e) {
  e.preventDefault();

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

<hr class="section-divider">

<!-- Testimonial Start (অরিজিনাল কনটেন্ট, responsive items, animation opt) -->
<div class="container-fluid py-5 bg-secondary testimonials-section">
  <div class="container py-5">
    <div class="text-center animated fadeIn">
      <div class="title wow fadeInUp" data-wow-delay="0.1s">
        <div class="title-center">
          <h5 style="font-size: clamp(1rem, 2vw, 1.5rem);" class="side-lines" >Testimonial</h5>
          <h1 style="font-size: clamp(1.5rem, 4vw, 2.5rem);" class="side-lines main-title" >Our Clients Say</h1>
        </div>
      </div>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s" style="display: flex; flex-wrap: wrap; gap: 10px;">
      <div class="testimonial-item text-center" style="flex: 1; min-width: 280px; font-size: clamp(0.9rem, 2.5vw, 1.1rem);">
        <p class="fs-5">STUDENT ADMISSION really made my UK study journey stress-free...</p>
        <h4 class="text-uppercase">Md. Tanvir Rahman</h4>
        <h5 class="text-uppercase">Dhaka, Bangladesh</h5>
        <span class="text-primary">Admitted To: UK (Business & Management)</span>
      </div>
      <!-- Add other testimonial items similarly -->
    </div>
  </div>
</div>
<!-- Testimonial End -->

<hr class="section-divider">

<?php include 'includes/footer.php'; ?>

<!-- PWA Service Worker Registration (PWA implementation) -->
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/js/service-worker.js');
  }
</script>


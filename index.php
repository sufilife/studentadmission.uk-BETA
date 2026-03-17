<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <style>
        /* Hero Section Styling */
        .hero-slideshow {
            position: relative;
            max-width: 100%;
            margin: auto;
            height: 100%;
            overflow: hidden;
            margin-bottom: 05px; /* আপনার সংশোধনী অনুযায়ী */
        }
        .hero-slideshow picture {
            width: 100%;
            height: 100%;
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }
        .hero-slideshow picture.active {
            display: block;
            animation: slideIn 0.8s ease-in-out; /* আপনার সংশোধনী অনুযায়ী ০.৮ সেকেন্ড */
        }
        .hero-slideshow img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }

        .hero-caption {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px; /* অ্যাবাউট সেকশনের আগে বাড়তি স্পেস */
        }

        /* Common spacing for sections */
        .card {
            margin-bottom: 20px;
            padding: 10px;
        }
    </style>
</head>

<div class="hero-slideshow">
    <picture class="active">
        <source media="(min-width: 992px)" srcset="img/carousel-1_1920x1080 (desktop).webp">
        <source media="(min-width: 768px)" srcset="img/carousel-1_1280x720 (tablet).webp">
        <img src="img/carousel-1_768x432 (mobile).webp" alt="UK Study Image 1">
    </picture>
    <picture>
        <source media="(min-width: 992px)" srcset="img/carousel-2_1920x1080 (desktop).webp">
        <source media="(min-width: 768px)" srcset="img/carousel-2_1280x720 (tablet).webp">
        <img src="img/carousel-2_768x432 (mobile).webp" alt="UK Study Image 2">
    </picture>
</div>

<div class="hero-caption">
    <div class="title-center">
        <h3>Welcome</h3>
        <h1 class="display-1" id="hero-title" style="font-size: clamp(2rem, 5vw, 4rem);">STUDENT ADMISSION LONDON</h1>
    </div>
    <p class="fs-5 mb-5" style="font-size: clamp(1rem, 3vw, 1.5rem);">
        British Council Certified Consultant<br>
        APPLY NOW FOR 2026 JAN | FEB | MAY INTAKE
    </p>
    <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn ; margin-top: 80px;">
        Book Your Free Consultation
    </a>
</div>

<script>
let slideIndex = 0;
const slides = document.querySelectorAll(".hero-slideshow picture");
function showSlides() {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIndex++;
    if (slideIndex > slides.length) slideIndex = 1;
    slides[slideIndex - 1].classList.add("active");
    setTimeout(showSlides, 4000); 
}
showSlides();
</script>



<section class="card">
        <h2 class="section-title"  class="animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem); text-align: center; margin-bottom: 10px;margin-top: 20px">Why Choose Us</h2>
        <div class="blog-grid" style="margin-top: 2rem;">
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Free Online Consultation</h5>
                <p style="font-size: 0.95rem;">Book Your Free Online Consultation From Anywhere. Get Help With University Applications, Visa Assistance, Career Advice, Scholarships, And Course Selection.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Experienced Student Counsellor</h5>
                <p style="font-size: 0.95rem;">Our Expert Consultants Help You Find A University Within Your Budget, Choose A Course For Your Career Goals, And Secure Top Scholarships.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Apply For Free</h5>
                <p style="font-size: 0.95rem;">University Applications And Visa Applications Are Free. We Don’t Charge Students Any Fees. We Work Directly With Universities And Their Partners.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Expert Visa Consultant</h5>
                <p style="font-size: 0.95rem;">Our Experienced Visa Consultants Help With Student Visa Applications, Making Sure Everything Is Correct To Avoid Visa Refusals And Visa Rejections.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem; padding: 20px; border-top: 1px dashed var(--muted);">
            <h5 style="font-weight: 600;">Ready to get started? <a href="https://studentadmission.uk/forms/consultation-booking-form.php" style="color: var(--accent); text-decoration: underline;">Schedule a Free Consultation</a> with our visa experts today!</h5>
        </div>
    </section>
    

<section class="card">
        <h2 id="service-title" class="animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem); text-align: center; margin-bottom: 10px;">How We Help You</h2>
        
        <div class="blog-grid" style="margin-top: 2rem;">
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">International Student Counseling</h5>               
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" style="margin-bottom: 5px; margin-top: 5px" src="img/service-1-300×300(Mobile).webp" alt="International Student Counseling" loading="lazy">
      </div>
      <p style="font-size: 0.95rem;">At Student Admission UK, our certified education consultants provide one-on-one guidance to international students — helping them make confident,informed decisions about studying in the UK and beyond.</p>
      <a class="cta-btn" style="margin-bottom: 5px; margin-top: 8px" href="https://studentadmission.uk/services/higher-study-budget-planning.php">Read More <i class="fa fa-arrow-right ms-1"></i></a> 
            </div>
            
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Scholarship Assistance</h5>
      <div class="col-md-5">
        <img class="img-fluid rounded-circle" src="img/service-2-300×300(Mobile).webp" alt="International Student Counseling" loading="lazy">
      </div>
      <p style="font-size: 0.95rem;">Studying in the UK is a dream for many students, but tuition feesand living expenses can be a major concern. At STUDENT ADMISSION, we help turn that dream into reality through our dedicated Scholarship Assistance service.</p><a class="cta-btn" href="https://studentadmission.uk/services/scholarship-assistance.php">Read More <i class="fa fa-arrow-right ms-1"></i></a>
      
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Higher Study Budget Planing</h5>
                <div class="col-md-5">
                    <img class="img-fluid rounded-circle" src="img/service-3-300×300(Mobile).webp" alt="International Student Counseling" loading="lazy">
                </div>
                <p style="font-size: 0.95rem;">Planning your higher studies abroad is exciting — but managing the budget can feel overwhelming for many students and parents. Tuition fees, accommodation, living expenses, visa fees, travel, and unexpected costs… everything adds up quickly.</p>
                  <a class="cta-btn" href="https://studentadmission.uk/services/higher-study-budget-planning.php">Read More <i class="fa fa-arrow-right ms-1"></i></a>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">University Interview Preparation</h5>
                <div class="col-md-5">
                    <img class="img-fluid rounded-circle" src="img/service-4-300×300(Mobile).webp" alt="International Student Counseling" loading="lazy">
                </div>
                <p style="font-size: 0.95rem;">Securing a place at a UK university is a life-changing opportunity—and for many courses, scholarships, and competitive programs, the University Interview is a crucial part of the admission process..</p>
                <a class="cta-btn" href="https://studentadmission.uk/services/university-interview-preparation.php">Read More <i class="fa fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>





<div class="banner-section card" aria-labelledby="banner-title">
    <h2 id="banner-title" class="animated fadeIn">Want to be a UK Student?</h2>
    <p>Student Admission London provides expert guidance for international students who want to study in the UK. From course and university selection to scholarship support, visa guidance, and interview preparation — we support you at every step to make your UK education journey smooth, secure, and successful.

</p>
    <div class="position-relative animated slideUp">
        <input class="form-control border-0 bg-dark rounded-pill w-100 py-4 ps-4 pe-5" type="text" placeholder="Your email">
        <button type="button" class="btn btn-primary py-3 px-4 position-absolute top-0 end-0 me-2 cta-btn">SignUp</button>
    </div>
</div>

<div class="blogs-section card" aria-labelledby="blogs-title">
    <h2 id="blogs-title" class="animated fadeIn" style="font-size: clamp(1.5rem, 4vw, 2.5rem);">Our Recent Posts</h2>
    <div class="blog-grid animated slideUp">
        <?php
        // ব্লগের টাইটেল, URL এবং ইমেজের ইনডেক্স একটি অ্যারেতে সাজানো হয়েছে
        $blogs = [
            [
                "title" => "Higher Education the Right Path for You? Find Out!",
                "link"  => "/Blogs/Higher_Education_the_Right_Path_for_You__Find_Out_.php",
                "img"   => "1"
            ],
            [
                "title" => "Choose the Right Country for Your Higher Studies",
                "link"  => "/Blogs/Choose_the_Right_Country_for_Your_Higher_Studies.php",
                "img"   => "2"
            ],
            [
                "title" => "How to get a Job While Studying abroad",
                "link"  => "/Blogs/How_to_get_a_Job_While_Studying_abroad.php",
                "img"   => "3"
            ],
            [
                "title" => "Prepare for Studying Abroad in Advance",
                "link"  => "/Blogs/Prepare_for_Studying_Abroad_in_Advance.php",
                "img"   => "4"
            ],
            [
                "title" => "UK Student Visa Updated Rules and Requirements 2026",
                "link"  => "/Blogs/UK_Student_Visa_Updated_Rules_and_Requirements_2026.php",
                "img"   => "5"
            ],
            [
                "title" => "Why You Should Study Abroad in 2026",
                "link"  => "/Blogs/Why_You_Should_Study_Abroad_in_2026.php",
                "img"   => "6"
            ],
            [
                "title" => "You need a Financial Plan for your Academic Year",
                "link"  => "/Blogs/You_need_a_Financial_Plan_for_your_Academic_Year.php",
                "img"   => "7"
            ]
        ];

        // ফর-ইচ (foreach) লুপ ব্যবহার করে প্রতিটি ব্লগকে ডাইনামিকভাবে জেনারেট করা হচ্ছে
        foreach ($blogs as $blog): 
        ?>
        <div class="blog-item">
            <picture>
                <source media="(min-width: 992px)" srcset="img/blog-<?php echo $blog['img']; ?>-720×480(Desktop).webp">
                <source media="(min-width: 768px)" srcset="img/blog-<?php echo $blog['img']; ?>-540×360(Tablet).webp">
                <img class="img-fluid" src="img/blog-<?php echo $blog['img']; ?>-360×240(Mobile).webp" alt="<?php echo $blog['title']; ?>" loading="lazy">
            </picture>
            
            <a href="<?php echo $blog['link']; ?>" target="_blank">
                <?php echo $blog['title']; ?>
            </a>
        </div>
        <?php endforeach; ?>
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

<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
function parseJwt(token) {
    try {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        return JSON.parse(decodeURIComponent(atob(base64).split('').map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)).join('')));
    } catch (e) { return null; }
}
async function handleGoogleLogin(response) {
    const user = parseJwt(response.credential);
    if (user) {
        document.getElementById('google_sub').value = user.sub;
        document.getElementById('name').value = user.name;
        document.getElementById('email').value = user.email;
        document.getElementById('picture').value = user.picture || '';
        document.getElementById('reviewForm').style.display = 'block';
        document.getElementById('reviewMessage').innerHTML = '<span style="color:green">Logged in! You can now review.</span>';
    }
}
document.getElementById('reviewForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const res = await fetch('/api/submit-review.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(Object.fromEntries(formData.entries()))
    });
    const data = await res.json();
    if (data.success) { alert('Review submitted!'); this.reset(); }
});
</script>

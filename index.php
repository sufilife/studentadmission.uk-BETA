<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <style>
        /* Index Specific internal adjustments */
        .hero-slideshow {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9; /* মোবাইলে ইমেজ যেন চ্যাপ্টা না হয়ে যায় */
            overflow: hidden;
            border-radius: var(--radius);
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
            animation: fadeIn 0.8s ease-in-out;
        }
        .hero-slideshow img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-caption {
            text-align: center;
            padding: 3rem 1rem;
        }

        /* Responsive Fix for Why Choose Us and Services */
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        /* Service Image Fix */
        .service-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin: 1rem auto;
            border: 4px solid var(--bg);
        }
        
    </style>
</head>

<div class="container">
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
        <h3>Welcome</h3>
        <h1 id="hero-title" style="color: var(--accent);">STUDENT ADMISSION LONDON</h1>
        <p>
            British Council Certified Consultant<br>
            <strong>APPLY NOW FOR 2026 JAN | FEB | MAY INTAKE</strong>
        </p>
        <div style="margin-top: 2rem;">
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">
                Book Your Free Consultation
            </a>
        </div>
    </div>
</div>

<!-- About Start-->
<section class="container">
    <div class="card">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="grid-layout">
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.03);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Free Online Consultation</h5>
                <p style="font-size: 0.95rem;">Book Your Free Online Consultation From Anywhere. Get Help With University Applications, Visa Assistance, and Scholarships.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.03);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Experienced Counsellor</h5>
                <p style="font-size: 0.95rem;">Our Expert Consultants Help You Find A University Within Your Budget and Secure Top Scholarships.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.03);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Apply For Free</h5>
                <p style="font-size: 0.95rem;">University and Visa Applications Are Free. We Don’t Charge Students Any Fees. We Work Directly With Partners.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.03);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Expert Visa Consultant</h5>
                <p style="font-size: 0.95rem;">Our Experienced Consultants Help With Student Visa Applications To Avoid Refusals and Rejections.</p>
            </div>
        </div>
    </div>
</section>
<!-- About End-->

<!-- Service Start-->
<section class="container" style="margin-top: 3rem;">
    <h2 class="section-title">How We Help You</h2>
    <div class="grid-layout">
        <div class="card" style="text-align: center;">
            <h5 style="color: var(--accent);">International Student Counseling</h5>
            <img class="service-img" src="img/service-1-300×300(Mobile).webp" alt="Counseling">
            <p style="font-size: 0.9rem;">Certified consultants providing one-on-one guidance to help you make confident decisions about studying in the UK.</p>
            <a class="cta-btn" style="margin-top: 1rem;" href="/services/higher-study-budget-planning.php">Read More</a>
        </div>
        <div class="card" style="text-align: center;">
            <h5 style="color: var(--accent);">Scholarship Assistance</h5>
            <img class="service-img" src="img/service-2-300×300(Mobile).webp" alt="Scholarship">
            <p style="font-size: 0.9rem;">We help turn your dream into reality through our dedicated Scholarship Assistance service for UK universities.</p>
            <a class="cta-btn" style="margin-top: 1rem;" href="/services/scholarship-assistance.php">Read More</a>
        </div>
        <div class="card" style="text-align: center;">
            <h5 style="color: var(--accent);">Budget Planning</h5>
            <img class="service-img" src="img/service-3-300×300(Mobile).webp" alt="Budget">
            <p style="font-size: 0.9rem;">Planning your higher studies abroad is exciting—but managing the budget can feel overwhelming. We help you plan it.</p>
            <a class="cta-btn" style="margin-top: 1rem;" href="/services/higher-study-budget-planning.php">Read More</a>
        </div>
        <div class="card" style="text-align: center;">
            <h5 style="color: var(--accent);">University Interview Preparation</h5>
            <img class="service-img" src="img/service-4(100×100).webp" alt="Scholarship">
            <p style="font-size: 0.9rem;">Mock interviews, statement review, and interview question bank by ex-university admission officers. 95%+ success rate.</p>
            <a class="cta-btn" style="margin-top: 1rem;" href="/services/university-interview-preparation.php">Read More</a>
        </div>
    </div>
</section>
<!-- Service End-->


<!-- Banner Start-->
<section class="container" style="margin-top: 4rem;">
    <div class="card" style="background: var(--primary); color: #fff; text-align: center; padding: 3rem 1.5rem;">
        <h2>Want to be a UK Student?</h2>
        <p style="color: #ddd; margin-bottom: 2rem;">Get expert guidance from course selection to visa support.</p>
        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
            <input type="email" placeholder="Your email" style="padding: 0.8rem 1.5rem; border-radius: 50px; border: none; width: min(100%, 300px);">
            <button class="cta-btn">SignUp</button>
        </div>
    </div>
</section>
<!-- Banner End-->

<!-- Blogs Start-->
<section class="container" style="margin-top: 3rem;">
    <div class="card">
        <h2 class="section-title">Our Recent Posts</h2>
        <div class="blog-grid">
            <?php
            $blogs = [
                ["title" => "Higher Education the Right Path for You? Find Out!",    "link"  => "/Blogs/Higher_Education_the_Right_Path_for_You__Find_Out_.php",   "img"   => "1"            ],
                ["title" => "Choose the Right Country for Your Higher Studies",      "link"  => "/Blogs/Choose_the_Right_Country_for_Your_Higher_Studies.php",     "img"   => "2"            ],
                ["title" => "How to get a Job While Studying abroad",                "link"  => "/Blogs/How_to_get_a_Job_While_Studying_abroad.php",               "img"   => "3"            ],
                ["title" => "Prepare for Studying Abroad in Advance",                "link"  => "/Blogs/Prepare_for_Studying_Abroad_in_Advance.php",               "img"   => "4"            ],
                ["title" => "UK Student Visa Updated Rules and Requirements 2026",   "link"  => "/Blogs/UK_Student_Visa_Updated_Rules_and_Requirements_2026.php",  "img"   => "5"            ],
                ["title" => "Why You Should Study Abroad in 2026",	       	         "link"  => "/Blogs/Why_You_Should_Study_Abroad_in_2026.php",                  "img"   => "6"            ]
            ];

            foreach ($blogs as $blog): ?>
            <div class="blog-item card">
                <img src="img/blog-<?php echo $blog['img']; ?>-360×240(Mobile).webp" alt="Blog" style="width: 100%; border-radius: 10px;">
                <a href="<?php echo $blog['link']; ?>" style="display: block; margin-top: 1rem; font-weight: 600; text-decoration: none; color: var(--primary);">
                    <?php echo $blog['title']; ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Blogs End-->


<!-- Review  Start-->
<section class="container" style="margin-top: 4rem;">
    <h2 class="section-title">Student Reviews</h2>
    <div class="card review-form-card">
        <h3>Leave a Review</h3>
        <p>Log in with Google to auto-fill your details and share your experience.</p>
        
        <div id="g_id_onload" 
             data-client_id="160791480238-e61l8viqge00hfdeee1gp1mfhmpe0h84.apps.googleusercontent.com" 
             data-callback="handleGoogleLogin" 
             data-auto_prompt="false"> 
        </div>
        <div class="g_id_signin" data-type="standard" data-shape="pill" data-theme="outline" data-text="signin_with" data-size="large"></div>
        
        <form id="reviewForm" class="review-form" style="margin-top: 2rem;">
            <input type="hidden" name="google_sub" id="google_sub">
            <input type="hidden" name="picture" id="picture">
            
            <div class="form-row">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="name" name="name" readonly placeholder="Your Full Name" class="form-control rounded-pill">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" readonly placeholder="Your Official email" class="form-control rounded-pill">
                </div>
            </div>

            <div class="form-group">
                <label>WhatsApp Number</label>
                <input type="tel" name="whatsapp" class="form-control rounded-pill" required placeholder="e.g. +447446969466">
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

            <textarea name="review" placeholder="Your Review" required style="width: 100%; border-radius: 1rem; padding: 1rem; margin-top: 1rem; border: 1px solid #ddd;"></textarea>
            
            <button type="submit" class="cta-btn" style="width: 100%; margin-top: 1rem;">Submit Review</button>
        </form>
        <p id="reviewMessage" class="review-message"></p>
    </div>

    <div class="reviews-list" id="reviewsList"></div>
</section>
<!-- Review  End-->


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
        // login successful message
        document.getElementById('reviewMessage').innerHTML = '<span style="color:green; font-weight:bold;">Success! Details auto-filled from Google.</span>';
    }
}

document.getElementById('reviewForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Check: Is the user logged in or not
    const googleSub = document.getElementById('google_sub').value;
    if (!googleSub) {
        alert('Please login with Google first to submit your review.');
        return;
    }

    const formData = new FormData(this);
    try {
        const res = await fetch('/api/submit-review.php', {
            method: 'POST',
            body: JSON.stringify(Object.fromEntries(formData.entries())),
            headers: { 'Content-Type': 'application/json' }
        });
        const data = await res.json();
        if (data.success) { 
            alert('Review submitted for approval!'); 
            this.reset(); 
            document.getElementById('reviewMessage').innerHTML = '';
        } else {
            alert('Error: ' + (data.message || 'Submission failed'));
        }
    } catch (error) {
        alert('Submission error. Please try again.');
    }
});
</script>
<script>
    // Slideshow Logic
    let slideIndex = 0;
    const slides = document.querySelectorAll(".hero-slideshow picture");
    function showSlides() {
        slides.forEach(s => s.classList.remove("active"));
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.add("active");
        setTimeout(showSlides, 4000);
    }
    showSlides();

        // ... (Your existing JWT parsing logic)
        document.getElementById('reviewForm').style.display = 'block';
    }
</script>

<?php include 'includes/footer.php'; ?>

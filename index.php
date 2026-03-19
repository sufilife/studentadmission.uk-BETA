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
            <?php
            // Why Choose Us এর জন্য ডাইনামিক অ্যারে
            $features = [
                [
                    "title" => "Free Online Consultation",
                    "desc"  => "Book Your Free Online Consultation From Anywhere. Get Help With University Applications, Visa Assistance, and Scholarships."
                ],
                [
                    "title" => "Experienced Counsellor",
                    "desc"  => "Our Expert Consultants Help You Find A University Within Your Budget and Secure Top Scholarships."
                ],
                [
                    "title" => "Apply For Free",
                    "desc"  => "University and Visa Applications Are Free. We Don’t Charge Students Any Fees. We Work Directly With Partners."
                ],
                [
                    "title" => "Expert Visa Consultant",
                    "desc"  => "Our Experienced Consultants Help With Student Visa Applications To Avoid Refusals and Rejections."
                ]
            ];

            // লুপের মাধ্যমে কার্ডগুলো জেনারেট করা
            foreach ($features as $feature): ?>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.03); border: 1px solid rgba(37, 99, 235, 0.1);">
                <h5 style="color: var(--accent); margin-bottom: 10px;"><?php echo $feature['title']; ?></h5>
                <p style="font-size: 0.95rem; color: var(--muted);"><?php echo $feature['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- About End-->

<!-- Service Start-->
<section class="container" style="margin-top: 3rem;">
    <h2 class="section-title">How We Help You</h2>
    <div class="grid-layout">
        <?php
        // ডাইনামিক সার্ভিস অ্যারে
        $services = [
            [
                "title" => "International Student Counseling",
                "link"  => "/services/international-student-counseling.php",
                "img"   => "service-1-300×300(Mobile).webp",
                "desc"  => "Certified consultants providing one-on-one guidance to help you make confident decisions about studying in the UK."
            ],
            [
                "title" => "Scholarship Assistance",
                "link"  => "/services/scholarship-assistance.php",
                "img"   => "service-2-300×300(Mobile).webp",
                "desc"  => "We help turn your dream into reality through our dedicated Scholarship Assistance service for UK universities."
            ],
            [
                "title" => "Budget Planning",
                "link"  => "/services/higher-study-budget-planning.php",
                "img"   => "service-3-300×300(Mobile).webp",
                "desc"  => "Planning your higher studies abroad is exciting—but managing the budget can feel overwhelming. We help you plan it."
            ],
            [
                "title" => "University Interview Preparation",
                "link"  => "/services/university-interview-preparation.php",
                "img"   => "service-4(100×100).webp",
                "desc"  => "Mock interviews, statement review, and interview question bank by ex-university admission officers. 95%+ success rate."
            ]
        ];

        // লুপের মাধ্যমে সার্ভিসগুলো প্রদর্শন
        foreach ($services as $service): ?>
        <div class="card" style="text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h5 style="color: var(--accent); min-height: 50px;"><?php echo $service['title']; ?></h5>
                <img class="service-img" src="img/<?php echo $service['img']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
                <p style="font-size: 0.9rem;"><?php echo $service['desc']; ?></p>
            </div>
            <div style="margin-top: 1.5rem;">
                <a class="cta-btn" href="<?php echo $service['link']; ?>">Read More</a>
            </div>
        </div>
        <?php endforeach; ?>
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
<section class="container" style="margin-top: 3rem; margin-bottom: 5rem;">
    <div class="card">
        <h2 class="section-title">Our Recent Posts</h2>
        <div class="grid-layout">
            <?php
            // ব্লগের জন্য ডাইনামিক অ্যারে
            $blogs = [
                ["title" => "Higher Education the Right Path for You? Find Out!", "link" => "/Blogs/Higher_Education_the_Right_Path_for_You__Find_Out_.php", "img" => "blog-1-360×240(Mobile).webp"],
                ["title" => "Choose the Right Country for Your Higher Studies", "link" => "/Blogs/Choose_the_Right_Country_for_Your_Higher_Studies.php", "img" => "blog-2-360×240(Mobile).webp"],
                ["title" => "How to get a Job While Studying abroad", "link" => "/Blogs/How_to_get_a_Job_While_Studying_abroad.php", "img" => "blog-3-360×240(Mobile).webp"],
                ["title" => "Prepare for Studying Abroad in Advance", "link" => "/Blogs/Prepare_for_Studying_Abroad_in_Advance.php", "img" => "blog-4-360×240(Mobile).webp"],
                ["title" => "UK Student Visa Updated Rules and Requirements 2026", "link" => "/Blogs/UK_Student_Visa_Updated_Rules_and_Requirements_2026.php", "img" => "blog-5-360×240(Mobile).webp"],
                ["title" => "Why You Should Study Abroad in 2026", "link" => "/Blogs/Why_You_Should_Study_Abroad_in_2026.php", "img" => "blog-6-360×240(Mobile).webp"]
            ];

            // লুপের মাধ্যমে ব্লগ পোস্টগুলো প্রদর্শন
            foreach ($blogs as $blog): ?>
            <div class="blog-item card" style="padding: 1rem; border: 1px solid rgba(0,0,0,0.05);">
                <a href="<?php echo $blog['link']; ?>" style="text-decoration: none;">
                    <div style="overflow: hidden; border-radius: 10px;">
                        <img src="img/<?php echo $blog['img']; ?>" alt="Blog Image" 
                             style="width: 100%; height: 200px; object-fit: cover; transition: 0.3s; display: block;" 
                             onmouseover="this.style.transform='scale(1.05)'" 
                             onmouseout="this.style.transform='scale(1)'">
                    </div>
                    
                    <div style="margin-top: 1.2rem;">
                        <h5 style="color: var(--primary); font-weight: 600; font-size: 1.1rem; line-height: 1.4; text-align: left; transition: 0.3s;">
                            <?php echo $blog['title']; ?>
                        </h5>
                    </div>
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

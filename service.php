<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <title>Our Services — UK Study Abroad Experts | STUDENT ADMISSION LONDON</title>
    <meta name="description" content="Free UK Master's Application with MOI • Up to £7,500 Scholarship • Expert Visa Guidance • 100% Free Consultation. Apply for 2026 Intake Now!">
</head>

<!-- Hero -->
<div class="hero-slideshow">
    <picture class="active">
        <source media="(min-width: 992px)" srcset="img/service-hero-desktop.webp">
        <source media="(min-width: 768px)" srcset="img/service-hero-tablet.webp">
        <img src="img/service-hero-mobile.webp" alt="UK Study Services" loading="lazy">
    </picture>
</div>

<div class="hero-caption" style="margin-top: 50px; margin-bottom: 60px;">
    <h1 style="font-size: clamp(2.2rem, 6vw, 4.5rem);">Our Expert Services</h1>
    <p style="font-size: clamp(1.1rem, 3vw, 1.6rem); max-width: 800px; margin: 0 auto 2rem;">
        From free counselling to successful UK visa — we handle everything so you can focus only on your dream.
    </p>
    <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="padding: 16px 32px; font-size: 1.1rem;">
        Book Free Consultation Now
    </a>
</div>

<script>
    // Same slideshow as index.php
    let slideIndex = 0;
    const slides = document.querySelectorAll(".hero-slideshow picture");
    function showSlides() {
        slides.forEach(slide => slide.classList.remove("active"));
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.add("active");
        setTimeout(showSlides, 5000);
    }
    showSlides();
</script>

<!-- Main Services Section -->
<section class="card" style="padding: var(--section-gap) 0;">
    <h2 class="section-title" style="font-size: clamp(1.8rem, 5vw, 3rem);">Our Core Services</h2>
    <div class="blog-grid" style="margin-top: 3rem;">

        <!-- Service 1 -->
        <div class="card" style="text-align:center; background:rgba(37,99,235,0.03);">
            <picture>
                <source media="(min-width:992px)" srcset="img/service-1-600×600(Desktop).webp">
                <img src="img/service-1-300×300(Mobile).webp" class="img-fluid rounded-circle" alt="International Student Counseling" loading="lazy">
            </picture>
            <h3 style="margin:1.2rem 0 0.8rem;">International Student Counseling</h3>
            <p>One-on-one personalised guidance from British Council certified counsellors. Course & university selection according to your academic profile and career goal.</p>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="margin-top:1rem;">Get Free Counselling</a>
        </div>

        <!-- Service 2 -->
        <div class="card" style="text-align:center; background:rgba(37,99,235,0.03);">
            <picture>
                <source media="(min-width:992px)" srcset="img/service-2-600×600(Desktop).webp">
                <img src="img/service-2-300×300(Mobile).webp" class="img-fluid rounded-circle" alt="Scholarship Assistance" loading="lazy">
            </picture>
            <h3 style="margin:1.2rem 0 0.8rem;">Scholarship Assistance</h3>
            <p>Up to £7,500 scholarship at top UK universities. We prepare strong scholarship applications and connect you directly with university scholarship teams.</p>
            <a href="https://studentadmission.uk/forms/application_form.php" class="cta-btn" style="margin-top:1rem;">Check Your Eligibility</a>
        </div>

        <!-- Service 3 -->
        <div class="card" style="text-align:center; background:rgba(37,99,235,0.03);">
            <picture>
                <source media="(min-width:992px)" srcset="img/service-3-600×600(Desktop).webp">
                <img src="img/service-3-300×300(Mobile).webp" class="img-fluid rounded-circle" alt="Higher Study Budget Planning" loading="lazy">
            </picture>
            <h3 style="margin:1.2rem 0 0.8rem;">Higher Study Budget Planning</h3>
            <p>Complete financial roadmap — tuition, living cost, visa fee, travel & contingency. Transparent & realistic budget planning with parents.</p>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="margin-top:1rem;">Get Budget Plan</a>
        </div>

        <!-- Service 4 -->
        <div class="card" style="text-align:center; background:rgba(37,99,235,0.03);">
            <picture>
                <source media="(min-width:992px)" srcset="img/service-4-600×600(Desktop).webp">
                <img src="img/service-4-300×300(Mobile).webp" class="img-fluid rounded-circle" alt="University Interview Preparation" loading="lazy">
            </picture>
            <h3 style="margin:1.2rem 0 0.8rem;">University Interview Preparation</h3>
            <p>Mock interviews, personal statement review, and interview question bank by ex-university admission officers. 95%+ success rate.</p>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="margin-top:1rem;">Book Mock Interview</a>
        </div>

    </div>
</section>

<!-- Why Choose Us + More Services -->
<section class="card">
    <h2 class="section-title">More Ways We Help You</h2>
    <div class="blog-grid" style="margin-top: 2.5rem;">
        <div class="card"><strong>Free Application Support</strong><br>University application + offer letter — completely free of charge.</div>
        <div class="card"><strong>MOI Based Admission</strong><br>No IELTS / PTE required for most of our partner universities.</div>
        <div class="card"><strong>Expert Visa Guidance</strong><br>100% document checking + interview preparation by former UKVI officers.</div>
        <div class="card"><strong>Pre-Departure & Relocation</strong><br>Accommodation, bank account, SIM, airport pickup — everything arranged.</div>
    </div>
</section>

<!-- Final CTA -->
<div class="card" style="text-align:center; background:linear-gradient(135deg, var(--accent), #1e40af); color:#fff; padding:4rem 2rem; border-radius: var(--radius);">
    <h2 style="color:#fff;">Ready to Start Your UK Journey in 2026?</h2>
    <p style="color:rgba(255,255,255,0.95); max-width:700px; margin:1.5rem auto;">Limited seats for January, May & September 2026 intake.<br>Book your free consultation today and secure your future.</p>
    <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="background:#fff; color:var(--accent); font-size:1.2rem; padding:18px 40px;">Book Free 1-on-1 Consultation Now</a>
</div>

<?php include 'includes/footer.php'; ?>

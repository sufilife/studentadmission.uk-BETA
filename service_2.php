<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <title>Our Services — Expert UK Study Guidance | STUDENT ADMISSION LONDON</title>
    <meta name="description" content="Free University Application, Scholarship Assistance up to £7000, Visa Guidance, Interview Preparation & Full Relocation Support for UK Bachelor's, Master's & PhD.">
</head>

<!-- Hero Section -->
<div class="hero-slideshow">
    <picture class="active">
        <source media="(min-width: 992px)" srcset="img/service-hero-desktop.webp">
        <source media="(min-width: 768px)" srcset="img/service-hero-tablet.webp">
        <img src="img/service-hero-mobile.webp" alt="STUDENT ADMISSION LONDON Services" loading="lazy">
    </picture>
</div>

<div class="hero-caption">
    <h1 style="font-size: clamp(2.2rem, 6vw, 4rem);">Our Expert Services</h1>
    <p style="font-size: clamp(1.1rem, 3vw, 1.5rem);">From first consultation to successful UK graduation — we handle everything for you.</p>
    <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="font-size:1.1rem; padding: 16px 32px;">Book Free Consultation Now</a>
</div>

<script>
let slideIndex = 0;
const slides = document.querySelectorAll(".hero-slideshow picture");
function showSlides() {
    slides.forEach(slide => slide.classList.remove("active"));
    slideIndex++;
    if (slideIndex > slides.length) slideIndex = 1;
    slides[slideIndex-1].classList.add("active");
    setTimeout(showSlides, 5000);
}
showSlides();
</script>

<!-- Services Grid -->
<section class="card service-section" style="margin-top: 40px;">
    <h2 class="section-title animated fadeIn">Our Core Services</h2>
    <div class="blog-grid" style="margin-top: 2rem;">

        <!-- Service 1 -->
        <div class="card animated slideUp">
            <picture>
                <source media="(min-width:150px)" srcset="img/service-1-300×300(Mobile).webp">
                <source media="(min-width:150px)" srcset="img/service-1-400×400(Tablet).webp">
                <img src="img/service-1(100×100).webp" alt="International Student Counseling" loading="lazy">
            </picture>
            <h3>International Student Counseling</h3>
            <p>One-on-one expert guidance to choose the right UK university & course that matches your career goals and budget.</p>
            <ul style="margin:15px 0; padding-left:20px; font-size:0.95rem;">
                <li>✓ Personalized university shortlisting</li>
                <li>✓ Course & career pathway mapping</li>
                <li>✓ IELTS/MOI guidance</li>
            </ul>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">Get Counselled Now</a>
        </div>

        <!-- Service 2 -->
        <div class="card animated slideUp">
            <picture>
                <source media="(min-width:150px)" srcset="img/service-2-300×300(Mobile).webp">
                <source media="(min-width:150px)" srcset="img/service-2-300×300(Mobile).webp">
                <img src="img/service-2(100×100).webp" alt="Scholarship Assistance" loading="lazy">
            </picture>
            <h3>Scholarship & Funding Assistance</h3>
            <p>Up to £7,500 scholarship for UK universities. We handle full scholarship application process.</p>
            <ul style="margin:15px 0; padding-left:20px; font-size:0.95rem;">
                <li>✓ Chevening, Commonwealth & university-specific scholarships</li>
                <li>✓ Merit & need-based funding</li>
                <li>✓ Full application support</li>
            </ul>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">Check My Scholarship Eligibility</a>
        </div>

        <!-- Service 3 -->
        <div class="card animated slideUp">
            <picture>
                <source media="(min-width:150px)" srcset="img/service-3-600×600(Desktop).webp">
                <source media="(min-width:150px)" srcset="img/service-3-400×400(Tablet).webp">
                <img src="img/service-3-300×300(Mobile).webp" alt="Budget Planning" loading="lazy">
            </picture>
            <h3>Higher Study Budget Planning</h3>
            <p>Complete financial roadmap — tuition, living cost, visa fee, travel & contingency.</p>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">Get My Budget Plan</a>
        </div>

        <!-- Service 4 -->
        <div class="card animated slideUp">
            <picture>
                <source media="(min-width:150px)" srcset="img/service-4-600×600(Desktop).webp">
                <source media="(min-width:150px)" srcset="img/service-4-400×400(Tablet).webp">
                <img src="img/service-4-300×300(Mobile).webp" alt="University Interview" loading="lazy">
            </picture>
            <h3>University Interview Preparation</h3>
            <p>Mock interviews, personal statement review, and expert tips to ace your UK university interview.</p>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">Prepare For Interview</a>
        </div>

        <!-- Service 5 -->
        <div class="card animated slideUp">
            <picture>
                <source media="(min-width:150px)" srcset="img/service-visa-desktop.webp">
                <img src="img/service-visa-mobile.webp" alt="Visa Guidance" loading="lazy">
            </picture>
            <h3>Student Visa & CAS Guidance</h3>
            <p>100% visa success rate in 2025. We prepare your CAS, financial documents and interview.</p>
            <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">Start Visa Process</a>
        </div>

    </div>
</section>

<!-- CTA Banner -->
<div class="banner-section card" style="background: linear-gradient(135deg, #2563EB, #1e40af); color: white; margin-top: 40px;">
    <h2 style="color:white;">Ready to Start Your UK Journey?</h2>
    <p style="color:rgba(255,255,255,0.95);">Book your FREE 30-minute consultation today. Our experts will create your personalized UK study roadmap.</p>
    <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn" style="background:white; color:#2563EB; font-weight:700;">Book Free Consultation →</a>
</div>

<?php include 'includes/footer.php'; ?>

<script>
// Auto active nav link
document.querySelectorAll('nav ul li a').forEach(link => {
    if(link.href === window.location.href) link.style.color = '#2563EB';
});
</script>

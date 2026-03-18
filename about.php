<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
    <link href="/css/style.css" rel="stylesheet">
    <style>
        /* About Page Specific Styles */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: center;
        }

        .benefit-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }

        .benefit-list li {
            margin-bottom: 0.8rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mission-box {
            background: var(--primary);
            color: #fff;
            padding: 2rem;
            border-radius: var(--radius);
            margin: 2rem 0;
        }

        .expert-card {
            max-width: 500px;
            margin: 2rem auto;
            text-align: center;
        }

        .expert-img {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: var(--radius);
            margin: 1rem 0;
            transition: 0.3s;
        }

        /* Mobile Adjustments */
        @media (max-width: 992px) {
            .about-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .cta-group {
                justify-content: center;
            }
        }
    </style>
</head>

<div class="container">
    <section class="about-section card">
        <div class="about-grid">
            <div class="about-text">
                <h2 id="about-title" style="text-align: left;">About Our Agency</h2>
                <p>Established in 2021, Student Admission London is a globally recognized and reputable education agency offering ‘Free Online Consultations’ worldwide. We help and advise international students who want to pursue higher education abroad.</p>
                
                <ul class="benefit-list">
                    <li>✅ APPLY WITH FREE ENGLISH TEST</li>
                    <li>✅ SCHOLARSHIP UP TO £7000</li>
                    <li>✅ EXPERT VISA CONSULTANT</li>
                </ul>

                <div class="cta-group" style="display: flex; flex-wrap: wrap; gap: 1rem;">
                    <a href="https://studentadmission.uk/forms/consultation-booking-form.php" class="cta-btn">Scholarship Check</a>
                    <a href="#" class="cta-btn" style="background: var(--muted);">APPLY WITH MOI</a>
                </div>
            </div>

            <div class="about-image">
                <picture>
                    <source srcset="img/About_900×675(Desktop).webp" media="(min-width: 1024px)">
                    <source srcset="img/About_525×700(Tablet).webp" media="(min-width: 768px)">
                    <img src="img/About_375×500(Mobile).webp" alt="About Student Admission London" style="width: 100%; border-radius: var(--radius);">
                </picture>
            </div>
        </div>
    </section>

    <section class="card" style="margin-top: 3rem;">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="blog-grid">
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent);">Free Online Consultation</h5>
                <p style="font-size: 0.9rem;">Book Your Free Online Consultation From Anywhere. Get Help With University Applications and Scholarships.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent);">Experienced Counsellor</h5>
                <p style="font-size: 0.9rem;">Our Expert Consultants Help You Find A University Within Your Budget and Career Goals.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent); margin-bottom: 10px;">Expert Visa Consultant</h5>
                <p style="font-size: 0.95rem;">Our Experienced Visa Consultants Help With Student Visa Applications, Making Sure Everything Is Correct To Avoid Visa Refusals And Visa Rejections.</p>
            </div>
            <div class="card" style="text-align: center; background: rgba(37, 99, 235, 0.02);">
                <h5 style="color: var(--accent);">Apply For Free</h5>
                <p style="font-size: 0.9rem;">University and Visa Applications Are Free. We Work Directly With Universities and Their Partners.</p>
            </div>
        </div>
    </section>

    <section class="card" style="line-height: 1.8; margin-top: 3rem;">
        <h3 style="color: var(--accent); border-bottom: 2px solid var(--accent); display: inline-block; margin-bottom: 1rem;">Our Story</h3>
        <p>Established in 2021, Student Admission is a trusted partner for students across the globe. We understand that the journey to international education is filled with challenges, and our mission is to make this journey smooth.</p>
        
        <div class="mission-box">
            <h5 style="color: #fff; margin-bottom: 10px;">Our Mission:</h5>
            <p style="color: rgba(255,255,255,0.9); margin-bottom: 0;">We support both international and home students through our UK university partnerships. We provide 'Free Online Consultations' to help you make the best decisions for your future career.</p>
        </div>

        <p>At Student Admission, we believe in personalized service. Every student is unique. Our founder, <strong>Moniruzzaman Sami</strong>, envisioned a consultancy that goes beyond mere guidance, focusing on true excellence.</p>
    </section>

    <section class="card" style="text-align: center; margin-top: 3rem;">
        <span style="font-weight: 700; color: var(--muted); text-transform: uppercase;">Meet Our Experts</span>
        <h2 style="margin: 10px 0 25px;">Student Councillor Profile</h2>
        <div class="card expert-card">
            <h3><a href="#" style="text-decoration: none; color: var(--accent);">Mohammad Salman Rida (CEO)</a></h3>
            <picture>
                <source media="(min-width: 992px)" srcset="img/salman-6-min_1.webp">
                <img class="expert-img" src="img/salman-150x150_1.webp" alt="CEO Salman Rida" loading="lazy">
            </picture>
            <p style="font-weight: 500;">Lead Education Consultant & CEO</p>
        </div>
    </section>

    <section class="card" style="background: var(--accent); color: #fff; text-align: center; padding: 3rem 1rem; margin-top: 3rem;">
        <h2 style="color: #fff;">Want to be a UK Student?</h2>
        <p style="color: rgba(255,255,255,0.9);">From university selection to visa guidance — we support you at every step.</p>
        <div style="max-width: 400px; margin: 2rem auto; display: flex; gap: 10px;">
            <input type="email" placeholder="Your email" style="flex: 1; padding: 0.8rem; border-radius: 50px; border: none;">
            <button class="cta-btn" style="background: var(--primary);">SignUp</button>
        </div>
    </section>

    <section class="blogs-section card" style="margin-top: 3rem;">
        <h2 class="section-title">Our Recent Posts</h2>
        <div class="blog-grid">
            <?php
            $blogs = [
                ["title" => "UK Student Visa Updated Rules 2026", "link" => "#", "img" => "5"],
                ["title" => "Why You Should Study Abroad in 2026", "link" => "#", "img" => "6"],
                ["title" => "How to get a Job While Studying", "link" => "#", "img" => "3"]
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
    </section>
</div>

<?php include 'includes/footer.php'; ?>

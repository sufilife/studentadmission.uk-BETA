<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
  <link href="/css/style.css" rel="stylesheet">
</head>

<!-- Hero Section -->
<div class="hero" id="hero" aria-labelledby="hero-title">
  <div>
    <h1 id="hero-title">🎓 Secure Your UK Master’s with MOI — No IELTS Required!</h1>
    <p>Get admission to top UK universities for <strong>January / February 2026</strong> intake. Scholarships up to <strong>£7,500</strong>. Free application & visa support.</p>
    <div class="sub-badges">
      <div class="badge">✅ No IELTS needed (MOI accepted)</div>
      <div class="badge">✅ Scholarships up to £7,500</div>
      <div class="badge">✅ Fast offers (4–7 days)</div>
    </div>
    <div class="cta-wrapper">
      <button class="cta-btn" onclick="document.getElementById('apply-form').scrollIntoView({behavior:'smooth'})">Apply Free — Start Now</button>
    </div>
    <div>Apply to top UK universities: University of Aberdeen, Aston, UWE Bristol, University of South Wales, University of Essex, University of Portsmouth and more.</div>
  </div>
  <aside class="hero-right">
    <!-- Sidebar content as in original -->
  </aside>
</div>

<!-- Benefits Section -->
<div class="benefits-section card" aria-labelledby="benefits-title">
  <div class="benefits">
    <!-- Benefits cards as in original -->
  </div>
</div>

<!-- Universities Section -->
<div class="universities-section card" aria-labelledby="partners-title">
  <div id="partners-title">Partner Universities</div>
  <div class="logos">
    <!-- Logos as in original -->
  </div>
</div>

<!-- Steps Section -->
<div class="steps-section card" aria-labelledby="steps-title">
  <div id="steps-title">Your Journey in 4 Simple Steps</div>
  <div class="steps">
    <!-- Steps as in original -->
  </div>
</div>

<!-- Form Section -->
<div id="apply-form" class="form-section card" aria-labelledby="form-title">
  <div>
    <h2 id="form-title">Apply Now — Start Your Free Application</h2>
    <p>Fill the short form and our adviser will contact you on WhatsApp within 24 hours.</p>
    <form id="leadForm" aria-describedby="formMsg">
      <h2 style="text-align: center;">Apply Now — Start Your Free Application</h2>
          <p style="margin:0;color:var(--muted)">Fill the short form and our adviser will contact you on WhatsApp within 24 hours.</p>
          <form id="leadForm" style="margin-top:12px">
            <div class="field">
              <label for="fullName">Full Name *</label>
              <input id="fullName" type="text" required placeholder="e.g. Mohammad Hasan">
            </div>
            <div class="field">
              <label for="phone">WhatsApp Number (with country code) *</label>
              <input id="phone" type="tel" required placeholder="+447446969466">
            </div>
            <div class="field">
              <label for="email">Email *</label>
              <input id="email" type="email" required placeholder="yourname@example.com">
            </div>
            <div class="field">
              <label for="education">Last Education (Institute, Year, Result)</label>
              <input id="education" type="text" placeholder="e.g. BUET, 2023, 3.50">
            </div>
            <div class="row">
              <div class="field" style="flex:1">
                <label for="moiStatus">Do you have IELTS / TOEFL or MOI?</label>
                <select id="moiStatus">
                  <option value="MOI">MOI</option>
                  <option value="IELTS">IELTS</option>
                  <option value="TOEFL">TOEFL</option>
                  <option value="None">None</option>
                  <option value="Planning">Planning</option>
                </select>
              </div>
              <div class="field" style="flex:1">
                <label for="intake">Preferred Intake</label>
                <select id="intake">
                  <option>Jan - Feb'26 [Winter Intake]</option>
                  <option>Mar - Apr'26 [Winter/Spring Term]</option>
                  <option>Sep - Oct'26 [Main Intake]</option>
                  <option>Nov - Dec'26 [Autumn Term]</option>
                  <option>Later</option>
                </select>
              </div>
            </div>
            <div style="margin-top:8px;display:flex;gap:8px;align-items:center">
              <button id="submitBtn" type="submit" class="cta-btn">Continue</button>
            </div>
            <p id="formMsg" style="margin-top:10px;color:var(--muted);font-size:14px"></p>
          </form>
    </form>
  </div>
  <aside>
    <!-- Sidebar as in original -->
  </aside>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section card" aria-labelledby="success-title">
  <div id="success-title">Success Stories</div>
  <div>
    <!-- Testimonials as in original -->
  </div>
</div>

  <script>
    // Hamburger menu toggle
    function toggleMenu() {
      document.getElementById('navMenu').classList.toggle('active');
    }
    // Back to Top
    window.onscroll = function() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('backToTop').style.display = 'block';
      } else {
        document.getElementById('backToTop').style.display = 'none';
      }
    };
    function scrollToTop() {
      window.scrollTo({top: 0, behavior: 'smooth'});
    }
    // Form script (unchanged)
    const MESSAGE_TEMPLATE = `Full Name:\nWhatsApp Number:\nEmail:\nEducation:\nEnglish Qualification:\nIntake:\n`;
    const WHATSAPP_NUMBER = "447446969466";
    document.getElementById('leadForm').addEventListener('submit', async function(e){
      e.preventDefault();
      const submitBtn = document.getElementById('submitBtn');
      const formMsg = document.getElementById('formMsg');
      submitBtn.disabled = true;
      submitBtn.innerText = "Processing...";
      const name = document.getElementById('fullName').value.trim();
      const phone = document.getElementById('phone').value.trim();
      const email = document.getElementById('email').value.trim();
      const education = document.getElementById('education').value.trim();
      const moi = document.getElementById('moiStatus').value;
      const intake = document.getElementById('intake').value;
      if(!name || !phone || !email){
        formMsg.style.color = 'crimson';
        formMsg.innerText = "অনুগ্রহ করে অবশ্যই নাম, WhatsApp নম্বর ও ইমেইল দিন।";
        submitBtn.disabled = false;
        submitBtn.innerText = "Submit & Continue to WhatsApp";
        return;
      }
      try {
        await fetch('/submit-lead.php', {
          method: 'POST',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify({ name, phone, email, education, moi, intake })
        }).catch(()=>{});
        const filledMessage = `Full Name: ${name}\nWhatsApp Number: ${phone}\nEmail: ${email}\nEducation: ${education}\nEnglish Qualification: ${moi}\nIntake: ${intake}\n`;
        formMsg.style.color = 'green';
        formMsg.innerText = "ধন্যবাদ! আপনার আবেদন জমা হয়েছে — WhatsApp খোলা হচ্ছে...";
        setTimeout(()=> {
          window.location.href = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(filledMessage)}`;
        }, 700);
      } catch(err){
        console.error(err);
        formMsg.style.color = 'crimson';
        formMsg.innerText = "দুঃখিত, সার্ভারে একট problem হয়েছে। পরে আবার চেষ্টা করুন।";
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerText = "Submit & Continue to WhatsApp";
      }
    });
  </script>
<?php include 'includes/footer.php'; ?>

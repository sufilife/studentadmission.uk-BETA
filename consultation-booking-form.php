<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
  <link href="/css/style.css" rel="stylesheet">
<link rel="manifest" href="/manifest.json">
</head>

<!-- Hero Section -->
<div class="hero" id="hero" aria-labelledby="consult-hero-title">
  <div>
    <h1 id="consult-hero-title">Book Your Free Consultancy Session</h1>
  </div>
</div>

<!-- Main Form Content -->
<div class="card" aria-labelledby="form-title">
  <h2 id="form-title">Reserve Your Free Consultation</h2>
  <p>Complete the form to book a 20–30 minute session with our certified counsellors.</p>
  <form id="consultForm" aria-describedby="formMsg">
      <form id="consultForm" style="margin-top:12px" aria-describedby="formMsg">
        <!-- SECTION 1: Personal Information -->
        <div class="section">
          <h3>Personal Information</h3>
          <div class="grid">
            <div class="field">
              <label for="fullName">Full Name *</label>
              <input id="fullName" name="fullName" type="text" placeholder="e.g. Mohammad Hasan" required>
            </div>
            <div class="field">
              <label for="email">Email Address *</label>
              <input id="email" name="email" type="email" placeholder="you@example.com" required>
            </div>
            <div class="field">
              <label for="phone">Phone / WhatsApp Number *</label>
              <input id="phone" name="phone" type="tel" placeholder="+8801XXXXXXXXX" required>
            </div>
            <div class="field">
              <label for="dob">Date of Birth (optional)</label>
              <input id="dob" name="dob" type="date">
            </div>
          </div>
        </div>
        <!-- SECTION 2: Academic Background -->
        <div class="section">
          <h3>Academic Background</h3>
          <div class="grid">
            <div class="field">
              <label for="educationLevel">Current / Last Education Level *</label>
              <select id="educationLevel" name="educationLevel" required>
                <option value="">-- Select --</option>
                <option>SSC / O-Level</option>
                <option>HSC / A-Level</option>
                <option>Diploma</option>
                <option>Bachelor's Running</option>
                <option>Bachelor's Completed</option>
                <option>Master's Running</option>
                <option>Master's Completed</option>
              </select>
            </div>
            <div class="field">
              <label for="major">Field of Study / Major *</label>
              <input id="major" name="major" type="text" placeholder="e.g. Business, Engineering" required>
            </div>
            <div class="field full">
              <label for="result">Result / GPA / CGPA (optional)</label>
              <input id="result" name="result" type="text" placeholder="e.g. GPA 3.5 / CGPA 3.2">
            </div>
          </div>
        </div>
        <!-- SECTION 3: Study Abroad Preference -->
        <div class="section">
          <h3>Study Abroad Preference</h3>
          <div class="grid">
            <div class="field">
              <label for="preferredCountry">Preferred Country for Study *</label>
              <select id="preferredCountry" name="preferredCountry" required>
                <option value="">-- Select Country --</option>
                <option>United Kingdom</option>
                <option>Canada</option>
                <option>USA</option>
                <option>Australia</option>
                <option>Germany</option>
                <option>Malaysia</option>
                <option>Finland</option>
                <option>Sweden</option>
                <option>Others</option>
              </select>
            </div>
            <div class="field">
              <label for="programLevel">Intended Program Level *</label>
              <select id="programLevel" name="programLevel" required>
                <option value="">-- Select --</option>
                <option>Foundation</option>
                <option>Diploma</option>
                <option>Bachelor's</option>
                <option>Pre-Master's</option>
                <option>Master's</option>
                <option>PhD</option>
              </select>
            </div>
            <div class="field full">
              <label for="subjectArea">Desired Subject Area *</label>
              <input id="subjectArea" name="subjectArea" type="text" placeholder="e.g. IT, Business, Health" required>
            </div>
          </div>
        </div>
        <!-- SECTION 4: Budget & Support -->
        <div class="section">
          <h3>Budget & Sponsor</h3>
          <div class="grid">
            <div class="field">
              <label for="budget">Annual Study Budget (approx) *</label>
              <select id="budget" name="budget" required>
                <option value="">-- Select Range --</option>
                <option>Under 5 Lac BDT</option>
                <option>5–10 Lac BDT</option>
                <option>10–15 Lac BDT</option>
                <option>15–20 Lac BDT</option>
                <option>20–30 Lac BDT</option>
                <option>30+ Lac BDT</option>
              </select>
            </div>
            <div class="field">
              <label for="sponsor">Who Will Sponsor Your Study? *</label>
              <select id="sponsor" name="sponsor" required>
                <option value="">-- Select --</option>
                <option>Father</option>
                <option>Mother</option>
                <option>Guardian</option>
                <option>Self-funded</option>
                <option>Education Loan</option>
              </select>
            </div>
          </div>
        </div>
        <!-- SECTION 5: Consultation Scheduling -->
        <div class="section">
          <h3>Consultation Scheduling</h3>
          <div class="grid">
            <div class="field">
              <label for="prefDate">Preferred Date for Consultation *</label>
              <input id="prefDate" name="prefDate" type="date" required>
            </div>
            <div class="field">
              <label for="timeSlot">Preferred Time Slot *</label>
              <select id="timeSlot" name="timeSlot" required>
                <option value="">-- Select Slot --</option>
                <option>10 AM – 12 PM</option>
                <option>12 PM – 2 PM</option>
                <option>2 PM – 4 PM</option>
                <option>4 PM – 6 PM</option>
              </select>
            </div>
            <div class="field">
              <label for="mode">Consultation Mode *</label>
              <select id="mode" name="mode" required>
                <option value="">-- Select Mode --</option>
                <option>WhatsApp Call</option>
                <option>Google Meet</option>
                <option>In Person (Office Visit)</option>
              </select>
            </div>
            <div class="field">
              <label for="englishProf">English Proficiency</label>
              <select id="englishProf" name="englishProf">
                <option value="">-- Select --</option>
                <option>MOI</option>
                <option>IELTS</option>
                <option>TOEFL</option>
                <option>Duolingo</option>
                <option>None</option>
                <option>Planning to take</option>
              </select>
            </div>
          </div>
        </div>
        <!-- SECTION 6: Additional Information -->
        <div class="section">
          <h3>Additional Information</h3>
          <div class="grid">
            <div class="field">
              <label>Do you have a passport? *</label>
              <div class="inline">
                <label style="font-size:14px"><input type="radio" name="hasPassport" value="Yes" required> Yes</label>
                <label style="font-size:14px"><input type="radio" name="hasPassport" value="No" required> No</label>
              </div>
            </div>
            <div class="field">
              <label>Any previous visa rejection? *</label>
              <div class="inline">
                <label style="font-size:14px"><input type="radio" name="visaRejected" value="No" checked required> No</label>
                <label style="font-size:14px"><input type="radio" name="visaRejected" value="Yes" required> Yes</label>
              </div>
            </div>
            <div id="rejectionReasonWrap" class="field full hidden">
              <label for="rejectionReason">If Yes, explain reason (short)</label>
              <input id="rejectionReason" name="rejectionReason" type="text" placeholder="Brief explanation">
            </div>
            <div class="field full">
              <label for="notes">Additional Notes / Questions (optional)</label>
              <textarea id="notes" name="notes" placeholder="Any special requests or details you want the counsellor to know..."></textarea>
            </div>
          </div>
        </div>
        <!-- SECTION 7: Consent -->
        <div class="section">
          <label style="font-weight:600">
            <input id="consent" name="consent" type="checkbox" required>
            &nbsp;I confirm the information above is accurate and I agree to be contacted by Student Admission.
          </label>
        </div>
        <div class="form-cta" style="justify-content:flex-end;gap:12px">
          <button id="bookBtn" class="cta-btn" type="submit">Book Free Consultancy</button>
          <button id="clearBtn" type="button" class="secondary">Clear</button>
        </div>
        <p id="formMessage" class="note" aria-live="polite"></p>
      </form>
  </form>
</div>
  <script>
    function toggleMenu(){document.getElementById('navMenu').classList.toggle('active');}
    window.onscroll=function(){document.getElementById('backToTop').style.display=(document.body.scrollTop>20||document.documentElement.scrollTop>20)?'block':'none';};
    function scrollToTop(){window.scrollTo({top:0,behavior:'smooth'});}
    (function(){
      const WHATSAPP_NUMBER = '447446969466';
      const form = document.getElementById('consultForm');
      const messageEl = document.getElementById('formMessage');
      const bookBtn = document.getElementById('bookBtn');
      const clearBtn = document.getElementById('clearBtn');
      const rejectionRadios = document.getElementsByName('visaRejected');
      const rejectionWrap = document.getElementById('rejectionReasonWrap');
      function handleRejectionToggle(){
        const value = Array.from(rejectionRadios).find(r=>r.checked).value;
        if(value === 'Yes'){
          rejectionWrap.classList.remove('hidden');
          document.getElementById('rejectionReason').required = true;
        } else {
          rejectionWrap.classList.add('hidden');
          document.getElementById('rejectionReason').required = false;
          document.getElementById('rejectionReason').value = '';
        }
      }
      Array.from(rejectionRadios).forEach(r=> r.addEventListener('change', handleRejectionToggle));
      handleRejectionToggle();
      clearBtn.addEventListener('click', function(){
        form.reset();
        handleRejectionToggle();
        messageEl.textContent = '';
      });
      function isValidPhone(value){
        if(!value) return false;
        const cleaned = value.replace(/\s+/g,'');
        return /^[+\d][\d\s\-()]{7,17}$/.test(cleaned);
      }
      form.addEventListener('submit', async function(e){
        e.preventDefault();
        messageEl.className = 'note';
        messageEl.textContent = '';
        const fullName = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const educationLevel = document.getElementById('educationLevel').value;
        const major = document.getElementById('major').value.trim();
        const preferredCountry = document.getElementById('preferredCountry').value;
        const programLevel = document.getElementById('programLevel').value;
        const subjectArea = document.getElementById('subjectArea').value.trim();
        const budget = document.getElementById('budget').value;
        const sponsor = document.getElementById('sponsor').value;
        const prefDate = document.getElementById('prefDate').value;
        const timeSlot = document.getElementById('timeSlot').value;
        const mode = document.getElementById('mode').value;
        const consent = document.getElementById('consent').checked;
        if(!fullName || !email || !phone){
          messageEl.className = 'error';
          messageEl.textContent = 'Please provide Full Name, Email and WhatsApp number.';
          return;
        }
        if(!isValidPhone(phone)){
          messageEl.className = 'error';
          messageEl.textContent = 'Please enter a valid phone/WhatsApp number including country code.';
          return;
        }
        if(!/^\S+@\S+\.\S+$/.test(email)){
          messageEl.className = 'error';
          messageEl.textContent = 'Please enter a valid email address.';
          return;
        }
        if(!educationLevel || !major || !preferredCountry || !programLevel || !subjectArea || !budget || !sponsor || !prefDate || !timeSlot || !mode){
          messageEl.className = 'error';
          messageEl.textContent = 'Please complete all required fields.';
          return;
        }
        if(!consent){
          messageEl.className = 'error';
          messageEl.textContent = 'Please confirm the consent checkbox to proceed.';
          return;
        }
        bookBtn.disabled = true;
        const originalBtnText = bookBtn.textContent;
        bookBtn.textContent = 'Processing...';
        const formData = {
          fullName,
          email,
          phone,
          dob: document.getElementById('dob').value || '',
          educationLevel,
          major,
          result: document.getElementById('result').value || '',
          preferredCountry,
          programLevel,
          subjectArea,
          budget,
          sponsor,
          prefDate,
          timeSlot,
          mode,
          englishProf: document.getElementById('englishProf').value || '',
          hasPassport: document.querySelector('input[name="hasPassport"]:checked') ? document.querySelector('input[name="hasPassport"]:checked').value : '',
          visaRejected: document.querySelector('input[name="visaRejected"]:checked') ? document.querySelector('input[name="visaRejected"]:checked').value : 'No',
          rejectionReason: document.getElementById('rejectionReason') ? document.getElementById('rejectionReason').value.trim() : '',
          notes: document.getElementById('notes').value.trim() || '',
          consent: consent ? 'Yes' : 'No'
        };
        try{
          await fetch('/submit-lead.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(formData)
          }).catch(()=>{});
          const WA_MESSAGE =
`Consultation Booking - Student Admission
Full Name: ${formData.fullName}
WhatsApp: ${formData.phone}
Email: ${formData.email}
Education Level: ${formData.educationLevel}
Field / Major: ${formData.major}
Result: ${formData.result || 'N/A'}
Preferred Country: ${formData.preferredCountry}
Program Level: ${formData.programLevel}
Subject Area: ${formData.subjectArea}
Budget: ${formData.budget}
Sponsor: ${formData.sponsor}
Preferred Date: ${formData.prefDate}
Preferred Time: ${formData.timeSlot}
Mode: ${formData.mode}
English: ${formData.englishProf || 'N/A'}
Has Passport: ${formData.hasPassport}
Previous Visa Rejection: ${formData.visaRejected}
Rejection Reason: ${formData.rejectionReason || 'N/A'}
Notes: ${formData.notes || 'N/A'}
`;
          messageEl.className = 'success';
          messageEl.textContent = 'Thank you! Redirecting to WhatsApp to confirm your booking...';
          setTimeout(function(){
            const url = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(WA_MESSAGE)}`;
            window.location.href = url;
          }, 700);
        } catch(err) {
          console.error(err);
          messageEl.className = 'error';
          messageEl.textContent = 'Sorry, something went wrong. Please try again later.';
        } finally {
          bookBtn.disabled = false;
          bookBtn.textContent = originalBtnText;
        }
      });
    })();
  </script>
<?php include 'includes/footer.php'; ?>

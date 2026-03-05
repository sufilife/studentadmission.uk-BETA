<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
  <link href="/css/style.css" rel="stylesheet">
</head>

<!-- Hero Section -->
<div class="hero" id="hero" aria-labelledby="submit-title">
  <div>
    <h1 id="submit-title">Submit Your Review</h1>
    <p>Share your experience with Student Admission London.</p>
  </div>
</div>

<!-- Review Submission Form (review-form design apply) -->
<div class="review-form card" aria-labelledby="form-title">
  <h2 id="form-title">Leave a Verified Review</h2>
  <p>Login with Google to submit your review.</p>
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
  <!-- Review Form (hidden until login) -->
  <form id="reviewForm" aria-describedby="formMsg">
    <input type="hidden" name="google_sub" id="google_sub">
    <input type="hidden" name="picture" id="picture">
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" name="name" id="name" class="form-control rounded-pill" readonly>
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" name="email" id="email" class="form-control rounded-pill" readonly>
    </div>
    <div class="form-group">
      <label for="whatsapp">WhatsApp Number</label>
      <input type="tel" name="whatsapp" class="form-control rounded-pill" required>
    </div>
    <div class="form-group">
      <label for="service_used">Which service did you use?</label>
      <select name="service_used" class="form-control rounded-pill" required>
        <option value="">Select service</option>
        <option>End-to-End UK Admission & Relocation Service</option>
        <option>UK Admission Support Services</option>
      </select>
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
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
      <label for="review">Your Review</label>
      <textarea name="review" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="submit-btn cta-btn">Submit Verified Review</button>
  </form>
  <p id="reviewMessage" role="alert"></p>
</div>

<?php include 'includes/footer.php'; ?>

<!-- JavaScript for Google Login and Form Submit -->
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
function parseJwt(token) {
  const base64Url = token.split('.')[1];
  const base64 = base64Url.replace(/-/g, '+').replace(/_g, '/');
  return JSON.parse(decodeURIComponent(atob(base64).split('').map(c =>
    '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)
  ).join('')));
}
async function handleGoogleLogin(response) {
  try {
    const user = parseJwt(response.credential);
    document.getElementById('google_sub').value = user.sub;
    document.getElementById('name').value = user.name;
    document.getElementById('email').value = user.email;
    document.getElementById('picture').value = user.picture;
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
    document.getElementById('reviewForm').style.display = 'block';
  } catch (err) {
    console.error(err);
    alert('Google login failed');
  }
}
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
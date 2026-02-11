<!-- blogs.php -->
<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
  <link href="/css/style.css" rel="stylesheet">
  ```html
<link rel="manifest" href="/manifest.json">
```
</head>

<!-- Hero Section -->
<div class="hero" id="hero" aria-labelledby="blogs-hero-title">
  <div>
    <h1 id="blogs-hero-title">Our Blogs</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center text-uppercase mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-primary active" aria-current="page">Our Blogs</li>
      </ol>
    </nav>
  </div>
</div>

<!-- Blogs Section -->
<div class="blogs-section" aria-labelledby="blogs-title">
  <h2 id="blogs-title">Our Recent Posts</h2>
  <div class="blog-grid">
    <div class="blog-item">
      <div class="team-body">
        <img class="img-fluid" src="https://studentadmission.uk/BetaVersion/img/Blog-1.png" alt="">
      </div>
      <a class="team-name" href="#">
        <h5 class="text-uppercase mb-0">Higher Education the Right Path for You? Find Out!</h5>
      </a>
    </div>
    <!-- Add all other blog items similarly -->
  </div>
</div>

<?php include 'includes/footer.php'; ?>

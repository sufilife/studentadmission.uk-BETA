<!-- blogs.php -->
<?php include 'includes/header.php'; ?>
<?php include 'includes/common-elements.php'; ?>

<head>
  <link href="/css/style.css" rel="stylesheet">
  <link rel="manifest" href="/manifest.json">
</head>

<!-- Hero Section -->


<!-- Blogs Section -->
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

<?php include 'includes/footer.php'; ?>

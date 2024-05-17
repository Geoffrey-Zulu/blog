<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;1,100;1,200&display=swap"
        rel="stylesheet">
</head>
<body>

    <div class="navbar">
        <div class="container">
            <a href="#" class="logo">AstroPhysicist</a>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Posts</a></li>
                <li><a href="#">Podcasts</a></li>
                <li><a href="#">Publish</a></li>
            </ul>
        </div>
    </div>

    <!-- Left Sidebar -->
    <div class="sidebar">
        <div class="social-icons">
            <a href="#" class="icon-link">
                <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
            </a>
            <a href="#" class="icon-link">
                <img src="{{ asset('images/x.png') }}" alt="Twitter">
            </a>
            <a href="#" class="icon-link">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
            </a>
            <a href="#" class="icon-link">
                <img src="{{ asset('images/spotify.png') }}" alt="Spotify">
            </a>
            <a href="#" class="icon-link">
                <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp">
            </a>
            <a href="#" class="icon-link">
                <img src="{{ asset('images/playstation.png') }}" alt="PlayStation">
            </a>
        </div>
    </div>

    <div class="content">
        <h1>Latest Posts</h1>
        <div class="blog-grid">
            <div class="blog-post">
                <div class="blog-image">
                    <img src="{{ asset('images/cosmos.jpg') }}" alt="image">
                </div>
                <h2>Blog Title 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More</a>
            </div>
            <div class="blog-post">
                <div class="blog-image">
                    <img src="{{ asset('images/cosmos.jpg') }}" alt="image">
                </div>
                <h2>Blog Title 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More</a>
            </div>
            <div class="blog-post">
                <div class="blog-image">
                    <img src="{{ asset('images/cosmos.jpg') }}" alt="image">
                </div>
                <h2>Blog Title 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More</a>
            </div>
            <!-- Add more blog posts as needed -->
        </div>
        <div class="older-posts">
            <a href="#">Older Entries</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

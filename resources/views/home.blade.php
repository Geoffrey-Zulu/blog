<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    {{-- fonts --}}
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
                <img src="{{ asset('images/playstation.png') }}" alt="WhatsApp">
            </a>
        </div>
    </div>

</body>

</html>

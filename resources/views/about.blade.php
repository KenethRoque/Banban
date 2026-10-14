<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My About Me Website</title>
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
<header class="navbar">
<a href="#home" class="logo">MyStory.</a>
<nav>
<a href="#home">Home</a>
<a href="#about">About Me</a>
<a href="#childhood">Childhood</a>
<a href="#family">Family</a>
<a href="#dreams">Dreams</a>
</nav>
</header>
<!-- HOME -->
<section class="hero" id="home">
<div class="hero-text">
<p class="eyebrow">WELCOME TO MY PERSONAL WEBSITE</p>
<h1>Hello, I'm <span>Keneth Roque C. Adlawon</span>!</h1>
<h2>Welcome to my story.</h2>
<p>
This website shares my life story, childhood memories,
interests, experiences, and dreams for the future.
</p>
<a href="#about" class="button">Discover My Story</a>
</div>
<img
src="{{ asset('images/profile.jpg') }}"alt="My profile picture"
class="profile-image"
>
</section>
<!-- ABOUT ME -->
<section class="section" id="about">
<h2 class="section-title">About Me</h2>
<p class="subtitle">A little introduction about myself</p>
<div class="two-column">
<img
src="{{ asset('images/about-me.jpg') }}"
alt="A picture of me"
class="section-image"
>
<div>
<h3>Who Am I?</h3>
<p>
Hi! My name is Keneth Roque C. Adlawon. I am 18
years old, and I am currently a student at the Philippine State University -San Carlos City Campus
I enjoy learning new things and spending time
with the people who are important to me.
</p>
<p>
Every experience has taught me valuable lessons.
My childhood, family, education, and personal
experiences have helped shape the person I am today.
</p>
<div class="info">
<p><strong>Full Name:</strong>Keneth Roque C. Adlawon</p>
<p><strong>Nickname:</strong>Banban</p>
<p><strong>Birthday:</strong>Aug,6,2008</p>
<p><strong>Hobbies:</strong>Gaming, Football</p>
<p><strong>Favorite Food:</strong>Lumpia</p>
</div>
</div>
</div>
</section><!-- CHILDHOOD -->
<section class="section memories" id="childhood">
<h2 class="section-title">My Childhood Memories</h2>
<p class="subtitle">
Looking back at the moments that made me who I am
</p>
<div class="card-grid">
<article class="card">
<img src="{{ asset('images/childhood1.jpg') }}"
alt="My early childhood">
<div class="card-content">
<h3>My Early Years</h3>
<p>
This is my photo with my mom when I was graduating from Grade 1.
</p>
</div>
</article>
<article class="card">
<img src="{{ asset('images/childhood2.jpg') }}"
alt="My childhood activities">
<div class="card-content">
<h3>Growing Up</h3>
<p>
This is my photo when I was at my neighbor's house sitting on the chair ang singing videoke.
</p>
</div>
</article>
<article class="card">
<img src="{{ asset('images/childhood3.jpg') }}"
alt="A special childhood memory">
<div class="card-content">
<h3>Special Moments</h3>
<p>
This is my photo when we went to Toboso with my family.
</p>
</div>
</article></div>
</section>
<!-- FAMILY -->
<section class="section" id="family">
<h2 class="section-title">My Family</h2>
<p class="subtitle">The people who make life special</p>
<div class="two-column">
<img
src="{{ asset('images/family.jpg') }}"
alt="My family"
class="section-image"
>
<div>
<h3>My Greatest Supporters</h3>
<p>
This is my family.
</p>
</div>
</div>
</section>
<!-- HOBBIES -->
<section class="section hobbies" id="hobbies">
<h2 class="section-title">My Hobbies and Interests</h2>
<p class="subtitle">Things I enjoy doing in my free time</p>
<div class="card-grid">
<article class="hobby-card">
<div class="emoji"> </div>
<h3>Gaming</h3>
<p>I like medieval strategy games.I also like to play Fps shooting game with my friend when I have freetime</p>
</article>
<article class="hobby-card">
<div class="emoji"> </div>
<h3>Music</h3>
<p>I like listening to different genres of music, especially pop and rock.</p></article>
<article class="hobby-card">
<div class="emoji"> </div>
<h3>Photography</h3>
<p>I like taking pictures of nature and everyday moments.</p>
</article>
</div>
</section>
<!-- DREAMS -->
<section class="section" id="dreams">
<h2 class="section-title">My Dreams And Goals</h2>
<div class="two-column">
<div>
<h3>The Future I Want to Build</h3>
<p>
I dream of becoming a succesfull game developer and creating games that bring joy to people around the world.
</p>
<p>
I believe that patience, hard work, and
determination can help me grow and achieve
my goals one step at a time.
</p>
</div>
</div>
</section>
<script src="{{ asset('js/about.js') }}"></script>
<footer>
<h2>Thank You for Visiting!</h2>
<p>Every picture holds a memory, and every memory tells a story.</p>
<p class="copyright">
&copy; {{ date('Y') }} Keneth Roque C. Adlawon | MyStory
</p></footer>
</body>
</html>
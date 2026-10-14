<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title') | MyStory</title>
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
<header class="topbar">
<a href="{{ url('/home') }}" class="logo">MyStory.</a>
<nav>
<a href="{{ url('/home') }}">Home</a>
<a href="{{ url('/about') }}">About Me</a>
<a href="{{ url('/childhood') }}">Childhood</a>
<a href="{{ url('/family') }}">Family</a>
<a href="{{ url('/dreams') }}">Dreams</a>
</nav>
</header>
<main>
@yield('content')
</main>
<footer>
<h2>Thank You for Visiting!</h2>
<p>Every picture holds a memory, and every memory tells a story.</p>
<p>&copy; {{ date('Y') }} MyStory | Personal Website</p>
</footer>
</body>
</html>
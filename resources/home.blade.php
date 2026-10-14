@extends('layout')
@section('title', 'Home')
@section('content')
<section class="hero">
<div class="hero-text">
<p class="eyebrow">WELCOME TO MY PERSONAL WEBSITE</p>
<h1>Hello, I'm <span>[Your Name]</span>!</h1>
<h2>Welcome to my story.</h2>
<p>
This website is a collection of my personal information,
childhood memories, family moments, and dreams for the future.
Come and get to know me better!
</p>
<a class="button" href="{{ url('/about') }}">Get to Know Me</a>
</div>
<img class="profile-image"
src="{{ asset('images/profile.jpg') }}"
alt="My profile picture">
</section>
<section class="section">
<h2 class="section-title">Welcome to My World</h2>
<p class="subtitle">
A little space where I can share my story, memories, and experiences.
</p>
<div class="card-grid">
<article class="card">
<div class="card-content">
<h3>About Me</h3>
<p>Discover my personality, interests, and personal information.</p>
<a href="{{ url('/about') }}">Learn More →</a>
</div>
</article>
<article class="card">
<div class="card-content">
<h3>My Childhood</h3>
<p>Look back at the memories that made my early years special.</p>
<a href="{{ url('/childhood') }}">View Memories →</a></div>
</article>
<article class="card">
<div class="card-content">
<h3>My Dreams</h3>
<p>Learn about my ambitions and the future I hope to build.</p>
<a href="{{ url('/dreams') }}">Explore My Dreams →</a>
</div>
</article>
</div>
</section>
@endsection
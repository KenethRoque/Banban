@extends('layout')
@section('title', 'About Me')
@section('content')
<section class="section">
<h1 class="section-title">About Me</h1>
<p class="subtitle">Get to know the person behind the story.</p>
<div class="two-column">
<img class="section-image"
src="{{ asset('images/about-me.jpg') }}"
alt="My personal photo">
<div>
<h2>Who Am I?</h2>
<p>
Hello! My name is [Your Name]. I am [your age] years old
and I live in [your general location].
</p>
<p>
I am a person who enjoys learning new things, spending
time with loved ones, and creating meaningful memories.
Every experience helps me learn and grow.
</p>
<div class="info">
<p><strong>Full Name:</strong> [Your Name]</p>
<p><strong>Nickname:</strong> [Your Nickname]</p>
<p><strong>Birthday:</strong> [Your Birthday]</p>
<p><strong>Hobbies:</strong> [Your Hobbies]</p>
<p><strong>Favorite Color:</strong> [Your Color]</p>
<p><strong>Favorite Food:</strong> [Your Food]</p>
<p><strong>Education:</strong> [Your School or Course]</p>
</div>
</div>
</div>
</section>
@endsection
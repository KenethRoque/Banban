@extends('layout')
@section('title', 'My Dreams')
@section('content')
<section class="section">
<h1 class="section-title"></h1>
<p class="subtitle">The future I hope to build.</p>
<div class="two-column">
<img class="section-image"
src="{{ asset('images/my-dreams.jpg') }}"
alt="My dreams and goals">
<div>
<h2>My Future Plans</h2>
<p>
[Write about your dream career, personal ambitions,
and the goals you want to achieve in life.]
</p>
<p>
I understand that achieving my dreams takes effort,
patience, and determination. I want to continue learning,
improving myself, and making the most of every opportunity.
</p>
</div>
</div>
<div class="family-note">
<h2>My Goals</h2>
<ul class="goal-list">
<li>[Your first personal goal]</li>
<li>[Your education or career goal]</li>
<li>[Your family or life goal]</li>
<li>[A skill you want to learn]</li>
</ul>
</div>
</section>
@endsection
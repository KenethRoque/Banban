@extends('layout')
@section('title', 'My Family')
@section('content')
<section class="section">
<h1 class="section-title">My Family</h1>
<p class="subtitle">The people who make my life meaningful.</p>
<div class="two-column">
<img class="section-image"
src="{{ asset('images/family.jpg') }}"
alt="My family picture">
<div>
<h2>My Greatest Supporters</h2>
<p>
[Introduce your family and the people who are important
to you. Write about the love, support, and lessons
they have given you.]
</p>
<p>
[Share a special family memory, tradition, or experience
that you will always treasure.]
</p>
</div>
</div>
<div class="family-note">
<h2>Why My Family Is Important to Me</h2>
<p>
My family is an important part of my life. They inspire me
to keep learning, growing, and working toward my goals.
</p>
</div>
</section>
@endsection
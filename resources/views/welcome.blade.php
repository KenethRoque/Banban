<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome | MyStory</title>
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<style>
*{
box-sizing: border-box;
}
body {
margin: 0;
font-family: Arial, sans-serif;
}
.welcome {
min-height: 100vh;
display: flex;
justify-content: center;
align-items: center;
padding: 25px;
text-align: center;
background: linear-gradient(
135deg, #eee6f8, #faf8fd, #e5d8f5
);
}
.welcome-box {
width: 100%;
max-width: 700px;
padding: 55px 30px;
background: white;
border-radius: 25px;
box-shadow: 0 12px 35px #30204420;
}
.welcome-label {
color: #7655a6;
letter-spacing: 3px;font-size: 12px;
font-weight: bold;
}
.welcome h1 {
color: #4b2488;
font-size: clamp(36px, 7vw, 58px);
margin: 20px 0 12px;
}
.welcome p {
color: #625b6e;
line-height: 1.8;
margin: 0 auto 28px;
max-width: 500px;
}
.welcome .button {
display: inline-block;
background: #7655a6;
color: white;
text-decoration: none;
padding: 14px 25px;
border-radius: 30px;
font-weight: bold;
transition: 0.3s;
}
.welcome .button:hover {
background: #4b2488;
transform: translateY(-2px);
}
.welcome-footer {
font-size: 12px;
margin-top: 35px;
color: #81788d;
}
</style>
</head>
<body>
<main class="welcome">
<div class="welcome-box"><div class="welcome-label">
MY PERSONAL WEBSITE
</div>
<h1>Welcome to MyStory!</h1>
<p>
Every picture holds a memory, and every memory
tells a story. This is my little space to share
my life, childhood memories, family, and dreams.
</p>
<a href="{{ url('/about') }}" class="button">
Enter My Website &rarr;
</a>
<div class="welcome-footer">
A story of memories, dreams, and new beginnings.
</div>
</div>
</main>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>UNPAM - Sistem Informasi</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        body {
            background:#f1f5f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin:0;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
<nav class="navbar" style="background:#3b82f6">
  <div class="container">
    <a class="navbar-brand text-white" href="/">UNPAM - Sistem Informasi</a>
    <div class="ms-auto">
      <a class="text-white text-decoration-none me-3" href="/">Home</a>
      <a class="text-white text-decoration-none me-3" href="/profile">Profile</a>
      <a class="text-white text-decoration-none" href="/about">About</a>
    </div>
  </div>
</nav>

<main class="container mt-4">
    @yield('content')
</main>

<footer class="text-center text-muted small py-4">
    © 2026 Profile Mahasiswa. All rights reserved.
</footer>
</body>
</html>
<header class="bg-blue-600">
<div class="flex justify-between p-4">
<h1>mijn portofolio</h1>
<nav>
<a href="{{ route('home') }}">home</a>
<a href="{{ route('websites') }}">websites</a>
<a href="{{ route('login') }}">login</a>
</nav>
</div>
</header>
{{ $slot }}

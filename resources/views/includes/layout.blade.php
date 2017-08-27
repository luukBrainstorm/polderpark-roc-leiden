<body>
<header>
    <div class="round">
        <div id="menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <nav>
        <ul class="nav">
            @yield('menu')
        </ul>
    </nav>
</header>

<div class="overlay"></div>
<div class="hero-image">
    <div class="hero-text">
        <h1>PolderPark Leiden</h1>
        <p>Bezoek nu</p>
    </div>
</div>

<div class="container" style="background-color: #f0f0f0; height: 100vh; ">
    @yield('body')
</div>
</body>
</html>
<script src="scripts/script.js"></script>
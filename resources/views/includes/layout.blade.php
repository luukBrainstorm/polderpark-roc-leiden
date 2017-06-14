<body>
<header>
    <a id="menu" href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </a>
    <nav>
        <ul class="nav">
            @yield('menu')
        </ul>
    </nav>
</header>

<div class="overlay"></div>

<div class="container" style="background-color: #B0BEC5; ">
    @yield('body')
</div>
</body>
</html>
<script src="scripts/script.js"></script>
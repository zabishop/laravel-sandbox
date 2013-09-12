<?php
    include("php/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>zackBishop.com - @yield('page-title')</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main-styles.css">
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/behaviors.js"></script>
</head>


<body>
<nav>
    <ul>
        <li>
            <a href="about">about</a>
        </li>
        <li>
            <a href="projects">projects</a>
        </li>
    </ul>
</nav>

<div class="page-wrapper">
    <div class="hero">
        <div class="header-top">
            zackBishop<span>.dev</span>
        </div>

        <div class="header-bottom">
            Smart. Semantic. <span>Solutions.</span>
        </div>
    </div>
    <div class="page-content">
        <h1>@yield('headline')</h1>
        @yield('content')
        <div class="timeline-wrapper">
            <?= createTimeLine(); ?>
        </div>
    </div>

</div>


<footer>
    This is the footer. Boom.
</footer>
</body>

</html>
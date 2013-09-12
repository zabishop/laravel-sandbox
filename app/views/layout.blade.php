<!DOCTYPE html>
<html>
<head>
    <title>zackBishop.com - @yield('page-title')</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main-styles.css">
</head>


<body>
<nav>
    <ul>
        <li>
            <a href="about.php">about</a>
        </li>
        <li>
            <a href="index.php">projects</a>
        </li>
        <li>
            <a href="docs/ZackBishopWebDevResume.pdf" download="zackBishopResume.pdf">resume</a>
        </li>
        <!--<li>
            <a href="#" onclick="goURL('http://facebook.com/zbishop')"><img
                    src="images/chicklet_facebook_v2.png"></a>
        </li>
        <li>
            <a href="#" onclick="goURL('http://www.linkedin.com/pub/zachary-bishop/5a/2a4/318/')"><img
                    src="images/linkedIn.png"></a>
        </li>
        <li>
            <a href="#" onclick="goURL('https://github.com/zabishop')"><img src="images/github.png"></a>
        </li>-->
    </ul>
</nav>

<div class="main-content">
    <div class="hero">
        <div class="header-top">
            zackBishop<span>.dev</span>
        </div>

        <div class="header-bottom">
            Smart. Semantic. <span>Solutions.</span>
        </div>
    </div>


    <h1>@yield('headline')</h1>
    @yield('content')
</div>

<footer>
    This is the footer. Boom.
</footer>
</body>

</html>
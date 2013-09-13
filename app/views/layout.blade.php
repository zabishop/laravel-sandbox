<!DOCTYPE html>
<html>
<head>
    <title>zackBishop.com - @yield('page-title')</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main-styles.css">
    <link rel="stylesheet" href="css/royalslider.css">
    <link rel="stylesheet" href="css/rs-default.css">

    @yield('scripts')

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
        @yield('specialFeatures')
    </div>

</div>

<footer>
    This is the footer. Boom.
</footer>

<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true,
            loop: true,
            autoPlay: {
                // autoplay options go here
                enabled: true,
                pauseOnHover: true,
                stopAtAction: true
            }
        });
    });
</script>
</body>

</html>
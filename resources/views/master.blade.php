<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Signature Architect</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/WeldStyles.css"/>
    <link rel="stylesheet" href="css/Styles.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    @stack('head')
</head>

<body>
<header>

    <span tabindex="0" class="hamburger"> <img src="Images/menu.svg" alt="menu"></span>

    <nav class="move">

        <a name="menuham">
            <ul>
                <li>signature architect</li>
            </ul>
        </a>

        <img src="Images/AjitShilpi-01.png" alt="Ajit Shilpi">
    </nav>

</header>

<div id="content">

    <main>

        @yield('content')

    </main>

</div>

<footer>
    Copyright &copy; {{ date('Y') }} Ajit Shilpi
    All Rights Reserved
</footer>

</body>

</html>
<?php
// get system theme

?>

<html>

<head>
    <title>AMS</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
    <div class="body">
        <div class="main">
            <img src="panda.png" class="panda" />
            <?php for ($i = 0; $i < 4; $i++) {
                echo "<br />";
            }; ?>
            <h1>Welcome to AMS — Asset Management Simplified</h1>
            <p>AMS helps you track, organize, and manage assets quickly and reliably. We're actively building smarter
                dashboards, real-time tracking, and actionable reports to streamline your workflow.</p>
            <p class="muted">This platform is in active development — try the features and share feedback to help
                improve it.</p>
        </div>
        <p class="footer"> Powered by EdrionTech</p>
    </div>



</body>

</html>
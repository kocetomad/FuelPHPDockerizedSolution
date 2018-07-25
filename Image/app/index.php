<?php
$db = new PDO('mysql:host=localhost', 'root', null);
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <title>THIS IS A PHP/APACHE TEST</title>

    <style>
        

        
                pre {
            

            padding: 16px;
            overflow: auto;
            font-size: 85%;
            line-height: 1.45;
            background-color: #f7f7f7;
            border-radius: 3px;

            word-wrap: normal;
        }

        .container {
            max-width: 1024px;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="http://www.smartcom.bg/wp-content/uploads/smartcom-logo-rd.png" alt="SMARTcOM LOGO">
            <h2>Welcome to the test site</h2>
        </header>


        <section>
            <pre>
OS: <?php echo php_uname('s'); ?><br/>
Apache: <?php echo apache_get_version(); ?><br/>
MySQL Version: <?php echo $db->getAttribute( PDO::ATTR_SERVER_VERSION ); ?><br/>
PHP Version: <?php echo phpversion(); ?><br/>
phpMyAdmin Version: <?php echo getenv('PHPMYADMIN_VERSION'); ?><span>&nbsp;</span>
            </pre>
        </section>
    </div>
</body>
</html>


﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An example of surevey. [questions]">
    <title>Demo - Azure Websites</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
    <link rel="stylesheet" href="css/blog.css">
</head>

<body>

    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-1-4">
            <div class="header">
                <h1 class="brand-title">Tech Ready</h1>
                <h2 class="brand-tagline">Azure Websites Demo</h2>
                <h3 class="content-subhead">
                    <?php

                    $variabe_name = 'DEPLOYMENT_ENVIRONMENT';
                    $config_value = getenv($variabe_name);
                    echo "[$variabe_name:]<b>$config_value</b><br>";

                    ?>
                </h3>
            </div>
        </div>
    </div>
</body>
</html>
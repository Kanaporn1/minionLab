<html lang="en-us">
<head>
    <meta charset="UTF-8">

    <title>Microblog</title>

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/weblog.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class ="container" >
    <header class="site-header">
        <h1><a href="#">@Minion</a>’s weblog.</h1>
        <nav>
            <span class="menu">
                <ul>
                    <li><a href="<? base_url();">Home</a></li>
                    <li><a href="#footer">About</a></li>
                    <li><a href="<?= base_url('form'); ?>">New Post</a></li>
                </ul>
            </span>
        </nav>
    </header>
</div>
</body>
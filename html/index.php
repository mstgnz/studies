<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="index.css" />
    <title>Components</title>
</head>
<body>
    <section id="header">
        <?php include('./components/html/navbar.html');?>
        <?php include('./components/html/slider.html');?>
    </section>
    <section id="content">
        <section id="left">
            <?php include('./components/html/list-group.html');?>
        </section>
        <section id="middle">
            <?php include('./components/html/card.html');?>
            <?php include('./components/html/tab.html');?>
            <?php include('./components/html/media-list.html');?>
            <?php include('./components/html/card-group.html');?>
        </section>
        <section id="right">
            <?php include('./components/html/list-group.html');?>
        </section>
    </section>
    <section id="footer">
        footer
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</body>
</html>
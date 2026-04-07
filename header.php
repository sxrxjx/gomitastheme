<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <div class="logo">
            <a href="<?php echo esc_url(home_url());?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
            </a>
        </div>
        <button class="menu-responsive" aria-expanded="false" aria-controls="primary-menu">
            ☰
        </button>
        <nav id="primary-menu" class="menu-principal">
            <?php
                wp_nav_menu(array('theme_location' => 'menu-principal',
                    'container' => false,
                    'items_wrap' => '<ul>%3$s</ul>'
                ));
            ?>
        </nav>
    </header>
</body>
    

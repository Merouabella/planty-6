<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header" role="banner">
        <?php if(has_custom_logo()) : ?>
            <a class="logo-brand" href="<?php bloginfo('url'); ?>"><?php the_custom_logo(); ?></a>
        <?php else : ?>
            <a class="site-brand" href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
        <a><img class="logo-planty" src="/blankslate-child/img/logo-1.jpg" alt="planty-6"/></a>
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
            ]);
            ?>
        </nav>
    </header>
    <div id="container">
        <main id="content" role="main">
            <h1>Formulaire de Contact</h1>
            <div class="form-container">
                <form class="contact-form">
                    <h2>Vos informations</h2>
                    <label for="nom1">Nom:</label>
                    <input type="text" id="nom1" name="nom1"><br><br>
                    <label for="email1">Email:</label>
                    <input type="email" id="email1" name="email1"><br><br>
                </form>
                <div class="separator"></div>
                <form class="contact-form">
                    <h2>Livraison</h2>
                    <label for="Adresse de livraison">Adresse de livraison:</label>
                    <input type="text" id="Adresse de livraison" name="Adresse de livraison"><br><br>
                    <label for="code postal">code postal:</label>
                    <input type="text" id="ville" name="ville"><br><br>
                    <button type="submit">Commander</button>
                </form>
            </div>
        </main>
    </div>
    <?php wp_footer(); ?>
</body>
</html>

<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}


/* Enregiqtrement des menus */
function my_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Principal', 'textdomain' ),
        'footer'  => __( 'Footer menu', 'textdomain' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


/* Header avec astra_header() 
function my_custom_header_content() {
    echo '<div class="custom-notice">Welcome to my site!</div>';
}
add_action('astra_header', 'my_custom_header_content');*/

/* Custom header */
function my_custom_header() {
    ?>
    <header class="my-custom-header">
        <a href="#" title="Planty : accueil" >
            <img src="http://127.0.0.1/ocdevwp-projet6/planty/wp-content/uploads/2024/10/Logo-1.png" title="Planty : accueil" alt="Planty : accueil" class="logo_header" />
        </a>

        <?php
        /* wp_nav_menu */
        wp_nav_menu( array(
            'theme_location' => 'primary', // La localisation du menu, définie dans functions.php.
            'menu_class'     => 'menu-principal', // Classe CSS pour le <ul> du menu.
            'container'      => 'nav', // L'élément HTML qui enveloppe le menu.
            'container_class'=> 'menu-container', // Classe CSS pour le conteneur.
        ) );
        ?>

    </header>
    <?php
}
add_action('get_header', 'my_custom_header');


add_filter('wp_nav_menu_objects', 'modify_menu_items_based_on_login', 10, 2);

function modify_menu_items_based_on_login($items, $args) {
    // Boucle sur chaque élément du menu.
    foreach ($items as $key => $item) {
        /*var_dump($item);
        echo "<br/><br/>";*/
        // Modifier le texte d'un élément spécifique pour les utilisateurs connectés
        /*if (is_user_logged_in()) {
            if ($item->title == 'Connexion') {
                $item->title = 'Déconnexion'; // Remplace "Connexion" par "Déconnexion"
                $item->url = wp_logout_url(); // URL de déconnexion
            }
        } else {
            if ($item->title == 'Mon Profil') {
                unset($items[$key]); // Supprime "Mon Profil" si l'utilisateur n'est pas connecté
            }
        }*/

        // Masquer Admin si utilisateur non connecté.
        if(!is_user_logged_in() && $item->title == "Admin") {
            unset($items[$key]);
        }

        // Ajout d'une classe css au menu Commander.
        if($item->title == "Commander") {
            $item->classes[]="classe_bouton_commander";
        }
    }
    return $items;
}

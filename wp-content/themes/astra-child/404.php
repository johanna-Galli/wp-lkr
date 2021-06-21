<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar') : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>


    <div class="container MarginTop404 text-center">
        <?php
        $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($input, 2);
        ?>

        <!-- Placer ici le lien vers une image personnalisée -->
        <img class="text-center" src="<?php echo $input[$rand_keys[0]] . "\n"; ?>" alt="Erreur 404" />
        <!-- Personnaliser le message comme souhaité -->
        <p>Nous sommes désolés mais la page que vous cherchez n'est pas ou plus
            disponible. Nous vous suggérons de vous rendre sur <a href="/">la page
                d'accueil</a> du site ou d'effectuer une nouvelle recherche :</p>
    </div>


    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar') : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
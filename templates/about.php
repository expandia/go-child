<?php

/*
 * Template Name: About
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'about.twig' );

Timber::render( $templates, $context );
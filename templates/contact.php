<?php

/*
 * Template Name: Contact
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'contact.twig' );

Timber::render( $templates, $context );
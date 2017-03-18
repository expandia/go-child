<?php

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'blog.twig' );

Timber::render( $templates, $context );
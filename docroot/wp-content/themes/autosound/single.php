<?php
$post = new TimberPost();

$data = Timber::get_context();

$data['post'] = $post;

Timber::render('post.twig', $data);

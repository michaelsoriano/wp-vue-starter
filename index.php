<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dist/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dist/bootstrap-grid.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dist/bootstrap-reboot.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dist/main.css" />
        <?php wp_head(); ?>	
    </head>
    <body>
    <div id="app">   
    <transition name="fade-in"> 
        <router-view 
          v-bind:posts="posts" 
          v-bind:post="post" 
          v-bind:comments="comments"
          v-bind:pagers="pagers">
        </router-view>
    </transition>
    </div><!--app-->
    <?php get_template_part('/templates/home'); ?>
    <?php get_template_part('/templates/archive'); ?>
    <?php get_template_part('/templates/search'); ?>
    <?php get_template_part('/templates/single'); ?>
    <?php get_template_part('/templates/page'); ?> 
    <?php get_template_part('/templates/404'); ?> 
    <?php get_template_part('/templates/_header'); ?>
    <?php get_template_part('/templates/_footer'); ?>
    <?php get_template_part('/templates/_theloop'); ?>
    <?php get_template_part('/templates/_sidebar'); ?>
    <?php get_template_part('/templates/_search-form'); ?>
    <?php get_template_part('/templates/_comments'); ?>
    <?php get_template_part('/templates/_comment-form'); ?>
    <?php get_template_part('/templates/_nopost'); ?>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>        
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>    
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>
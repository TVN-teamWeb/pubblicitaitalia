<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

//TAXONOMY


add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Tipologie', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Cerca le tipologie' ),
    'all_items' => __( 'Tutte le tipologie' ),
    //'parent_item' => __( 'Parent Topic' ),
    //'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Modifica la tipologia' ),
    'update_item' => __( 'Aggiorna la tipologia' ),
    'add_new_item' => __( 'Nuova tipologia' ),
    //'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'Topics' ),
  );

// Now register the taxonomy

  register_taxonomy('topics',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));

}

/* ACF */

function custom_post() {

  register_post_type( 'agenda', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Agenda', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'Evento', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti gli eventi', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Nuovo evento', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi evento', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica evento', /*  Testo per modifica */
        'new_item' => 'Nuovo evento' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco eventi', /* Una breve descrizione del post type */
        //'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/icons/sliders.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
        //'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */


  register_post_type( 'video', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Video', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'video', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti i video', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Nuovo video', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi video', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica video', /*  Testo per modifica */
        'new_item' => 'Nuovo video' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco video', /* Una breve descrizione del post type */
        //'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/icons/sliders.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
        //'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */


  register_post_type( 'magazine', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Magazine', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'magazine', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti i magazine', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Nuovo numero', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi numero', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica magazine', /*  Testo per modifica */
        'new_item' => 'Nuovo numero' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco magazine', /* Una breve descrizione del post type */
        //'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/icons/sliders.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
        //'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */


  register_post_type( 'eventi', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Eventi', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'evento', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti gli eventi', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Nuovo evento', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi evento', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica evento', /*  Testo per modifica */
        'new_item' => 'Nuovo evento' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco eventi', /* Una breve descrizione del post type */
        //'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/icons/sliders.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
        //'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */

  register_post_type( 'datacenter', /* nome del custom post type */
  // aggiungiamo ora tutte le impostazioni necessarie, in primis definiamo le varie etichette mostrate nei menù
    array('labels' => array(
        'name' => 'Data Center', /* Nome, al plurale, dell'etichetta del post type. */
        'singular_name' => 'report', /* Nome, al singolare, dell'etichetta del post type. */
        'all_items' => 'Tutti i report', /* Testo mostrato nei menu che indica tutti i contenuti del post type */
        'add_new' => 'Nuovo report', /* Il testo per il pulsante Aggiungi. */
        'add_new_item' => 'Aggiungi report', /* Testo per il pulsante Aggiungi nuovo post type */
        'edit_item' => 'Modifica report', /*  Testo per modifica */
        'new_item' => 'Nuovo report' /* Testo per nuovo oggetto */
      ), /* Fine dell'array delle etichette */
        'description' => 'Elenco report', /* Una breve descrizione del post type */
        //'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/icons/sliders.png', /* Scegli l'icona da usare nel menù per il posty type */
        'public' => true, /* Definisce se il post type sia visibile sia da front-end che da back-end */
        /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
        //'supports' => array( 'title','excerpt', 'custom-fields','sticky')
    ) /* fine delle opzioni */
  ); /* fine della registrazione */


}

// Inizializzazione della funzione
add_action( 'init', 'custom_post');


//Define number of posts in category section
add_action( 'pre_get_posts', 'number_post_category' );



function number_post_category( $query ) {

	if ( $query->is_main_query() && ! $query->is_feed() && ! is_admin() && is_category() ) {
		$query->set( 'posts_per_page', '9' ); //Change this number to anything you like.
	}
}


//Thumbnail

add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );

add_image_size( 'evidenza', 740, 470, true);
add_image_size( 'copertina', 400, 600, true);
add_image_size( 'sponsored-notizia', 330, 240, true);
add_image_size( 'sidebar', 100, 100, true);
add_image_size( 'interna', 740, 530, true);
add_image_size( 'evidenza-side', 370, 470, true);
add_image_size( 'evidenza-big', 1440, 900, true);
add_image_size( 'blk-thumb', 500, 500, true);
add_image_size( 'people-thumb', 250, 250, true);

//Category

function getCategories(){
  $category_detail=get_the_category($post->ID);//$post->ID
    /*foreach($category_detail as $cd){
      echo $cd->slug;
    }*/

  echo $category_detail[0]->name;
  return;
}

function getRelated($post, $num) {
    $res = array();
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
          $args=array(
          'tag__in' => $tag_ids,
          'post__not_in' => array($post->ID),
          'posts_per_page'=>$num,
          'caller_get_posts'=>1
          );
        $res = new wp_query( $args );
    }
    return $res;
  }

  function get_tags_in_use($category_ID, $type = 'name'){
    // Set up the query for our posts
    $my_posts = new WP_Query(array(
      'cat' => $category_ID, // Your category id
      'posts_per_page' => -1 // All posts from that category
    ));

    // Initialize our tag arrays
    $tags_by_id = array();
    $tags_by_name = array();
    $tags_by_slug = array();

    // If there are posts in this category, loop through them
    if ($my_posts->have_posts()): while ($my_posts->have_posts()): $my_posts->the_post();

      // Get all tags of current post
      $post_tags = wp_get_post_tags($my_posts->post->ID);

      // Loop through each tag
      foreach ($post_tags as $tag):

        // Set up our tags by id, name, and/or slug
        $tag_id = $tag->term_id;
        $tag_name = $tag->name;
        $tag_slug = $tag->slug;

        // Push each tag into our main array if not already in it
        if (!in_array($tag_id, $tags_by_id))
          array_push($tags_by_id, $tag_id);

        if (!in_array($tag_name, $tags_by_name))
          array_push($tags_by_name, $tag_name);

        if (!in_array($tag_slug, $tags_by_slug))
          array_push($tags_by_slug, $tag_slug);

      endforeach;
    endwhile; endif;

    // Return value specified
    if ($type == 'id')
        return $tags_by_id;

    if ($type == 'name')
        return $tags_by_name;

    if ($type == 'slug')
        return $tags_by_slug;
  }

  function tag_cloud_by_category($category_ID){
    // Get our tag array
    $tags = get_tags_in_use($category_ID, 'id');



    // Cycle through each tag and set it up
    foreach ($tags as $tag):
        // Get our count
        $term = get_term_by('id', $tag, 'post_tag');
        $count = $term->count;

        // Get tag name
        $tag_info = get_tag($tag);
        $tag_name = $tag_info->name;

        // Get tag link
        $tag_link = get_tag_link($tag);

        // Set up our font size based on count
        $size = 8 + $count;

        if($count>1) {
          echo '<a href="'.$tag_link.'">'.$tag_name.'</a>';
        }


    endforeach;


}

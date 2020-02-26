<?php 

//chamar a tag title
function mobilitee_render_title(){
	add_theme_support('title-tag');

    add_theme_support( 'post-formats', array('link', 'quote '));


}

add_action('after_setup_theme', 'mobilitee_render_title');

//previnir o erro na tag title em versões antigas

if(!function_exists('_wp_render_title_tag')) {
	function mobilitee_render_title(){
		?>
		<title><?php wp_title('|', true, 'right')?></title>
		<?php
	}
	add_action('wp_head', 'mobilitee_render_title');
}


/*adcionar logo ao thema*/
add_theme_support('custom-logo');


/*Definir as miniaturas dos posts*/

add_theme_support('post-thumbnails');



// criar o tipo de post
    function create_post_type(){


        //Header
        register_post_type('header',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Header video e texto'),
                    'singular_name' => __('header')
                ),
                'supports' => array(
                    'title', 'editor', 
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'header'),
            ));

    	//indicadores post type
        register_post_type('indicadores',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Indicadores'),
                    'singular_name' => __('indicador')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'indicador'),
            ));

        //contrato post type
        register_post_type('contrato',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Contrato'),
                    'singular_name' => __('contrato')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'contrato'),
            ));


        //investidores post type
        register_post_type('Investidores',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('investidores'),
                    'singular_name' => __('investidores')
                ),
                'supports' => array(
                    'title', 'editor'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'investidores'),
            ));

        //Invista agora post type
        register_post_type('invista-agora',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Invista agora'),
                    'singular_name' => __('invista-agora')
                ),
                'supports' => array(
                    'title'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'invista-agora'),
            ));


        //numeros do mercado post type
        register_post_type('numeros',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Numeros do mercado'),
                    'singular_name' => __('numero mercado')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'numeros_mercado'),
            ));

        //oportunidades post type
        register_post_type('oportunidade',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Oportunidades'),
                    'singular_name' => __('oportunidade')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'oportunidades'),
            ));

         //Mobiletee post type
        register_post_type('mobiletee',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Mobiletee'),
                    'singular_name' => __('mobiletee')
                ),
                'supports' => array(
                    'title'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'mobiletee'),
            ));

         //Escalabilidade post type
        register_post_type('escalabilidade',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Escalabilidade'),
                    'singular_name' => __('escalabilidade')
                ),
                'supports' => array(
                    'title', 'editor'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'escalabilidade'),
            ));

         //vantagens post type
        register_post_type('vantagens',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Vantagens'),
                    'singular_name' => __('vantagem')
                ),
                'supports' => array(
                    'title'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'vantagens'),
            ));

         //qualidades post type
        register_post_type('qualidades',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Qualidades'),
                    'singular_name' => __('qualidade')
                ),
                'supports' => array(
                    'title', 'editor'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'qualidades'),
            ));

         //Nosso Time post type
        register_post_type('nosso_time',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Nosso Time'),
                    'singular_name' => __('nosso time')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'nosso_time'),
            ));

        //Roadmap post type
        register_post_type('roadmap',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Roadmap'),
                    'singular_name' => __('roadmap')
                ),
                'supports' => array(
                    'title', 'editor', 
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'roadmap'),
            ));

         //Direcionamento post type
        register_post_type('direcionamento',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Direcionamento investimento'),
                    'singular_name' => __('direcionamento')
                ),
                'supports' => array(
                    'title', 'editor','thumbnail' 
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'direcionamento'),
            ));

        //Quem investiu post type
        register_post_type('investiu',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Quem investiu?'),
                    'singular_name' => __('quem_investiu')
                ),
                'supports' => array(
                    'title', 'thumbnail' 
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'investiu'),
            ));

        //Quem investiu post type
        register_post_type('duvidas',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Duvidas'),
                    'singular_name' => __('duvida')
                ),
                'supports' => array(
                    'title', 
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'duvidas'),
            ));



    
    }

    //Iniciar o tipo de post
    add_action('init', 'create_post_type');

    add_filter('wpcf7_autop_or_not', '__return_false');
    add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
?>
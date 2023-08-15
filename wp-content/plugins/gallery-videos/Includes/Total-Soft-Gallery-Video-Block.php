<?php
class ts_vgallery_gutenberg_block {

	public function __construct() {
        if (function_exists("register_block_type")) {
            add_action( 'init', [ $this, 'ts_vgallery_register_block' ] );
            add_action( 'enqueue_block_editor_assets', [ $this, 'ts_vgallery_block_editor_scripts' ] );
        }
	}

	public function ts_vgallery_register_block() {
        wp_register_script(
            'ts_vgallery_gutenberg_script',
			plugins_url( '/JS/ts-vgallery-block.js', dirname(__FILE__) ),
            array( 'jquery', 'wp-blocks', 'wp-element', 'wp-editor','wp-components' )

        );
        wp_register_style( 'ts-vgallery-block-css', plugins_url( '/CSS/ts-vgallery-block.css', dirname(__FILE__) ));
        wp_enqueue_style('ts-vgallery-block-css');
        register_block_type( 'tsvgallery/vgallery-block',
            array(
                'editor_script' => 'ts_vgallery_gutenberg_script',
                'render_callback' => [$this,'ts_vgallery_block_render_callback'],
                'attributes' => array(
                    'tsv_id' => array(
                        'type' => 'string',
                    ),
                    'preview'     => array(
                        'type'    => 'boolean',
                        'default' => false,
                    ),
                )
            )
        );

	}

	public function ts_vgallery_get_all() {
        global $wpdb;
        $vgallery_table = esc_sql($wpdb->prefix . "totalsoft_galleryv_manager");
        $sql = "SELECT `id`,`TotalSoftGallery_Video_Gallery_Title` FROM ".$vgallery_table;
        $ts_vgallerys = $wpdb->get_results($sql, "ARRAY_A");
        return $ts_vgallerys;
    }

	public function ts_vgallery_block_editor_scripts() {
        $ts_vgallerys = $this->ts_vgallery_get_all();
        $ts_vgallery_list = array(
            array(
                'value' => 0,
                'label' => 'Select a gallery',
            )
        );
        foreach ( $ts_vgallerys as $ts_vgallery ) {
            $ts_vgallery_title =  $ts_vgallery['TotalSoftGallery_Video_Gallery_Title'];
            if ( empty( $ts_vgallery_title ) ) {
                $ts_vgallery_title = "";
            }
            $ts_vgallery_list[] = array(
                'value' => esc_attr($ts_vgallery['id']),
                'label' => esc_html(html_entity_decode( $ts_vgallery_title )),
            );
        }
        $ts_vgallerys_count = count($ts_vgallerys);
        wp_localize_script( 'ts_vgallery_gutenberg_script', 'ts_vgallery_gutenberg_script_data', array( 'vgallerys_count' => $ts_vgallerys_count, 'ts_vgallery_list' => $ts_vgallery_list ,'ts_vgallery_logo' =>  plugins_url( '/Images/Vg-Logo.jpg', dirname(__FILE__) ), 'ts_vgallery_preview' =>   plugins_url( '/Images/vg-logo-gutenberg.png', dirname(__FILE__) ) ) );

    }
    public function ts_vgallery_block_render_callback( $attributes ) {
        $id = empty( $attributes['tsv_id'] ) ? 0 : $attributes['tsv_id'];
        if ( $id ) {
            $ts_get_vgallerys = array_column($this->ts_vgallery_get_all(), 'TotalSoftGallery_Video_Gallery_Title', 'id');
            if (array_key_exists(absint( $id ) ,$ts_get_vgallerys )) {
                \ob_start();
                echo do_shortcode(sprintf('[Total_Soft_Gallery_Video id="%s"]', absint( $id )));
		        $tsvg_return = \ob_get_clean();
                return $tsvg_return;
            }else{
                return '<p>Selected gallery is not defined.</p>';
            }
        }
    }
}

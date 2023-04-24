<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Слайдер', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Здесь, вы можете изменить информацию из слайдера на главной странице'),
		'id'               => 'basic-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'slider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Заполните информацией', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'slider-description',
                'type'     => 'text',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Заполните информацией', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'slider-link',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка на кнопку Get in touch', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Заполните информацией', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'           => 'slider-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение слайда', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'desc'         => esc_html__( 'Выберите файл', 'your-textdomain-here' ),
                'subtitle'     => esc_html__( 'Загрузите фоновую картинку', 'your-textdomain-here' ),
                'preview_size' => 'full',
            ),
		),
	)
);

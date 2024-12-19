<?php
namespace ShopPress\Elementor\Widgets;

use Elementor\Repeater;
use Elementor\Controls_Manager;
use ShopPress\Elementor\ShopPressWidgets;
use ShopPress\Elementor\ControlsWidgets;

defined( 'ABSPATH' ) || exit;

class CatalogOrdering extends ShopPressWidgets {

	public function get_name() {
		return 'sp-catalog-ordering';
	}

	public function get_title() {
		return __( 'Catalog Ordering', 'shop-press' );
	}

	public function get_icon() {
		return 'sp-widget sp-eicon-catalog-ordering';
	}

	public function get_categories() {
		return array( 'sp_woo_shop' );
	}

	public function setup_styling_options() {
		$this->register_group_styler(
			'wrapper',
			__( 'Wrapper', 'shop-press' ),
			array(
				'wrapper' => array(
					'label'    => esc_html__( 'Wrapper', 'shop-press' ),
					'type'     => 'styler',
					'selector' => '.sp-catalog-ordering',
					'wrapper'  => '{{WRAPPER}}',
				),
			)
		);
	}

	protected function register_controls() {
		$this->setup_styling_options();

		do_action( 'shoppress/elementor/widget/register_controls_init', $this );
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		do_action( 'shoppress/widget/before_render', $settings );

		if ( $this->editor_preview() ) {
			sp_load_builder_template( 'shop/shop-catalog-ordering' );
		}
	}

	protected function content_template() {
		?>
			<div class="sp-catalog-ordering">
				<form class="woocommerce-ordering" method="get">
					<select name="orderby" class="orderby" aria-label="Shop order">
							<option value="menu_order" selected="selected">Default sorting</option>
							<option value="popularity">Sort by popularity</option>
							<option value="rating">Sort by average rating</option>
							<option value="date">Sort by latest</option>
							<option value="price">Sort by price: low to high</option>
							<option value="price-desc">Sort by price: high to low</option>
					</select>
					<input type="hidden" name="paged" value="1">
				</form>
			</div>
		<?php
	}
}

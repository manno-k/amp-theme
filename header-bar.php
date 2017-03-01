<header class="amp-wp-header">
	<div class="header--name">
		<a href="<?php echo esc_url( $this->get( 'home_url' ) ); ?>">

			<!-- ↓ここのコメントアウトを外すとアイコンが表示されます。 -->
			<!-- <?php $site_icon_url = $this->get( 'site_icon_url' );
				if ( $site_icon_url ) : ?>
				<amp-img src="<?php echo esc_url( $site_icon_url ); ?>" width="32" height="32" class="amp-wp-site-icon"></amp-img>
			<?php endif; ?> -->
			<!-- ↑ここのコメントアウトを外すとアイコンが表示されます。 -->

			<?php echo esc_html( $this->get( 'blog_name' ) ); ?>
		</a>
	</div>
	<div class="header--share--btn">
		<button on="tap:sidebar.open"><?php $this->load_parts( array( 'menu' ) ); ?></button>

	</div>
</header>
<div class="blank">

</div>
<div class="blog--title">
	<article class="amp-wp-article">
		<header class="amp-wp-article-header">
			<h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
		</header>
</div>

<amp-sidebar id="sidebar" layout="nodisplay" side="right">
	<ul class="menu--close">
		<li>MENU</li>
		<li><button on="tap:sidebar.close"><?php $this->load_parts( array( 'close' ) ); ?></button></li>
	</ul>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</amp-sidebar>

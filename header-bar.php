<header class="amp-wp-header">
	<div>
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
	<div class="blog--title">
		<article class="amp-wp-article">
			<header class="amp-wp-article-header">
				<h1 class="amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
			</header>
	</div>
</header>

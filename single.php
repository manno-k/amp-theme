<!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">
	<!-- Google Analyticsを使用する場合はaccountにIDを入力 -->
	<amp-analytics type="googleanalytics" id="analytics1">
	    <script type="application/json">
	        {
	            "vars": {
	                "account": "UA-XXXXXXX-1"
	            },
	            "triggers": {
	                "trackPageview": {
	                    "on": "visible",
	                    "request": "pageview"
	                }
	            }
	        }
	    </script>
	</amp-analytics>

	<?php $this->load_parts( array( 'header-bar' ) ); ?>
	<?php $this->load_parts( array( 'featured-image' ) ); ?>
	<div class="amp--content--wrapper">
		<div class="blog--author">
				<?php $this->load_parts( apply_filters( 'amp_post_article_header_meta', array( 'meta-author', 'meta-time' ) ) ); ?>
		</div>
		<div class="amp-wp-article-content">
			<?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>
		</div>
		<?php do_action( 'amp_post_template_footer', $this ); ?>

		<?php $this->load_parts( array( 'sns' ) ); ?>
		<?php $this->load_parts( array( 'related' ) ); ?>
		<?php $this->load_parts( array( 'footer' ) ); ?>
	</div>
</body>
</html>

<?php
$url_encode = urlencode(get_permalink());
$title_encode = urlencode(get_the_title());
?>
<div class="sns">
    <ul>
			<li>
					<a class="sns--icon__mail" href="mailto:<?php echo $admin_email = get_option( 'admin_email' ); ?>">
            <?php $this->load_parts( array( 'icon-mail' ) ); ?>
					</a>
			</li>
        <li>
            <a class="sns--icon__fb"
               href="https://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>"
               target="_blank">
               <?php $this->load_parts( array( 'icon-fb' ) ); ?>
            </a>
        </li>
        <li>
            <a class="sns--icon__hatena" href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>">
              <?php $this->load_parts( array( 'icon-hatena' ) ); ?>
        </span>
            </a>
        </li>
        <li>
            <a class="sns--icon__twitter"
               href="https://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton"
               target="_blank">
               <?php $this->load_parts( array( 'icon-tw' ) ); ?>
            </a>
        </li>
    </ul>
    <div class="clear"></div>
</div>

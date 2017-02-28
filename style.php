/*---------------------------------------------------------
Theme Name: AWESOME
Theme URI:https://awe-some.net/amp-theme
Author: K,Manno
Author URI: https://awe-some.net/
License: GNU General Public License v2 or later
Version: 1.0(2017/02/28)
---------------------------------------------------------*/

/* Generic WP styling */

.alignright {
	float: right;
}

.alignleft {
	float: left;
}

.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.amp-wp-enforced-sizes {
	/** Our sizes fallback is 100vw, and we have a padding on the container; the max-width here prevents the element from overflowing. **/
	max-width: 100%;
	margin: 0 auto;
}

.amp-wp-unknown-size img {
	/** Worst case scenario when we can't figure out dimensions for an image. **/
	/** Force the image into a box of fixed dimensions and use object-fit to scale. **/
	object-fit: contain;
}

/* Template Styles */

.amp-wp-content,
.amp-wp-title-bar div {
	margin: 0 auto;
}

body {
	background-color:rgb(250,250,250);
	color:rgb(40,40,40);
	font-family: 'Hiragino Kaku Gothic ProN', 'ヒラギノ角ゴ ProN W3', Meiryo, メイリオ, Osaka, 'MS PGothic', arial, helvetica, sans-serif;
	font-weight: 300;
	line-height: 1.75em;
}

p,
ol,
ul,
figure {
	margin: 0 0 1.2em;
	padding: 0;
}

a,
a:visited {
	color:#4e91c7;
}

a:hover,
a:active,
a:focus {
	color:black;
}

/* Quotes */

blockquote {
	color: black;
	background: rgba(127,127,127,.125);
	border-left: 2px solid black;
	margin: 8px 0 24px 0;
	padding: 16px;
}

blockquote p:last-child {
	margin-bottom: 0;
}

/* UI Fonts */

.amp-wp-meta,
.amp-wp-header div,
.amp-wp-title,
.wp-caption-text,
.amp-wp-tax-category,
.amp-wp-tax-tag,
.amp-wp-comments-link,
.amp-wp-footer p,
.back-to-top {
font-family: 'Hiragino Kaku Gothic ProN', 'ヒラギノ角ゴ ProN W3', Meiryo, メイリオ, Osaka, 'MS PGothic', arial, helvetica, sans-serif;

}

/* Header */

.amp-wp-header div {
	color: black;
	font-size: 1em;
	font-weight: bold;
	margin: 0 auto;
	max-width: calc(840px - 32px);
	padding: .875em 16px;
	position: relative;
}

.amp-wp-header a {
	color: #555;
	text-decoration: none;
	font-size:12px;
	vertical-align: text-top;
}

header svg{
	width:150px;
	padding:10px 16px;
}

.blog--title{
	background-color:rgb(218, 158, 164) ;
	padding : .875em 0px;
}

/* Site Icon */

.amp-wp-header .amp-wp-site-icon {
	/** site icon is 32px **/
	margin:5px 0;
	border:solid 1px;
	border-radius: 50%;
	border-color:rgb(218, 158, 164);
	float: left;
}


/* Article */

.amp-wp-article {
	font-weight: bold;
	max-width: 840px;
	overflow-wrap: break-word;
	word-wrap: break-word;
}

/* Article Header */

.amp-wp-article-header {
	align-items: center;
	align-content: stretch;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

.amp-wp-title {
	display: block;
	flex: 1 0 100%;
	font-weight: 900;
	width: 100%;
}
.amp-wp-article-header h1{
	margin:0px;
	font-size:16px;
	text-align:left;
}

/* Article Meta */

.amp-wp-meta {
	display: inline-block;
	flex: 2 1 50%;
	line-height: 1.5em;
	margin: 0;
	padding: 0;
}

.amp-wp-meta time{
	font-size: 12px;
}

.amp-wp-article-header .amp-wp-meta:last-of-type {
	text-align: right;
}

.amp-wp-article-header .amp-wp-meta:first-of-type {
	text-align: left;
}

.amp-wp-byline amp-img,
.amp-wp-byline .amp-wp-author {
	font-size:12px;
	display: inline-block;
	vertical-align: middle;
}

.amp-wp-byline amp-img {
	border-radius: 50%;
	position: relative;
	margin-right: 6px;
}

.amp-wp-posted-on {
	text-align: right;
}
.amp-wp-posted-on:before{
	content:"/";
}

/* Featured image */

.amp-wp-article-featured-image {
	margin: 0 0 1em;
}
.amp-wp-article-featured-image amp-img {
	margin: 0 auto;
}
.amp-wp-article-featured-image.wp-caption .wp-caption-text {
	margin: 0 18px;
}

/* Article Content */

.amp-wp-article-content {
	margin: 0 16px;
}

.amp-wp-article-content ul,
.amp-wp-article-content ol {
	margin-left: 1em;
}

.amp-wp-article-content amp-img {
	margin: 0 auto;
}

.amp-wp-article-content amp-img.alignright {
	margin: 0 0 1em 16px;
}

.amp-wp-article-content amp-img.alignleft {
	margin: 0 16px 1em 0;
}


.related--entry--thumb amp-img img{
    position: absolute;
		height:auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
    opacity: .4;
}

/* Captions */

.wp-caption {
	padding: 0;
}

.wp-caption.alignleft {
	margin-right: 16px;
}

.wp-caption.alignright {
	margin-left: 16px;
}

.wp-caption .wp-caption-text {
	border-bottom: 1px solid black;
	font-size: .875em;
	line-height: 1.5em;
	margin: 0;
	padding: .66em 10px .75em;
}

/* AMP Media */

amp-carousel {
	margin: 0 -16px 1.5em;
}
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
	margin: 0 -16px 1.5em;
}

.amp-wp-article-content amp-carousel amp-img {
	border: none;
}

amp-carousel > amp-img > img {
	object-fit: contain;
}

.amp-wp-iframe-placeholder {
	background: black url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
	background-size: 48px 48px;
	min-height: 48px;
}

/* Article Footer Meta */

.amp-wp-article-footer .amp-wp-meta {
	display: block;
}

.amp-wp-tax-category,
.amp-wp-tax-tag {
	color: black;
	font-size: .875em;
	line-height: 1.5em;
	margin: 1.5em 16px;
}

.amp-wp-comments-link {
	color: black;
	font-size: .875em;
	line-height: 1.5em;
	text-align: center;
	margin: 2.25em 0 1.5em;
}

.amp-wp-comments-link a {
	border-style: solid;
	border-color: black;
	border-width: 1px 1px 2px;
	border-radius: 4px;
	background-color: transparent;
	color: black;
	cursor: pointer;
	display: block;
	font-size: 14px;
	font-weight: 600;
	line-height: 18px;
	margin: 0 auto;
	max-width: 200px;
	padding: 11px 16px;
	text-decoration: none;
	width: 50%;
	-webkit-transition: background-color 0.2s ease;
			transition: background-color 0.2s ease;
}

/* AMP Footer */

.amp-wp-footer {
	margin: calc(1.5em - 1px) 0 0;
	text-align:left;
}

.amp-wp-footer div {
	margin: 0 auto;
	max-width: calc(840px - 32px);
	position: relative;
}

.amp-wp-footer h2 {
	font-size: 1em;
	line-height: 1.375em;
	margin: 0 0 .5em;
}

.amp-wp-footer p {
	color: black;
	font-size: .8em;
	line-height: 1.5em;
	margin: 0 85px 0 0;
}

.amp-wp-footer a {
	text-decoration: none;
}

.amp--content--wrapper{
	margin:0 auto;
	padding: 0 16px;
	max-width: calc(840px - 32px);
}

.wp_social_bookmarking_light{
	display:none;
}

.blog--author{
	padding: 0 16px;
}

.sns {
  margin: 0 auto 30px;
}

.sns ul {
  padding: 0;
}

.sns ul li {
  padding-left: 0px;
  padding-right: 0px;
  list-style: none;
}

.sns ul li a {
  color: #fff;
  font-size: 14px;
  display: block;
  width: 25%;
  text-align: center;
  padding-top: 16px;
  padding-bottom: 13px;
  font-weight: 700;
  float: right;
}

.sns a.sns--icon__hatena {
  background-color: #008FDE;
}

.sns a.sns--icon__fb {
  background-color: #3B5998;
}

.sns a.sns--icon__twitter {
  background-color: #00ACEE;
}
.sns a.sns--icon__mail{
	background-color:#000000;
}
.clear {
  clear: both;
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

.sns a svg {
  height: 14px;
  width: auto;
}

.sns a svg .twitter,.sns a svg .mail,.sns a svg .fb,.sns a svg .hatena {
  fill: #fff;
}


.related--title{
	border-top:1px solid #222222;
	border-bottom:1px solid #222222;
	padding:15px 0;
	text-align:center;
}
.related--entry{
	text-align:center;
	position: relative;
}
.related--entry a{
	text-decoration: none;
}

.related--entry--title{
	position: absolute;
	border: 1px black solid;
	padding: 4%;
	margin: 0 auto;
	top: 11%;
	left: 6%;
	right: 6%;
	bottom: 11%;
}
.related--entry--title div{
	color:rgb(250,250,250);
	background-color: rgba(0,0,0,.5);
	height: 100%;
  width: 100%;
	display: block;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: pre-line;
	display: flex;
	justify-content: center;
	align-items: center;
}
.related--entry--title div span{
	padding:5%;
	font-size:14px;
	display:block;
}
.related time{
	background-color:rgb(250,250,250);
	margin: 15px;
  display: block;
	text-align:center;
	position: relative;
}
.related time:before{
	border-top: 1px solid #222222;
	content: "";
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
}

.related time span {
    background-color: rgb(250,250,250);
    display: inline-block;
    padding: 0 0.5em;
		position:relative;
}


h2{
	color:rgb(250,250,250);
	margin: 30px 0 20px;
	line-height: 1.3;
	font-size: 18px;
	padding: 10px 10px 10px;
	text-align: left;
	background: rgb(218, 158, 164);
	border-radius: 3px;
	line-height: 2rem;
}

h3{
	color: #e04a3f;
	margin: 25px 0 20px;
	font-size: 18px;
	padding: 15px 0 15px 15px;
	font-weight: bold;
	position: relative;
	    border-top: 1px solid rgba(0,0,0,0.3);
	border-bottom: 1px solid rgba(0,0,0,.3);
}

h4{
	color: #e04a3f;
	font-size: 18px;
	padding: 10px 0;
	font-weight: bold;
	position: relative;
	border-bottom: 1px solid rgba(0,0,0,.3);
	text-align:center;
}

h5{
	color: #e04a3f;
	margin: 25px 0 20px;
	font-size: 18px;
	padding: 5px 0 0 15px;
	font-weight: bold;
	position: relative;
	border-left: 4px double rgba(0,0,0,.3);
}

footer {
  padding: 15px 10px 15px;
  text-align: center;
  background: rgb(218, 158, 164);
  color: #333;
}
footer ul {
	text-align:left;
}
footer ul li {
	display: inline-block;
	font-size: 13px;
	border-left: white 1px solid;
	padding: 0 5px;
}
.footer--site--name{
	font-size:12px;
}
.back--btn{
	width: 150px;
	text-align: center;
  margin: 0 auto;
  display: block;
  border: 1px #888 solid;
  border-radius: 5px;
  padding: 5px;
  text-decoration: none;
}

<?php
global $base_url;
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<?php print render($page['header']); ?>

<?php global $base_url; ?>
<div id="main-content"<?php print $container_class; ?>">
<div class="page-title">
  <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
    <div class="content container">
      <h1 class="heading_primary">  <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?></h1>
      <ul class="breadcrumbs">
        <li class="item"><a href="<?php echo $base_url;?>">Home</a></li>
        <li class="item"><span class="separator"></span></li>
        <li class="item active"><?php print $title; ?></li>
      </ul>
    </div>
  </div>
</div>




    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb;
      endif;?>
      <a id="main-content"></a>

      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php //print render($page['content']);

	    $body = field_get_items('node',$node, 'body');
	    //print $body[0]['value'];


      ?>

      <div class="site-content container">
        <div class="room-single row">
          <main class="site-main col-sm-12 col-md-9 flex-first">
            <div class="room-wrapper">
              <div class="room_gallery clearfix">

                <div class="camera_wrap camera_emboss" id="camera_wrap">
                  <?php
                  if (sizeof($node->field_restaurant_slider['und']) > 0) {
                    foreach ($node->field_restaurant_slider['und'] as $var) {
                      $image_slider = $var['filename']

                      ?>
                      <div data-src="<?php echo $base_url;?>/sites/default/files/<?php echo $image_slider; ?>" ></div>
                    <?php   }
                  }?>
                </div>
              </div>
              <div class="title-share clearfix">
                <h2 class="title"><?php print $title; ?></h2>
                <div class="social-share">
                  <ul>
                    <li><a class="link facebook" title="Facebook" href="http://www.facebook.com/sharer/sharer.php?u=#" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-facebook"></i></a></li>
                    <li><a class="link twitter" title="Twitter" href="https://twitter.com/intent/tweet?url=#&amp;text=TheTitleBlog" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-twitter"></i></a></li>
                    <li><a class="link google" title="Google" href="https://plus.google.com/share?url=#" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-googleplus"></i></a>
                  </ul>
                </div>
              </div>
              <div class="description">
                <?php print $body[0]['value']; ?>
              </div>


            </div>
          </main>
          <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">

              <div class="wd wd-book-event">
                <h3 class="wd-title">For Reservation</h3>
                <form role="search" method="POST" action="#" class="book_event">
                  <ul>
                    <li>
                      <div class="label">Call</div>
                      <div class="value">(+94) 25-222-7777</div>
                    </li>
                  </ul>

                </form>
              </div>



            </div>
          </aside>
        </div>
        	<style>
#hotel-dining {
    margin-bottom: 5rem;
}
.fullwidth {
    width: 100%!important;
    max-width: 100%;
    padding-right: 0;
    padding-left: 0;
}
.no-padding-right {
    padding-right: 0!important;
}
#hotel-dining .img-holder {
}
#hotel-dining .img-holder img {
    width: 100%;
}
.no-padding-left {
    padding-left: 0!important;
     background: #f7f7f7;
}
#hotel-dining .details {
    background: #f7f7f7;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 2rem 10%;
    text-align: center;
}

</style>




		<section class="hotel-sec">
			<div id="hotel-dining">
    	<div class="container fullwidth">
        	<div class="row">
                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 no-padding-right">
                	<div class="hotel-dining-image hotel-dining-height">
                    	<div class="img-holder">
                       		<picture><img src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/gallery/accomodation-1284X595-1.jpg" alt="avasta resort and spa"></picture>                       	</div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 no-padding-left">
              		<div class="details hotel-dining-height" style="height: 306px;">
                       	<div>
                        	<h2>Experience the warmth of true Sri Lankan hospitality at Avasta Resort & Spa at Anuradhapura</h2>
                            <div class="btn-holder">
								<a href="<?php echo $base_url;?>/accommodation" class="btn-book">View Accommodation</a>                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>	
        </div>
    </div>
		</section>
      </div>
      

    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>


<?php print render($page['footer']); ?>

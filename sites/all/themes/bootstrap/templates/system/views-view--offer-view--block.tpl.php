<?php
error_reporting(0);
/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<?php global $base_url; ?>
<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>
  <div class="empty-space"></div>
  <div class="h1-rooms">
    <div class="sc-content-overlay">
      <div class="container">
        <div class="sc-heading style-01 text-center">
          <h2 class="title">Awesome Offer</h2>
          <p class="description">For anything that brings people together to celebrate an occasion, we create truly memorable experiences that you will cherish forever</p>
        </div>
		</div>
        <div class="sc-rooms style-01">
          <div class="container-fluid three-hotels">
            <div class="row">
        <?php
      foreach ($view->result as $viewresult) {
        $nid = $viewresult->nid;
        $node_obj = node_load($nid);

        $node_created = $node_obj->created;
        $node_title = $node_obj->title;
        $url = drupal_get_path_alias('node/' . $nid);
        $field_top_image = $node_obj->field_front_offer_image['und'][0]['filename'];

        $offer_status = $node_obj->field_offer_status['und'][0]['value'];
        $summary = $node_obj->body['und'][0]['summary'];
        ?>


            
			  
			  	<div class="hotel col-lg-4 col-md-4">
						<a class="htl-see-off" target="_blank" href="<?php echo $base_url;?>/offers-list">See<br> Offer</a>
						<a href=""><img width="800" height="534" src="<?php echo $base_url;?>/sites/default/files/<?php echo $field_top_image;?>" class="img-responsive wp-post-image" alt="Avasta Resort and Spa" ></a>
						<div class="hotel-para">
						<h4> <a href="<?php echo $url;?>"><?php echo $node_title;?></a></h4>
						<p>
						</p><p><?php echo $summary;?></p>
						<p></p>
						<a class="btn btn-default" href="<?php echo $url;?>">View Offer</a>
						</div>
			</div>



        <?php }?>
            </div>
          </div>
        </div>
      
      <div class="empty-space"></div>
    </div>




  <?php if ($rows): ?>
    <div class="view-content">
      <?php //print_r($rows);  ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>

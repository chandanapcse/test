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

  <div class="group-destination">
    <div class="sc-content-overlay">
      <div class="container">
        <div class="empty-space"></div>
        <div class="sc-heading style-01 text-center">
          <h2 class="title">Top Destinations</h2>
          <p class="description">For anything that brings people together to celebrate an occasion, we create truly memorable experiences that you will cherish forever</p>
        </div>
        <div class="sc-posts style-01 auto-height">
          <div class="item row">
        <?php
      foreach ($view->result as $viewresult) {
        $nid = $viewresult->nid;
        $node_obj = node_load($nid);

        $node_created = $node_obj->created;
        $node_title = $node_obj->title;
        $url = drupal_get_path_alias('node/' . $nid);
        $field_top_image = $node_obj->field_blog_front_image['und'][0]['filename'];


        $summary = $node_obj->body['und'][0]['summary'];
        ?>


        <?php global $base_url; ?>

                  <div class="post col-sm-6 col-md-4">
                    <div class="inner">
                      <div class="thumbnail">
                        <a href="<?php echo $url;?>"><img src="<?php echo $base_url;?>/sites/default/files/<?php echo $field_top_image; ?>" alt="<?php echo $node_title; ?>"></a>
                      </div>
                      <div class="content">
                        <h3 class="title"> <a href="<?php echo $url;?>"><?php echo $node_title;?></a></h3>

                        <div class="summary"><?php echo $summary;?></div>
                        <a href="<?php echo $url;?>" class="read-more">More Info</a>
                      </div>
                    </div>
                  </div>





        <?php }?>
            </div>
          </div>
        </div>
      </div>
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

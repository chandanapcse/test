<?php
//error_reporting(0);
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

  <div class="site-content">
    <div class="page-content">
      <div class="container">
        <div class="sc-gallery">
          <ul class="filter-controls">
            <li><a href="javascript:;" class="filter active">All</a></li>
            <li><a href="javascript:;" class="filter" data-filter=".filter-room">Room</a></li>
            <li><a href="javascript:;" class="filter" data-filter=".filter-restaurant">Restaurant</a></li>
            <li><a href="javascript:;" class="filter" data-filter=".filter-swimming">Swimming pool</a></li>
            <li><a href="javascript:;" class="filter" data-filter=".filter-spa">Spa</a></li>
            <li><a href="javascript:;" class="filter" data-filter=".filter-activities">Activities</a></li>
            <li><a href="javascript:;" class="filter" data-filter=".filter-outdoor">Outdoor</a></li>
          </ul>
          <div class="wrapper-gallery row" itemscope itemtype="http://schema.org/ItemList">

            <?php
              foreach ($view->result as $viewresult) {
                $nid = $viewresult->nid;
                $node_obj = node_load($nid);

                $node_created = $node_obj->created;
                $url = drupal_get_path_alias('node/' . $nid);
                $gallery_type = $node_obj->field_gallery_catergory['und'][0]['value'];
                if ($gallery_type == 'Room'){
                  $data_filter = 'filter-room';
                }elseif ($gallery_type == 'Restaurant'){
                  $data_filter = 'filter-restaurant';
                }elseif ($gallery_type == 'Swimming pool'){
                  $data_filter = 'swimming';
                }elseif ($gallery_type == 'Spa'){
                  $data_filter = 'filter-spa';
                }elseif ($gallery_type == 'Activities'){
                  $data_filter = 'filter-activities';
                }elseif ($gallery_type == 'Outdoor'){
                  $data_filter = 'filter-outdoor';
                }
            ?>

                <?php
                if (sizeof($node_obj->field_gallery_images['und']) > 0) {
                foreach ($node_obj->field_gallery_images['und'] as $var) {
                $image_slider = $var['filename'];

                ?>
                  <div class="col-sm-4 <?php echo $data_filter;?>">
                  <a href="<?php echo $base_url;?>/sites/default/files/<?php echo $image_slider; ?>" class="gallery-popup">
                    <img src="<?php echo $base_url;?>/sites/default/files/<?php echo $image_slider; ?>" alt="<?php echo $image_slider; ?>"></a>
                  </div>
                  <?php }}?>


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

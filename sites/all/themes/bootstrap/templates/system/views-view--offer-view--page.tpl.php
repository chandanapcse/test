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

  <div class="site-content container">
    <div class="rooms-content layout-grid style-02">
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

        if ($offer_status == 'happening') {

          $happening[] = '<div class="event">
                    <div class="row tm-flex">
                      <div class="col-lg-2 col-md-2">
                        <div class="time-from">
                          <span class="date">%</span>
              
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-5">
                        <div class="event-content">
                          <h3 class="title"><a href="' . $url . '">' . $node_title . '</a></h3>
                          <div class="event-desc">' . $summary . '</div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-5">
                        <div class="thumbnail">
                          <a href="' . $url . '"><img src="' . $base_url . '/sites/default/files/' . $field_top_image . '" alt="'.$node_title.'"></a>
                        </div>
                      </div>
                    </div>
                  </div>';

        } elseif ($offer_status == 'expired') {

          $expired[] = '<div class="event">
                    <div class="row tm-flex">
                      <div class="col-lg-2 col-md-2">
                        <div class="time-from">
                          <span class="date">%</span>
              
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-5">
                        <div class="event-content">
                          <h3 class="title"><a href="' . $url . '">' . $node_title . '</a></h3>
                          <div class="event-desc">' . $summary . '</div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-5">
                        <div class="thumbnail">
                          <a href="' . $url . '"><img src="' . $base_url . '/sites/default/files/' . $field_top_image . '" alt="'.$node_title.'"></a>
                        </div>
                      </div>
                    </div>
                  </div>';

        }
      }
      ?>


        <div class="site-content container">
          <div class="events-content">
            <div class="sc-events list-style">
              <nav class="filter-events">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="happening-tab" data-toggle="tab" href="#happening" role="tab" aria-selected="true">happening</a>
                  <a class="nav-item nav-link" id="nav-expired-tab" data-toggle="tab" href="#expired" role="tab"  aria-selected="false">expired</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="happening" role="tabpanel">

                  <?php
                  for ($i=0; $i < count($happening); $i++ ){
                    echo $happening[$i];
                  }
                  ?>

                </div>
                <div class="tab-pane fade" id="expired" role="tabpanel" aria-labelledby="nav-expired-tab">
                  <?php
                  for ($i=0; $i < count($expired); $i++ ){
                    echo $expired[$i];
                  }
                  ?>

                </div>
              </div>

            </div>
          </div>
        </div>

<?php //} ?>




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

<div id="wrapper-container" class="content-pusher">
    <div class="overlay-close-menu"></div>

<?php global $base_url; ?>

<?php print render($page['header']); ?>
<!-- Main Content -->
    <div id="main-content" class="main-content">
		<div id="home-main-content" class="home-main-content home-1">
		
		<?php print render($page['slider']); ?>
		
		<?php print render($page['checkin']); ?>
		<div class="empty-space"></div>
		<?php print render($page['basic_info']); ?>
		<div class="empty-space"></div>
		<?php print render($page['intro_video']); ?>
		<?php print render($page['top_destination']); ?>
      <?php print render($page['rooms_banner']); ?>
		<?php print render($page['package_banner']); ?>
			<?php print render($page['testamonial']); ?>
			<?php print render($page['wedding']); ?>
		<?php print render($page['offers']); ?>
		
		</div>
	</div>
  <?php print render($page['footer']); ?>
</div>
    </body>
</html>
<!-- HOME PAGE CONTENT -->


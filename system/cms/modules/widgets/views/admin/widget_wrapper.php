<div class="col-xs-12 widget <?php echo $widget->slug ?>">

	<section class="draggable title">
		<?php if ($widget->options['show_title']): ?>
      <h4><?php echo $widget->instance_title ?></h4>
    <?php endif ?>
    <a class="tooltip-s toggle" title="Toggle this element"></a>
  </section>

	<section class="col-xs-12 item">
		<div class="content">
			<?php echo $widget->body ?>
		</div>
  </section>

</div>
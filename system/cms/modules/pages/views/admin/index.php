<div class="col-xs-12">
	<div class="one_half">
		<section class="col-xs-12 title">
			<h4><?php echo lang('pages:list_title') ?></h4>
		</section>
		
		<section class="col-xs-12 item">
			<div class="content">
				<div id="page-list">
				<ul class="sortable">
					<?php echo tree_builder($pages, '<li id="page_{{ id }}"><div><a href="#" class="{{ status }}" rel="{{ id }}">{{ title }}</a></div>{{ children }}</li>') ?>
				</ul>
				</div>
			</div>
		</section>
	</div>
	
	<div class="one_half last">	
		<section class="col-xs-12 title">
			<h4><?php echo lang('pages:tree_explanation_title') ?></h4>
		</section>
		
		<section class="col-xs-12 item">
			<div class="content">
				<div id="page-details">
					<p>
						<?php echo lang('pages:tree_explanation') ?>
					</p>
				</div>
			</div>
		</section>
	</div>
</div>
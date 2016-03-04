<section class="col-xs-12 title">
	<h4><?php echo $module_details['name'] ?></h4>
</section>

<section class="col-xs-12 item">
	<div class="content">
		<?php if ($setting_sections): ?>
			<?php echo form_open('admin/settings/edit', 'class="crud"');?>
		
				<div class="tabs" role="tabpanel">
		
					<ul class="tab-menu nav nav-tabs bar_tabs" role="tablist">
						<?php 
						$first = true; $active = '';
						foreach ($setting_sections as $section_slug => $section_name): 
							if ( $first ){$first = false; $active = 'active';}else{$active = '';}
						?>
						<li class="<?php echo $active; ?>">
							<a href="#<?php echo $section_slug ?>" title="<?php printf(lang('settings:section_title'), $section_name) ?>" data-toggle="tab">
								<span><?php echo $section_name ?></span>
							</a>
						</li>
						<?php endforeach ?>
					</ul>
		
					<div class="form_inputs tab-content">
					<?php 
					$first = true; $active = '';
					foreach ($setting_sections as $section_slug => $section_name): 
							if ( $first ){$first = false; $active = ' active in';}else{$active = '';}
					?>
					<div class="form_inputs tab-pane fade<?php echo $active; ?>" id="<?php echo $section_slug;?>" role="tabpanel">
						<fieldset>
							<ul class="to_do">
							<?php $section_count = 1; foreach ($settings[$section_slug] as $setting): ?>
								<li id="<?php echo $setting->slug ?>" class="<?php echo $section_count++ % 2 == 0 ? 'even' : '' ?>">
									<label for="<?php echo $setting->slug ?>">
										<?php echo $setting->title ?>
										<?php if($setting->description): echo '<small>'.$setting->description.'</small>'; endif ?>
									</label>
		
									<div class="input <?php echo 'type-'.$setting->type ?>">
										<?php echo $setting->form_control ?>
									</div>
									<span class="move-handle"></span>
								</li>
							<?php endforeach ?>
							</ul>
						</fieldset>
					</div>
					<?php endforeach ?>
					</div>
		
				</div>
		
				<div class="buttons padding-top">
					<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save') )) ?>
				</div>
		
			<?php echo form_close() ?>
		<?php else: ?>
			<div>
				<p><?php echo lang('settings:no_settings');?></p>
			</div>
		<?php endif ?>
	</div>
</section>
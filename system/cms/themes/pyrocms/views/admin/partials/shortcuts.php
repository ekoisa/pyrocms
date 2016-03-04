<?php if ( ! empty($module_details['sections'][$active_section]['shortcuts']) ||  ! empty($module_details['shortcuts'])): ?>
<nav id="shortcuts">
	<ul class="nav navbar-right panel_toolbox">
		<?php if ( ! empty($module_details['sections'][$active_section]['shortcuts'])): ?>
			<?php foreach ($module_details['sections'][$active_section]['shortcuts'] as $shortcut):
				$name 	= $shortcut['name'];
				$uri	= $shortcut['uri'];
				unset($shortcut['name']);
				unset($shortcut['uri']); ?>
			<li><a <?php foreach ($shortcut as $attr => $value) echo $attr.'="'.$value.'"'; echo 'href="' . site_url($uri) . '"><i class="fa fa-dot-circle-o"></i>&nbsp;' . lang($name) . '</a>'; ?></li>
			<?php endforeach; ?>
		<?php endif; ?>
		
		<?php if ( ! empty($module_details['shortcuts'])): ?>
			<?php foreach ($module_details['shortcuts'] as $shortcut):
				$name 	= $shortcut['name'];
				$uri	= $shortcut['uri'];
				unset($shortcut['name']);
				unset($shortcut['uri']); ?>
			<li><a <?php foreach ($shortcut as $attr => $value) echo $attr.'="'.$value.'"'; echo 'href="' . site_url($uri) . '"><i class="fa fa-dot-circle-o"></i>&nbsp;' . lang($name) . '</a>'; ?></li>
			<?php endforeach; ?>
		<?php endif; ?>
	</ul>
</nav>
<?php endif; ?>
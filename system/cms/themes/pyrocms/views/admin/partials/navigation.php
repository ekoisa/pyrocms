<ul class="nav side-menu">
	
	<li id="dashboard-link"><?php echo anchor('admin', '<i class="fa fa-home"></i> '.lang('global:dashboard'), 'class="top-link '.( ! $this->module ? 'current ' : '').'"') ?></li>

		<?php 

		// Display the menu items.
		// We have already vetted them for permissions
		// in the Admin_Controller, so we can just
		// display them now.
		foreach ($menu_items as $key => $menu_item)
		{
			if (is_array($menu_item))
			{
				echo '<li><a><i class="fa fa-folder"></i> '.lang_label($key).'</a><ul class="nav child_menu">';

				foreach ($menu_item as $lang_key => $uri)
				{
					echo '<li><a href="'.site_url($uri).'" class="">'.lang_label($lang_key).'</a></li>';

				}

				echo '</ul></li>';

			}
			elseif (is_array($menu_item) and count($menu_item) == 1)
			{
				foreach ($menu_item as $lang_key => $uri)
				{
					echo '<li><a href="'.site_url($menu_item).'" >'.lang_label($lang_key).'</a></li>';
				}
			}
			elseif (is_string($menu_item))
			{
				echo '<li><a href="'.site_url($menu_item).'" >'.lang_label($key).'</a></li>';
			}

		}
	
		?>

</ul>
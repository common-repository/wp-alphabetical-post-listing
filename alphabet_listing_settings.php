<?php	if (!isset($wp_al_plugin)) 	{		$new_options = array(			'title' => 'A to Z listing',			'type' => 'post', 			'bg_colour' => '#f0f0f0',			'text_colour' => '#424242'		);		add_option('alphabet-listing-settings',$new_options);	}?><div class="wrap"><h2>Settings</h2><?php if( isset($_GET['settings-updated']) ) { ?>    <div id="message" class="updated">        <p><strong><?php _e('Settings saved.') ?></strong></p>    </div><?php } ?><form method="post" action="options.php">    <?php 		settings_fields('alphabet-listing-settings-group');		$wp_al_options = get_option('alphabet-listing-settings'); 	?>	    <table class="form-table">        <tr valign="top">        	<th scope="row">Listing Title</th>        	<td><input type="text" name="alphabet-listing-settings[title]" value="<?php echo $wp_al_options['title']; ?>" /></td>        </tr>                <tr valign="top">        	<th scope="row">Listing Type</th>        	<td><input type="text" name="alphabet-listing-settings[type]" value="<?php echo $wp_al_options['type']; ?>" /></td>        </tr>                <tr valign="top">        	<th scope="row">Background Color</th>        	<td><input type="text" name="alphabet-listing-settings[bg_colour]" value="<?php echo $wp_al_options['bg_colour']; ?>" /></td>        </tr>		        <tr valign="top">	        <th scope="row">Text Color</th>	        <td><input type="text" name="alphabet-listing-settings[text_colour]" value="<?php echo $wp_al_options['text_colour']; ?>" /></td>        </tr>    </table>        <p class="submit">	    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />    </p></form></div>
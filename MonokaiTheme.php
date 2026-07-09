<?php
/**
 * MantisBT - Monokai Theme Plugin
 *
 * Applies a Monokai dark color theme to MantisBT based on the classic
 * Monokai color scheme by Wimer Hazenberg.
 */
class MonokaiThemePlugin extends MantisPlugin {
	function register() {
		$this->name = plugin_lang_get( 'title' );
		$this->description = plugin_lang_get( 'description' );
		$this->version = '1.0';
		$this->requires = array(
			'MantisCore' => '2.0.0',
		);
		$this->author = 'W. Latif Ayubi';
	}

	function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources',
		);
	}

	function resources() {
		if( !auth_is_user_authenticated() ) {
			return '';
		}
		return '<link rel="stylesheet" type="text/css" href="' . plugin_file( 'monokai.css' ) . '" />';
	}
}

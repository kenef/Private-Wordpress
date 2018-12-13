/*
Add the following code to the bottom of your theme's functions.php file. Save the file and push it to your webserver (ssh, ftp, sftp, etc...).
*/

// Redirect all non-logged-in users to the login page.
function redirect_to_specific_page() {
	if ( ! is_user_logged_in() ) {
		wp_redirect( '/wp-login.php', 301 ); 
  		exit;
    }
}
add_action( 'template_redirect', 'redirect_to_specific_page' );

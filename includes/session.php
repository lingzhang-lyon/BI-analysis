<?php
	
class Session {
	
    public static $errors = array();
	
	function __construct(){
		session_start();
	
	}

	public static function message() {
		if (isset($_SESSION["message"])) {
			$output = "<div class=\"message\">";
			$output .= htmlentities($_SESSION["message"]);
			$output .= "</div>";
			
			// clear message after use
			$_SESSION["message"] = null;
			
			return $output;
		}
	}

	public static function errors() {
		if (isset($_SESSION["errors"])) {
			$errors = $_SESSION["errors"];			
			// clear errors after use
			$_SESSION["errors"] = null;			
			return $errors;
		}
	}
	
	public static function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
		  $output .= "<div class=\"error\">";
		  $output .= "Please fix the following errors:";
		  $output .= "<ul>";
		  foreach ($errors as $key => $error) {
		    $output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
		  }
		  $output .= "</ul>";
		  $output .= "</div>";
		}
		return $output;
	}
	
	public static function logged_in() {
			return isset($_SESSION['user_id']);
		}
			
}

$session = new Session();
	
	
?>
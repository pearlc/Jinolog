<?php
class Blog extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->helper(array("url","form"));
	}

	function index() {
		// ¿¹½Ã setcookie ( string $name , string $value , int $expire = 0 , string $path , string $domain , bool $secure = false , bool $httponly = false )
//		setCookie("name1", "value1", mktime()+3600, "/", "", false, true);
		setCookie("name2", "value2", mktime()+3600, "/a");

		setCookie("name1", "value1", mktime()-10);
//		setCookie("name2", "value2", mktime()-10);

		$data["title"] = "Jinolog";
		$data["footer_message"] = "Footer Message";

		$data["main_content"] = "";
		$data["main_content_filename"] = "blog_view.php";

		$data["query"] = $this->db->get("entries");

		if (isset($_COOKIE)) {
			foreach($_COOKIE as $k => $v) {
				$data["ck"][$k] = $v;
			}
		}

		$this->load->view('template', $data);
	}

	function comments() {
		$data["title"] = "Jinolog";
		$data["footer_message"] = "Footer Message";

		$data["main_content"] = "";
		$data["main_content_filename"] = "comment_view.php";

		$this->db->where("entry_id", $this->uri->segment(3));
		$data["query"] = $this->db->get("comments");

		$this->load->view('template', $data);
	}

	function comment_insert() {
		$this->db->insert("comments", $_POST);

		redirect("blog/comments/".$_POST["entry_id"]);
	}

	function _output($output) {
		echo $output.".";
	}
}
?>
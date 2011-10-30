<?php
class Blog extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->helper(array("url","form"));
	}

	function index() {
		$data["title"] = "Jinolog";
		$data["footer_message"] = "Footer Message";

		$data["main_content"] = "";
		$data["main_content_filename"] = "blog_view.php";

		$data["query"] = $this->db->get("entries");

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
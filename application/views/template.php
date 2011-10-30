<?php
$this->load->view("include/header.php", array("title"=>$title));

$this->load->view($main_content_filename, array("main_content"=>$main_content, "query"=>$query));

$this->load->view("include/footer.php", array("footer_message"=>$footer_message));
?>
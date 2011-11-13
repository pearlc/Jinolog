<?php foreach($query->result() as $row) : ?>
<h3><?=$row->title?></h3>
<p><?=$row->body?></p>

<p><?=anchor("blog/comments/".$row->id, "Comments");?></p>
<div class="cookie_div">
<?php if(isset($ck)) foreach($ck as $k => $v) {
	//echo $k, " : ", $v, "<br />";
}?>
</div>
<hr>
<?php endforeach; ?>
<html>
<head>
<link href="<?php echo base_url(); ?>css/board.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
</head>
<body>
<?php
$this->load->helper('form');
echo form_open('board/post');
echo form_textarea(['name' => 'body', 'id' => 'main-textarea']);
echo form_button(['id' =>'upload', 'content' => 'upload']);
echo form_submit('submit', '書き込み');
echo form_close();
?>
<table>

<?php

foreach ($posts->result() as $row) {
	echo '<tr>';
	$weekday = date('w', strtotime($row->post_date));
	$classes = '';
	switch($weekday){
	case 0:
		$classes .= 'sunday ';
		break;
	case 6:
		$classes .= 'saturday ';
		break;
	}
	echo '<td class="post-date ' . $classes . '">' . $row->post_date . '</td>';
	echo '<td class="post-body ' . $classes . '">' . $this->Post->convert(html_escape($row->body)).'</td>';
	echo '</tr>';
}

?>
</table>
</body>
</html>

<?php
function excerpt($content, $limit) {
	$excerpt = explode(' ', strip_tags($content), $limit);
	if (count($excerpt) >= $limit){
		array_pop($excerpt);
		$excerpt = implode(' ',$excerpt).'...';
	}else{
		$excerpt = implode(' ',$excerpt);
	}
	return $excerpt;
}

function slugify($s) {
    $s = preg_replace('~[^\\pL\d]+~u', '-', $s);
    $s = trim($s, '-');  
	//$text = preg_replace('~[^-\w]+~', '', $text); //remove unwanted characters
	return $s;
}

function ago($t){
	$d = time()-$t;
	$r = 'just now';
	$m = array('year'=>31556926,'month'=>2629744,'week'=>604800,'day'=>86400,'hour'=>3600,'minute'=>60,'second'=>1);
	foreach($m as $v=>$s){
		if($d >= $s){
			$a = floor($d/$s);
			$r = "$a $v" . ($a != 1? 's' : '') . ' ago';	
			break;
		}
	}
	return $r;
}

function comments($q){
	$comments = array();
	while ($row = mysql_fetch_assoc($q)){
		$row['child'] = array();
		$comments[$row['id']] = $row; 
	}

	foreach ($comments as $k => &$v){
	  if ($v['reply_to'] != 0) {
		$comments[$v['reply_to']]['child'][] =& $v;
	  }
	}
	unset($v);
	
	// delete the childs comments from the top level
	foreach ($comments as $k => $v){
	  if ($v['reply_to'] != 0){
		unset($comments[$k]);
	  }
	}
	display_comments($comments);
}

function display_comments(array $comments, $lv = 0, $id = 0){
	  foreach ($comments as $c): ?>		
		<div id=comment-<?php echo $c['id']; ?> class=comment level=<?php echo $lv; ?> <?php echo "reply-id=".$c['id']; ?> <?php echo ($id)? "parent-id=$id" : ''; ?> style='margin-left:<?php echo ($lv+1)*25; ?>px'>
			<div class=inner>
				<?php /* if(!empty($c['child'])) : ?>
                    <div class=replys><?php echo count($c['child']);//echo $c['replys']; ?></div>
                <?php endif;*/ ?>
				<p>
                    <b><?php echo stripslashes($c['name']); ?>.</b>
                    <?php echo stripslashes($c['comment']); ?>
                    <em><?php echo ago($c['date']); ?>.</em>
                    <a href=# class=reply>reply</a>
                </p>
			</div>
		</div>
<?php 
	if (!empty($c['child'])) {
	  display_comments($c['child'], $lv+1, $c['id']);
	}
  endforeach;
}	
?>
<?php
	$l = 0;
	$p = strip_tags($postId);
	if($_POST['history']){
		$l = strip_tags($_POST['history']);
		include 'connect.php';
		include 'functions.php';
	}
	if($_POST['past']){
		//$array = explode(',', strip_tags($_POST['past']));
		//$str = implode(',', $array);
		$str = strip_tags($_POST['past']);
	}else{
		$str = $_COOKIE['visited'];
		if($p){
			$array = explode(',', $_COOKIE['visited']);
			$i = array_search($p, $array);
			if($i !== false){
				unset($array[$i]);
			}
			$array[] = $p;
			$str = implode(',', $array);
		}
	}
	$query = "SELECT post.id, post.title, post.content, post.notes, post.excerpt, post.img ,post.date, sections.category FROM post, sections WHERE post.id IN (".mysql_real_escape_string($str).") AND post.section = sections.id ORDER BY FIND_IN_SET(post.id, '".mysql_real_escape_string($str)."') DESC LIMIT ".mysql_real_escape_string($l).",10";
	$sql = mysql_query($query) or die ( "Query failed due to: ".mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<div id=timeFreeze>You Reached the Beginning of Time.</div>';
		return;
	} 
?>
		<?php $i=0; while($f = mysql_fetch_assoc($sql)) : $i++; ?>
                <div class='histogram <?php echo ($i % 2)? 'odd' : 'even'; ?> post-<?php echo $f['id']; ?><?php echo($postId == $f['id'])? ' not' : ''; ?>' post-id=<?php echo $f['id']; ?>>
                    <article>
                        <?php if($f['img']): ?>
                            <div class=img>
                                <img src='<?php echo $f['img']; ?>' />
                            </div>
                        <?php endif; ?>
                        <h2 title="<?php echo $f['title']; ?>"><?php echo $f['id']; ?> - <?php echo $f['title']; ?></h2>
                    </article>
                </div>
		<?php endwhile; ?>
		<?php if($i >= 10) : ?>
			<a href=# id=thePast history-mark=<?php echo $l+10; ?>>Load more</a>
        <?php else : ?>
        	<div id=timeFreeze>You Reached the Beginning of Time.</div>
		<?php endif; ?>
	<?php 
        if($l !== 0)
            mysql_close($connection); 
    ?>
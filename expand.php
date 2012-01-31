<?php
	if($_POST['id']){
		$id = strip_tags($_POST['id']);
		include 'connect.php';
		include 'functions.php';
	}else if($postId){
		$id = strip_tags($postId);
	}else{
		echo '<div id=notHere>4o4</div>';
		return;
	}

	$query = "SELECT post.id, post.title, post.content, post.notes, post.excerpt, post.img ,post.date, sections.category FROM post, sections WHERE post.id = '".mysql_real_escape_string($id)."' AND post.section = sections.id ORDER BY post.id";
	$sql = mysql_query($query) or die ( "Query failed due to: ".mysql_error());
	
	if(mysql_num_rows($sql) == 0){
		echo '<div id=notHere>4o4</div>';
		return;
	} 

	while($f = mysql_fetch_assoc($sql)) :
?>
    <div class=wrap>
        <h1><?php echo $f['title']; ?>.</h1>
        <div class=ctrls> <div class=bubble title='View Post Comments.'><div class=box></div><div class=tip></div></div> <div class=minimize title=Minimize.></div></div>
        <article>
            <div class='bahr <?php echo strtolower($f['category']); ?>'>
                <div class=meta>
                    <span class=cat><?php echo $f['category']; ?></span><span class=date>Posted <?php echo ago($f['date']); ?></span>
                </div>
            </div>
            <div class=content>
            <?php if($f['notes']): ?>
                <p class='notes note-155'><?php echo $f['notes']; ?></p>
            <?php elseif($f['img']): ?>
                <p class=notes><img src='<?php echo $f['img']; ?>' /></p>
            <?php endif; ?>
                <p class=text><?php echo nl2br($f['content']); ?></p>
                <div class=clear></div>
            </div>
        </article>
    </div>
    <div id=comments-<?php echo $id; ?> class='comments hidden'>
        <?php
            $query2 = "SELECT id, reply_to, name, date, comment FROM comments WHERE post_id = '".mysql_real_escape_string($id)."' ORDER BY id ASC";
            $sql2 = mysql_query($query2);
            
            comments($sql2);
        ?>
        <div class=thread-div thread-id=<?php echo $id; ?>>
        	<a href=# class=start-thread>Start a New Thread</a>
        </div>
    </div>
    
    <!--<div class='mini-bahr <?php echo strtolower($f['category']); ?>'><div class=ball></div></div>-->
<?php
	endwhile;
	if($_POST['id']){
		mysql_close($connection);
	}
?>
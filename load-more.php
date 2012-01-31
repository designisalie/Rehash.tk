<?php
	$post = 0;
	$dont = 0;
	if($_POST['post'])
		$post = strip_tags($_POST['post']);
	if(!$postId)
		$postId = 0;
	if($_POST['dont']){
		$dont = explode(',', strip_tags($_POST['dont']));
		$dont = implode(',', $dont);
	}
	
	include 'connect.php';
	include 'functions.php';

	//$query = "SELECT post.id, post.title, post.content, post.excerpt, post.img ,post.date, sections.category, COUNT(comments.post_id) AS comments FROM post, sections, comments WHERE post.section = sections.id AND comments.post_id = post.id AND post.id <> $postId AND post.id NOT IN($dont) GROUP BY comments.post_id ORDER BY post.id DESC LIMIT $post, 20";
	$query = "SELECT post.id, post.title, post.content, post.excerpt, post.img ,post.date, sections.category, COUNT(comments.post_id) AS comments FROM sections, post LEFT JOIN comments ON post.id = comments.post_id WHERE post.section = sections.id AND post.id <> $postId AND post.id NOT IN($dont) GROUP BY comments.post_id ORDER BY post.id DESC LIMIT $post, 20";
	$sql = mysql_query($query) or die ('Query failed due to: '.mysql_error()); 
	
	if(mysql_num_rows($sql) == 0){
		echo '<div id=theEnd>You Reached the End of the Rainbow.</div>';
		return;
	}
	while($f = mysql_fetch_assoc($sql)) : 
?>
        <div id='post-<?php echo $f['id']; ?>' class='card item <?php echo strtolower($f['category']); ?> post-<?php echo $f['id']; ?>' post-id='<?php echo $f['id']; ?>'>
            <article>
                <?php if($f['img']): ?>
                    <span class=slice>
                        <h2><?php echo $f['title']; ?>.</h2>
                        <div class=grad></div>
                        <img src='<?php echo $f['img']; ?>' />
                    </span>
                <?php else : ?>
                    <h2 class=no-img><?php echo $f['title']; ?>.</h2>
                <?php endif; ?>                    
                <p>
					<?php 
                        if($f['excerpt'])
                            echo excerpt($f['excerpt'], 50);
                        else
                            echo excerpt($f['content'], 50); 
                    ?>
                </p>
                <div class=meta>
               		<div class=comments><span><?php echo $f['comments']; ?></span> <?php echo ($f['comments'] != '1')? 'Comments' : 'Comment'; ?></div>
                    <div class='spot <?php echo strtolower($f['category']); ?>'><?php echo $f['category']; ?></div>
                    <a href='/ux/<?php echo $f['id'] . '/' . slugify($f['title']); ?>' class=hidden>click</a>
                    <div class='marks <?php echo strtolower($f['category']); ?>'><span></span><span></span><span></span><span></span></div>
                    <div class=date><?php echo ago($f['date']); ?></div>
                </div>
                <div class=fancy></div>
            </article>
        </div>
    <?php endwhile; ?>

	<?php if(mysql_num_rows($sql) == 20): ?>
		<a href=# id=nomNom post-mark=<?php echo($postId)? 21 : $post+20; ?>>Load More</a>
    <?php else : ?>
    	<div id=theEnd>You Reached the End of the Rainbow.</div>
	<?php endif; ?>
	<?php 
        if($post !== 0)
            mysql_close($connection); 
    ?>
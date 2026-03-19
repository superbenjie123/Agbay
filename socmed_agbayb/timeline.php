<?php include 'views/header.php'; ?>
<div class="container">
    <div class="post-container">
        <form id="post" action="models/add_post.php" method="POST">
            <textarea id="post-area" name="post-area" placeholder="What's on your mind?"></textarea>
            <input type="submit" value="post">
            
        </form>
        <div class=='posts'>
             <?php include 'models/load_all_posts.php'; ?>
        </div>        
    </div>
</div>
<?php include 'views/footer.php'; ?>

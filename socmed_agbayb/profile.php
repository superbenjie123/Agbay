<?php include 'views/header.php'; ?>

<div class="container">
    <div class="banner">
        <p id="name">
        <?= $_SESSION['firstname'].".".$_SESSION['lastname']; ?>
    </p>
    <div class="profile-pic"></div>
</div>
    <div class="post-container">
        <form id="post" action="models/add_post.php" method="POST">
            <textarea id="post-area" name="post-area" placeholder="Whats on your mind?"></textarea>
            <input type="submit" value="post">
            
        </form>
        <div class='posts'>
             <?php
                 include 'models/load_account_posts.php'; ?>
        </div>
    </div>
</div>
<?php include 'views/footer.php'; ?>
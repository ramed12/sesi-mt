<?php
$conn = new PDO("mysql:host=localhost:3306;dbname=fiergs", "fiergs", "3hAE3]X9!Wgy?`PS");
$sql = "SELECT * FROM wp_instagram ORDER BY id ASC";
$result = $conn->query($sql);
$instagram_feed = $result->fetchAll();
?>
<div class="container">
    <div class="row">
        <!-- loop through all rows from database -->
        <?php foreach ($instagram_feed as $feed) : ?>
            <div class="col-4">
                <a href="https://www.instagram.com/p/<?php echo $feed['url']; ?>" target="_blank" style="color: white;">
                    <!-- thumbnail of post -->
                    <img src="http://fiergs.test/wp-content/themes/fiergs/<?php echo $feed['image_path']; ?>" class="image-insta" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
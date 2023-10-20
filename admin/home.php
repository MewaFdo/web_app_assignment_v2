
<?php 
include_once 'header.php';
?>

<!---------------------------------------- PAGE 1 ------------------------------>

<?php
$cards = array(
        array('image' => 'assets/nav_menu.jpg', 'title' => 'Menu', 'link' => 'page1.html'),
        array('image' => 'assets/nav_res.jpg', 'title' => 'Reservation', 'link' => 'page2.html'),
        array('image' => 'assets/nav_of.jpg', 'title' => 'Offers', 'link' => 'page3.html'),
        array('image' => 'assets/nav_gal.jpg', 'title' => 'Gallery', 'link' => 'page4.html')
    );

    ?>
    <section class="container" id="adminp">
        <?php foreach ($cards as $card): ?>
            <div class="card" onclick="window.location.href='<?php echo $card['link']; ?>';">
                <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>">
                <h2><?php echo $card['title']; ?></h2>
            </div>
        <?php endforeach; ?>
    </section>

<!---------------------------------------- TEST ------------------------------------------>

<?php 
include_once 'footer.php';
?>
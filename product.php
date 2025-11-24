<?php
include 'template/head.php';
include 'template/navbar.php';
include 'template/game_helper.php';

// Get game ID from URL
$gameId = isset($_GET['id']) ? intval($_GET['id']) : null;
$game = $gameId ? getGameById($gameId) : null;

// If game not found, show error
if (!$game) {
    echo "<main><div class='container'>";
    echo "<h2>Product not found</h2>";
    echo "<a href='home.php' class='btn-ghost'>Back to Shop</a>";
    echo "</div></main>";
    include 'template/footer.php';
    exit;
}
?>

<main>
    <div class="products-section">
        <div class="container">
            <a href="home.php" class="back-link">← Back to Shop</a>

            <div class="row product-detail">
                <div class="col-md-6">
                    <img src="<?php echo htmlspecialchars($game['image_url']); ?>" 
                         alt="<?php echo htmlspecialchars($game['game_name']); ?>" 
                         class="product-image">
                </div>

                <div class="col-md-6">
                    <div class="tag"><?php echo htmlspecialchars($game['tag']); ?></div>

                    <h1><?php echo htmlspecialchars($game['game_name']); ?></h1>

                    <div class="price">
                        <?php 
                            if($game['game_price'] == 0) {
                                echo "Free";
                            } else {
                                echo "£" . number_format($game['game_price'], 2);
                            }
                        ?>
                    </div>

                    <div class="meta">
                        PEGI <?php echo htmlspecialchars($game['pegi_rating']); ?> · <?php echo htmlspecialchars($game['genre_name']); ?>
                    </div>

                    <p><?php echo htmlspecialchars($game['description']); ?></p>

                    <p><?php echo htmlspecialchars($game['full_description']); ?></p>

                    <div class="product-buttons">
                        <button class="boxed-cta">Add to Cart</button>
                        <button class="boxed-cta wishlist-btn">Wishlist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'template/footer.php';
?>


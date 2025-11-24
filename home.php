<?php
// Include header and database stuff
include 'template/head.php';
include 'template/navbar.php';
include 'template/game_helper.php';

// Get games from database (only games with images)
$game1 = getGameById(1);
$game2 = getGameById(2);
$game3 = getGameById(3);
$game4 = getGameById(4);
$game5 = getGameById(5);
$game6 = getGameById(6);
$game7 = getGameById(7);
$game8 = getGameById(9);
$game9 = getGameById(10);
$game10 = getGameById(11);
$game11 = getGameById(12);
$game12 = getGameById(13);
?>
<main>
    <!-- Hero -->
    <div class="hero-landing">
        <video class="hero-video" autoplay muted loop>
            <source src="Assets/videos/hero2.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-inner container">
            <div class="hero-content">
                <h1 class="hero-title">WHERE GAMERS UNITE<br><span>FOR NON‑STOP FUN.</span></h1>
                <p class="hero-sub">Your one-stop store for action, strategy, adventure and more. Browse curated picks, new releases, and top deals.</p>

                <div class="hero-cta">
                    <a class="btn-ghost" href="#products">Shop Now <span class="arrow">→</span></a>
                    <a class="btn-ghost ghost-outline ms-3" href="contact.php">Contact Support</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div id="products" class="products-section">
        <div class="container">
            <h2 class="section-title text-center">Browse our Collection</h2>

            <div class="row g-4 mt-4">
                <!-- Game 1 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game1['image_url']); ?>" alt="<?php echo htmlspecialchars($game1['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game1['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game1['game_name']); ?></h3>
                        <div class="when"><?php echo ($game1['game_price'] == 0) ? "Free" : "£" . number_format($game1['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game1['pegi_rating']); ?> · <?php echo htmlspecialchars($game1['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game1['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game1['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 2 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game2['image_url']); ?>" alt="<?php echo htmlspecialchars($game2['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game2['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game2['game_name']); ?></h3>
                        <div class="when"><?php echo ($game2['game_price'] == 0) ? "Free" : "£" . number_format($game2['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game2['pegi_rating']); ?> · <?php echo htmlspecialchars($game2['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game2['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game2['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 3 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game3['image_url']); ?>" alt="<?php echo htmlspecialchars($game3['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game3['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game3['game_name']); ?></h3>
                        <div class="when"><?php echo ($game3['game_price'] == 0) ? "Free" : "£" . number_format($game3['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game3['pegi_rating']); ?> · <?php echo htmlspecialchars($game3['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game3['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game3['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 4 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game4['image_url']); ?>" alt="<?php echo htmlspecialchars($game4['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game4['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game4['game_name']); ?></h3>
                        <div class="when"><?php echo ($game4['game_price'] == 0) ? "Free" : "£" . number_format($game4['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game4['pegi_rating']); ?> · <?php echo htmlspecialchars($game4['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game4['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game4['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 5 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game5['image_url']); ?>" alt="<?php echo htmlspecialchars($game5['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game5['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game5['game_name']); ?></h3>
                        <div class="when"><?php echo ($game5['game_price'] == 0) ? "Free" : "£" . number_format($game5['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game5['pegi_rating']); ?> · <?php echo htmlspecialchars($game5['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game5['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game5['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 6 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game6['image_url']); ?>" alt="<?php echo htmlspecialchars($game6['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game6['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game6['game_name']); ?></h3>
                        <div class="when"><?php echo ($game6['game_price'] == 0) ? "Free" : "£" . number_format($game6['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game6['pegi_rating']); ?> · <?php echo htmlspecialchars($game6['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game6['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game6['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 7 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game7['image_url']); ?>" alt="<?php echo htmlspecialchars($game7['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game7['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game7['game_name']); ?></h3>
                        <div class="when"><?php echo ($game7['game_price'] == 0) ? "Free" : "£" . number_format($game7['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game7['pegi_rating']); ?> · <?php echo htmlspecialchars($game7['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game7['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game7['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 8 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game8['image_url']); ?>" alt="<?php echo htmlspecialchars($game8['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game8['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game8['game_name']); ?></h3>
                        <div class="when"><?php echo ($game8['game_price'] == 0) ? "Free" : "£" . number_format($game8['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game8['pegi_rating']); ?> · <?php echo htmlspecialchars($game8['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game8['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game8['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 9 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game9['image_url']); ?>" alt="<?php echo htmlspecialchars($game9['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game9['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game9['game_name']); ?></h3>
                        <div class="when"><?php echo ($game9['game_price'] == 0) ? "Free" : "£" . number_format($game9['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game9['pegi_rating']); ?> · <?php echo htmlspecialchars($game9['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game9['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game9['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 10 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game10['image_url']); ?>" alt="<?php echo htmlspecialchars($game10['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game10['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game10['game_name']); ?></h3>
                        <div class="when"><?php echo ($game10['game_price'] == 0) ? "Free" : "£" . number_format($game10['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game10['pegi_rating']); ?> · <?php echo htmlspecialchars($game10['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game10['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game10['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 11 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game11['image_url']); ?>" alt="<?php echo htmlspecialchars($game11['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game11['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game11['game_name']); ?></h3>
                        <div class="when"><?php echo ($game11['game_price'] == 0) ? "Free" : "£" . number_format($game11['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game11['pegi_rating']); ?> · <?php echo htmlspecialchars($game11['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game11['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game11['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Game 12 -->
                <div class="col-sm-6 col-md-4">
                    <article class="boxed-card">
                        <img src="<?php echo htmlspecialchars($game12['image_url']); ?>" alt="<?php echo htmlspecialchars($game12['game_name']); ?>" class="card-image">
                        <div class="tag"><?php echo htmlspecialchars($game12['tag']); ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game12['game_name']); ?></h3>
                        <div class="when"><?php echo ($game12['game_price'] == 0) ? "Free" : "£" . number_format($game12['game_price'], 2); ?></div>
                        <div class="meta"><?php echo htmlspecialchars($game12['pegi_rating']); ?> · <?php echo htmlspecialchars($game12['genre_name']); ?></div>
                        <p class="desc"><?php echo htmlspecialchars($game12['description']); ?></p>
                        <div class="cta-wrap">
                            <a href="product.php?id=<?php echo $game12['game_id']; ?>" class="boxed-cta">
                                <span>Learn more</span>
                                <span class="cta-arrow" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'template/footer.php';
include 'template/scripts.php';
?>
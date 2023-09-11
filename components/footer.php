<?php $btnQuotes = ["& more", "why not?", "let's do it", "more please", "i'm in!", "tell me more", "i say yasss", "to the top"];?>

<footer>
    <div class="dots">
    <?php include "dots.svg.php"; ?>
    </div>
    <section class="footer_pt1">
        <div class="home_footer">
            <div>
            <h4>This is home</h4>
            <img src="/assets/icons/this_is_home.svg" alt="Logo - This is home">
            </div>
            <button><span class="btnSpan"><?=$btnName = $btnQuotes[7]; $btnName;?></span>▲</button>

        </div>
        <p>Ready to explore the world? Our travel advice for exchange students and digital nomads is here to be your trusty sidekick on your global adventures. Let's get you ready to create some unforgettable memories!</p>
    </section>
    <nav class="nav_footer">
        <a href="index.php">Home</a>
        <a href="#">Jobs</a>
        <a href="#">Paperwork</a>
        <a href="#">Housing</a>
        <a href="#">Blog</a>
    </nav>
    <p class="copyright">Copyright @2023 Thisishome</p>
</footer>
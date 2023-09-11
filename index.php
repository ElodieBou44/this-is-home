<?php $btnQuotes = ["& more", "why not?", "let's do it", "more please", "i'm in!", "tell me more", "i say yasss", "to the top"];?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/assets/styles/general.css"/>
		<title>This is home</title>
	</head>
	<?php $img_src = "assets/img/homepage.jpg"; $img_alt = "Sky view of a tropical beach"; $h1_name = "This is home"; include "components/header.php"?> 
	<body>
		<main>
			<section>
				<p><span><span>Hey there!</span> We are a team of experienced digital nomads who have lived and worked in various locations across the globe. We are passionate about sharing our knowledge</span> and providing you with the latest tips for your expatriation project. Through our blog, we share how our decision to trade routine for adventure and swap a "regular" home for the beautiful planet Earth has transformed our lives for the better.<br><br>
				Our website is open to all digital nomads, backpackers, and adventure seekers who want to add a special chapter to their lives by exploring different parts of our amazing planet. We aim to provide you with an all-inclusive digital guide on expatriation and everything you need to know to make your journey successful. </p>
			</section>
			<div class="top_destinations">
				<img class="deco" src="assets/icons/deco.svg" alt="Decoration">
				<h2>Top destinations</h2>
				<img class="deco" src="assets/icons/deco_reverse.svg" alt="Decoration" >
			</div>
			<?php include "components/destination_labels.php"?>
			<div class="btnMore_container">
            <button><span class="btnSpan"><?=$btnName = $btnQuotes[0]; $btnName; ?></span>+</button>
			</div>
			<?php include "components/canyon.php"?>
		</main>
		<?php include "components/footer.php" ?>
	</body> 
</html>

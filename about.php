<?php
include('connection/connect.php');

 session_start(); //session started by unique user_id
  
error_reporting(0);                                                                      //for printing the  text
  $sql = "SELECT * FROM signup where user_id='".$_SESSION["user_id"]."'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  $name=$row['firstname'];

  if($_SESSION["user_id"]==0)
  {
	  $none='none';
  }

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Cooking Recipe </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
						<a href="featured.php">Recipe of Month</a>
					</li>
					
					<li class="current">
						<a href="about.php">About</a>
					</li>
					<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li><a href="login.php">login</a></li>';
								echo '<li><a href="signup.php">signup</a></li>';
							}
						else
							{
									
									
									
									$logout= '<form action="login.php" method="post" >
									<input type="submit" id="logout" name="logout" value="logout" style="width:100px;color:#000;border:none;padding:5px;font-size:15px;"  ></form>';
							}

						?>
					
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
						<div>
							<h4>What is Food&Recipes</h4>
							<p>
							FoodRecipe refers to the concept of a set of instructions or a method used to prepare a specific dish or meal. It includes a list of ingredients, tools, and step-by-step directions for combining those ingredients in the right order to achieve the desired flavor, texture, and appearance. Food recipes serve as a guide for both novice and experienced cooks, helping them replicate dishes with accuracy and consistency. With the rise of the internet and social media, food recipes have evolved from traditional cookbooks to interactive platforms where people share their culinary creations, experiment with different cuisines, and explore the stories behind each dish.

Food recipes can range from simple, everyday meals to elaborate, gourmet dishes. They can be found in printed cookbooks, online food blogs, cooking apps, videos, or social media channels like Instagram, YouTube, and Pinterest.
							</p>
							<h4>Our history</h4>
							<p>
							The history of food recipes is as old as human civilization, reflecting the development of culinary traditions, social structures, and technological innovations in food preparation.

1. Prehistoric Times
Early humans likely relied on trial and error to figure out how to prepare and consume food. Early recipes would have been passed down orally, focusing on survival and basic nourishment.
With the advent of fire, humans learned to cook their food, marking the first culinary techniques that could be considered early "recipes" in the sense of instructions for preparing food.
2. Ancient Civilizations
Mesopotamia, Egypt, Greece, and Rome: Ancient civilizations began to formalize cooking methods and document food preparation practices. The earliest known cookbooks come from the ancient world.
The Romans compiled recipes in texts such as the Apicius, a Roman cookbook dating back to the 1st century AD, which provided detailed instructions on preparing meats, sauces, and desserts.
Ancient Egyptians also had early records of food recipes, including methods for baking bread and preparing stews.
In China, food preparation was intricately documented in the Qimin Yaoshu (written in the 6th century), an agricultural text that contained detailed cooking advice.
3. Middle Ages to Renaissance
During the Medieval period, the preparation of food was mainly an art practiced in royal courts. The recipes of this time, like those in the Forme of Cury (14th century) or Le Viandier (14th century), were often reserved for the wealthy, with emphasis on complex dishes using spices and fine ingredients.
In the Renaissance, the growing trade routes introduced new ingredients, such as spices from the East, to European kitchens, significantly influencing recipes.
4. Early Modern Era
With the invention of the printing press in the 15th century, cookbooks began to be printed and distributed widely. This era saw the first mass-market recipe collections, making cooking knowledge more accessible.
Hannah Glasse’s The Art of Cookery (1747) is one of the most influential cookbooks of the 18th century, marking a shift in culinary style towards more refined, accessible recipes for the home cook.
By the 19th century, cookbooks had become more specialized, focusing on the growing interest in regional cuisines, and introducing more structured approaches to recipe writing.
5. 20th Century: Technological Advancements
The rise of the printing press, radio, and television helped expand the reach of culinary knowledge. TV cooking shows, such as those hosted by Julia Child and Graham Kerr, brought food recipes into millions of homes.
The development of kitchen appliances like the refrigerator, microwave, and blender changed the way food was prepared, leading to the development of faster, more efficient recipes.
6. The Digital Age: 21st Century
The internet has revolutionized how recipes are shared. Websites, blogs, and apps dedicated to recipes have exploded in popularity, with platforms like FoodNetwork.com, AllRecipes, and Pinterest becoming go-to resources for discovering new recipes.
Social media platforms like Instagram, TikTok, and YouTube have also become key places for food creators to share recipes, cooking tutorials, and food inspiration.
							</p>
							<h4>How can I contact you if I have a complaint and contact response times</h4>
							<p>
								
								You can contact us by submitting a service ticket at: https://www.youtube.com/@Itz_SaaM

									We will respond to your service ticket within 48 hours.

									If we do not receive a response from you within 12 days, we will consider the issue to have been resolved. If you are not satisfied with the outcome of your complaint, you can escalate it by providing additional details in your service ticket.
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div>
				<h3>Cooking Video</h3>
				<a href="videos.php"><img src="images/cooking-video.png" alt="Image"></a>
				<span>Vegetable &amp; Rice Topping</span>
			</div>
			<div>
				<h3>Featured Recipes</h3>
				<ul id="featured">
					<li>
						<a href="recipes.php"><img src="images/sandwich.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Ham Sandwich</a></h2>
							<span>by: Anna</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/biscuit-and-coffee.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Biscuit &amp; Sandwich</a></h2>
							<span>by: Sarah</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/pizza.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Delicious Pizza</a></h2>
							<span>by: Rico</span>
						</div>
					</li>
				</ul>
			</div>
			
			<div>
				<h3>Get Updates</h3>
				<!-- <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
				<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
				<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" id="youtube">Youtube</a>
				<a href="http://freewebsitetemplates.com/go/flickr/" target="_blank" id="flickr">Flickr</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus">Google&#43;</a> -->
				<a href="https://www.youtube.com/@Itz_SaaM" target="_blank" id="youtube">Youtube</a>
				<a href="https://myaccount.google.com/u/1/?hl=en&utm_source=OGB&utm_medium=act&gar=WzI0Nl0/" target="_blank" id="googleplus">Google&#43;</a>
			</div>
			<div style="display:<?php echo $none;?>;">
				<h3>Settings</h3>
				<a href="#"  ><?php echo $logout;?></a>
				
				 
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy;(Sanuj) Copyright 2012. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>
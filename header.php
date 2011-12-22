<div id="header">

<div class="search-bar">
<form action="search.php" method="get" autocomplete="off">
<div>
<input href="search.php" type="text" class="input border-5 glow-shadow-2" name="q" id="search-field" maxlength="200" tabindex="40" alt="Search characters, items and more…" value="Search characters, items and more…" />
<input href="search.php" type="submit" class="search-button" value="" tabindex="41" />
</div>
</form>
</div>

<h1 id="logo"><a href="#"><?php echo $website['title']; ?></a></h1>

<div class="header-plate">
			<ul class="menu" id="menu">

			<?php if(isset($page_cat)){
			
      ?>
			<li class="menu-home"><a href="<?php echo $website['root']; ?>index.php" <?php if($page_cat=='home') echo'class="menu-active"';?>><span><?php echo $home['home']; ?></span></a></li>
			<li class="menu-game"><a href="<?php echo $website['root']; ?>media.php" <?php if($page_cat=='media') echo'class="menu-active"';?>><span><?php echo $Media['Media']; ?></span></a></li>
			<li class="menu-community"><a href="<?php echo $website['root']; ?>community.php" <?php if($page_cat=='community') echo'class="menu-active"';?>><span><?php echo $Community['Community']; ?></span></a></li>
			<li class="menu-media"><a href="<?php echo $website['root']; ?>status.php" <?php if($page_cat=='game') echo'class="menu-active"';?>><span><?php echo $status['status']; ?></span></a></li>
			<li class="menu-forums"><a href="<?php echo $website['root']; ?>forum/" <?php if($page_cat=='forums') echo'class="menu-active"';?>><span><?php echo $Forums['Forums']; ?></span></a></li>
			<li class="menu-services"><a href="<?php echo $website['root']; ?>services.php" <?php if($page_cat=='services') echo'class="menu-active"';?>><span><?php echo $Services['Services']; ?></span></a></li>
			</ul>
			<?php
			if($page_cat == "forums"){ include("../userplate.php"); }else{ include("userplate.php"); }
			}else{ ?>
			<li class="menu-home"><a href="<?php echo $website['root']; ?>index.php"><span><?php echo $home['home']; ?></span></a></li>
			<li class="menu-game"><a href="<?php echo $website['root']; ?>media.php"><span><?php echo $Media['Media']; ?></span></a></li>
			<li class="menu-community"><a href="<?php echo $website['root']; ?>community.php"><span><?php echo $Community['Community']; ?></span></a></li>
			<li class="menu-media"><a href="<?php echo $website['root']; ?>status.php"><span><?php echo $status['status']; ?></span></a></li>
			<li class="menu-forums"><a href="<?php echo $website['root']; ?>forum/"><span><?php echo $Forums['Forums']; ?></span></a></li>
			<li class="menu-services"><a href="<?php echo $website['root']; ?>services.php"><span><?php echo $Services['Services']; ?></span></a></li>
			</ul>
			<?php include("userplate.php"); } ?>
		</div>
	</div>
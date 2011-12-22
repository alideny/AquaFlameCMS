<?php
require_once("configs.php");
$page_cat = "services";
include("functions/armory_items_func.php")
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title><?php echo $website['title']; ?> - Armory</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie.css" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie6.css" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie7.css" /><![endif]-->
<link title="World of Warcraft - News" href="wow/en/feed/news" type="application/atom+xml" rel="alternate"/>
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/view.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/profile-ie.css" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/profile-ie6.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/character/character.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/character/summary-ie.css" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/character/summary-ie6.css" /><![endif]-->
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie.css" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie6.css" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie7.css" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/wow/static';
Core.sharedStaticUrl= '/wow/static/local-common';
Core.baseUrl = '/wow/en';
Core.projectUrl = '/wow';
Core.cdnUrl = 'http://eu.media.blizzard.com';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl= 'https://eu.battle.net/support/';
Core.project = 'wow';
Core.locale = 'en-gb';
Core.language = 'en';
Core.buildRegion = 'eu';
Core.region = 'eu';
Core.shortDateFormat= 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = false;
Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/wow/video-player.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/wow/rating-pegi.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
<style type="text/css">
 #content
 .content-top{background-image:url("wow/static/images/character/summary/backgrounds/race/<?php echo $get["race"] ?>.jpg"); left top no-repeat;}
 .profile-wrapper{background-image:url("wow/static/images/character/summary/backgrounds/class/<?php echo $get["race"] ?>-<?php echo $get["gender"] ?>.jpg");}
 </style>
</head>
<body class="en-gb">
<div id="wrapper">
	<?php include("header.php"); ?>
	<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li>
<a href="index.php" rel="np">
<?php echo $website['title']; ?>
</a>
</li>
<li>
<a href="services.php" rel="np">
Services
</a>
</li>
<li class="last">
<a href="" rel="np">
<?php echo $name = $_GET['name'];?> @ <?php echo $name_realm1['realm']; ?>
</a>
</li>
</ol>
</div>
<div class="content-bot">
	<div id="profile-wrapper" class="profile-wrapper profile-wrapper-advanced profile-wrapper-<?php echo $bg ?>">
	<div class="profile-sidebar-anchor">
	<div class="profile-sidebar-outer">
	<div class="profile-sidebar-inner">
	<div class="profile-sidebar-contents">
	<div class="profile-info-anchor">
	<div class="profile-info">
	<div class="name"><a href="" rel="np"><?php echo $name = $_GET['name'];?></a></div>
	<div class="title-guild">
	<div class="title">&#160;</div>
	</div>

	<span class="clear"><!-- --></span>
	<div class="under-name color-c<?php echo $get["class"] ?>"><!-- class="under-name color-c1 is warrior, to be paladin it has to be class="under-name color-c2, so what we change here is the number of the class c2, c3, c4, ... -->
	<span class="level"><strong><?php echo $get["level"] ?></strong></span> <a href="" class="race"><?php echo $race ?></a> <a id="profile-info-spec" href="" class="spec tip">TALENT</a> <a href="" class="class"><?php echo $class2 ?></a><span class="comma">,</span>
	<span class="realm tip" id="profile-info-realm" data-battlegroup=""><?php echo $name_realm1['realm']; ?></span>
	</div>
	<div class="achievements"><a href="">A.Points</a></div>
	</div>
	</div>
	<ul class="profile-sidebar-menu" id="profile-sidebar-menu">
	<li class=" active">
	<a href="" class="" rel="np">
	<span class="arrow"><span class="icon">Summary</span></span></a>
	</li>
	<!--<li class="">
	<a href="" class="" rel="np">
	<span class="arrow"><span class="icon">Talents &amp; Glyphs</span></span></a>
	</li>
	<li class=" disabled">
	<a href="javascript:;" class=" has-submenu vault" rel="np">
	<span class="arrow"><span class="icon">Auctions</span></span></a>
	</li>
	<li class=" disabled">
	<a href="javascript:;" class=" vault" rel="np">
	<span class="arrow"><span class="icon">Events</span></span></a>
	</li>
	<li class="">
	<a href="" class=" has-submenu" rel="np">
	<span class="arrow"><span class="icon">Achievements</span></span></a>
	</li>
	<li class="">
	<a href="" class="" rel="np">
	<span class="arrow"><span class="icon">Companions &amp; Mounts</span></span></a>
	</li>
	<li class="">
	<a href="" class=" has-submenu" rel="np">
	<span class="arrow"><span class="icon">Professions</span></span></a>
	</li>-->
	<li class="">
	<a href="reputation.php" class="" rel="np">
	<span class="arrow"><span class="icon">Reputation</span></span></a>
	</li><!--
	<li class="">
	<a href="" class="" rel="np">
	<span class="arrow"><span class="icon">PvP</span></span></a>
	</li>
	<li class="">
	<a href="" class="" rel="np">
	<span class="arrow"><span class="icon">Activity Feed</span></span></a>
	</li>-->
	</ul>
	<div class="summary-sidebar-links">
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="profile-contents">
	<div class="summary-top">
	<div class="summary-top-right">
	<ul class="profile-view-options" id="profile-view-options-summary">
	<li class="current">
	<a href="" rel="np" class="advanced">Advanced</a></li>
	<li>
	</ul>
	<div class="summary-averageilvl">
	<div class="rest">Average item level<br/>(<span class="equipped">20</span> Equipped)
	</div>
	<div id="summary-averageilvl-best" class="best tip" data-id="averageilvl">20</div>
	</div>
	</div>
	<br>
	<div class="summary-top-inventory">
	<div id="summary-inventory" class="summary-inventory summary-inventory-advanced">
	<div data-id="0" data-type="1" class="slot slot-1" style=" left: 0px; top: 0px;">
	<div class="slot-inner">
	<div class="slot-contents">
	<a href="javascript:;" class="empty"><span class="frame"></span></a>
	</div>
	</div>
	</div>
	<div data-id="1" data-type="2" class="slot slot-2 item-quality-3" style=" left: 0px; top: 58px;">
	<div class="slot-inner">
	<div class="slot-contents">
	<a href="javascript:;" class="empty"><span class="frame"></span></a>
	<div class="details">
	<span class="name-shadow"></span>
	<span class="name color-q3">
	<!--<a href="http://www.wowhead.com/item=51996" data-item="r=-86">Tumultuous Necklace of the Soldier</a>
	</span>
	<span class="level">35</span>-->
	</div>
	</div>
	</div>
	</div>
	<div data-id="2" data-type="3" class="slot slot-3 item-quality-2" style=" left: 0px; top: 116px;">
	<div class="slot-inner">
	
	<div class="slot-contents">
	<a href="javascript:;" class="empty"><span class="frame"></span></a>
	<!--<a href="http://www.wowhead.com/item=4835" class="item" data-item="d=59"><img src="http://eu.media.blizzard.com/wow/icons/56/inv_shoulder_05.jpg" alt="" /><span class="frame"></span></a>-->
	<div class="details">
	<!--<span class="name-shadow">Elite Shoulders</span>
	<span class="name color-q2">
	<a href="http://www.wowhead.com/item=4835" data-item="d=59">Elite Shoulders</a><a href="javascript:;" class="audit-warning"></a>
	</span>
	<span class="level">30</span>-->
	</div>
	</div>
	</div>
	</div>
	<div data-id="14" data-type="16" class="slot slot-16 item-quality-3" style=" left: 0px; top: 174px;">
	<div class="slot-inner">
	<div class="slot-contents">
	<a href="javascript:;" class="empty"><span class="frame"></span></a>
	<div class="details">
	<!--<span class="name-shadow">Tumultuous Cloak of the Sorcerer</span>-->
	<!--<span class="name color-q3">
	<a href="http://www.wowhead.com/item=51994" data-item="e=1889&amp;r=-85&amp;s=861470728">Tumultuous Cloak of the Sorcerer</a>
	</span>
	<span class="enchant-shadow">
	Superior Defense
	</span>
	<div class="enchant color-q2">
	<a href="http://www.wowhead.com/item=16224">Superior Defense</a>
								</div>
							<span class="level">25</span>-->
						</div>
			</div>
		</div>
	</div>


	 	




	<div data-id="4" data-type="5" class="slot slot-5 item-quality-2" style=" left: 0px; top: 232px;">
		<div class="slot-inner">
			<div class="slot-contents">
	<a href="javascript:;" class="empty"><span class="frame"></span></a>
	<div class="details">
							<!--<span class="name-shadow">Husk of Naraxis</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=4448" data-item="e=17&amp;d=94">Husk of Naraxis</a>
							</span>
								<span class="enchant-shadow">
									Heavy Armor Kit
								</span>
								<div class="enchant color-q2">
<a href="http://www.wowhead.com/item=4265">Heavy Armor Kit</a>
								</div>
							<span class="level">27</span>-->
						</div>
			</div>
		</div>
	</div>


	 	




	<div data-id="3" data-type="4" class="slot slot-4 item-quality-1" style=" left: 0px; top: 290px;">
		<div class="slot-inner">
			<div class="slot-contents">
	<a href="javascript:;" class="empty"><span class="frame"></span></a>
	<div class="details">
							<!--<span class="name-shadow">Squire&#39;s Shirt</span>
							<span class="name color-q1">
								
								<a href="http://www.wowhead.com/item=23476" data-item="">Squire&#39;s Shirt</a>
							</span>
							<span class="level">1</span>-->
						</div>
			</div>
		</div>
	</div>


	 	




	<div data-id="18" data-type="19" class="slot slot-19 item-quality-1" style=" left: 0px; top: 348px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Tabard of the Hand</span>
							<span class="name color-q1">
								
								<a href="http://www.wowhead.com/item=24344" data-item="s=662226304">Tabard of the Hand</a>
							</span>
							<span class="level">20</span>-->
						</div>
			</div>
		</div>
	</div>


	 	




	<div data-id="8" data-type="9" class="slot slot-9 item-quality-2" style=" left: 0px; top: 406px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Fortified Bracers of the Bear</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=9811" data-item="e=856&amp;r=1184&amp;s=1458545920&amp;d=30">Fortified Bracers of the Bear</a>
							</span>
								<span class="enchant-shadow">
									Strength
								</span>
								<div class="enchant color-q2">
<span class="tip" data-spell="13661">Strength</span>
								</div>
							<span class="level">24</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="9" data-type="10" class="slot slot-10 slot-align-right item-quality-2" style=" top: 0px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Battleforge Gauntlets of the Bear</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=6595" data-item="e=17&amp;r=1191&amp;s=1597971648&amp;d=35">Battleforge Gauntlets of the Bear</a>
							</span>
								<span class="enchant-shadow">
									Heavy Armor Kit
								</span>
								<div class="enchant color-q2">
<a href="http://www.wowhead.com/item=4265">Heavy Armor Kit</a>
								</div>
							<span class="level">28</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="5" data-type="6" class="slot slot-6 slot-align-right item-quality-2" style=" top: 58px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Lambent Scale Girdle</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=4707" data-item="">Lambent Scale Girdle</a>
							</span>
							<span class="level">26</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="6" data-type="7" class="slot slot-7 slot-align-right item-quality-2" style=" top: 116px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Green Iron Leggings</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=3842" data-item="e=17&amp;s=728222272&amp;d=74">Green Iron Leggings</a>
							</span>
								<span class="enchant-shadow">
									Heavy Armor Kit
								</span>
								<div class="enchant color-q2">
<a href="http://www.wowhead.com/item=4265">Heavy Armor Kit</a>
								</div>
							<span class="level">31</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="7" data-type="8" class="slot slot-8 slot-align-right item-quality-2" style=" top: 174px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Silvered Bronze Boots</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=3482" data-item="e=17&amp;s=1063978688&amp;d=43">Silvered Bronze Boots</a>
							</span>
								<span class="enchant-shadow">
									Heavy Armor Kit
								</span>
								<div class="enchant color-q2">
<a href="http://www.wowhead.com/item=4265">Heavy Armor Kit</a>
								</div>
							<span class="level">26</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="10" data-type="11" class="slot slot-11 slot-align-right item-quality-2" style=" top: 232px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Signet Ring of the Hand</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=24349" data-item="s=683553728">Signet Ring of the Hand</a>
							</span>
							<span class="level">20</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="11" data-type="11" class="slot slot-11 slot-align-right item-quality-2" style=" top: 290px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Clay Ring of the Bear</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=11993" data-item="r=1183">Clay Ring of the Bear</a>
							</span>
							<span class="level">22</span>-->
						</div>
			</div>
		</div>
	</div>


	 
	




	<div data-id="12" data-type="12" class="slot slot-12 slot-align-right" style=" top: 348px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
			</div>
		</div>
	</div>


	 
	




	<div data-id="13" data-type="12" class="slot slot-12 slot-align-right" style=" top: 406px; right: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
			</div>
		</div>
	</div>


	 




	<div data-id="15" data-type="21" class="slot slot-21 slot-align-right item-quality-3" style=" left: -6px; bottom: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Diamond Hammer</span>
							<span class="name color-q3">
								<a href="javascript:;" class="audit-warning"></a>
								<a href="http://www.wowhead.com/item=2194" data-item="s=723013552">Diamond Hammer</a>
							</span>
							<span class="level">25</span>-->
						</div>
			</div>
		</div>
	</div>


	 




	<div data-id="16" data-type="22" class="slot slot-22 item-quality-2" style=" left: 271px; bottom: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
					<div class="details">
							<!--<span class="name-shadow">Glimmering Shield</span>
							<span class="name color-q2">
								
								<a href="http://www.wowhead.com/item=6400" data-item="e=929&amp;s=1509242176&amp;d=84">Glimmering Shield</a>
							</span>
								<span class="enchant-shadow">
									Greater Stamina
								</span>
								<div class="enchant color-q2">
<a href="http://www.wowhead.com/item=16217">Greater Stamina</a>
								</div>
							<span class="level">31</span>-->
						</div>
			</div>
		</div>
	</div>


	 




	<div data-id="17" data-type="28" class="slot slot-28" style=" left: 548px; bottom: 0px;">
		<div class="slot-inner">
			<div class="slot-contents">
					<a href="javascript:;" class="empty"><span class="frame"></span></a>
			</div>
		</div>
	</div>
	</div>

        <script type="text/javascript">
        //<![CDATA[
		$(document).ready(function() {
			var summaryInventory = new Summary.Inventory({ view: "advanced" }, {
			
			1: {
				name: "Tumultuous Necklace of the Soldier",
				quality: 3,
				icon: "inv_jewelry_necklace_16"
			}
			,
			2: {
				name: "Elite Shoulders",
				quality: 2,
				icon: "inv_shoulder_05"
			}
			,
			14: {
				name: "Tumultuous Cloak of the Sorcerer",
				quality: 3,
				icon: "inv_misc_cape_03"
			}
			,
			4: {
				name: "Husk of Naraxis",
				quality: 2,
				icon: "inv_misc_monsterspidercarapace_01"
			}
			,
			3: {
				name: "Squire\'s Shirt",
				quality: 1,
				icon: "inv_shirt_16"
			}
			,
			18: {
				name: "Tabard of the Hand",
				quality: 1,
				icon: "inv_shirt_12"
			}
			,
			8: {
				name: "Fortified Bracers of the Bear",
				quality: 2,
				icon: "inv_bracer_03"
			}
			,
			9: {
				name: "Battleforge Gauntlets of the Bear",
				quality: 2,
				icon: "inv_gauntlets_26"
			}
			,
			5: {
				name: "Lambent Scale Girdle",
				quality: 2,
				icon: "inv_belt_04"
			}
			,
			6: {
				name: "Green Iron Leggings",
				quality: 2,
				icon: "inv_pants_05"
			}
			,
			7: {
				name: "Silvered Bronze Boots",
				quality: 2,
				icon: "inv_boots_01"
			}
			,
			10: {
				name: "Signet Ring of the Hand",
				quality: 2,
				icon: "inv_jewelry_ring_18"
			}
			,
			11: {
				name: "Clay Ring of the Bear",
				quality: 2,
				icon: "inv_jewelry_ring_14"
			}
			,
			15: {
				name: "Diamond Hammer",
				quality: 3,
				icon: "inv_hammer_06"
			}
			,
			16: {
				name: "Glimmering Shield",
				quality: 2,
				icon: "inv_shield_05"
			}
			});
		});
        //]]>
        </script>

				</div>

		</div>

			<div class="summary-middle">
				<div class="summary-middle-inner">

					<div class="summary-middle-right">
						<div class="summary-audit" id="summary-audit">
							<div class="category-right"><span class="tip" id="summary-audit-whatisthis">What is this?</span></div>
								<h3 class="category ">Character Audit</h3>

							<div class="profile-box-simple">

	<ul class="summary-audit-list">
	<li>
				<span class="number">1</span> empty glyph slot
	</li>
	<li data-slots="2,15">
				<span class="tip">
					<span class="number">2</span> unenchanted items
				</span>
	</li>
	</ul>

        <script type="text/javascript">
        //<![CDATA[
		$(document).ready(function() {
			new Summary.Audit({
	"unenchantedItems": {
			2: 1,
			15: 1
	},
				"foo": true
			});
		});
        //]]>
        </script>
							</div>
						</div>
						<div id="summary-reforging" class="summary-reforging">
								<h3 class="category ">Reforging</h3>

							<div class="profile-box-simple">

		No items have been reforged.
							</div>
						</div>
					</div>
				
					<div class="summary-middle-left">
						<div class="summary-bonus-tally">
								<h3 class="category ">Enchant/Gem Bonuses</h3>

							<div class="profile-box-simple">


		<div class="numerical">
			<ul>
					<li>
						<span class="value">+0</span> Armour
					</li>
					<li>
						<span class="value">+0</span> Stamina
					</li>
					<li>
						<span class="value">+0</span> Strength
					</li>
			</ul>
		</div>
	
		
							</div>
						</div>

						<div class="summary-gems">
								<h3 class="category ">Gems</h3>

							<div class="profile-box-simple">

		This character doesn't use any gems.
							</div>
						</div>

	<span class="clear"><!-- --></span>
					</div>
	<span class="clear"><!-- --></span>
				</div>
			</div>

			<div class="summary-bottom">

				<div class="profile-recentactivity">
	<h3 class="category ">						Recent Activity
</h3>
					<div class="profile-box-simple">
	<ul class="activity-feed">



	<li class="ach ">
	<dl>
		<dd>

		<a href="achievement#97:14777:a627" data-achievement="627">




		<!--<span  class="icon-frame frame-18 " style='background-image: url("http://eu.media.blizzard.com/wow/icons/18/achievement_zone_dunmorogh.jpg");'>
		</span>
		</a>

	Earned the achievement <a href="achievement#97:14777:a627" data-achievement="627">Explore Dun Morogh</a> for 10 points.
</dd>
		<dt>17/04/2011</dt>
	</dl>
	</li>



	<li class="ach ">
	<dl>
		<dd>

		<a href="achievement#97:14778:a736" data-achievement="736">




		<span  class="icon-frame frame-18 " style='background-image: url("http://eu.media.blizzard.com/wow/icons/18/achievement_zone_mulgore_01.jpg");'>
		</span>
		</a>

	Earned the achievement <a href="achievement#97:14778:a736" data-achievement="736">Explore Mulgore</a> for 10 points.
</dd>
		<dt>17/04/2011</dt>
	</dl>
	</li>



	<li class="ach ">
	<dl>
		<dd>

		<a href="achievement#97:14778:a750" data-achievement="750">




		<span  class="icon-frame frame-18 " style='background-image: url("http://eu.media.blizzard.com/wow/icons/18/achievement_zone_barrens_01.jpg");'>
		</span>
		</a>

	Earned the achievement <a href="achievement#97:14778:a750" data-achievement="750">Explore Northern Barrens</a> for 10 points.
</dd>
		<dt>17/04/2011</dt>
	</dl>
	</li>



	<li class="ach ">
	<dl>
		<dd>

		<a href="achievement#97:14777:a768" data-achievement="768">




		<span  class="icon-frame frame-18 " style='background-image: url("http://eu.media.blizzard.com/wow/icons/18/achievement_zone_tirisfalglades_01.jpg");'>
		</span>
		</a>

	Earned the achievement <a href="achievement#97:14777:a768" data-achievement="768">Explore Tirisfal Glades</a> for 10 points.
</dd>
		<dt>17/04/2011</dt>
	</dl>
	</li>



	<li class="ach ">
	<dl>
		<dd>

		<a href="achievement#97:14777:a769" data-achievement="769">




		<span  class="icon-frame frame-18 " style='background-image: url("http://eu.media.blizzard.com/wow/icons/18/achievement_zone_silverpine_01.jpg");'>
		</span>
		</a>

	Earned the achievement <a href="achievement#97:14777:a769" data-achievement="769">Explore Silverpine Forest</a> for 10 points.
</dd>
		<dt>17/04/2011</dt>-->
	</dl>
	</li>
	</ul>
	<div class="profile-linktomore">
		<a href="" rel="np">View earlier activity</a>
	</div>

	<span class="clear"><!-- --></span>
					</div>

				</div>

				<div class="summary-bottom-left">

					<div class="summary-talents" id="summary-talents">
	<ul>

	<li class="summary-talents-0">
		<a href=""><span class="inner">
			<span class="icon"><img src="http://eu.media.blizzard.com/wow/icons/36/inv_misc_questionmark.jpg" alt="" /><span class="frame"></span></span>
			<span class="name-build">
				<span class="name">Talents</span>
				<span class="build">0<ins>/</ins>0<ins>/</ins>0</span>
			</span>
		</span></a>
	</li>

	<li class="summary-talents-1">
		<a href="" class="active"><span class="inner">
				<span class="checkmark"></span>
			<span class="icon"><img src="wow/static/images/icons/talents/<?php echo $talenimage ?>.jpg" alt="" /><span class="frame"></span></span>
				<span class="roles">
							<span class="icon-dps"></span>
				</span>
			<span class="name-build">
				<span class="name"><?php echo $talename ?></span>
				<span class="build">0<ins>/</ins>0<ins>/</ins>0</span>
			</span>
		</span></a>
	</li>
	</ul>
					</div>

					<div class="summary-health-resource">
	<ul>
		<li class="health" id="summary-health" data-id="health"><span class="name">Health</span><span class="value"><?php echo $get["health"] ?></span></li>
		<li class="resource-<?php echo $power ?>" id="summary-power" data-id="power-<?php echo $power ?>"><span class="name"><?php echo $powname ?></span><span class="value">
		<?php 
		if($cclass == 2 || $cclass == 7 || $cclass == 8 || $cclass == 9 || $cclass == 11 || $cclass == 5)
		{
		echo $get["power1"];
		}
		elseif($cclass == 3)
		{
		echo '100';
		}
		elseif($cclass == 1)
		{
		echo '100';
		}
		elseif($cclass == 4)
		{
		echo '100';
		}
		elseif($cclass == 7)
		{
		echo '100';
		}
		elseif($cclass == 6)
		{
		echo $get["power4"];
		}
		 ?></span></li>
	</ul>
					</div>

					<div class="summary-stats-profs-bgs">


	<div class="summary-stats" id="summary-stats">
			<div id="summary-stats-advanced" class="summary-stats-advanced">
				<div class="summary-stats-advanced-base">
	<div class="summary-stats-column">
		<h4>Base</h4>
		<ul>
	<li data-id="strength" class="">
		<span class="name">Strength</span>
		<span class="value color-q2"><?php echo $gets["strength"] ?></span>
	<span class="clear"><!-- --></span>
	</li>
	<li data-id="intellect" class="">
		<span class="name">Intellect</span>
		<span class="value color-q10"><?php echo $gets["intellect"] ?></span>
	<span class="clear"><!-- --></span>
	</li>
	<li data-id="stamina" class="">
		<span class="name">Stamina</span>
		<span class="value color-q2"><?php echo $gets["stamina"] ?></span>
	<span class="clear"><!-- --></span>
	</li>
	<li data-id="mastery" class="">
		<span class="name">Mastery</span>
		<span class="value">0.00</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>
				</div>
				<div class="summary-stats-advanced-role">
	<div class="summary-stats-column">
		<h4>Other</h4>
		<ul>

	 




	<li data-id="meleeattackpower" class="">
		<span class="name">Attack Power</span>
		<span class="value color-q2">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 

	

	<li data-id="parry" class="">
		<span class="name">Parry</span>
		<span class="value"><?php echo $gets["parryPct"] ?>%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="meleehaste" class="">
		<span class="name">Haste</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="meleehit" class="">
		<span class="name">Hit</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="meleecrit" class="">
		<span class="name">Crit</span>
		<span class="value"><?php echo $gets["critPct"] ?>%</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>
				</div>
				<div class="summary-stats-end"></div>
			</div>

		<div id="summary-stats-simple" class="summary-stats-simple" style=" display: none">
			<div class="summary-stats-simple-base">


	<div class="summary-stats-column">
		<h4>Base</h4>
		<ul>

	 





	<li data-id="strength" class="">
		<span class="name">Strength</span>
		<span class="value color-q2"><?php echo $gets["strength"] ?></span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="agility" class="">
		<span class="name">Agility</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="stamina" class="">
		<span class="name">Stamina</span>
		<span class="value color-q2">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="intellect" class="">
		<span class="name">Intellect</span>
		<span class="value color-q2">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="spirit" class="">
		<span class="name">Spirit</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="mastery" class="">
		<span class="name">Mastery</span>
		<span class="value">0.00</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>
			</div>
			<div class="summary-stats-simple-other">
				<a id="summary-stats-simple-arrow" class="summary-stats-simple-arrow" href="javascript:;"></a>


	<div class="summary-stats-column">
		<h4>Melee</h4>
		<ul>

	 

	

	<li data-id="meleedamage" class="">
		<span class="name">Damage</span>
		<span class="value">0–0</span>
	<span class="clear"><!-- --></span>
	</li>

	 

	

	<li data-id="meleedps" class="">
		<span class="name">DPS</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 




	<li data-id="meleeattackpower" class="">
		<span class="name">Attack Power</span>
		<span class="value color-q2">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 

	

	<li data-id="meleespeed" class="">
		<span class="name">Speed</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="meleehaste" class="">
		<span class="name">Haste</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="meleehit" class="">
		<span class="name">Hit</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="meleecrit" class="">
		<span class="name">Crit</span>
		<span class="value"><?php echo $get["critPct"] ?>%</span>
	<span class="clear"><!-- --></span>
	</li>

	 

	

	<li data-id="expertise" class="">
		<span class="name">Expertise</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>


	<div class="summary-stats-column" style="display: none">
		<h4>Ranged</h4>
		<ul>

	 

	

	<li data-id="rangeddamage" class=" no-tooltip">
		<span class="name">Damage</span>
		<span class="value color-q0">--</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="rangeddps" class=" no-tooltip">
		<span class="name">DPS</span>
		<span class="value color-q0">--</span>
	<span class="clear"><!-- --></span>
	</li>

	 




	<li data-id="rangedattackpower" class="">
		<span class="name">Attack Power</span>
		<span class="value color-q2">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="rangedspeed" class=" no-tooltip">
		<span class="name">Speed</span>
		<span class="value color-q0">--</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="rangedhaste" class="">
		<span class="name">Haste</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="rangedhit" class="">
		<span class="name">Hit</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="rangedcrit" class="">
		<span class="name">Crit</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>


	<div class="summary-stats-column" style="display: none">
		<h4>Spell</h4>
		<ul>

	 





	<li data-id="spellpower" class="">
		<span class="name">Spell Power</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="spellhaste" class="">
		<span class="name">Haste</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="spellhit" class="">
		<span class="name">Hit</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="spellcrit" class="">
		<span class="name">Crit</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="spellpenetration" class="">
		<span class="name">Penetration</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="manaregen" class="">
		<span class="name">Mana Regen</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="combatregen" class="">
		<span class="name">Combat Regen</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>


	<div class="summary-stats-column" style="display: none">
		<h4>Defense</h4>
		<ul>

	 





	<li data-id="armor" class="">
		<span class="name">Armour</span>
		<span class="value color-q2">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="dodge" class="">
		<span class="name">Dodge</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="parry" class="">
		<span class="name">Parry</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="block" class="">
		<span class="name">Block</span>
		<span class="value">0%</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="resilience" class="">
		<span class="name">Resilience</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>


	<div class="summary-stats-column" style="display: none">
		<h4>Resistance</h4>
		<ul>

	 





	<li data-id="arcaneres" class=" has-icon">
			<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/resist_arcane.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="name">Arcane</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="fireres" class=" has-icon">
			<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/resist_fire.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="name">Fire</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="frostres" class=" has-icon">
			<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/resist_frost.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="name">Frost</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="natureres" class=" has-icon">
			<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/resist_nature.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="name">Nature</span>
		<span class="value">0</span>
	<span class="clear"><!-- --></span>
	</li>

	 





	<li data-id="shadowres" class=" has-icon">
			<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/resist_shadow.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="name">Shadow</span>
		<span class="value">26</span>
	<span class="clear"><!-- --></span>
	</li>
		</ul>
	</div>
			</div>
			<div class="summary-stats-end"></div>
		</div>

			<a href="javascript:;" id="summary-stats-toggler" class="summary-stats-toggler"><span class="inner"><span class="arrow">Show all stats</span></span></a>
	</div>

        <script type="text/javascript">
        //<![CDATA[
		$(document).ready(function() {
			new Summary.Stats({

			"health": <?php echo $get["health"] ?>,
			"power": <?php echo $get["power1"] ?>,
			"powerTypeId": 0,
			"hasOffhandWeapon": false,
			"masteryName": "Hand of Light",
			"masteryDescription": "Your Templar\'s Verdict, Crusader Strike, and Divine Storm deal 17% additional damage as Holy damage.  Each point of Mastery increases the damage by an additional 2.1%.",
			"averageItemLevelEquipped": 20,
			"averageItemLevelBest": 20,
			"spellHitRating": 0,
			"agiBase": 239,
			"energy": <?php echo $get["power4"] ?>,
			"expertiseOffPercent": 0,
			"critPercent": <?php echo $gets["critPct"] ?>,
			"rangeCritPercent": <?php echo $gets["rangedCritPct"] ?>,
			"dodgeRatingPercent": <?php echo $gets["dodgePct"] ?>,
			"parry": <?php echo $gets["parryPct"] ?>,
			"parryRating": 0,
			"rangeBonusWeaponRating": 0,
			"atkPowerBase": 270,
			"runicPower": <?php echo $get["power4"] ?>,
			"rangeHitPercent": 1,
			"bonusOffWeaponRating": 0,
			"resilience_damage": 0,
			"mana": <?php echo $get["power1"] ?>,
			"masteryRatingBonus": 0,
			"dmgMainSpeed": 2.4709999561309814,
			"rangeAtkPowerBonus": 4,
			"expertiseMain": 0,
			"shadowDamage": 113,
			"rangeHitRating": 0,
			"spellDmg_petSpellDmg": -1,
			"shadowResist": 26,
			"resistNature_pet": -1,
			"armorPercent": 43.17439651489258,
			"spellHitRatingPercent": 0,
			"manaRegenPerFive": 42,
			"dmgRangeDps": -1,
			"frostCrit": 6.986073017120361,
			"armorPenetrationPercent": 0,
			"resistShadow_pet": -1,
			"focus": <?php echo $get["power3"] ?>,
			"rangeHitRatingPercent": 0,
			"natureResist": 0,
			"intTotal": <?php echo $gets["maxpower1"] ?>,
			"expertiseRating": 0,
			"bonusOffMainWeaponSkill": 0,
			"frostResist": 0,
			"int_mp": <?php echo $gets["maxpower1"] ?>,
			"arcaneCrit": 6.986073017120361,
			"holyCrit": 6.986073017120361,
			"bonusMainWeaponSkill": 0,
			"natureCrit": 6.986073017120361,
			"sprBase": 41,
			"agi_ap": -1,
			"dodge": 5,
			"atkPowerBonus": 4,
			"spr_regen": 43,
			"expertiseRatingPercent": 0,
			"mastery": 0,
			"health": <?php echo $get["health"] ?>,
			"manaRegenCombat": 27,
			"sprTotal": 41,
			"rangeCritRatingPercent": 2.0634920597076416,
			"dodgeRating": 0,
			"bonusMainWeaponRating": 0,
			"intBase": 231,
			"strBase": 234,
			"critRatingPercent": <?php echo $gets["critPct"] ?>,
			"rangeHasteRatingPercent": 1.1555559635162354,
			"rangeBonusWeaponSkill": 0,
			"dmgRangeMin": -1,
			"rangeHasteRating": 4,
			"dmgOffSpeed": 1.9769999980926514,
			"resistFire_pet": -1,
			"defense": 0,
			"strTotal": <?php echo $gets["strength"] ?>,
			"fireCrit": 6.986073017120361,
			"natureDamage": 113,
			"dmgMainMax": 102,
			"dmgMainMin": 77,
			"resilience_crit": 0,
			"holyResist": 0,
			"rangeAtkPowerBase": 0,
			"dmgOffMin": 0,
			"spellHitPercent": 9,
			"spellDmg_petAp": -1,
			"agi_armor": 64,
			"resistHoly_pet": -1,
			"hitRating": 0,
			"str_ap": 192,
			"block_damage": 30,
			"dmgOffMax": 0,
			"masteryRating": 0,
			"spellCritRating": 10,
			"resilience": 0,
			"expertiseOff": 0,
			"defensePercent": 0,
			"blockRating": 0,
			"armor_petArmor": -1,
			"block": 5,
			"dmgOffDps": 0,
			"dmgRangeMax": -1,
			"power": <?php echo $get["power1"] ?>,
			"resistArcane_pet": -1,
			"dmgMainDps": 36.281612396240234,
			"healing": 113,
			"str_block": 53,
			"rangeAtkPowerLoss": 0,
			"rangeCritRating": 10,
			"fireDamage": 113,
			"shadowCrit": 6.986073017120361,
			"hasteRating": 4,
			"arcaneDamage": 113,
			"rangeAtkPowerTotal": 4,
			"expertiseMainPercent": 0,
			"atkPowerTotal": 274,
			"agiTotal": 32,
			"ap_dps": 19.571428298950195,
			"atkPowerLoss": 0,
			"staBase": 218,
			"fireResist": 0,
			"blockRatingPercent": 0,
			"hitRatingPercent": 0,
			"hitPercent": 1,
			"int_crit": 0,
			"rap_petSpellDmg": -1,
			"arcaneResist": 0,
			"resistFrost_pet": -1,
			"dmgRangeSpeed": -1,
			"hasteRatingPercent": 1.1555559635162354,
			"frostDamage": 113,
			"sta_hp": <?php echo $gets["maxhealth"] ?>,
			"agi_crit": 4.045567989349365,
			"rage": <?php echo $get["power4"] ?>,
			"armorTotal": 1983,
			"sta_petSta": -1,
			"spellCritRatingPercent": 2.0634920597076416,
			"armorBase": 1817,
			"spellCritPercent": 6.986073017120361,
			"critRating": 00,
			"armorPenetration": 0,
			"spellPenetration": 0,
			"parryRatingPercent": <?php echo $gets["parryPct"] ?>,
			"spellDamage": 113,
			"staTotal": <?php echo $gets["stamina"] ?>,
			"rap_petAp": -1,
			"holyDamage": 113,
	"foo": true
});
		});
        //]]>
        </script>


						<div class="summary-stats-bottom">

							<div class="summary-battlegrounds">
	<ul>
		<li class="rating"><span class="name">Total Honor</span><span class="value"><?php echo $honor ?></span><span class="clear"><!-- --></span>
</li>
		<li class="kills"><span class="name">Total Conquest</span><span class="value"><?php echo $conq ?></span><span class="clear"><!-- --></span>
</li>
	</ul>
							</div>

							<div class="summary-professions">
	<ul>
				<li>

	    
	

	<div class="profile-progress border-3" >
		<div class="bar border-3 hover" style="width: 1%"></div>
			<div class="bar-contents">						<a class="profession-details" href="">
							<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/trade_herbalism.jpg" alt="" width="12" height="12" />
		</span>
</span>
							<span class="name">Herbalism</span>
							<span class="value">0</span>
							</a>
</div>
	</div>
				</li>
				<li>

	    
	

	<div class="profile-progress border-3" >
		<div class="bar border-3 hover" style="width: 1%"></div>
			<div class="bar-contents">						<a class="profession-details" href="">
							<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="http://eu.media.blizzard.com/wow/icons/18/inv_pick_02.jpg" alt="" width="12" height="12" />
		</span>
</span>
							<span class="name">Mining</span>
							<span class="value">0</span>
							</a>
</div>
	</div>
				</li>
	</ul>
							</div>

	<span class="clear"><!-- --></span>

						</div>
					</div>

				</div>

	<span class="clear"><!-- --></span>


	<span class="clear"><!-- --></span>

				<div class="summary-lastupdate">
					Last updated on 09/08/2011
				</div>

			</div>


		</div>

	<span class="clear"><!-- --></span>
	</div>

        <script type="text/javascript">
        //<![CDATA[
		$(function() {
			Profile.url = '/wow/en/character/moonglade/Me/summary';
		});

			var MsgProfile = {
				tooltip: {
					feature: {
						notYetAvailable: "This feature is not yet available."
					},
					vault: {
						character: "This section is only accessible if you are logged in as this character.",
						guild: "This section is only accessible if you are logged in as a character belonging to this guild."
					}
				}
			};
        //]]>
        </script>

        <script type="text/javascript">
        //<![CDATA[
		var MsgSummary = {
			inventory: {
				slots: {
					1: "Head",
					2: "Neck",
					3: "Shoulder",
					4: "Shirt",
					5: "Chest",
					6: "Waist",
					7: "Legs",
					8: "Feet",
					9: "Wrist",
					10: "Hands",
					11: "Finger",
					12: "Trinket",
					15: "Ranged",
					16: "Back",
					19: "Tabard",
					21: "Main Hand",
					22: "Off Hand",
					28: "Relic",
					empty: "Empty slot"
				}
			},
			audit: {
				whatIsThis: "This feature makes recommendations on how this character can be improved. The following is verified:<br /\><br /\>- Empty glyph slots<br /\>- Unspent talent points<br /\>- Unenchanted items<br /\>- Empty sockets<br /\>- Non-optimal armour<br /\>- Missing belt buckle<br /\>- Unused profession perks",
				missing: "Missing {0}",
				enchants: {
					tooltip: "Unenchanted"
				},
				sockets: {
					singular: "empty socket",
					plural: "empty sockets"
				},
				armor: {
					tooltip: "Non-{0}",
					1: "Cloth",
					2: "Leather",
					3: "Mail",
					4: "Plate"
				},
				lowLevel: {
					tooltip: "Low level"	
				},
				blacksmithing: {
					name: "Blacksmithing",
					tooltip: "Missing socket"
				},
				enchanting: {
					name: "Enchanting",
					tooltip: "Unenchanted"
				},
				engineering: {
					name: "Engineering",
					tooltip: "Missing tinker"
				},
				inscription: {
					name: "Inscription",
					tooltip: "Missing enchant"
				},
				leatherworking: {
					name: "Leatherworking",
					tooltip: "Missing enchant"
				}
			},
			talents: {
				specTooltip: {
					title: "Talent Specializations",
					primary: "Primary:",
					secondary: "Secondary:",
					active: "Active"
				}
			},
			stats: {
				toggle: {
					all: "Show all stats",
					core: "Show core stats only"
				},
				increases: {
					attackPower: "Increases Attack Power by {0}.",
					critChance: "Increases Crit chance by {0}%.",
					spellCritChance: "Increases Spell Crit chance by {0}%.",
					health: "Increases Health by {0}.",
					mana: "Increases Mana by {0}.",
					manaRegen: "Increases mana regeneration by {0} every 5 seconds while not casting.",
					meleeDps: "Increases damage with melee weapons by {0} damage per second.",
					rangedDps: "Increases damage with ranged weapons by {0} damage per second.",
					petArmor: "Increases your pet’s Armour by {0}.",
					petAttackPower: "Increases your pet’s Attack Power by {0}.",
					petSpellDamage: "Increases your pet’s Spell Damage by {0}.",
					petAttackPowerSpellDamage: "Increases your pet’s Attack Power by {0} and Spell Damage by {1}."
				},
				decreases: {
					damageTaken: "Reduces Physical Damage taken by {0}%.",
					enemyRes: "Reduces enemy resistances by {0}.",
					dodgeParry: "Reduces chance to be dodged or parried by {0}%."
				},
				noBenefits: "Provides no benefit for your class.",
				beforeReturns: "(Before diminishing returns)",
				damage: {
					speed: "Attack speed (seconds):",
					damage: "Damage:",
					dps: "Damage per second:"
				},
				averageItemLevel: {
					title: "Item Level {0}",
					description: "The average item level of your best equipment. Increasing this will allow you to enter more difficult dungeons using Dungeon Finder."
				},
				health: {
					title: "Health {0}",
					description: "Your maximum amount of health. If your health reaches zero, you will die."
				},
				mana: {
					title: "Mana {0}",
					description: "Your maximum mana. Mana allows you to cast spells."
				},
				rage: {
					title: "Rage 100",
					description: "Your maximum rage. Rage is consumed when using abilities and is restored by attacking enemies or being damaged in combat."
				},
				focus: {
					title: "Focus 100",
					description: "Your maximum focus. Focus is consumed when using abilities and is restored automatically over time."
				},
				energy: {
					title: "Energy 100",
					description: "Your maximum energy. Energy is consumed when using abilities and is restored automatically over time."
				},
				runic: {
					title: "Runic 100",
					description: "Your maximum Runic Power."
				},
				strength: {
					title: "Strength {0}"
				},
				agility: {
					title: "Agility {0}"
				},
				stamina: {
					title: "Stamina {0}"
				},
				intellect: {
					title: "Intellect {0}"
				},
				spirit: {
					title: "Spirit {0}"
				},
				mastery: {
					title: "Mastery {0}",
					description: "Mastery rating of {0} adds {1} Mastery.",
					unknown: "You must learn Mastery from your trainer before this will have an effect.",
					unspecced: "You must select a talent specialization in order to activate Mastery."
				},
				meleeDps: {
					title: "Damage per Second"
				},
				meleeAttackPower: {
					title: "Melee Attack Power {0}"
				},
				meleeSpeed: {
					title: "Melee Attack Speed {0}"
				},
				meleeHaste: {
					title: "Melee Haste {0}%",
					description: "Haste rating of {0} adds {1}% Haste.",
					description2: "Increases melee attack speed."
				},
				meleeHit: {
					title: "Melee Hit Chance {0}%",
					description: "Hit rating of {0} adds {1}% Hit chance."
				},
				meleeCrit: {
					title: "Melee Crit Chance {0}%",
					description: "Crit rating of {0} adds {1}% Crit chance.",
					description2: "Chance of melee attacks doing extra damage."
				},
				expertise: {
					title: "Expertise {0}",
					description: "Expertise rating of {0} adds {1} Expertise."
				},
				rangedDps: {
					title: "Damage per Second"
				},
				rangedAttackPower: {
					title: "Ranged Attack Power {0}"
				},
				rangedSpeed: {
					title: "Ranged Attack Speed {0}"
				},
				rangedHaste: {
					title: "Ranged Haste {0}%",
					description: "Haste rating of {0} adds {1}% Haste.",
					description2: "Increases ranged attack speed."
				},
				rangedHit: {
					title: "Ranged Hit Chance {0}%",
					description: "Hit rating of {0} adds {1}% Hit chance."
				},
				rangedCrit: {
					title: "Ranged Crit Chance {0}%",
					description: "Crit rating of {0} adds {1}% Crit chance.",
					description2: "Chance of ranged attacks doing extra damage."
				},
				spellPower: {
					title: "Spell Power {0}",
					description: "Increases the damage and healing of spells."
				},
				spellHaste: {
					title: "Spell Haste {0}%",
					description: "Haste rating of {0} adds {1}% Haste.",
					description2: "Increases spell casting speed."
				},
				spellHit: {
					title: "Spell Hit Chance {0}%",
					description: "Hit rating of {0} adds {1}% Hit chance."
				},
				spellCrit: {
					title: "Spell Crit Chance {0}%",
					description: "Crit rating of {0} adds {1}% Crit chance.",
					description2: "Chance of spells doing extra damage or healing."
				},
				spellPenetration: {
					title: "Spell Penetration {0}"
				},
				manaRegen: {
					title: "Mana Regen",
					description: "{0} mana regenerated every 5 seconds while not in combat."
				},
				combatRegen: {
					title: "Combat Regen",
					description: "{0} mana regenerated every 5 seconds while in combat."
				},
				armor: {
					title: "Armour {0}"
				},
				dodge: {
					title: "Dodge Chance {0}%",
					description: "Dodge rating of {0} adds {1}% Dodge chance."
				},
				parry: {
					title: "Parry Chance {0}%",
					description: "Parry rating of {0} adds {1}% Parry chance."
				},
				block: {
					title: "Block Chance {0}%",
					description: "Block rating of {0} adds {1}% Block chance.",
					description2: "Your block stops {0}% of incoming damage."
				},
				resilience: {
					title: "Resilience {0}",
					description: "Provides {0}% damage reduction against all damage done by players and their pets or minions."
				},
				arcaneRes: {
					title: "Arcane Resistance {0}",
					description: "Reduces Arcane damage taken by an average of {0}%."
				},
				fireRes: {
					title: "Fire Resistance {0}",
					description: "Reduces Fire damage taken by an average of {0}%."
				},
				frostRes: {
					title: "Frost Resistance {0}",
					description: "Reduces Frost damage taken by an average of {0}%."
				},
				natureRes: {
					title: "Nature Resistance {0}",
					description: "Reduces Nature damage taken by an average of {0}%."
				},
				shadowRes: {
					title: "Shadow Resistance {0}",
					description: "Reduces Shadow damage taken by an average of {0}%."
				}
			},
			recentActivity: {
				subscribe: "Subscribe to this feed"
			},
			raid: {
				tooltip: {
					normal: "(Normal)",
					heroic: "(Heroic)",
					complete: "{0}% complete ({1}/{2})",
					optional: "(optional)"
					}
				},
			links: {
				tools: "Tools",
				saveImage: "Export character image",
				saveimageTitle: "Export your character image for use with the World of Warcraft Rewards Visa credit card."
				}
		};
        //]]>
        </script>

</div>
</div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
//<![CDATA[
var xsToken = '';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}’s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
},
cms: {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
stickyHasBeenRequested: 'You have already sent a sticky request for this topic.',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Level {0}",
shortQuery: "Search requests must be at least three characters long."
},
bml: {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by {0}',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
},
ui: {
submit: 'Submit',
cancel: 'Cancel',
reset: 'Reset',
viewInGallery: 'View in gallery',
loading: 'Loading...',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on...',
fansiteFindType: 'Find {0} on...',
fansiteNone: 'No fansites available.'
},
grammar: {
colon: '{0}:',
first: 'First',
last: 'Last'
},
fansite: {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
},
search: {
kb: 'Support',
post: 'Forums',
article: 'Blog Articles',
static: 'General Content',
wowcharacter: 'Characters',
wowitem: 'Items',
wowguild: 'Guilds',
wowarenateam: 'Arena Teams',
other: 'Other'
}
};
//]]>
</script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js"></script>
<script type="text/javascript" src="wow/static/js/wow.js"></script>
<script type="text/javascript">
//<![CDATA[
$(function(){
Menu.initialize('/data/menu.json');
Search.initialize('/ta/lookup');
});
//]]>
</script>
<script type="text/javascript" src="<?php echo $website['root']; ?>wow/static/js/profile.js"></script>
<script type="text/javascript" src="<?php echo $website['root']; ?>wow/static/js/character/summary.js"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js");
Core.load("wow/static/local-common/js/search.js");
Core.load("wow/static/local-common/js/login.js", false, function() {
if (typeof Login !== 'undefined') {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
}
});
//]]>
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/jquery.pngFix.pack.js"></script>
<script type="text/javascript">
//<![CDATA[
$('.png-fix').pngFix(); //]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
(function() {
var ga = document.createElement('script');
var src = "https://ssl.google-analytics.com/ga.js";
if ('http:' == document.location.protocol) {
src = "http://www.google-analytics.com/ga.js";
}
ga.type = 'text/javascript';
ga.setAttribute('async', 'true');
ga.src = src;
var s = document.getElementsByTagName('script');
s = s[s.length-1];
s.parentNode.insertBefore(ga, s.nextSibling);
})();
//]]>
</script>
</body>
</html>
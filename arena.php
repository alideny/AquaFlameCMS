<?php
require_once("configs.php");
$page_cat = "services";
include("functions/arena_items_func.php");
?>

<html>
<head>
<title><?php echo $name = $_GET['name'];?> - <?php echo $website['title']; ?></title>
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/armory/common.css?" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie.css?" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie6.css?" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie7.css?" /><![endif]-->
<link title="World of Warcraft - News" href="http://eu.battle.net/wow/en/feed/news" type="application/atom+xml" rel="alternate"/>
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/armory/profile.css?" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/profile-ie.css?" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/profile-ie6.css?" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/armory/arena/arena.css?" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/armory/arena/summary.css?" />
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/arena/summary-ie6.css?" /><![endif]-->
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie.css?" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie6.css?" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie7.css?" /><![endif]-->
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
Core.cdnUrl = 'http://eu.media.blizzard.com/';
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
Flash.ratingImage = 'wow/../../eu.media.blizzard.com/global-video-player/ratings/wow/rating-pegi.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
	<body class="en-gb search-win">
	<div id="wrapper">
	<?php include("header.php"); ?>
	<div id="content">
	<div class="content-top">
	<div class="content-trail">
	<ol class="ui-breadcrumb">
	<li>
	<a href="index.php" rel="np">World of Warcraft</a>
	</li>
	<li>
	<a href="services.php" rel="np">Services</a>
	</li>
	<li>
	<a href="search.php" rel="np">Search</a>
	</li>
	<li class="last">
	<a href="arena.php" rel="np"><?php echo $name = $_GET['name'];?></a>
	</li>
	</ol>
	</div>
	<div class="content-bot">


	<div id="profile-wrapper" class="profile-wrapper profile-wrapper">

		<div class="profile-sidebar-anchor">
			<div class="profile-sidebar-outer">
				<div class="profile-sidebar-inner">
					<div class="profile-sidebar-contents">



		<div class="profile-info-anchor">
		<div class="arenateam-flag">
			<img src="wow/static/images/arena/banners/arena-a.png" alt="" width="240" height="240" />
		</div>
			<div class="profile-info profile-arenateam-info">
				<div class="name ">
					<a href="arena.php"><?php echo $name = $_GET['name'];?></a>
				</div>

				<div class="under-name">
					<span class="teamsize"><b><?php echo $type ?></b></span> <span class="faction">Alliance</span> Arena Team<span class="comma">,</span>

					<span class="text" data-tooltip="FACTION">
					<a href=""><font color=""><?php echo $name = $_GET['name'];?></font></a> <!-- Color has to be Red or Blue due to the Faction -->
					</span>
					
				</div>

				<div class="rank">
					
					Last week’s ranking: <span class="ranked">--</span>
				</div>

			</div>
		</div>



	<ul class="profile-sidebar-menu" id="profile-sidebar-menu">





			<li class="">


	<a href="search.php" class="back-to" rel="np"><span class="arrow"><span class="icon">Search</span></span></a>

			</li>





			<li class=" active">

		<a href="index.html" class="" rel="np">
			<span class="arrow"><span class="icon">
				<?php echo $name = $_GET['name'];?>
			</span></span>
		</a>

			</li>

		
	</ul>






					</div>
				</div>
			</div>
		</div>
		
		<div class="profile-contents">

		<div class="summary">

			<div class="profile-section">

					<div class="summary-stats">
	<div class="arenateam-stats table">
		<table>
			<thead>
				<tr>
					<th class="align-left">	<span class="sort-tab">&#0160;</span>
</th>
					<th width="23%" class="align-center">	<span class="sort-tab">Matches</span>
</th>
					<th width="23%" class="align-center">	<span class="sort-tab">Win – Loss</span>
</th>
					<th width="23%" class="align-center">	<span class="sort-tab">Team Rating</span>
</th>
				</tr>
			</thead>
			<tbody>
	
	<tr class="row2">
		<td class="align-left">
			<strong class="week">This Week</strong>
		</td>
		<td class="align-center"><?php echo $get['weekGames']; ?></td>
		<td class="align-center arenateam-gameswonlost">
			<span class="arenateam-gameswon"><?php echo $get['weekWins']; ?></span> &#8211; <span class="arenateam-gameslost">0</span>
			<span class="arenateam-percent">(0%)</span>
		</td>
		<td class="align-center">
				<span class="arenateam-rating"><?php echo $get['rating']; ?></span>
		</td>
	</tr>
	
	<tr class="row1">
		<td class="align-left">
			<strong class="season">Season</strong>
		</td>
		<td class="align-center"><?php echo $get['seasonGames']; ?></td>
		<td class="align-center arenateam-gameswonlost">
			<span class="arenateam-gameswon"><?php echo $get['seasonWins']; ?></span> &#8211; <span class="arenateam-gameslost">51</span>
			<span class="arenateam-percent">(47%)</span>
		</td>
		<td class="align-center">
				<span class="arenateam-rating"><?php echo $get['rating']; ?></span>
		</td>
	</tr>
			</tbody>
		</table>
	</div>
					</div>

					<div class="summary-roster">
					<div class="ui-dropdown" id="filter-timeframe">
						<select>
							<option value="season">Season</option>
							<option value="weekly">Weekly</option>
						</select>
					</div>

							<h3 class="category "><b>Roster</b></h3>


	<div class="arenateam-roster table" id="arena-roster">
		<table>
			<thead>
				<tr>
					<th>	<a href="javascript:;" class="sort-link">
		<span class="arrow">Name</span>
	</a>
</th>
					<th style="display: none" class="align-center season">	<a href="javascript:;" class="sort-link numeric">
		<span class="arrow">Season Played</span>
	</a>
</th>
					<th style="display: none" class="align-center season">	<a href="javascript:;" class="sort-link numeric">
		<span class="arrow">Season Win – Loss</span>
	</a>
</th>
					<th class="align-center weekly">	<a href="javascript:;" class="sort-link numeric">
		<span class="arrow">Played</span>
	</a>
</th>
					<th class="align-center weekly">	<a href="javascript:;" class="sort-link numeric">
		<span class="arrow">Win – Loss</span>
	</a>
</th>
					<th class="align-center">	<a href="javascript:;" class="sort-link numeric">
		<span class="arrow">Rating</span>
	</a>
</th>
				</tr>
			</thead>
			<tbody>
					<tr class="row1">
						<td data-raw="Simitis" style="width: 40%">
							<a href="" rel="np">
	<span class="character-talents">
		<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="wow/static/images/icons/talents/DK_Bpresence.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="points">33<ins>/</ins>3<ins>/</ins>5</span>
	<span class="clear"><!-- --></span>
	</span>
							</a>
							
							<a href="" class="color-c6" rel="allow">




		<span class="icon-frame frame-14 ">
			<img src="wow/static/images/icons/race/4-0.gif" alt="" width="14" height="14" />
		</span>




		<span class="icon-frame frame-14 ">
			<img src="wow/static/images/icons/class/6.gif" alt="" width="14" height="14" />
		</span>
								Simitis
							</a>

								<span class="leader" data-tooltip="Team Leader"></span>
						</td>
						<td class="align-center season">
							96

							<span class="arenateam-percent">(99%)</span>
						</td>
						<td class="align-center season arenateam-gameswonlost" data-raw="46">
							<span class="arenateam-gameswon">46</span> &#8211;
							<span class="arenateam-gameslost">50</span>

							<span class="arenateam-percent">(48%)</span>
						</td>

						<td class="align-center weekly" style="display: none">
							0

							<span class="arenateam-percent">(0%)</span>
						</td>
						<td class="align-center weekly arenateam-gameswonlost" data-raw="0" style="display: none">
							<span class="arenateam-gameswon">0</span> &#8211;
							<span class="arenateam-gameslost">0</span>

							<span class="arenateam-percent">(0%)</span>
						</td>
						<td class="align-center"><span class="arenateam-rating">1313</span></td>
					</tr>
					<tr class="row2">
						<td data-raw="Primordiani" style="width: 40%">
							<a href="" rel="np">
	<span class="character-talents">
		<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="wow/static/images/icons/talents/pala_holy.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="points">32<ins>/</ins>6<ins>/</ins>3</span>
	<span class="clear"><!-- --></span>
	</span>
							</a>
							
							<a href="" class="color-c2" rel="allow">




		<span class="icon-frame frame-14 ">
			<img src="wow/static/images/icons/race/1-1.gif" alt="" width="14" height="14" />
		</span>




		<span class="icon-frame frame-14 ">
			<img src="wow/static/images/icons/class/2.gif" alt="" width="14" height="14" />
		</span>
								Primordiani
							</a>

						</td>
						<td class="align-center season">
							20

							<span class="arenateam-percent">(21%)</span>
						</td>
						<td class="align-center season arenateam-gameswonlost" data-raw="11">
							<span class="arenateam-gameswon">11</span> &#8211;
							<span class="arenateam-gameslost">9</span>

							<span class="arenateam-percent">(55%)</span>
						</td>

						<td class="align-center weekly" style="display: none">
							0

							<span class="arenateam-percent">(0%)</span>
						</td>
						<td class="align-center weekly arenateam-gameswonlost" data-raw="0" style="display: none">
							<span class="arenateam-gameswon">0</span> &#8211;
							<span class="arenateam-gameslost">0</span>

							<span class="arenateam-percent">(0%)</span>
						</td>
						<td class="align-center"><span class="arenateam-rating">1276</span></td>
					</tr>
					<tr class="row1">
						<td data-raw="Thelwsex" style="width: 40%">
							<a href="" rel="np">
	<span class="character-talents">
		<span class="icon">



		<span class="icon-frame frame-12 ">
			<img src="wow/static/images/icons/spell_nature_magicimmunity.jpg" alt="" width="12" height="12" />
		</span>
</span>
		<span class="points">0<ins>/</ins>7<ins>/</ins>34</span>
	<span class="clear"><!-- --></span>
	</span>
							</a>
							
							<a href="" class="color-c7" rel="allow">




		<span class="icon-frame frame-14 ">
			<img src="wow/static/images/icons/race/11-0.gif" alt="" width="14" height="14" />
		</span>




		<span class="icon-frame frame-14 ">
			<img src="wow/static/images/icons/class/7.gif" alt="" width="14" height="14" />
		</span>
								Thelwsex
							</a>

						</td>
						<td class="align-center season">
							15

							<span class="arenateam-percent">(15%)</span>
						</td>
						<td class="align-center season arenateam-gameswonlost" data-raw="8">
							<span class="arenateam-gameswon">8</span> &#8211;
							<span class="arenateam-gameslost">7</span>

							<span class="arenateam-percent">(53%)</span>
						</td>

						<td class="align-center weekly" style="display: none">
							0

							<span class="arenateam-percent">(0%)</span>
						</td>
						<td class="align-center weekly arenateam-gameswonlost" data-raw="0" style="display: none">
							<span class="arenateam-gameswon">0</span> &#8211;
							<span class="arenateam-gameslost">0</span>

							<span class="arenateam-percent">(0%)</span>
						</td>
						<td class="align-center"><span class="arenateam-rating">983</span></td>
					</tr>
			</tbody>
		</table>
	</div>

        <script type="text/javascript">
        //<![CDATA[
		$(document).ready(function() {
			new Table('#arena-roster', { column: 3, method: 'numeric', type: 'desc' });
		});
        //]]>
        </script>
					</div>

			</div>
		</div>

        <script type="text/javascript">
        //<![CDATA[
			$(function() {
				$('.ui-dropdown').dropdown({
					callback: function(dropdown, value) {
						Arena.swapStats('#arena-roster', value, dropdown);
					}
				});
			});
        //]]>
        </script>

		</div>

	<span class="clear"><!-- --></span>
	</div>

        <script type="text/javascript">
        //<![CDATA[
		$(function() {
			Profile.url = '/wow/en/arena/hellscream/2v2/Fishing%20Trail/summary';
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
</div>
</div>
</div>
<?php include("footer.php") ?>
<script type="text/javascript" src="wow/static/local-common/js/search.js?"></script>
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
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find {0} on…',
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
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?");
Core.load("wow/static/local-common/js/login.js?", false, function() {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
});
//]]>
</script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js?"></script>
<script type="text/javascript" src="wow/static/js/wow.js?"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
Menu.initialize('/data/menu.json');
Search.initialize('/ta/lookup');
});
//]]>
</script>
<script type="text/javascript" src="wow/static/js/profile.js?"></script>
<script type="text/javascript" src="wow/static/local-common/js/table.js?"></script>
<script type="text/javascript" src="wow/static/js/character/arena-flag.js?"></script>
<script type="text/javascript" src="wow/static/local-common/js/dropdown.js?"></script>
<script type="text/javascript" src="wow/static/js/armory/pvp/arena.js?"></script>
<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/jquery.pngFix.pack.js?"></script>
<script type="text/javascript">
//<![CDATA[
$('.png-fix').pngFix(); //]]>
</script>
<![endif]-->
</body>
</html>
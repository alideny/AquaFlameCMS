<?php if(!isset($_SESSION['username'])){ ?>
<div xmlns="http://www.w3.org/1999/xhtml" class="user-plate">
<a href="?login" class="card-login" onclick="BnetAds.trackImpression('Battle.net Login', 'Character Card', 'New'); return Login.open('login.php');">
<strong>Log in now</strong> to enhance and personalize your experience!
</a>
<div class="card-overlay"></div>
</div>
<?php }else{
  $side = rand(1,2);
  switch($side){
    case 1:
      $side = "alliance";
    break;
    case 2:
      $side = "horde";
    break;
  } 
?>
<div class="user-plate">
<div id="user-plate" class="card-character plate-<?php echo $side; ?> ajax-update" style="background: url(<?php echo $website['root']; ?>wow/static/images/layout/cards/no-chars.png) 0 100% no-repeat;">
<div class="card-overlay"></div>
<span class="hover"></span>
</a>
<div class="meta">
<div class="player-name"><?php echo strtolower($_SESSION['username']); ?></div>
<div class="character">
<a class="character-name context-link" 
href="#" 
rel="np" 
data-tooltip="Change character">No Characters</a>
    <div id="context-1" class="ui-context character-select">
    <span class="arrow"></span>
      <div class="context">
        <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
        
        <div class="context-user">
        <strong>No Characters</strong>
        <br />
        <span>No Realm</span>
        </div>
      
        <div class="context-links">
        <a href="#" title="Profile" class="icon-profile link-first">Profile</a>
        <a href="#" title="View my posts" class="icon-posts"> </a>
		<a href="#" title="View auctions" rel="np"class="icon-auctions"> </a>
		<a href="#" title="View my Arena" class="icon-profile"> </a>
        <a href="#" title="View events" rel="np" class="icon-events link-last"> </a>
        </div>
      </div>
      
      <div class="character-list">
        <div class="primary chars-pane">
          <div class="char-wrapper">
          <a href="javascript:;" class="char pinned" rel="np">
          <span class="pin"></span>
          <span class="name">No Characters</span>
          <span class="class color-c1">level race class</span>
          <span class="realm">No Realm</span>
          </a>
          <!-- At href="advanced.php?NAME" that has to be there-->
          <a href="javascript:;" onclick="CharSelect.pin(1, this); return false;" class="char " rel="np">
          <span class="pin"></span>
          <span class="name">Test Character</span>
          <span class="class color-c1">80 Human Warrior</span>
          <span class="realm">No Realm</span>
          </a>
          </div>
          
          
          <a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
          <span class="plus"></span>
          Manage Characters<br />
          <span>Customize characters that appear in this menu.</span>
          </a>
          
          
        </div>
        
        
        <div class="secondary chars-pane" style="display: none">
        <div class="char-wrapper scrollbar-wrapper" id="scroll">
        <div class="scrollbar">
        <div class="track"><div class="thumb"></div></div>
        </div>
        <div class="viewport">
        <div class="overview">
        <a href="javascript:;"
        class="color-c1 pinned"
        rel="np"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        <img src="wow/static/images/icons/race/2-0.gif" width="18" height="18" alt="" />
        <img src="wow/static/images/icons/class/1.gif" width="18" height="18" alt="" />
        80 Test Character
        <span class="hide">Human Warrior (Server)</span>
        </a>
        
        
        
        
        
        
        <div class="no-results hide">No characters were found</div>
        </div>
        </div>
        </div>
        <div class="filter">
<input type="input" class="input character-filter" value="Filter…" alt="Filter…" /><br />
<a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">Return to characters</a>
</div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">

//<![CDATA[
$(document).ready(function() {
Tooltip.bind('#header .user-meta .character-name', { location: 'topCenter' });
});
//]]>
</script>
<?php } ?>
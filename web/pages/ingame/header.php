<?php
/*
HLstatsX Community Edition - Real-time player and clan rankings and statistics
Copyleft (L) 2008-20XX Nicholas Hastings (nshastings@gmail.com)
http://www.hlxcommunity.com

HLstatsX Community Edition is a continuation of 
ELstatsNEO - Real-time player and clan rankings and statistics
Copyleft (L) 2008-20XX Malte Bayer (steam@neo-soft.org)
http://ovrsized.neo-soft.org/

ELstatsNEO is an very improved & enhanced - so called Ultra-Humongus Edition of HLstatsX
HLstatsX - Real-time player and clan rankings and statistics for Half-Life 2
http://www.hlstatsx.com/
Copyright (C) 2005-2007 Tobias Oetzel (Tobi@hlstatsx.com)

HLstatsX is an enhanced version of HLstats made by Simon Garner
HLstats - Real-time player and clan rankings and statistics for Half-Life
http://sourceforge.net/projects/hlstats/
Copyright (C) 2001  Simon Garner
            
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

For support and installation notes visit http://www.hlxcommunity.com
*/

    if (!defined('IN_HLSTATS')) {
        die('Do not access this file directly.');
    }
	
	
	/*
	 * HLstats Page Header
	 * This file will be inserted at the top of every page generated by HLstats.
	 * This file can contain PHP code.
	 */
Header ('Cache-Control: no-cache');
$lastpage = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="hlstats.css">
	<link rel="stylesheet" type="text/css" href="styles/<?php echo $g_options['style']; ?>">
	<title>HLstatsX</title>
</head>
<body style="margin:0px;padding:0px;" id="ingame"> 
    
<div style="width:100%;height:50px;" class="headerblock">
	<img src="<?php echo IMAGE_PATH; ?>/icons/title.png" alt="HLstats" />
	<?php 
	if ($lastpage) {
		?>
		<div style="position: absolute; bottom:45%; right:0; color #FFFFFF;">
			<a href="<?php echo $lastpage; ?>">&laquo;&nbsp;&nbsp;Go Back</a>
		</div>
		<?php 
	} ?>
</div>





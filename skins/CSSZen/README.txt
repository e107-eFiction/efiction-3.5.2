// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------

Copyright 2006 by Tammy Keefer.

This skin is pure CSS.  No graphics.  To change the color just change the colors within the stye.css file. 
There are a total of 4 colors in the skin (other than black and white).  Just about any 
four shades of the same color seem to work well with this skin. (I suggest you back up the 
current style.css before you start playing.)  Try a color palette generator for color scheme
ideas:

http://wellstyled.com/tools/colorscheme2/index-en.html
http://www.colorcombos.com/
http://www.visibone.com/colorlab/
http://websitetips.com/colortools/sitepro/

The variables.php file in here sets up the default blocks as the skin expects them 
to be set to prevent conflicts with the site's default block configuration.  If you add a block,
make sure to turn it back on in the variables.php by deleting/editing the lines for that block. 

To add items to the menus (top or bottom) add them in the variables.php.  For instance,
to add the top tens to the top menu you would change:

$blocks["menu"]["content"] = array (
	0 => 'adminarea',
	1 => 'logout',
	2 => 'login',
	3 => 'search',
	4 => 'browse',
	5 => 'members',
	6 => 'home');

to:

$blocks["menu"]["content"] = array (
	0 => 'adminarea',
	1 => 'logout',
	2 => 'login',
	3 => 'search',
	4 => 'tens',
	5 => 'browse',
	6 => 'members',
	7 => 'home');

NOTE: Because the menu items are floated right.  Add your links in REVERSE order.  Home
comes last in the list but is displayed first!

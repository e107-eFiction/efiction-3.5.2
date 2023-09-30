Skin Name: Zenlike
Skin Download: http://sally.lunaescence.com/tag/zenlike
Description: A light green and white skin with very few graphics
Author: Sally Anderson
Author E-Mail: sally@lunaescence.com
Author URI: http://sally.lunaescence.com/



------------------------------------------
Brushes and Stock Photos Used in this Set
------------------------------------------
Brush: Ink
Download From: Miss M - http://missm.paperlilies.com/
Where Used: Header Graphic, near Bamboo.  It looks like a white blur.

Stock Photo: Bamboo
Download from: ManixTT - http://manixtt-stock.deviantart.com/
Where Used: Header Graphic and Section Header Background

Both of these artists require a link back to their sites in order to use their work.  By default, I've included this credit to them in the footer.  If you use this skin, please leave the credit to these wonderful people intact unless you completely remove their artwork.



------------------------------------------
Custom Graphics
------------------------------------------
This is a very lightweight skin that uses NO custom header graphics.  Everything is based on CSS text, font, and background effects.  If you'd like to make some custom header graphics, I can provide raw files in *.psp, *.psd, Fireworks *.png,*.ai, and several other formats.  (See the skin download link above.)



------------------------------------------
How to Customize
------------------------------------------

CSS CUSTOMIZATIONS	
=================
The biggest thing you may need to customize is the title.  I liked the effect of having it on the green area, though you may wish to move it somewhere else.

To do this, you need to open style.css and scroll down until you reach: 

/* Main Title Position and Style */

.bgfttl controls the upper portion, which should be your site's title and .udrttl controls the lower portion (which should be your site's slogan).

For those not familiar with CSS, these positions are controlled by the "position:absolute;left:##px;top:##px".  Position in CSS basically assumes that the Web page layout begins at the top, left corner of the viewing area (the place where you view Web sites).  It's 100% wide, or 800 pixels, 1024, 1152, 1200, 1600, or whatever setting you have your resolution at minus the width of the scrollbar (20 to 30 pixels).

In this case, I have the top title set to display exactly 90 pixels down from the top of the viewing area and 100 pixels over.

If you want to move it over to the white section, you may have to experiment, since I don't know your browser.  You could try changing the "left:##px" measurements to percentage (left:##%), and try 90% and subtract from there until it's where you want it.  



PROFILE CUSTOMIZATIONS
====================
I have NOT included the {authorfields} tag in profile.tpl so the skin kept its original look.  If you add additional fields and want them to appear, you'll have to add them in yourself.  By default, I include {website}, {aol}, {icq}, {msn}, and {yahoo}.

Simply open profile.tpl and add your custom tag in where you want it.



	
Enjoy!
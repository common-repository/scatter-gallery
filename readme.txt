=== Scatter Gallery ===
Contributors: obaq
Tags: gallery, photo, scatter, scattered, thumbnail, transparent, opacity, opaque, frame
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 1.3.1

== Description ==
This plugin can create a photo gallery with scattered thumbnails utilising jquery and JQueryRotate lib at http://wilq32.adobeair.pl/jQueryRotate/Wilq32.jQueryRotate.html.
There are many gallery plugins but they may not be installed if PHP memory limit is low. This can work for those free hosting sites even with low PHP memory limit(16MB~) like below example.
The photos can be chosen one by one or a target folder which contains photos can be used.

Please visit the below site for the details:
http://obaqblog.blogspot.com/2010/06/scatter-gallery-plugin-for-wordpress.html

*Now, the thumbnails has transparent frames.

*Now images can be better cached in the browsers for a faster load.

*The themes "Picture Perfect" and "Sliding Door" cannot use the rotate effects due to their own javascripts.

Please leave a commment at the below site if you have any problem, questions and suggestions.
http://obaqblog.blogspot.com/2010/06/scatter-gallery-plugin-for-wordpress.html#comment-form

== Installation ==
Make sure PHP supports php-gd.
Extract all folder and files.
Modify config.php for set for the password for deleting cached files(SGCHACHEDELPSW).
Put the TTF file in the 'fonts' folder and use the file name for 'SGFONT' if you don't like the Arial font.

Upload the 'scatter-gallery' folder and its contents to '/wp-content/plugins/'.
Make 'cache' folder writable by the web server with permission 777 or equivalent.

Go to the 'Plugins' menu of your admin area and activate the plugin.

== Frequently Asked Questions ==
= How to insert a gallery into the post? =
You may try inserting the below sample codes onto the posts and learn how the things work.
Basically, it is a simple tagging scheme.
[SG]...[/SG]: start and end of the insertion code.
[WIDTH]...[/WIDTH]: the width of the gallery.
[HEIGHT]..[/HEIGHT]: the height of the gallery.
[BGCOLOR]...[/BGCOLOR]: the background color of the gallery.
[BORDERCOLOR]...[/BORDERCOLOR]: the color for the gallery's outer border.
[BGIMAGE]...[/BGIMAGE]: the url for the background image of the gallery.
[THUMBWIDTH]...[/THUMBIMGWIDTH]: the width of a thumbnail.
[THUMBHEIGHT]...[/THUMBHEIGHT]: the height of a thumbnail.
[FRAMEOPACITY]...[/FRAMEOPACITY]: The value ranges from 0 to 128. The value 0 shows no frame while the value 128 or above shows a white frame. Please kindly experiment the effect between the value range.
[SCATTER]...[/SCATTER]: set 'true' to have thumbnails scattered.
[MAXANGLE]...[/MAXANGLE]: the maximum angle the thumbnail is to be rotated.
[PADDING]...[/PADDING]: the spacing in pixel.
[FOLDER]...[/FOLDER]: the path to the folder. You can set 'images/yourphotofolder' if you placed the target folder in 'images' folder under 'scatter-gallery'. You can set 'wp-content/(your path to the photo folder)' if you placed the photos under 'wp-content' of your site.
*the thumbnails will be linked to their own original photos and their filename will be used for the text.
[PHOTO1]...[/PHOTO1], [PHOTO2]...[/PHOTO2]....: the urls or paths for the photos. You can set 'images/yourphoto.jpg' and so on only when you placed the images in 'images' folder under 'scatter-gallery'. You can set 'wp-content/(your path to the photo)/yourphoto.jpg' and so on only when you placed the photos under 'wp-content' of your site.
[TEXT1]...[/TEXT1], [TEXT1]...[/TEXT1]: the text shown under thumbnails. If you omit it, the file name of the photo will be used.
[LINK1]...[/LINK1], [LINK2]...[/LINK2]....: the urls which the images are linked to. If you omit them, they are linked to the original photos.
*you cannot use [FOLDER]...[/FOLDER] and [PHOTO*], [TEXT*] or [LINK*] at the same time.
*You could have any number of [PHOTO*], [TEXT*] or [LINK*] but cannot skip the sequence, that is, you could have [PHOTO1], [PHOTO2], [PHOTO3] but not [PHOTO1], [PHOTO2], [PHOTO4]!


thumbnail image area: 100x76,
frame opacity: 128
[SG]
[WIDTH]600[/WIDTH]
[HEIGHT][/HEIGHT]
[BGCOLOR]lightgreen[/BGCOLOR]
[BORDERCOLOR]lime[/BORDERCOLOR]
[BGIMAGE][/BGIMAGE]
[THUMBWIDTH]100[/THUMBWIDTH]
[THUMBHEIGHT]76[/THUMBHEIGHT]
[FRAMEOPACITY]128[/FRAMEOPACITY]
[SCATTER]true[/SCATTER]
[MAXANGLE]35[/MAXANGLE]
[PADDING]10[/PADDING]
[PHOTO1]images/birds.png[/PHOTO1]
[TEXT1][/TEXT1]
[LINK1]images/birds.png[/LINK1]
[PHOTO2]images/bookshelves.jpg[/PHOTO2]
[TEXT2][/TEXT2]
[LINK2]images/bookshelves.jpg[/LINK2]
[PHOTO3]images/mail.jpg[/PHOTO3]
[TEXT3][/TEXT3]
[LINK3]images/mail.jpg[/LINK3]
[PHOTO4]images/motorcycle.png[/PHOTO4]
[TEXT4][/TEXT4]
[LINK4]images/motorcycle.png[/LINK4]
[PHOTO5]images/tower.png[/PHOTO5]
[TEXT5][/TEXT5]
[LINK5][/LINK5]
[PHOTO6]images/yatche.png[/PHOTO6]
[TEXT6][/TEXT6]
[LINK6][/LINK6]
[PHOTO7]images/earth_surface.gif[/PHOTO7]
[TEXT7][/TEXT7]
[LINK7][/LINK7]
[PHOTO8]images/space.jpg[/PHOTO8]
[TEXT8][/TEXT8]
[LINK8][/LINK8]
[/SG]
:
thumbnail image area: 100x76,
background image: images/tiles/base.jpg,
frame opacity: 70,
photo folder: images/photos in scatter-gallery folder
[SG]
[WIDTH]600[/WIDTH]
[HEIGHT][/HEIGHT]
[BGCOLOR]green[/BGCOLOR]
[BORDERCOLOR]black[/BORDERCOLOR]
[BGIMAGE]images/tiles/base.jpg[/BGIMAGE]
[THUMBWIDTH]100[/THUMBWIDTH]
[THUMBHEIGHT]76[/THUMBHEIGHT]
[FRAMEOPACITY]70[/FRAMEOPACITY]
[SCATTER]true[/SCATTER]
[MAXANGLE]30[/MAXANGLE]
[PADDING]10[/PADDING]
[FOLDER]images/photos[/FOLDER]
[/SG]
:
thumbnail image area: 150x114,
background image: images/tiles/RedBlack-Plaid_s.jpg,
frame opacity: 70
[SG]
[WIDTH]600[/WIDTH]
[HEIGHT][/HEIGHT]
[BGCOLOR]green[/BGCOLOR]
[BORDERCOLOR]black[/BORDERCOLOR]
[BGIMAGE]images/tiles/RedBlack-Plaid_s.jpg[/BGIMAGE]
[THUMBWIDTH]150[/THUMBWIDTH]
[THUMBHEIGHT]114[/THUMBHEIGHT]
[FRAMEOPACITY]70[/FRAMEOPACITY]
[SCATTER]true[/SCATTER]
[MAXANGLE]35[/MAXANGLE]
[PADDING]10[/PADDING]
[PHOTO1]images/birds.png[/PHOTO1]
[TEXT1][/TEXT1]
[LINK1]images/birds.png[/LINK1]
[PHOTO2]images/bookshelves.jpg[/PHOTO2]
[TEXT2][/TEXT2]
[LINK2]images/bookshelves.jpg[/LINK2]
[PHOTO3]images/mail.jpg[/PHOTO3]
[TEXT3][/TEXT3]
[LINK3]images/mail.jpg[/LINK3]
[PHOTO4]images/motorcycle.png[/PHOTO4]
[TEXT4][/TEXT4]
[LINK4]images/motorcycle.png[/LINK4]
[PHOTO5]images/tower.png[/PHOTO5]
[TEXT5][/TEXT5]
[LINK5][/LINK5]
[PHOTO6]images/yatche.png[/PHOTO6]
[TEXT6][/TEXT6]
[LINK6][/LINK6]
[PHOTO7]images/earth_surface.gif[/PHOTO7]
[TEXT7][/TEXT7]
[LINK7][/LINK7]
[PHOTO8]images/space.jpg[/PHOTO8]
[TEXT8][/TEXT8]
[LINK8][/LINK8]
[/SG]
:
thumbnail image area: 100x76,
background image: images/tiles/brown_argyle.jpg,
frame opacity: 50
[SG]
[WIDTH]400[/WIDTH]
[HEIGHT][/HEIGHT]
[BGCOLOR]green[/BGCOLOR]
[BORDERCOLOR]maroon[/BORDERCOLOR]
[BGIMAGE]images/tiles/brown_argyle.jpg[/BGIMAGE]
[THUMBWIDTH]100[/THUMBWIDTH]
[THUMBHEIGHT]76[/THUMBHEIGHT]
[FRAMEOPACITY]50[/FRAMEOPACITY]
[SCATTER]true[/SCATTER]
[MAXANGLE]35[/MAXANGLE]
[PADDING]10[/PADDING]
[PHOTO1]images/birds.png[/PHOTO1]
[TEXT1][/TEXT1]
[LINK1]images/birds.png[/LINK1]
[PHOTO2]images/bookshelves.jpg[/PHOTO2]
[TEXT2][/TEXT2]
[LINK2]images/bookshelves.jpg[/LINK2]
[PHOTO3]images/mail.jpg[/PHOTO3]
[TEXT3]3[/TEXT3]
[LINK3]images/mail.jpg[/LINK3]
[PHOTO4]images/motorcycle.png[/PHOTO4]
[TEXT4][/TEXT4]
[LINK4]images/motorcycle.png[/LINK4]
[PHOTO5]images/tower.png[/PHOTO5]
[TEXT5][/TEXT5]
[LINK5][/LINK5]
[PHOTO6]images/yatche.png[/PHOTO6]
[TEXT6][/TEXT6]
[LINK6][/LINK6]
[PHOTO7]images/earth_surface.gif[/PHOTO7]
[TEXT7][/TEXT7]
[LINK7][/LINK7]
[PHOTO8]images/space.jpg[/PHOTO8]
[TEXT8][/TEXT8]
[LINK8][/LINK8]
[/SG]


== Screenshots ==
1. screenshot-1.png: a scatter gallery.
2. screenshot-2.png: a scatter gallery with transparent frames on thumbnails and a background image.
3. screenshot-3.png: another scatter gallery with transparent frames on larger thumbnails and another background image.
4. screenshot-4.png: another scatter gallery with transparent frames on thumbnails and another background image.
== Changelog ==
= 1.3.1 =
*a feature to add Expires header to internal images for browser cache.

= 1.3 =
* added the opaque frame for the thumbnail.

= 1.2 =
* can set a target folder which contains photos.

= 1.0.1 =
* minor correction for positioning in Internet Explorer.

= 1.0 =
* 1.0 is the beginning of the version.

== Upgrade Notice ==
= 1.3.1 =
*Please deactivate the previous version and clean up the cache before activating the current version. Please clear the browser cache.

= 1.3 =
* deactivate the previous version and clean up the cache before installing new version.

= 1.2 =
* deactivate the previous version and clean up the cache before installing new version.

= 1.0.1 =
* deactivate the previous version and clean up the cache before installing new version.

= 1.0 =
* 1.0 is the beginning of the version.

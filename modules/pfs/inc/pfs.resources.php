<?php

/**
 * PFS Icons
 */
$R['pfs_code_addfile'] = '<a href="{$pfs_base_href}{$pfs_dir_user}\'+gfile+\'" title="\'+gdesc+\'">\'+gfile+\'</a>';
$R['pfs_code_addpix'] = '<img src="{$pfs_base_href}{$pfs_dir_user}\'+gfile+\'" alt="\'+gdesc+\'" />';
$R['pfs_code_addthumb'] = '<a href="{$pfs_base_href}{$pfs_dir_user}\'+gfile+\'" title="\'+gdesc+\'"><img src="{$pfs_base_href}{$thumbs_dir_user}\'+gfile+\'" alt="\'+gdesc+\'" /></a>';
$R['pfs_code_header_javascript'] = '
function addfile(gfile, c2, gdesc) {
	insertText(opener.document, \'{$c2}\', \'{$pfs_code_addfile}\');{$winclose}
}
function addthumb(gfile, c2, gdesc) {
	insertText(opener.document, \'{$c2}\', \'{$pfs_code_addthumb}\');{$winclose}
}
function addpix(gfile, c2, gdesc) {
	insertText(opener.document, \'{$c2}\', \'{$pfs_code_addpix}\');{$winclose}
}';
$R['pfs_link_thumbnail'] = 
	'<a href="{$pfs_fullfile}" title="{$pfs_desc}"><img src="{$thumbpath}{$pfs_file}" alt="{$pfs_desc}" /></a>';

/**
 * PFS Folder Types
 */

$R['pfs_icon_gallery'] = 
	'<img class="icon" src="images/icons/default/gallery.png" alt="'.$L['Gallery'].'" />';
$R['pfs_icon_folder'] = 
	'<img class="icon" src="images/icons/default/folder.png" alt="'.$L['Folder'].'" />';

/**
 * Image / Thumb / Link Insert Icons
 */

$R['pfs_icon_pastefile'] = 
	'<img class="icon" src="images/icons/default/link.png" title="'.$L['pfs_pastefile'].'" />';
$R['pfs_icon_pasteimage'] = 
	'<img class="icon" src="images/icons/default/image.png" title="'.$L['pfs_pasteimage'].'" />';
$R['pfs_icon_pastethumb'] = 
	'<img class="icon" src="images/icons/default/thumbnail.png" title="'.$L['pfs_pastethumb'].'" />';

/**
 * Image / Thumb / Link Add Icons
 */

$R['pfs_link_addpix'] = 
	'<a href="javascript:addpix(\'{$pfs_file}\',\'{$c2}\',\'{$pfs_desc}\')">'.$R['pfs_icon_pasteimage'].'</a>';
$R['pfs_link_addthumb'] = 
	'<a href="javascript:addthumb(\'{$pfs_file}\',\'{$c2}\',\'{$pfs_desc}\')">'.$R['pfs_icon_pastethumb'].'</a>';
$R['pfs_link_addfile'] = 
	'<a href="javascript:addfile(\'{$pfs_file}\',\'{$c2}\',\'{$pfs_desc}\')">'.$R['pfs_icon_pastefile'].'</a>';


/**
 * Filetype Icons
 */

$R['pfs_icon_type'] = 
	'<img class="icon" src="images/filetypes/default/{$type}.png" alt="{$name}" />';

?>

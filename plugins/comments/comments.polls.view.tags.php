<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=polls.view.tags
Tags=polls.tpl:{POLLS_COMMENTS},{POLLS_COMMENTS_DISPLAY}
[END_COT_EXT]
==================== */

/**
 * Comments system for Cotonti
 *
 * @package comments
 * @version 0.7.0
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('comments', 'plug');

$t->assign(array(
	'POLLS_COMMENTS' => cot_comments_link('polls', 'id='.$id, 'polls', $id),
	'POLLS_COMMENTS_COUNT' => cot_comments_count('polls', $id),
	'POLLS_COMMENTS_DISPLAY' => cot_comments_display('polls', $id)
));

?>
<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div style="display:none" class="lgpd lgpd-<?php echo $module->id; ?>" style="">
		<div class="wc-inner">
			<?php echo $params->get('texto'); ?>
			<span class="accept">aceitar</span>
		</div>
</div>
<style>
.lgpd-<?php echo $module->id; ?>{
	z-index:99999;
	width:100%;
	position:fixed;
	bottom:0;
	right:0;
	padding: 15px;
}
.lgpd-<?php echo $module->id; ?> .wc-inner{
	margin: 0;
	width: 100%;
	padding: 10px 15px;
	border: 1px solid #ddd;
	background: #fff;
	border-radius: 5px;
	color: #222;
	font-size: 14px;
	box-shadow: 0 0 10px rgba(0,0,0,0.3);
	overflow: hidden;
}
@media all and (min-width: 800px) {
	.lgpd-<?php echo $module->id; ?> .wc-inner{
		max-width: 400px;
	}
}
.lgpd-<?php echo $module->id; ?> .wc-inner p {
	color: #111!important;
	margin: 0 0 5px 0!important;
	line-height: 20px!important;
	font-weight: normal;
}
.lgpd-<?php echo $module->id; ?> .wc-inner a{
	color: #000;
	font-weight:bold;
}
.lgpd-<?php echo $module->id; ?> .accept{
	position: relative;
	font-size: 14px;
	opacity: 1;
	padding: 5px 14px;
	background: #111;
	color: #fff;
	font-weight: normal;
	letter-spacing: 1px;
	border-radius: 15px;	
	float: left;
	cursor: pointer;
	margin-top: 15px;
}
</style>
<script>
window.addEventListener('load', () => {
	if(sessionStorage.showedLGDP == "false" || !sessionStorage.showedLGDP) {
		document.querySelector('.lgpd-<?php echo $module->id; ?>').style.display = 'block'
	}
	document.querySelector('.lgpd-<?php echo $module->id; ?> .close').addEventListener('click', event => {
		event.target.parentNode.parentNode.style.display = 'none'
		sessionStorage.showedLGDP = true
	})
})
</script>

<?php

/**
 * WoW Guild Members
 *
 * @author     Branko Wilhelm <bw@z-index.net>
 * @link       http://www.z-index.net
 * @copyright  (c) 2012 - 2013 Branko Wilhelm
 * @package    mod_wow_guild_members
 * @license    GNU General Public License v3
 * @version    $Id$
 */

defined('_JEXEC') or die;

JFactory::getDocument()->addStyleSheet(JUri::base(true) . '/modules/' . $module->module . '/tmpl/stylesheet.css');
?>
<table class="mod_wow_guild_members">
<?php if($params->get('display_thead')) { ?>
<thead>
    <tr>
    	<th class="name"><?php echo JText::_('MOD_WOW_GUILD_MEMBERS_NAME'); ?></th>
        <?php if($params->get('display_ranks')) { ?>
    	<th class="rank"><?php echo JText::_('MOD_WOW_GUILD_MEMBERS_RANK'); ?></th>
        <?php } ?>
        <?php if($params->get('display_level')) { ?>
    	<th class="level"><?php echo JText::_('MOD_WOW_GUILD_MEMBERS_LEVEL'); ?></th>
        <?php } ?>
    </tr>
</thead>
<?php } ?>
<tbody>
    <?php foreach ($members as $member) { ?>
    <tr>
        <td class="name">
        <?php if($params->get('display_race')) echo $member['race']; ?> 
        <?php if($params->get('display_class')) echo $member['class']; ?> 
        <?php echo $member['name']; ?>
        </td>
        <?php if($params->get('display_ranks')) { ?>
        <td class="rank"><?php echo $member['rank']; ?></td>
        <?php } ?>
        <?php if($params->get('display_level')) { ?>
        <td class="level"><?php echo $member['level']; ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</tbody>
</table>
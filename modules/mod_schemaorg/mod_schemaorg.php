<?php
/**
 * @version		3.8 modules/mod_schemaorg/mod_schemaorg.php
 * @since       3.7.1
 * @package		Template ItaliaPA
 * @subpackage	mod_schemaorg
 *
 * @author		Helios Ciancio <info@eshiol.it>
 * @link		http://www.eshiol.it
 * @copyright	Copyright (C) 2017, 2018 Helios Ciancio. All Rights Reserved
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL v3
 * Template Italia PA is free software. This version may have been modified
 * pursuant to the GNU General Public License, and as distributed it includes
 * or is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die;

if ($params->get('debug') || defined('JDEBUG') && JDEBUG)
{
    JLog::addLogger(array('text_file' => $params->get('log', 'eshiol.log.php'), 'extension' => 'mod_schemaorg_file'), JLog::ALL, array('mod_schemaorg'));
}
JLog::addLogger(array('logger' => (null !== $params->get('logger')) ? $params->get('logger') : 'messagequeue', 'extension' => 'mod_schemaorg'), JLOG::ALL & ~JLOG::DEBUG, array('mod_schemaorg'));
if ($params->get('phpconsole') && class_exists('JLogLoggerPhpconsole'))
{
    JLog::addLogger(array('logger' => 'phpconsole', 'extension' => 'mod_schemaorg_phpconsole'),  JLOG::DEBUG, array('mod_schemaorg'));
}
JLog::add(new JLogEntry(__FILE__, JLog::DEBUG, 'mod_schemaorg'));

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
require JModuleHelper::getLayoutPath('mod_schemaorg', $params->get('layout', 'default'));

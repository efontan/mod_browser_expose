<?php
/**
 * Browser Expose! Module
 *
 * @package ElGolem
 * @subpackage mod_browser_expose
 * @version   1.0 - 6 de Agosto de 2010
 * @author    Emmanuel Jose Fontan
 * @copyright (C) 2010 Emmanuel Jose Fontan (email : fontanemmanel@gmail.com)
 * @license		GNU/GPL, see LICENSE.php
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * Inspirado en User_Agent-Spy, plugin para Wordpress de Fernando Briano <http://picandocodigo.net>
 */
defined('_JEXEC') or die('Restricted access');

$img_browser = modBrowserExposeHelper::get_webbrowser($params);
$img_os = modBrowserExposeHelper::get_os($params);

echo '<span class="browser_expose" id="browser_expose">'.$img_browser.' '.$img_os.'</span>';
?>

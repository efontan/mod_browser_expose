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

class modBrowserExposeHelper {

	/*
	 ################################################
	#          	 GET_WEBBROWSER	                #
	################################################
	*/
	//Detecta el navegador y devuelve el tag img correspondiente:
	public static function get_webbrowser(&$params){
		global $user_agent;
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
			
		//fija las variables
		$size=$params->get('size');
		$name="browser/";
		$title=JText::_('USING_BROWSER');


		//obtiene el nombre del navegador
		if (preg_match('#Amaya/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="amaya";
			$title.=" Amaya";
			$version=$matches[1];
		} elseif (preg_match('#Opera/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="opera";
			$title.=" Opera";
			$version=$matches[1];
		} elseif (preg_match('#Dillo/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="dillo";
			$title.=" Dillo";
			$version=$matches[1];
		}elseif (preg_match('/NetSurf/i',$user_agent)){
			$name.="netSurf";
			$title.=" NetSurf";
			$version="";
		}elseif (preg_match('/w3m/i',$user_agent)){
			$name.="w3m";
			$title.=" w3m";
			$version="";
		}elseif (preg_match('/Traveler/i',$user_agent)){
			$name.="traveler";
			$title.=" Traveler";
			$version="";
		}elseif (preg_match('#Lobo/([.0-9a-zA-Z]+)#i', $user_agent,$regmatch)){
			$name.="lobo";
			$title.=" Lobo Browser";
			$version=$regmatch[1];
		}elseif (preg_match('#K-Meleon/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="kmeleon";
			$title.=" K-Meleon";
			$version=$matches[1];
		}elseif (preg_match('#Camino/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="camino";
			$title.=" Camino";
			$version=$matches[1];
		}elseif (preg_match('#Galeon/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="galeon";
			$title.=" Galeon";
			$version=$matches[1];
		}elseif (preg_match('/Swiftfox/i',$user_agent)){
			$name.="swiftfox";
			$title.=" Swiftfox";
			$version="";
		}elseif (preg_match('#IceWeasel/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="iceWeasel";
			$title.=" GNU IceWeasel";
			$version=$matches[1];
		}elseif (preg_match('#IceCat/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="iceCat";
			$title.=" GNU IceCat";
			$version=$matches[1];
		}elseif (preg_match('#Flock/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="flock";
			$title.=" Flock";
			$version=$matches[1];
		}elseif (preg_match('#Orca/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="orca";
			$title.=" Orca Browser";
			$version=$matches[1];
		}elseif (preg_match('#Songbird/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="songbird";
			$title.=" Songbird";
			$version=$matches[1];
		}elseif (preg_match('#Minefield/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="minefield";
			$title.=" Minefield";
			$version=$matches[1]." (guarda!)";
		}elseif (preg_match('#SeaMonkey/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="seamonkey";
			$title.=" SeaMonkey";
			$version=$matches[1];
		}elseif (preg_match('#Navigator/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="netscape";
			$title.=" Netscape Navigator";
			$version=$matches[1];
		}elseif (preg_match('#Firefox/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="firefox";
			$title.=" Mozilla Firefox";
			$version=$matches[1];
		}elseif (preg_match('#Konqueror/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="konqueror";
			$title.=" Konqueror";
			$version=$matches[1];
		}elseif (preg_match('#Arora/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="arora";
			$title.=" Arora";
			$version=$matches[1];
		}elseif (preg_match('/Midori/i',$user_agent)){
			$name.="midori";
			$title.=" Midori";
			$version="";
		}elseif (preg_match('#Epiphany/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="epiphany";
			$title.=" Epiphany";
			$version=$matches[1];
		}elseif (preg_match('#ChromePlus/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="chrome";
			$title.=" ChromePlus";
			$version=$matches[1];
		}elseif (preg_match('/Shiira/i',$user_agent)){
			$name.="shiira";
			$title.=" Shiira";
			$version="";
		}elseif (preg_match('#OmniWeb/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="omniWeb";
			$title.=" OmniWeb";
			$version=$matches[1];
		}elseif (preg_match('#Chrome/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="chrome";
			$title.=" Google Chrome";
			$version=$matches[1];
		}elseif (preg_match('#Safari/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="safari";
			$title.=" Safari";
			$version=$matches[1];
		}elseif (preg_match('/Links/i',$user_agent)){
			$name.="links";
			$title.=" Links";
			$version="";
		}elseif (preg_match('/Lynx/i',$user_agent)){
			$name.="lynx";
			$title.=" Lynx";
			$version="";
		}elseif (preg_match('/Maxthon/i',$user_agent)){
			$name.="maxthon";
			$title.=" Maxthon";
			$version="";
		}elseif (preg_match('/TheWorld/i',$user_agent)){
			$name.="theworld";
			$title.=" TheWorld Browser";
			$version="";
		}elseif (preg_match('/MSIE ([.0-9]+)/i',$user_agent,$matches)){
			$name.="ie";
			$title.=" Internet Explorer";
			$version=$matches[1];
		}elseif (preg_match('#Mozilla/([.0-9a-zA-Z]+)#i',$user_agent,$matches)){
			$name.="mozilla";
			$title.=" Mozilla Compatible Browser";
			$version=$matches[1];
		}else{
			$name.="unknown";
			$title.=" ".JText::_('UNKNOWN_BROWSER');
			$version="";
		}

		$title.=" ".$version;
		return modBrowserExposeHelper::get_img($name,$title,$size);
	}

	/*
	 ################################################
	#             		  GET_OS	                #
	################################################
	*/
	//Detecta el sistema operativo y devuelve el tag img correspondiente:
	public static function get_os(&$params){
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
			
		//fija las variables
		$size=$params->get('size');
		$name="os/";
		$title=JText::_('USING_OS');

		//obtiene el nombre del SO
		if (preg_match('#(Windows|Win) ([a-zA-Z0-9.\ ]+)#i', $user_agent, $matches)){
			$name.="win";
			$title.=modBrowserExposeHelper::get_winname($matches[0]);

		}elseif (preg_match('/Windows/i', $user_agent)){
			$name.="win";
			$title.=" Windows";
		}elseif (preg_match('/Mac/i', $user_agent)){
			$name.="mac";
			$title.=" Mac OS";
		}elseif (preg_match('/Solaris/i', $user_agent)){
			$name.="solaris";
			$title.=" Solaris";
		}elseif (preg_match('/CrOS/i', $user_agent)){
			$name.="chrome";
			$title.=" Chrome OS";
		}elseif (preg_match('/FreeBSD/i', $user_agent)){
			$name.="freeBSD";
			$title.=" FreeBSD";
		}elseif (preg_match('/OpenBSD/i', $user_agent)){
			$name.="openBSD";
			$title.=" OpenBSD";
		}elseif (preg_match('/Android/i', $user_agent)){
			$name.="android";
			$title.=" Android";
		}elseif (preg_match('/Ubuntu/i', $user_agent)){
			$name.="ubuntu";
			$title.=" Ubuntu";
		}elseif (preg_match('/Kubuntu/i', $user_agent)){
			$name.="kubuntu";
			$title.=" Kubuntu";
		}elseif (preg_match('/Xubuntu/i', $user_agent)){
			$name.="xubuntu";
			$title.=" Xubuntu";
		}elseif (preg_match('/Mint/i', $user_agent)){
			$name.="sndroid";
			$title.=" Linux Mint";
		}elseif (preg_match('/Fedora/i', $user_agent)){
			$name.="fedora";
			$title.=" Fedora";
		}elseif (preg_match('/Debian/i', $user_agent)){
			$name.="debian";
			$title.=" Debian";
		}elseif (preg_match('/Mandriva/i', $user_agent)){
			$name.="mandriva";
			$title.=" Mandriva";
		}elseif (preg_match('/Slackware/i', $user_agent)){
			$name.="slackware";
			$title.=" Slackware";
		}elseif (preg_match('/OpenSuse/i', $user_agent)){
			$name.="suse";
			$title.=" OpenSuse";
		}elseif (preg_match('/Suse/i', $user_agent)){
			$name.="suse";
			$title.=" Suse";
		}elseif (preg_match('/Gentoo/i', $user_agent)){
			$name.="gentoo";
			$title.=" Gentoo";
		}elseif (preg_match('/Linux/i', $user_agent)){
			$name.="linux";
			$title.=" GNU/Linux";
		}else{
			$name.="unknown";
			$title.=" ".JText::_('UNKNOWN_OS');
		}


		$title.="";
		return modBrowserExposeHelper::get_img($name,$title,$size);
	}

	/*
	 ################################################
	#             	  GET_WINNAME	                #
	################################################
	*/
	//Devuelve la version de Windows:
	private static function get_winname($ver_match){
		if (preg_match('/NT 6.1/i',$ver_match)){
			$winname=" Windows 7";
		}elseif (preg_match('/NT 6.0/i',$ver_match)){
			$winname=" Windows Vista";
		}elseif (preg_match('/NT 5.1/i',$ver_match)){
			$winname=" Windows XP";
		}elseif (preg_match('/NT 5.0|2000/i',$ver_match)){
			$winname=" Windows 2000";
		}elseif (preg_match('/9x 4.90/i',$ver_match)){
			$winname=" Windows ME";
		}elseif (preg_match('/NT4.0/i',$ver_match)){
			$winname=" Windows NT 4";
		}elseif (preg_match('/NT/i',$ver_match)){
			$winname=" Windows NT";
		}elseif (preg_match('/Win98/i',$ver_match)){
			$winname=" Windows 98";
		}elseif (preg_match('/Win95/i',$ver_match)){
			$winname=" Windows 95";
		}elseif (preg_match('/(Windows|Win) Movile/i',$ver_match)){
			$winname=" Windows Movile";
		}elseif (preg_match('/(Windows|Win) CE/i',$ver_match)){
			$winname=" Windows CE";
		}

		return $winname;
	}

	/*
	 ################################################
	#             		  GET_IMG	                #
	################################################
	*/
	//Devuelve el tag img:
	private static function get_img($name,$title,$size){
		$src = JURI::root(true)."/modules/mod_browser_expose/images/$size/$name.png";
		return "<img src=\"$src\" title=\"$title\" alt=\"\" />";
	}

}

?>

<?php

/* BIG Config File */

/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: designsbyeddy.tech
$siteKey = "6LcZCkIUAAAAANVNYQ__uB0bByD9bKaajtsqQ9eJ";
$secretKey = "6LcZCkIUAAAAAE8-A_BOnqF6NDUbTEkZnSiEj0qk";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Eddy Matlock-Mahon: WEB120 BIG Website';
        $logo = 'fas fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'flexbox.php':
        $title = 'Eddy Matlock-Mahon: Flexbox Research';
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = 'Eddy Matlock-Mahon: Galleries Research';
        $logo = 'far fa-images';
        $PageID = 'Galleries Research';
    break;

    case 'map.php':
        $title = 'Eddy Matlock-Mahon: Google Map';
        $logo = 'fas fa-globe';
        $PageID = 'Google Map';
    break;
        
    case 'calendar.php':
        $title = 'Eddy Matlock-Mahon: Google Event Calendar';
        $logo = 'far fa-calendar-alt';
        $PageID = 'Google Event Calendar';
    break;
        
    case 'youtube.php':
        $title = 'Eddy Matlock-Mahon: Intro to WordPress YouTube Video';
        $logo = 'fab fa-youtube';
        $PageID = 'Intro to WordPress YouTube Video';
    break; 
        
    case 'parallax.php':
        $title = 'Eddy Matlock-Mahon: Parallax Research';
        $logo = '';
        $PageID = 'Parallax Research';
    break;

    case 'shoppingcart.php':
        $title = 'Eddy Matlock-Mahon: Shopping Cart Research';
        $logo = 'fas fa-shopping-cart';
        $PageID = 'Shopping Cart Research';
    break;
        
    case 'webcam.php':
        $title = 'Eddy Matlock-Mahon: Web Cams';
        $logo = 'fas fa-video';
        $PageID = 'Web Cams';
    break;
        
    case 'siteapp.php':
        $title = 'Eddy Matlock-Mahon: Responsive Website vs. Native Mobile App Research';
        $logo = '';
        $PageID = 'Responsive Website vs. Native Mobile App Research';
    break; 
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}
/******************************
	Basic
**********************************/

@import url('https://fonts.googleapis.com/css?family=Roboto');
body {
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    background: url('<?php echo ossn_theme_url();?>images/noise.png');
 	font-size: 14px;
    line-height: 1.42857143;
    color: #333;   
        font-weight: initial;
}
.ossn-awesome-logo {} .ossn-awesome-landing-row {} 
a:focus,
a:hover,
a {
    color: <?php echo oa_theme_get_settings('linkcolor');?>;
}
.ossn-layout-startup {
    background: url('<?php echo ossn_theme_url();?>images/background2.jpg') no-repeat;
    background-size: cover;
    padding-bottom: 30px;
}
.ossn-awesome-landing-row .oa-user-circle {
    text-align: center;
}
.ossn-awesome-landing-row i {
    font-size: 70px;
    color: <?php echo oa_theme_get_settings('linkcolor');?>;
}
.ossn-form input[type='password'],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type='text'] {
    width: 100%;
    border: 1px solid #eee;
    padding: 10px;
    margin-bottom: 5px;
    outline: none;
    display: block;
    resize: vertical;
    border-radius: 4px;
}
.ossn-form input[type='submit'] {
    margin-top: 5px;
    margin-bottom: 5px;
}
.oa-landing-form {
    margin-top: 20px;
}
.form-control {
    height: 40px;
}
.ossn-text-input,
.form-control {
    border-radius: 2px;
    border: none;
    border-bottom: 1px solid #E0E0E0;
    box-shadow: 0 1px 5px -2px rgba(0, 0, 0, .2);
}
.ossn-text-input:focus,
.form-control:focus {
		box-shadow: 0 3px 5px -2px <?php echo oa_theme_get_settings('linkcolor_hover');?>;
   		border-bottom: 1px solid <?php echo oa_theme_get_settings('linkcolor_hover');?>;
}
.oa-landing-form .col-md-12,
.oa-landing-form .col-md-6 {
    padding-left: 5px;
    padding-right: 5px;
}
.ossn-text-input {
    height: 40px;
    display: block;
    width: 100%;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.radio-block {
    margin-top: 10px;
    margin-bottom: 10px;
    cursor: pointer;
}
.radio-block span {
    display: inline-block;
    margin-right: 10px;
    font-size: 15px;
    font-weight: bold;
    margin-left: 10px;
}
.topbar {
    margin-top: 20px;
}
.topbar-inner {
    padding-bottom: 10px;
}
.text-right {
    text-align: right;
}
.topbar .site-name {
    color: <?php echo oa_theme_get_settings('linkcolor');?>;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 5px;
}
.ossn-login-form .form-control {
    width: initial !important;
    display: inline-block !important;
}
.btn {
    cursor: pointer;
}
.ossn-awesome-landing-row .description {
    margin-top: 15%;
    color: <?php echo oa_theme_get_settings('linkcolor');?>;
    text-align: justify;
}
.home-right-contents {
    margin-top: 50px;
}
.btn-outline-primary {
    color: #0275d8;
    background-image: none;
    background-color: transparent;
    border-color: #0275d8;
}
.ossn-red-borders {
    border: 1px solid #a94442 !important;
}
.fa {
    margin-right: 5px;
}
.ossn-hidden {
    display: none;
}
.hidden {
    display: none !important;
}
p {
    font-size: 15px;
}
.col-center {
    float: none;
    margin: 0 auto;
}
.container-table {
    display: table;
    width: 100%;
}
.center-row {
    display: table-cell;
    text-align: center;
}
.radio-block {
    margin-top: 10px;
    margin-bottom: 10px;
}
.radio-block span {
    display: inline-block;
    margin-right: 10px;
    font-size: 15px;
    font-weight: bold;
    margin-left: 10px;
}
.btn-default {
  color: #292b2c;
  background-color: #fff;
  border-color: #ccc;
}

.btn-default:hover {
  color: #292b2c;
  background-color: #e6e6e6;
  border-color: #adadad;
}

.btn-default:focus, .btn-default.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
          box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
}

.btn-default.disabled, .btn-default:disabled {
  background-color: #fff;
  border-color: #ccc;
}

.btn-default:active, .btn-default.active,
.show > .btn-default.dropdown-toggle {
  color: #292b2c;
  background-color: #e6e6e6;
  background-image: none;
  border-color: #adadad;
}
.btn-black {
	color: #fff;
   background-color: #292b2c;
  border-color: #ccc;
}

.btn-black:hover {
    color: #fff;
    background-color: #5a5d5f;
  border-color: #adadad;
}

.btn-black:focus, .btn-black.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
          box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
}

.btn-black.disabled, .btn-black:disabled {
  background-color: #fff;
  border-color: #ccc;
}

.btn-black:active, .btn-black.active,
.show > .btn-black.dropdown-toggle {
    color: #fff;
    background-color: #5a5d5f;
  background-image: none;
  border-color: #adadad;
}
.btn-outline-black {
  color: #333;
  background-image: none;
  background-color: transparent;
  border-color: #333;
}

.btn-outline-black:hover {
  color: #fff;
  background-color: #333;
  border-color: #333;
}

.btn-outline-black:focus, .btn-outline-black.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
          box-shadow: 0 0 0 2px rgba(204, 204, 204, 0.5);
}

.btn-outline-black.disabled, .btn-outline-black:disabled {
  color: #333;
  background-color: transparent;
}

.btn-outline-black:active, .btn-outline-black.active,
.show > .btn-outline-black.dropdown-toggle {
  color: #fff;
  background-color: #333;
  border-color: #333;
}
.bg-black {
    background-color: #333;
}
.oa-width-full {
	width:100%;
}
p {
  margin-bottom:0px;
}
/************************************
	Layouts
************************************/
/** didn't we have a minimum page height in goblue? #702 **/

.ossn-layout-module,
.ossn-layout-contents,
.ossn-layout-newsfeed,
.ossn-layout-media {
    margin-top: 10px;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.ossn-layout-group {
    width: 100%;
}
.ossn-group-profile .ossn-group-bottom-row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 100%;
}
.ossn-group-profile .ossn-layout-module {
    display: block;
}
.ossn-home-container,
.ossn-layout-startup {} .ossn-home-container .ossn-page-contents {
    background: rgba(255, 255, 255, 0);
    border: none;
}
.ossn-layout-startup {} .ossn-layout-startup footer .ossn-footer-menu a {
    color: #fff;
}
.ossn-home-container {
    margin-top: 20px;
    width: 100%;
}
.ossn-layout-newsfeed .newsfeed-right {} .ossn-page-container {
    overflow-x: hidden;
    min-height: 400px;
}
.ossn-layout-module {
    margin-top: 10px;
    background: #fff;
    border: 1px solid #eee;
    padding: 10px;
}
.oa-before-login  {
	margin-top:20px;
}	
.oa-before-login a {
	display:initial;
    margin-right:5px;
}	
.ossn-layout-module .module-title {
    background: #F9F7F7;
    border: 1px solid #eee;
    padding: 10px;
    width:100%;
}
.ossn-layout-module .module-contents {
    padding: 10px;
    width:100%;
}
.ossn-layout-module .module-title .title {
    font-weight: bold;
    display: inline-block;
    width:100%;
}
.ossn-layout-module .controls {
    float: right;
    display: inline-table;
}
.ossn-layout-media {
    margin-top: 10px;
}
.ossn-layout-media .like-share,
.ossn-layout-media .comments-list {
    margin-left: -10px;
    margin-right: -10px;
}
.ossn-layout-media .content,
.ossn-page-contents {
    background: #fff;
    padding: 10px;
    border: 1px solid #eee;
}
.opensource-socalnetwork {
    min-height: 500px;
}
.ossn-home-container .row {
    margin-right: 10px;
    margin-left: 10px;
}
#ossn-signup-errors {
    display: none;
    margin-top: 10px;
}
.ossn-error-page {
    text-align: center;
    padding: 100px;
}
.ossn-error-page .error-heading {
    font-size: 50px;
    font-weight: bold;
}
.ossn-error-page .error-text {
    font-size: 16px;
}
.ossn-error-page .fa-exclamation-triangle {
    font-size: 100px;
}
.ossn-group-members {
    margin-right: 5px;
    width:100%;
}
.ossn-page-loading-annimation {
    background: #fff;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
}
.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
    width: 24px;
    margin: 0 auto;
    margin-top: 20%;
}
.topbar-menu-right #ossn-notif-friends,
.topbar-menu-right #ossn-notif-messages,
.topbar-menu-right #ossn-notif-notification {
    display: inline-block;
    margin-right: 10px;
    font-size: 20px;
}
.ossn-topbar-dropdown-menu {
    float: right;
    display: inline-block;
    margin-top: -5px;
    padding-bottom: 0;
}
.topbar-menu-right {
    text-align: right;
    display: inline-block;
}
.ossn-topbar-dropdown-menu ul {
    margin-left: -180px;
    top: 48px;
}
.oa-topbar-user-metadata {
    padding-top: 5px;
}
.oa-topbar-user-metadata img {
    border-radius: 100%;
}
.oa-topbar-user-metadata span a {
    color: #fff;
    margin-left: 5px;
}
.ossn-search input[type='text'] {
    width: initial !important;
    margin-right: 10px !important;
    padding: 10px;
    height: 35px;
}
.ossn-search {
    margin-top: 0px !important;
    display: inline-block;
}
/***********************************
	Ossn Wall
*************************************/

.ossn-wall {} .ossn-wall-items {} .ossn-wall-item {
    padding: 30px;
    padding-top: 10px;
    border: 1px solid #eee;
    margin-top: 20px;
    background-color: #fff;
    padding-bottom: 0px;
}
.ossn-wall-item:first-child {
    margin-top: 0px;
}
.ossn-wall-item .friends a {
    text-decoration: none;
}
.ossn-wall-item .friends a:first-child:before {
    content: "-";
    margin-left: 5px;
    margin-right: 5px;
}
.ossn-wall-item .user-img {
    border-radius: 50px;
    display: inline-block;
    float: left;
    margin-right: 10px;
}
.ossn-wall-item .meta {
    width: 100%;
}
.ossn-wall-item .meta .user {
    display: inline-block;
    margin-top: 3px;
}
.ossn-wall-item .meta .user a {
    font-weight: bold;
}
.ossn-wall-item .meta .user span {
    color: #999;
}
.ossn-wall-item .post-contents {
    margin-top: 15px;
    width: 100%;
}
.ossn-wall-item .post-contents p {
    /** Incorrect Hyphenation in the theme GoBlue 3.0 #824 **/
    
    word-break: break-word;
    text-align: justify;
}
.ossn-wall-item .post-contents img {
    max-width: 100%;
    border: 1px solid #eae8e8;
    display: block;
    margin-bottom: 10px;
}
.ossn-wall-item .meta .post-menu {
    float: right;
}
.ossn-wall-container {
    padding-top: 0px;
    margin-bottom: 10px;
}
.ossn-wall-container textarea {
    padding: 10px;
    width: 100%;
    border: 1px solid;
    border-color: #E5E6E9 #DFE0E4;
    border-bottom: 0px;
    border-top: 0px;
    resize: none;
    outline: none;
}
.ossn-wall-container .controls {
    background-color: #F6F7F8;
    border-bottom: 1px solid #E9EAED;
    border-left: 1px solid #E9EAED;
    border-right: 1px solid #E9EAED;
    height: 40px;
    width: 100%;
    margin-top: 3px;
    margin-top: -5px;
    padding-right: 10px;
}
.ossn-wall-container .wall-tabs {
    border-bottom: 1px solid #E5E5E5;
    background-color: #F6F7F8;
    border: 1px solid #E9EAED;
}
.ossn-wall-container .wall-tabs .item {
    padding: 10px;
    display: inline-flex;
    cursor: pointer;
    border-bottom: 1px solid #eee;
    font-weight: bold;
    font-size: 13px;
}
.ossn-wall-container .wall-tabs .item:hover {
    background: #eee;
}
.ossn-wall-container .wall-tabs .item div {
    display: inline-block;
}
.ossn-wall-container .wall-tabs .item .text {
    font-weight: bold;
    margin-top: 1px;
    margin-left: 5px;
    position: absolute;
    font-size: 15px;
}
.ossn-wall-container .tabs-input {} .ossn-wall-container .controls li {
    padding: 10px;
    display: inline-block;
    cursor: pointer;
}
.ossn-wall-container .controls li:hover {
    background: #eee;
}
.ossn-wall-privacy {
    float: right;
    margin-right: 5px;
}
.ossn-wall-container input[type='submit'] {
    padding: 3px 20px;
    display: block;
    margin-top: 6px;
}
.ossn-wall-container i {
    font-size: 15px;
}
.ossn-wall-container input[type="file"] {
    border-left: 1px solid #EEE;
    border-right: 1px solid #EEE;
}
.ossn-wall-container input[type="file"],
.ossn-wall-container input[type="text"] {
    width: 100%;
    border-top: 1px dashed #EEE;
    padding: 5px;
    margin-bottom: 5px;
    margin-top: -5px;
    outline: none;
}
#token-input-ossn-wall-friend-input {
    width: 100% !important;
    border-top: 1px dashed #EEE;
    padding: 7px;
    margin-bottom: 5px;
    margin-top: -5px;
}
#ossn-wall-form .ossn-loading {
    margin: 7px;
}
.ossn-wall-item-type {
    display: inline-block;
}
.ossn-wall-item .friends {
    display: inline-block;
}
/*******************************
	Comments Likes
********************************/

.ossn-comment-menu {
    float: right;
    display: none;
}
.comments-item:hover .ossn-comment-menu {
    display: block;
}
.comments-likes {
    min-height: 50px;
    width: 100%;
}
.menu-likes-comments-share {
    margin-bottom: 10px;
}
.menu-likes-comments-share li {
    display: inline-block;
}
.menu-likes-comments-share li::after {
    content: "-";
    margin-left: 5px;
    margin-right: 5px;
    color: #ccc;
}
.menu-likes-comments-share li:last-child:after {
    content: " ";
}
.comments-list {
    background-color: #FBFBFB;
    margin-left: -15px;
    margin-right: -15px;
    padding-left: 10px;
    padding-right: 10px;
}
.comments-list .comments-item {
    padding-top: 10px;
    padding-bottom: 5px;
}
.comments-list .comments-item:first-child {
    margin-top: 0px;
    padding-top: 10px;
}
.comments-list .comments-item:last-child {
    border-bottom: none;
}
.comments-list .comments-item .comment-user-img {
    display: inline-block;
    border-radius: 32px;
}
.comments-list .comments-item .comment-contents {
    display: inline-block;
    margin-top: -3px;
}
.comment-container {
    padding-bottom: 10px;
    position: relative;
    z-index: 0;
}
.comments-item .col-md-11 {
}
.comment-metadata .time-created,
.comment-metadata a {
    display: inline-block;
}
.comment-contents p {
    margin: 0px;
    word-break: break-word;
    text-align: justify;
}
.comment-contents p img {
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    max-width: 100%;
}
.comment-contents .owner-link {
    font-weight: bold;
    margin-right: 5px;
    font-size: 14px;
}
.comment-contents {
    width: 100%;
}
.comment-container span[readonly='readonly'],
.comment-container input[readonly='readonly'] {
    background: #eee;
}
.comment-box {
    width: 100%;
    border: 1px solid #eee;
    padding: 5px 30px 5px 5px !important;
    margin-bottom: 5px;
    outline: none;
    display: block;
    resize: vertical;
    background: #fff;
    min-height: 32px;
}
[contentEditable=true]:empty:not(:focus)::before {
    content: attr(placeholder);
}
/*********************************
	Like
************************************/

.like-share {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px;
    margin-top: 10px;
    background-color: #FBFBFB;
    margin-left: -15px;
    margin-right: -15px;
    padding-left: 20px;
    padding-right: 20px;
}
.ossn-like-comment,
.ossn-total-likes {
    margin-left: 10px;
}
/********************************
	Global
***********************************/

.time-created {
    font-size: 14px;
    font-style: italic;
    color: #999;
}
/********************************
	Sidebar Nav
*********************************/

.sidebar {
    background-color: #333;
    height: 200px;
    z-index: 1000;
    width: 200px;
    position: absolute;
    height: 100%;
    margin-left: -200px;
    overflow-y: auto;
    overflow-x: hidden;
    color: #fff;
}
.sidebar-close {
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.sidebar-open {
    margin-left: 0px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.sidebar-open-no-annimation {
    margin-left: 0px;
}
.sidebar-open-page-container {
    margin-left: 200px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.sidebar-open-page-container-no-annimation {
    margin-left: 200px;
}
.sidebar-close-page-container {
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.newseed-uinfo {
    padding: 10px;
}
.newseed-uinfo img {
    display: inline-block;
    border-radius: 50px;
    float: left;
}
.newseed-uinfo .name {
    display: inline-block;
    width: 100px;
    margin-left: 10px;
    margin-top: -2px;
}
.newseed-uinfo .name a {
    font-weight: bold;
    display: block;
    color: #fff;
    font-size: 13px;
}
.newseed-uinfo .name .edit-profile {
    font-weight: inherit;
}
.sidebar-menu-nav {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    top: 0px;
    width: 100%;
    height: 100%;
}
.sidebar-menu-nav ul,
.sidebar-menu-nav li {
    list-style: none;
    padding: 0px;
    margin: 0px;
    line-height: 35px;
    cursor: pointer;
}
.sidebar-menu-nav ul:not(collapsed) .arrow:before,
.sidebar-menu-nav li:not(collapsed) .arrow:before {
    font-family: FontAwesome;
    content: "\f078";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    float: right;
}
.sidebar-menu-nav ul .sub-menu li {
    padding-left: 20px;
}
.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
    border: none;
    line-height: 28px;
    border-bottom: 1px solid #23282e;
    margin-left: 0px;
}
.sidebar-menu-nav ul .sub-menu li:hover,
.sidebar-menu-nav li .sub-menu li:hover {
    background-color: #020203;
}
.sidebar-menu-nav ul .sub-menu li:before,
.sidebar-menu-nav li .sub-menu li:before {
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
}
.sidebar-menu-nav li {
    padding-left: 0px;
    border-bottom: 1px solid #23282e;
}
.sidebar-menu-nav li a {
    text-decoration: none;
    color: #fff;
}
.sidebar-menu-nav li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
}
.sidebar-menu-nav li:hover {
    border-left: 3px solid #fff;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
@media (max-width: 767px) {
    .sidebar-menu-nav {
        position: relative;
        width: 100%;
        margin-bottom: 10px;
    }
    .ossn-group-members {
        height: 75px !important;
    }
}
/******************************
	Ossn global css clsses
*******************************/

.right {
    float: right;
}
.left {
    float: left;
}
.text-right {
    text-align: right;
}
.text-left {
    text-align: left;
}
.text-center {
    text-align: center;
}
.margin-top-10 {
    margin-top: 10px;
}
.margin-top-20 {
    margin-top: 20px;
}
/************************
	Dropdown
***************************/

.dropdown-submenu {
    position: relative;
}
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}
.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}
.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}
.dropdown-submenu:hover>a:after {
    border-left-color: #333;
}
.dropdown-submenu.pull-left {
    float: none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.dropmenu-topbar-icons {
    left: inherit;
    right: 0;
}
.dropdown-submenu li {
    cursor: pointer;
}
.dropdown-menu-oa {
    margin-top: 35px !important;
    margin-left: -45px !important;
}
/******************************************
	Ossn Ads
*******************************************/

.ossn-ad-item {} .ossn-ad-item .ad-image {
    max-width: 100%;
    margin: 0 auto;
    display: block;
}
.ossn-ad-item a {
    text-decoration: none;
    color: #000;
    cursor: pointer;
}
.ossn-ad-item .ad-title {
    font-weight: bold;
    font-size: 15px;
    margin-bottom: 5px;
}
.ossn-ad-item .ad-link {
    margin-bottom: 5px;
}
.ossn-ad-item p {
    margin-top: 10px;
    text-align: justify;
}
/*****************************
	Widgets
******************************/

.ossn-widget {
    margin-bottom: 10px;
    background-color: #fff;
}
.ossn-widget .widget-heading {
    background: #F6F7F8;
    border: 1px solid #eee;
    padding: 10px;
    font-weight: bold;
}
.ossn-widget .widget-contents {
    padding: 10px;
    border-bottom: 1px solid #eee;
}
/***********************************
	Ossn Notifications
***************************************/

.ossn-notifications-box {
    width: 430px;
    color: #000;
    padding-bottom:5px;
}
.ossn-notifications-box .notificaton-item {
    border-bottom: 1px solid #eee;
}
.ossn-notifications-box .notificaton-item:hover,
.ossn-notifications-box .notificaton-item .active {
    background-color: #F9F9F9;
}
.ossn-notifications-box .type-name {
    font-size: 13px;
    font-weight: bold;
    padding: 1px 10px 5px 10px;
    color: #000;
    height: 25px;
    border-bottom: 1px solid #DDDDDD;
}
.ossn-notification-box-loading {
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
}
.ossn-no-notification {
    text-align: center;
    padding: 10px;
}
.ossn-notifications-box .type-name .title {
    display: inline-block;
}
.ossn-notifications-box .type-name .links {
    display: inline-block;
    float: right;
}
.ossn-notifications-box .type-name .links a {
    color: #337ab7;
    display: inline;
    font-weight: normal;
}
.ossn-notifications-box .notification-image,
.ossn-notifications-box .notification-image img {
    width: 50px;
    height: 50px;
    display: inline-block;
}
.ossn-notifications-box .bottom-all a,
.ossn-notifications-box .notfi-meta strong {
 	color: <?php echo oa_theme_get_settings('linkcolor');?>;
}
.ossn-notifications-box .notfi-meta {
    width: 330px;
    margin-left: 5px;
    display: inline-block;
    float: right;
    color: #000;
}
.ossn-notifications-box .bottom-all a {
    font-weight: bold;
}
.ossn-notifications-box .bottom-all {
    background: #F7F7F7;
    text-align: center;
    padding: 0px;
    padding-top: 10px;
    display: block;
    height: 40px;
    border-top: 1px solid #eee;
}
.ossn-notifications-box .metadata {
    margin-bottom: -5px;
}
.ossn-notifications-box .messages-inner {
    max-height: 400px;
    overflow: hidden;
    overflow-y: scroll;
}
.latest-users img {
    margin-bottom: 5px;
}
.ossn-notification-mark-read {
    float: right;
}
.ossn-notifications-all a {} .ossn-notifications-all li {
    padding: 10px;
    display: block;
}
.ossn-notifications-all a:hover {
    cursor: pointer;
    background-color: transparent;
    text-decoration: none;
}
.ossn-notifications-box li:hover,
.ossn-notifications-box a:hover,
.ossn-notifications-all a:hover,
.ossn-notifications-all li:hover {
    background: #F9F9F9;
}
.ossn-notification-container {
    background-color: #dc0d17;
    background-image: -webkit-linear-gradient(#fa3c45, #dc0d17);
    color: #fff;
    min-height: 13px;
    padding: 1px 3px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
    -webkit-border-radius: 2px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .7);
    -webkit-background-clip: padding-box;
    display: inline-block;
    font-size: 11px;
    line-height: normal;
    position: absolute;
    margin-left: -10px;
    z-index: 0;
}
.ossn-notifications-all {
	font-size:14px;
}
.dropdown-item.active, .dropdown-item:active {
    background-color: #dcdcdc;
    outline: none;	
}
.notification-friends .image {
    width: 50px;
    height: 50px;
    display: inline-table;
    float: left;
}
.ossn-notifications-friends-inner {
    padding: 6px;
}
.ossn-notifications-friends-inner form {
    display: inline-table;
}
.ossn-notification-page li img {
    display: none;
}
.notification-friends li {
    margin-bottom: 5px;
    width: 100%;
    border-bottom: 1px solid #eee;
}
.notification-friends .notfi-meta a {
    color: #337ab7;
    font-weight: bold;
    display: inline-block;
    width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.ossn-notifications-friends-inner .controls {
    float: right;
    margin-top: 6px;
    display: inline-block;
}
.ossn-notifications-friends-inner .btn {
    padding: 3px 9px;
    border-radius: 1px;
}
.notification-friends {
    max-height: 400px;
}
/*******************************
	Profile
********************************/

.ossn-profile .top-container {
    background: #fff;
    border: 1px solid #C4CDE0;
    border-width: 1px 1px 2px;
}
.ossn-profile .top-container .profile-cover {
    height: 200px;
    overflow: hidden;
    opacity: .99;
    background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(1%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, .38)));
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
    background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#94000000', GradientType=0);
    position: relative;
}
.ossn-profile .top-container .profile-cover img {
    width: 100%;
}
.ossn-profile-row {
    margin-bottom: 20px;
}
.profile-hr-menu ul {
    margin-bottom: 0px;
    padding: 0px;
}
.profile-hr-menu ul li {
    padding-top: 7px;
    padding-bottom: 7px;
    display: block;
}
.profile-hr-menu ul li a {
    display: block;
    padding-left: 5px;
    font-weight: bold;
    text-decoration: none;
}
.profile-hr-menu ul li:hover {
    background: #eee;
}
.profile-hr-menu .dropdown-menu li {
    display: block;
}
.profile-hr-menu .dropdown a i {
    margin-left: 5px;
}
.profile-hr-menu .dropdown-menu li a {
    border-right: 0px;
    margin-right: 0px;
}
.profile-hr-menu ul li:hover {} .profile-hr-menu {} .profile-hr-menu ul li:last-child {
    border-right: none;
}
.profile-photo {
    margin-bottom: 110px;
}
.user-fullname {
    color: #7d7d7d;
    font-size: 1.9vw;
    font-weight: bold;
}
.ossn-profile-role {
    font-size: 25px !important;
    margin-top: -105px !important;
}
.btn-standalone-grey {
    color: #333;
    font-weight: bold;
    text-decoration: none;
    width: auto;
    margin: 0;
    font-size: 12px;
    line-height: 16px;
    padding: 5px 6px;
    cursor: pointer;
    outline: none;
    text-align: center;
    white-space: nowrap;
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.10), inset 0 1px 0 #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
    border: 1px solid #999;
    border-bottom-color: #888;
    background: #EEE;
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
    background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
    background: -o-linear-gradient(#f5f6f6, #e4e4e3);
    background: linear-gradient(#F5F6F6, #E4E4E3);
    text-decoration: none;
}
.btn-standalone-grey:active {
    background: #ddd;
    border-bottom-color: #999;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
}
.btn-standalone-grey:hover {
    color: #333;
    text-decoration: none;
}
.profile-cover-controls {
    position: absolute;
    width: 100%;
    margin-right: -32px;
    margin-top: 150px;
    z-index: 1;
}
.change-cover {
    float: right;
    position: relative;
    margin-right: 50px !important;
}
.reposition-cover {
    float: right;
    position: relative;
    margin-right: 5px !important;
}
.profile-menu {
    margin-top: 10px;
}
#cover-menu {
    display: none;
}
.upload-photo {
    background: #000;
    opacity: 0.5;
    width: 170px;
    padding: 10px;
    position: absolute;
    color: #FFF;
    text-align: center;
    z-index: 9999;
    border-radius: 100%;
    font-size: 15px;
    height: 170px;
    font-family: sans-serif;
    margin-top: -70px;
    margin-left: 30px;
    padding-top: 75px;
}
.upload-photo span {
    width: 100%;
    padding: 12px;
    text-align: center;
     margin-top: 45px;
    display: block;
}
.user-cover-uploading {
    opacity: 0.4;
}
.user-photo-uploading {
    height: 100%;
    opacity: 0.8;
    background: #fff;
    width: 100%;
    padding: 7px;
    position: absolute;
    border-radius: 2px;
}
.user-photo-uploading span {
    display: none;
}
.ossn-profile-bottom {
    margin-top: 10px;
}
.page-sidebar,
background: #fff;
border: 1px solid #eee;
padding: 10px;
}
.ossn-layout-media .content {
    margin-right: 10px;
    margin-left: 10px;
}
.ossn-profile-extra-menu {
    display: inline-block;
}
.profile-photo img {
    border-radius: 50%;
    position: absolute;
    margin-top: -70px;
    margin-left: 30px;
        border: 2px solid #ccc;
}
#profile-menu li a {
    padding: 0;
}
.bottom-container-profile {}
/*****************************
	Side Menu icons
*******************************/

.menu-section-item-newsfeed:before {
    content: "\f0a1" !important;
}
.menu-section-item-friends:before {
    content: "\f0c0" !important;
}
.menu-section-item-allgroups:before {
    content: "\f0c0" !important;
}
.menu-section-item-photos:before {
    content: "\f03e" !important;
}
.menu-section-item-messages:before {
    content: "\f0e0" !important;
}
.menu-section-item-invite-friends:before {
    content: "\f234" !important;
}
.menu-section-item-addgroup:before {
    content: "\f067" !important;
}
.menu-section-item-groups {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 200px;
    padding-right: 10px;
}
/******************************
	Search
******************************/

.ossn-menu-search li {
    display: block;
}
.ossn-menu-search li:hover {
    background: #F9F9F9;
}
.ossn-menu-search li a {
    display: block;
    width: 100%;
    padding: 5px;
}
.ossn-menu-search li a:hover {
    text-decoration: none;
}
.ossn-menu-search li a .text {
    display: inline-block;
}
.ossn-search-page .ossn-users-list-item {
    margin-left: 0px;
    margin-right: 0px;
}
.ossn-search-page .ossn-users-list-item .uinfo {
    margin-left: 25px;
}
.ossn-menu-search-users .text:before {
    font-family: FontAwesome;
    content: "\f007";
    display: absolute;
    padding-right: 10px;
    vertical-align: middle;
    float: left;
}
.ossn-menu-search-groups .text:before {
    font-family: FontAwesome;
    content: "\f0c0";
    display: absolute;
    padding-right: 10px;
    vertical-align: middle;
    float: left;
}
/******************************
	Token Input
*******************************/

ul.token-input-list {
    overflow: hidden;
    height: auto !important;
    height: 1%;
    width: 100%;
    cursor: text;
    font-size: 12px;
    font-family: Verdana;
    min-height: 1px;
    z-index: 999;
    padding: 0;
    margin: 0;
    margin-top: -5px;
    background-color: #fff;
    list-style-type: none;
    clear: left;
    color: #2B5470;
    border-top: 1px dashed #EEE;
    border-right: 1px solid #EEE;
    border-left: 1px solid #EEE;
}
li.token-input-token {
    overflow: hidden;
    height: auto !important;
    height: 15px;
    margin: 3px;
    padding: 1px 3px;
    background-color: #eff2f7;
    color: #2B5470;
    cursor: default;
    font-weight: bold;
    border: 1px solid #ccd5e4;
    font-size: 11px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    float: left;
    white-space: nowrap;
}
li.token-input-token p {
    display: inline;
    padding: 0;
    margin: 0;
    font-size: 12px;
}
li.token-input-token span {
    color: #a6b3cf;
    margin-left: 5px;
    font-weight: bold;
    cursor: pointer;
}
li.token-input-selected-token {
    background-color: #F9F9F9;
    border: 1px solid #eee;
    color: #2B5470;
    font-weight: bold;
}
li.token-input-input-token {
    float: left;
    margin: 0;
    padding: 0;
    list-style-type: none;
}
div.token-input-dropdown {
    position: absolute;
    width: 400px;
    background-color: #fff;
    overflow: hidden;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    cursor: default;
    font-size: 11px;
    font-family: Verdana;
    z-index: 1;
}
div.token-input-dropdown p {
    margin: 0;
    padding: 5px;
}
div.token-input-dropdown ul {
    margin: 0;
    padding: 0;
}
div.token-input-dropdown ul li {
    background-color: #fff;
    padding: 3px;
    margin: 0;
    list-style-type: none;
}
div.token-input-dropdown ul li.token-input-dropdown-item {
    background-color: #fff;
}
div.token-input-dropdown ul li.token-input-dropdown-item2 {
    background-color: #fff;
}
div.token-input-dropdown ul li em {
    font-weight: bold;
    font-style: normal;
}
div.token-input-dropdown ul li.token-input-selected-dropdown-item {
    background-color: #F9F9F9;
    color: #2B5470;
    font-weight: bold;
}
/******************************************
		System Messages
*******************************************/
.ossn-system-messages {
	width:100%;
}
.ossn-system-messages .ossn-system-messages-inner {
    margin-top: 20px;
    margin-bottom: 20px;
    width:100%;
    display: none;
}
.ossn-system-messages .ossn-system-messages-inner .alert {
    margin-bottom: 0px;
}
/** v1-v3 compitible **/

.ossn-message-done {
    border: 1px solid #1EB0DF;
    border-width: 1px;
    background-color: #DAF6FF;
    padding: 13px;
    text-align: left;
}
/*************************************
	0ssn modal box
***************************************/

.ossn-halt {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10000;
    background-color: #000;
    opacity: 0.9;
    cursor: auto;
    height: 100%;
    display: none;
}
.ossn-light {
    opacity: 0.4;
}
.ossn-viewer {
    width: 940px;
    margin: 0 auto;
    position: relative;
}
.ossn-viewer .ossn-container {
    height: 200px;
    position: fixed;
    width: 900px;
    z-index: 10000;
    margin-top: 70px;
    min-height: 515px;
}
.ossn-viewer-loding {
    font-size: 15px;


}
.ossn-viewer .ossn-container .close-viewer {
    float: right;
    cursor: pointer;
    margin-right: 5px;
    font-weight: bold;
    font-size: 13px;
    color: #ccc;
}
.ossn-container tbody {
    background: #000;
}
.ossn-halt {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10000;
    background-color: #000;
    opacity: 0.9;
    cursor: auto;
    height: 100%;
    display: none;
}
.ossn-viewer .info-block {
    background: #fff;
    height: 100%;
    width: 325px;
    float: right;
    margin-left: -3px;
}
.image-block img {
    max-width: 700px;
}
.ossn-message-box {
    width: 470px;
    min-width: 470px;
    min-height: 96px;
    background: #fff;
    border: 1px solid #999;
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    margin-left: auto;
    margin-right: auto;
    z-index: 60000;
    margin-top: 100px;
    border-radius: 3px;
    display: none;
    box-shadow: 0 2px 26px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 0, 0, 0.1);
}
.ossn-message-box .close-box {
    float: right;
    color: #ccc;
    cursor: pointer;
}
.ossn-message-box .title {
    background: #F5F6F7;
    padding: 11px;
    border-radius: 3px;
    border-bottom: 1px solid #E5E5E5;
    color: #5E5656;
    font-size: 14px;
    font-weight: bold;
}
.ossn-message-box .contents {
    padding: 10px;
    min-height: 150px;
    max-height: 420px;
    overflow-x: auto;
    overflow: overlay;
    overflow-x: -moz-hidden-unscrollable
}
.ossn-message-box .control {
    margin-left: 10px;
    margin-right: 10px;
    height: 45px;
    padding: 10px;
    border-top: 1px solid #E9EAED;
}
.ossn-message-box .control .controls {
    float: right;
}
.ossn-message-box .control .controls .btn {
    padding: 2px 13px;
    border-radius: 2px;
}
.ossn-message-box .contents input[type='text'] {
    border: 1px solid #EEE;
    width: 292px;
    padding: 7px;
}
.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
    display: inline-table;
}
.ossn-message-box .contents label {
    color: #666;
    font-weight: bold;
    font-size: 13px;
    margin-right: 13px;
}
/*******************************
	Ossn Blocked
*********************************/

.ossn-blocked i {
    font-size: 100px;
}
.ossn-blocked {
    text-align: center;
    padding: 100px;
}
.ossn-blocked div {
    font-size: 50px;
    font-weight: bold;
}
.ossn-blocked p {
    font-size: 16px;
}
/********************************
	Loading Icon
    @source: https://github.com/jlong/css-spinners
*********************************/

@-moz-keyframes three-quarters-loader {
    0% {
        -moz-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -moz-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-webkit-keyframes three-quarters-loader {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes three-quarters-loader {
    0% {
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
/* :not(:required) hides this rule from IE9 and below */

.ossn-loading:not(:required) {
    -moz-animation: three-quarters-loader 1250ms infinite linear;
    -webkit-animation: three-quarters-loader 1250ms infinite linear;
    animation: three-quarters-loader 1250ms infinite linear;
    border: 8px solid <?php echo oa_theme_get_settings('linkcolor');?>;
    border-right-color: transparent;
    border-radius: 16px;
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
    text-indent: -9999px;
    width: 24px;
    height: 24px;
}
.ossn-box-loading {
    margin-left: 216px;
    margin-top: 37px;
}
/*******************************
	Buttons
*********************************/

.button-grey,
.btn-action {
    color: #333;
    font-weight: bold;
    width: auto;
    margin: 0;
    font-size: 12px;
    line-height: 16px;
    padding: 5px 6px;
    cursor: pointer;
    outline: none;
    text-align: center;
    white-space: nowrap;
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.10), inset 0 1px 0 #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
    border: 1px solid #ccc;
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
    background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
    background: -o-linear-gradient(#f5f6f6, #e4e4e3);
    background: linear-gradient(#F5F6F6, #E4E4E3);
    border-radius: 4px;
    text-decoration: none;
}
.button-grey:hover,
.btn-action:hover {
    text-decoration: none;
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#E4E4E3), to(#F5F6F6));
    background: -moz-linear-gradient(#E4E4E3, #F5F6F6);
    background: -o-linear-gradient(#E4E4E3, #F5F6F6);
    background: linear-gradient(#E4E4E3, #F5F6F6);
}
/******************************
	Users List
*******************************/

.ossn-users-list-item .users-list-controls {
    margin-top: 20px;
}
.ossn-users-list-item .users-list-controls a {
    margin-left: 5px;
}
.ossn-users-list-item {
    border: 1px solid #E9EAED;
    margin-bottom: 10px;
    margin-right: -10px;
    margin-left: -10px;
}
.ossn-users-list-item .uinfo a {
    font-size: 14px;
    font-weight: bold;
    margin-top: 20px;
    float: left;
    text-overflow: ellipsis;
    width: 300px;
    white-space: nowrap;
    overflow: hidden;
}
.ossn-users-list-item .col-md-2 {
    text-align: center;
}
/*********************************
	Footer
**********************************/

footer {
    margin-top: 20px;
    padding-top: 5px;
    width: 100%;
}
footer .col-md-12 {
    border-top: 1px solid #E8E8E8;
        padding-top: 5px;
}
footer .container {} footer .ossn-footer-menu {
    padding-bottom: 10px;
}
footer .ossn-footer-menu a {
    color: #807D7D;
    font-size: 13px;
}
footer .ossn-footer-menu a::after {
    content: "|";
    margin-left: 10px;
    margin-right: 10px;
}

.menu-footer-powered {
    float: right;
}
.menu-footer-powered:after {
    display: none;
}
.menu-footer-a_copyrights {
    text-transform: uppercase;
}
/****************************
	Home
****************************/

.home-left-contents {} .home-left-contents .logo {
    text-align: center;
}
.home-left-contents .buttons {
    text-align: center;
    margin-top: 10px;
}
#ossn-home-signup p {
    margin-top: 10px;
}
/**************************
	System
***************************/

.ossn-list-users {
    height: 60px;
    border-bottom: 1px solid #E9EAED;
    display: block;
    margin-left: 5px;
    margin-bottom: 10px;
}
.ossn-list-users img,
.ossn-list-users .uinfo {
    display: inline-block;
}
.ossn-list-users .uinfo .userlink {
    font-size: 14px;
    font-weight: bold;
    float: right;
    margin-left: 12px;
    text-overflow: ellipsis;
    width: 370px;
    white-space: nowrap;
    overflow: hidden;
}
.ossn-list-users .friendlink {
    float: right;
    margin-top: 10px;
    margin-right: 9px;
    text-overflow: ellipsis;
    width: 280px;
    white-space: nowrap;
    overflow: hidden;
}
.sidebar-menu-nav .sidebar-menu .menu-content {
    display: block;
}
.ossn-box-inner {
    width: 446px;
}
.home-left-contents .some-icons i {
    font-size: 50px;
}
.home-left-contents .some-icons li {
    display: inline-block;
    color: #fff;
    border: 3px solid #fff;
    border-radius: 100%;
    padding: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    width: 100px;
    height: 100px;
}
.home-left-contents .some-icons {
    margin-top: 10%;
    text-align: center;
}
/**************************
	Similies
**************************/

.ossn-smiley-item {
    display: inline-block !important;
    margin-left: 2px;
    margin-right: 2px;
    width: initial !important;
    margin-bottom: 0px !important;
    margin-top: 0px !important;
    border: 0px !important;
}
/**************************
	Embed
 **************************/

.ossn_embed_video {
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 0px;
}
/**************************
	Photos
***************************/

.ossn-photo-viewer .image-block img,
.ossn-photo-viewer {
    max-width: 100% !important;
}
/**************************
	Mobile Layout Settings
***************************/

@media (max-width: 480px) {
    /***********************
    	Comments
     ***********************/
    
    .comments-list .comments-item .comment-user-img {
        display: none;
    }
    .comments-item .col-md-11 {
        padding-left: 15px;
    }
    /************************
    	Wall
     ************************/
    
    .ossn-wall-item-type {
        display: block;
    }
    .ossn-wall-item .meta .user {
        width: 155px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .ossn-list-users .uinfo .userlink {
        text-overflow: ellipsis;
        width: 195px;
        white-space: nowrap;
        overflow: hidden;
    }
    .ossn-list-users a.right.btn.btn-primary {
        display: none;
    }
    .ossn-list-users a.right.btn.btn-danger {
        display: none;
    }
    .ossn-message-box .contents {
        height: 280px;
        overflow-x: auto;
        overflow: overlay;
    }
    /***************************
    	Topbar notification box
   *****************************/
    
    .ossn-notifications-box {
        width: 300px;
    }
    .ossn-notifications-box .notfi-meta {
        width: 230px;
    }
    .notification-friends .notfi-meta a {
        width: 100px;
    }
    .ossn-notifications-box .notfi-meta,
    .ossn-notification-messages .user-item .data {
        width: 215px !important;
    }
    .ossn-notification-messages .user-item .data .name {
        width: 110px !important;
    }
    .ossn-notification-messages .reply-text-from {
        width: 200px !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    /******************************
    	Profile
    ********************************/
    
    .ossn-profile .profile-photo img {
        width: 100px;
        height: 100px;
    }
    .ossn-profile .user-fullname {
    font-size: 16px;
    margin-left: 10px;
    margin-top: -60px;
    width: 140px;
    }
    .ossn-profile .top-container .profile-cover {
        height: 188px;
    }
    .ossn-profile .profile-photo {
    }
    .profile-menu {
        float: none;
        margin: 13px;
    }
    .ossn-profile .top-container .profile-cover img {
        width: auto;
    }
    .ossn-group-cover-button,
    .profile-cover-controls {
        display: none !important;
    }
    .upload-photo {
        width: 100px;
    }
    .profile-hr-menu ul li {
        display: block;
        text-align: center;
        border-bottom: 1px solid rgb(238, 238, 238);
        margin-right: 0px;
    }
    .profile-hr-menu ul li a {
        margin-right: 0px;
    }
    .ossn-profile-role {
        display: none;
    }
    .ossn-layout-contents {
        margin-top: 10px;
  	  min-height: 400px;
   	 width: 100%;
  	  display: initial;

    }

    /*****************************
     	System
     *****************************/
    
    .ossn-users-list-item img {
        display: none;
    }
    .ossn-users-list-item .users-list-controls {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .ossn-users-list-item .uinfo a {
        margin-top: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 90px;
    }
    .ossn-search-page .ossn-users-list-item .uinfo a {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 100px;
    }
    .ossn-system-messages {
        padding-left: 15px;
        padding-right: 15px;
    }
    .ossn-users-list-item {
        padding-bottom: 10px;
    }
    .ossn-widget .widget-contents {
        padding: 5px;
    }
    .ossn-message-box {
        min-width: 300px;
        width: 300px;
    }
    .ossn-box-loading {
        margin-left: 150px;
        margin-top: 37px;
    }
    .ossn-message-box .contents input[type="text"] {
        width: 195px;
    }
    .ossn-box-inner {
        width: 280px;
    }
    footer .ossn-footer-menu a:nth-last-child(2)::after {
        content: "|";
    }
    /**********************
    	Groups
    ************************/
    
    .ossn-group-cover img {
        top: auto !important;
    }
    .ossn-group-cover {
        height: 100px !important;
    }
    .groups-buttons {
        float: none !important;
    }
    .ossn-group-cover-header,
    .ossn-group-profile .profile-header,
    .ossn-group-profile .profile-header .header-bottom {
        height: auto !important;
    }
    .ossn-group-profile .profile-header {
        max-height: inherit !important;
    }
    .groups-buttons {
        margin-top: 50px;
    }
    .ossn-group-profile .profile-header .group-name {
        float: none !important;
    }
    #group-header-menu li,
    #group-header-menu {
        width: 100% !important;
    }
    #group-header-menu li {
        border-bottom: 1px solid #EEE !important;
    }
    .group-name {
        text-align: center;
        width: 100%;
        border-bottom: 1px solid #eee;
    }
    .ossn-group-members {
        margin-left: 15px;
        margin-right: 15px;
    }
    .ossn-group-members .request-controls,
    .ossn-group-members .uinfo {
        display: inline-block;
    }
    .ossn-group-members .uinfo .userlink {
        width: 130px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .sidebar-menu-nav .sidebar-menu .menu-content {
        display: block;
    }
    .sidebar-hide-contents-xs {
        display: none;
    }
    .home-left-contents .some-icons {
        display: none;
    }
    /**************************
     	Layouts
     ****************************/
    
    .newsfeed-right {
        display: none;
    }
    .ossn-messages .message-with .user-icon,
    .ossn-messages .messages-recent .messages-from .user-item .image {
        display: none;
    }
    .ossn-messages .message-inner .row {
        margin-left: 0px !important;
    }
    /*************************
     	Home Page
     **************************/
    
    .logo img {
        width: 260px;
    }
    .home-left-contents .description {
        font-size: 16px;
    }
    .home-left-contents {
        margin-bottom: 20px;
    }
    /*****************************
    	Wall Menu
    ******************************/
    
    .dropdown-menu {
        margin-left: -110px;
    }
    .menu-footer-powered {
        float: none;
    }
}
/***************************************
	Tablets
****************************************/

@media only screen and (max-width: 992px) {
    .ossn-group-cover img {
        top: auto !important;
    }
    .dropdown-menu {
        margin-left: -110px;
    }
    .ossn-profile .user-fullname {
        max-width: 500px;
    }
    /***********************
    	Comments
     ***********************/
    
    .comments-list .comments-item .comment-user-img {
        display: none;
    }
    .comments-item .col-md-11 {
        padding-left: 15px;
    }
    /**************************
     	Layouts
     ****************************/
    
    .newsfeed-right {
        display: none;
    }
    /*******************
     	Messages
     *******************/
    
    .ossn-messages .message-with .user-icon,
    .ossn-messages .messages-recent .messages-from .user-item .image {
        display: none;
    }
    .ossn-messages .message-inner .row {
        margin-left: 0px !important;
    }
    .sidebar-menu-nav .sidebar-menu .menu-content {
        display: block;
    }
}
@media only screen and (max-width: 1199px) {
    .comments-list .comments-item .col-md-1,
    .comments-list .comments-item .comment-user-img {
        display: none;
    }
    .comments-list .comments-item .col-md-11 {
        width: 100%;
    }
    .comments-item .col-md-11 {
        padding-left: 15px;
    }
    .group-search-details {
        margin-left: 10px;
    }
    .ossn-search-page .ossn-users-list-item .uinfo {
        margin-left: 35px;
    }
    .ossn-search-page .ossn-users-list-item .uinfo a {
        text-overflow: ellipsis;
        width: 200px;
        white-space: nowrap;
        overflow: hidden;
    }
    .ossn-users-list-item .users-list-controls {
        margin-bottom: 10px;
    }
    .ossn-profile .user-fullname {
        max-width: 640px;
    }
}
@media only screen and (max-width: 767px) {
    .ossn-profile .user-fullname {
        max-width: 767px;
    }
    .ossn-search-page .ossn-users-list-item .uinfo {
        margin-left: 0;
    }
}
/*****************************************************
		Adding icons for some 3rd party components
******************************************************/
.menu-section-categories i:before {
    content: "\f03a" !important;
}
.navbar-toggler {
	color: #fff !important;
    border: 1px solid #fff !important;
    text-align: center;
    margin-right: 0px;
}
.navbar-toggler i {
	margin:0;
}	
.topbar-parent {
    z-index: 1;
    min-height:55px;
}
.topbar-parent .ossn-topbar-dropdown-menu ul a:before,
.topbar-parent .navbar-nav a:before {
    font-family: FontAwesome;
    display: inline-block;
    padding-right: 10px;
    text-align: center;
    width: 25px;
}
.topbar-parent .ossn-topbar-dropdown-menu ul a:before {
	content: "\f061" !important;
}
.topbar-parent .navbar-nav .nav-link {
    cursor: pointer;
    color: #fff;
}
.topbar-parent .navbar-nav .nav-link:hover {
    color: #ccc;
}
.menu-section-groups:before {
    content: "\f0c0" !important;
}
.menu-section-item-groups:before {
    content: "\f07b" !important
}
@media (max-width: 991px) { 
	.topbar-parent .dropdown-menu {
    display: block;
    background: none;
    border: none;
     }
     .topbar-parent .dropdown-item {
     	color:#fff;
     }
     .topbar-parent .dropdown-submenu {
     	padding-left: 0;
     }
     .topbar-parent .dropdown-toggle {
     	display:none;
     }
     .ossn-topbar-dropdown-menu ul,
    .dropdown-menu-oa {
    	margin-top: 0px !important;
	    margin-left: 0px !important;
         background-color: initial;
         border: none;
	} 
    .topbar .site-name {
    	text-align: center;
    	margin-bottom: 10px;
    }
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
/*********************************
		backward bt v3
*********************************/
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
.ossn-profile-extra-menu .dropdown-menu > li > a {
  display: block;
  padding: 3px 20px !important;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.ossn-profile-extra-menu .dropdown-menu > li > a:hover,
.ossn-profile-extra-menu .dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.ossn-profile-extra-menu .dropdown-menu > .active > a,
.ossn-profile-extra-menu .dropdown-menu > .active > a:hover,
.ossn-profile-extra-menu .dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #337ab7;
  outline: 0;
}
.ossn-profile-extra-menu .dropdown-menu > .disabled > a,
.ossn-profile-extra-menu .dropdown-menu > .disabled > a:hover,
.ossn-profile-extra-menu .dropdown-menu > .disabled > a:focus {
  color: #777;
}
.ossn-profile-extra-menu .dropdown-menu > .disabled > a:hover,
.ossn-profile-extra-menu .dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.topbar-parent .dropdown-item:focus, 
.topbar-parent .dropdown-item:hover {
    background-color: rgba(0, 0, 0, 0);
}
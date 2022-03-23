<?php
session_start();
include('config.php');

if(!isset($_SESSION['back'])){


    echo "<script>window.open('login.php','_self')</script>";
}else{

    
    if(isset($_GET['logout'])){

        unset($_SESSION['back']);
        echo "<script>window.open('login.php','_self')</script>";
        
        }



$logemail =  $_SESSION['log_email'];
$logpass = $_SESSION['log_pass'];
$logcpass = $_SESSION['log_cpass'];
$logsec = $_SESSION['log_sec'];
$idss = $_SESSION['id'];


  if(isset($logemail) && isset($logpass) && isset($logcpass) && isset($logsec)){

    $sql = "SELECT * FROM `customer_reg` WHERE (`security`='$logsec' && `email`='$logemail' && `pass`='$logpass')";
    $query = mysqli_query($con,$sql); 

    if($query){

    //   echo "<script>alert($idss)</script>";










    }else{
          echo "Values not found";
    }




  }



?>


















<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Dashboard</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <style>
        @media(max-width:800px) {
            * {
                margin: 0;
                padding: 0;
            }
            #moveup {
                transform: translateY(-80px);
                height: 220px;
            }
            .stopper {
                display: none;
            }
            .title-c {
                width: 100%;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .active_dash {
                color: rgb(241, 80, 16);
            }
        }
        
        .fieldset {
            border: 2px solid black;
        }
    </style>
    
    
    
    
    
        
        <script>
        
        (function(){var gtConstEvalStartTime = new Date();/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var c="Translate",g=this||self;function h(a,b){a=a.split(".");var d=g;a[0]in d||"undefined"==typeof d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===b?d[e]&&d[e]!==Object.prototype[e]?d=d[e]:d=d[e]={}:d[e]=b}
function k(a,b){function d(){}d.prototype=b.prototype;a.ka=b.prototype;a.prototype=new d;a.prototype.constructor=a;a.ja=function(e,f,v){for(var w=Array(arguments.length-2),n=2;n<arguments.length;n++)w[n-2]=arguments[n];return b.prototype[f].apply(e,w)}}function l(a){return a};function m(){return"[msg_undefined]"}var p={};
(function(){if(void 0==window.CLOSURE_DEFINES||window.CLOSURE_DEFINES["te.msg.EMBED_MESSAGES"]){p={Y:function(){return MSG_TRANSLATE},m:function(){return MSG_CANCEL},s:function(){return MSG_CLOSE},K:function(){return MSGFUNC_PAGE_TRANSLATED_TO},Z:function(){return MSGFUNC_TRANSLATED_TO},B:function(){return MSG_GENERAL_ERROR},D:function(){return MSG_LANGUAGE_UNSUPPORTED},F:function(){return MSG_LEARN_MORE},L:function(){return MSGFUNC_POWERED_BY},ba:function(){return MSG_TRANSLATE_PRODUCT_NAME},da:function(){return MSG_TRANSLATION_IN_PROGRESS},
aa:function(){return MSGFUNC_TRANSLATE_PAGE_TO},ia:function(){return MSGFUNC_VIEW_PAGE_IN},M:function(){return MSG_RESTORE},U:function(){return MSG_SSL_INFO_LOCAL_FILE},V:function(){return MSG_SSL_INFO_SECURE_PAGE},T:function(){return MSG_SSL_INFO_INTRANET_PAGE},N:function(){return MSG_SELECT_LANGUAGE},fa:function(){return MSGFUNC_TURN_OFF_TRANSLATION},ea:function(){return MSGFUNC_TURN_OFF_FOR},l:function(){return MSG_ALWAYS_HIDE_AUTO_POPUP_BANNER},I:function(){return MSG_ORIGINAL_TEXT},J:function(){return MSG_ORIGINAL_TEXT_NO_COLON},
A:function(){return MSG_FILL_SUGGESTION},W:function(){return MSG_SUBMIT_SUGGESTION},S:function(){return MSG_SHOW_TRANSLATE_ALL},R:function(){return MSG_SHOW_RESTORE_ALL},O:function(){return MSG_SHOW_CANCEL_ALL},ca:function(){return MSG_TRANSLATE_TO_MY_LANGUAGE},$:function(){return MSGFUNC_TRANSLATE_EVERYTHING_TO},P:function(){return MSG_SHOW_ORIGINAL_LANGUAGES},H:function(){return MSG_OPTIONS},ga:function(){return MSG_TURN_OFF_TRANSLATION_FOR_THIS_SITE},G:function(){return MSG_MANAGE_TRANSLATION_FOR_THIS_SITE},
j:function(){return MSG_ALT_SUGGESTION},h:function(){return MSG_ALT_ACTIVITY_HELPER_TEXT},i:function(){return MSG_ALT_AND_CONTRIBUTE_ACTIVITY_HELPER_TEXT},ha:function(){return MSG_USE_ALTERNATIVES},v:function(){return MSG_DRAG_TIP},o:function(){return MSG_CLICK_FOR_ALT},u:function(){return MSG_DRAG_INSTUCTIONS},X:function(){return MSG_SUGGESTION_SUBMITTED},C:function(){return MSG_LANGUAGE_TRANSLATE_WIDGET}};for(var a in p)if(p[a]!==Object.prototype[p[a]])try{p[a]=p[a].call(null)}catch(b){p[a]=m}}else a=
function(b){return function(){return b}},p={Y:a(0),m:a(1),s:a(2),K:a(3),Z:a(4),B:a(5),D:a(45),F:a(6),L:a(7),ba:a(8),da:a(9),aa:a(10),ia:a(11),M:a(12),U:a(13),V:a(14),T:a(15),N:a(16),fa:a(17),ea:a(18),l:a(19),I:a(20),A:a(21),W:a(22),S:a(23),R:a(24),O:a(25),ca:a(26),$:a(27),P:a(28),H:a(29),ga:a(30),j:a(32),h:a(33),ha:a(34),v:a(35),o:a(36),u:a(37),X:a(38),G:a(39),i:a(40),J:a(41),C:a(46)}})();var q={},MSG_TRANSLATE=c;q[0]=MSG_TRANSLATE;var MSG_CANCEL="Cancel";q[1]=MSG_CANCEL;var MSG_CLOSE="Close";q[2]=MSG_CLOSE;function MSGFUNC_PAGE_TRANSLATED_TO(a){return"Google has automatically translated this page to: "+a}q[3]=MSGFUNC_PAGE_TRANSLATED_TO;function MSGFUNC_TRANSLATED_TO(a){return"Translated to: "+a}q[4]=MSGFUNC_TRANSLATED_TO;var MSG_GENERAL_ERROR="Error: The server could not complete your request. Try again later.";q[5]=MSG_GENERAL_ERROR;var MSG_LEARN_MORE="Learn more";q[6]=MSG_LEARN_MORE;
function MSGFUNC_POWERED_BY(a){return"Powered by "+a}q[7]=MSGFUNC_POWERED_BY;var MSG_TRANSLATE_PRODUCT_NAME=c;q[8]=MSG_TRANSLATE_PRODUCT_NAME;var MSG_TRANSLATION_IN_PROGRESS="Translation in progress";q[9]=MSG_TRANSLATION_IN_PROGRESS;function MSGFUNC_TRANSLATE_PAGE_TO(a){return"Translate this page to: "+a+" using Google Translate?"}q[10]=MSGFUNC_TRANSLATE_PAGE_TO;function MSGFUNC_VIEW_PAGE_IN(a){return"View this page in: "+a}q[11]=MSGFUNC_VIEW_PAGE_IN;var MSG_RESTORE="Show original";q[12]=MSG_RESTORE;
var MSG_SSL_INFO_LOCAL_FILE="The content of this local file will be sent to Google for translation using a secure connection.";q[13]=MSG_SSL_INFO_LOCAL_FILE;var MSG_SSL_INFO_SECURE_PAGE="The content of this secure page will be sent to Google for translation using a secure connection.";q[14]=MSG_SSL_INFO_SECURE_PAGE;var MSG_SSL_INFO_INTRANET_PAGE="The content of this intranet page will be sent to Google for translation using a secure connection.";q[15]=MSG_SSL_INFO_INTRANET_PAGE;
var MSG_SELECT_LANGUAGE="Select Language";q[16]=MSG_SELECT_LANGUAGE;function MSGFUNC_TURN_OFF_TRANSLATION(a){return"Turn off "+a+" translation"}q[17]=MSGFUNC_TURN_OFF_TRANSLATION;function MSGFUNC_TURN_OFF_FOR(a){return"Turn off for: "+a}q[18]=MSGFUNC_TURN_OFF_FOR;var MSG_ALWAYS_HIDE_AUTO_POPUP_BANNER="Always hide";q[19]=MSG_ALWAYS_HIDE_AUTO_POPUP_BANNER;var MSG_ORIGINAL_TEXT="Original text:";q[20]=MSG_ORIGINAL_TEXT;var MSG_FILL_SUGGESTION="Contribute a better translation";q[21]=MSG_FILL_SUGGESTION;
var MSG_SUBMIT_SUGGESTION="Contribute";q[22]=MSG_SUBMIT_SUGGESTION;var MSG_SHOW_TRANSLATE_ALL="Translate all";q[23]=MSG_SHOW_TRANSLATE_ALL;var MSG_SHOW_RESTORE_ALL="Restore all";q[24]=MSG_SHOW_RESTORE_ALL;var MSG_SHOW_CANCEL_ALL="Cancel all";q[25]=MSG_SHOW_CANCEL_ALL;var MSG_TRANSLATE_TO_MY_LANGUAGE="Translate sections to my language";q[26]=MSG_TRANSLATE_TO_MY_LANGUAGE;function MSGFUNC_TRANSLATE_EVERYTHING_TO(a){return"Translate everything to "+a}q[27]=MSGFUNC_TRANSLATE_EVERYTHING_TO;
var MSG_SHOW_ORIGINAL_LANGUAGES="Show original languages";q[28]=MSG_SHOW_ORIGINAL_LANGUAGES;var MSG_OPTIONS="Options";q[29]=MSG_OPTIONS;var MSG_TURN_OFF_TRANSLATION_FOR_THIS_SITE="Turn off translation for this site";q[30]=MSG_TURN_OFF_TRANSLATION_FOR_THIS_SITE;q[31]=null;var MSG_ALT_SUGGESTION="Show alternative translations";q[32]=MSG_ALT_SUGGESTION;var MSG_ALT_ACTIVITY_HELPER_TEXT="Click on words above to get alternative translations";q[33]=MSG_ALT_ACTIVITY_HELPER_TEXT;var MSG_USE_ALTERNATIVES="Use";
q[34]=MSG_USE_ALTERNATIVES;var MSG_DRAG_TIP="Drag with shift key to reorder";q[35]=MSG_DRAG_TIP;var MSG_CLICK_FOR_ALT="Click for alternative translations";q[36]=MSG_CLICK_FOR_ALT;var MSG_DRAG_INSTUCTIONS="Hold down the shift key, click, and drag the words above to reorder.";q[37]=MSG_DRAG_INSTUCTIONS;var MSG_SUGGESTION_SUBMITTED="Thank you for contributing your translation suggestion to Google Translate.";q[38]=MSG_SUGGESTION_SUBMITTED;var MSG_MANAGE_TRANSLATION_FOR_THIS_SITE="Manage translation for this site";
q[39]=MSG_MANAGE_TRANSLATION_FOR_THIS_SITE;var MSG_ALT_AND_CONTRIBUTE_ACTIVITY_HELPER_TEXT="Click a word for alternative translations, or double-click to edit directly";q[40]=MSG_ALT_AND_CONTRIBUTE_ACTIVITY_HELPER_TEXT;var MSG_ORIGINAL_TEXT_NO_COLON="Original text";q[41]=MSG_ORIGINAL_TEXT_NO_COLON;q[42]=c;q[43]=c;q[44]="Your correction has been submitted.";var MSG_LANGUAGE_UNSUPPORTED="Error: The language of the webpage is not supported.";q[45]=MSG_LANGUAGE_UNSUPPORTED;
var MSG_LANGUAGE_TRANSLATE_WIDGET="Language Translate Widget";q[46]=MSG_LANGUAGE_TRANSLATE_WIDGET;function r(a){if(Error.captureStackTrace)Error.captureStackTrace(this,r);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}k(r,Error);r.prototype.name="CustomError";function t(a,b){a=a.split("%s");for(var d="",e=a.length-1,f=0;f<e;f++)d+=a[f]+(f<b.length?b[f]:"%s");r.call(this,d+a[e])}k(t,r);t.prototype.name="AssertionError";function u(a,b){throw new t("Failure"+(a?": "+a:""),Array.prototype.slice.call(arguments,1));};var x;function y(a,b){this.g=b===z?a:""}y.prototype.toString=function(){return this.g+""};var z={};function _exportVersion(a){h("google.translate.v",a)}function _getCallbackFunction(a){a:{a=a.split(".");for(var b=g,d=0;d<a.length;d++)if(b=b[a[d]],null==b){a=null;break a}a=b}return a}function _exportMessages(){h("google.translate.m",q)}function A(a){var b=document.getElementsByTagName("head")[0];b||(b=document.body.parentNode.appendChild(document.createElement("head")));b.appendChild(a)}
function _loadJs(a){var b=document;var d="SCRIPT";"application/xhtml+xml"===b.contentType&&(d=d.toLowerCase());d=b.createElement(d);d.type="text/javascript";d.charset="UTF-8";if(void 0===x){b=null;var e=g.trustedTypes;if(e&&e.createPolicy){try{b=e.createPolicy("goog#html",{createHTML:l,createScript:l,createScriptURL:l})}catch(v){g.console&&g.console.error(v.message)}x=b}else x=b}a=(b=x)?b.createScriptURL(a):a;a=new y(a,z);a instanceof y&&a.constructor===y?a=a.g:(b=typeof a,u("expected object of type TrustedResourceUrl, got '"+
a+"' of type "+("object"!=b?b:a?Array.isArray(a)?"array":b:"null")),a="type_error:TrustedResourceUrl");d.src=a;var f;a=(d.ownerDocument&&d.ownerDocument.defaultView||window).document;(f=(a=null===(f=a.querySelector)||void 0===f?void 0:f.call(a,"script[nonce]"))?a.nonce||a.getAttribute("nonce")||"":"")&&d.setAttribute("nonce",f);A(d)}function _loadCss(a){var b=document.createElement("link");b.type="text/css";b.rel="stylesheet";b.charset="UTF-8";b.href=a;A(b)}
function _isNS(a){a=a.split(".");for(var b=window,d=0;d<a.length;++d)if(!(b=b[a[d]]))return!1;return!0}function _setupNS(a){a=a.split(".");for(var b=window,d=0;d<a.length;++d)b.hasOwnProperty?b.hasOwnProperty(a[d])?b=b[a[d]]:b=b[a[d]]={}:b=b[a[d]]||(b[a[d]]={});return b}h("_exportVersion",_exportVersion);h("_getCallbackFunction",_getCallbackFunction);h("_exportMessages",_exportMessages);h("_loadJs",_loadJs);h("_loadCss",_loadCss);h("_isNS",_isNS);h("_setupNS",_setupNS);
window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='452535.337228099';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
        
        
        
        
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header d-none  d-md-block">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-absolute">
                <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                <a class="brand" href="index.php"><h3 style="color:#ffffff;" width="84" height="23">Tbsbplc</h3></a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav active">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="registered-users.php">Home</a>
                                            <!-- RD Navbar Dropdown-->
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="user-account.php">Account</a>
                                            <!-- RD Navbar Dropdown-->
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="all.php">Transfer</a>
                                            <!-- RD Navbar Dropdown-->
                                        </li>
                                        <li class="rd-nav-item ">
                                            <a class="rd-nav-link" href="user-history.php">History</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link " href="registered-users.php?logout=true"><span style="margin-left:-7px ">Logout</span></a>
                                            <!-- RD Navbar Megamenu-->

                                        </li>
                                        
                                                                                     <li class="rd-nav-item">
                                            
                                               <div id="google_translate_element" style="width: 100px;height:20px;margin-left:6px"></div>
                                           <script type="text/javascript">
                                          function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                         }
                                         </script>
                                         
                                        </li>

                                    </ul>
                                    </li>
                                    <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a> -->
                                    <!-- </li> -->
                                    </ul>
                                </div>
                                <!-- RD Navbar Search-->
                                <!-- <div class="rd-navbar-search">
                                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                    <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                            <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                        </div>
                                        <button class="rd-search-form-submit mdi mdi-magnify" type="submit"></button>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Breadcrumbs -->

<?php

$ids = $_SESSION['id'];

$sqlr = "SELECT * FROM `customer_reg` WHERE `id`='$ids'";
$queryss = mysqli_query($con,$sqlr);
$rowss = mysqli_fetch_assoc($queryss);
$act = $rowss['acc_number'];

$balances=0;
$dep_action = 1;

$sqrr = "SELECT * FROM `transaction` WHERE `user_id`='$ids' AND `deposite_action`='$dep_action'";

$guery = mysqli_query($con,$sqrr);
while($rows = mysqli_fetch_assoc($guery)){

$balances += $rows['deposite_amount'];


}

$transters = 0;

$sqli = "SELECT * FROM `transactions` WHERE `user_id`='$ids'";
$curry = mysqli_query($con,$sqli);

while($tran = mysqli_fetch_assoc($curry)){

$transters += $tran['r_amount'];


}

$crd = "SELECT * FROM `transactions` WHERE `r_account`='$act'";
$crdque = mysqli_query($con,$crd);
$xcr = 0;
while($crrow = mysqli_fetch_assoc($crdque)){

$xcr += $crrow['r_amount'];

}









?>






        <section class="section section-bredcrumbs" id="moveup">
                                                    <li class="rd-nav-item">
                                            
                                               <div id="google_translate_element" style="width: 100px;height:20px;margin-left:6px"></div>
                                           <script type="text/javascript">
                                          function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                         }
                                         </script>
                                         
                                        </li>
            <div class="container context-dark breadcrumb-wrapper">
                <h3 class="title-c">Welcome Back  <?php echo $rowss['fname']; ?></h3>
                <h4 class="title-c" style="font-size: 13px;font-weight: bold;margin-top: 5px;"><?php  echo date('d-M-Y h:i:s');?></h4>
                <ul class="breadcrumbs-custom stopper">
                    <li><a href="index.php">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </section>

        <!-- start user body -->
        <section>
            <div class="container-fluid" id="moveup">
                <!-- <div class="row justify-content-center align-items-center d-flex">
                    <div class="media-wrap" style="min-height:15vh;">
                        <img class="img-responsive " style="border-radius:50% ;width:200px;height: 200px;transform: translateY(-100px);" src=" images/single-post-author-1-48x48.jpg " alt=" " width="400px " height="400px " />

                    </div>

                </div> -->

                <div class="col" style="height:100px;display: flex;align-items:center;font-size: 16px;font-weight: bold;padding-top:10px">
                    <p class="fs-3 fw-bold">
                        call us on <span style="color:#906ceb">+1-385-3441-822 </span> or send us a mail on <span style="color:#906ceb">contact@Tbsbplc.com</span></p>
                </div>

                <fieldset class="border" style="border:2px solid rgb(0, 0, 0);padding:0 20px;display:block;align-items: center;justify-content: center;">
                    <legend class="w-auto" style="font-weight: bolder;"><i class="fas fa-university " style="font-size: 22px;font-weight: bold "></i>
                        <span style="font-size: 22px;font-weight: bold ">Account information</span></legend>
                    <div class="col" style="display:flex;align-items: center;justify-content: center;padding-top:20px;"> <span style="padding-top:0px;font-size: 40px;font-weight: 400;margin-right:3px">£</span>
                        <span style="font-size:40px;font-weight:bold;color:rgb(58, 58, 58)"><?php echo (isset($balances) && !(($transters > ( $balances + $xcr))))? (($balances + $xcr) - $transters) : '0';?>.00 </span>
                        <!--<sub style="padding-top:0px;font-size: 20px;font-weight: 400;">GBP</sub>-->
                    </div>
                    <div class="col d-flex justify-content-center" style="transform:translateY(-15px);color:#906ceb;font-size:20px;font-weight:bolder;text-transform:uppercase;">
                        <span>Avaliable Balance</span>

                    </div>
                    <div class="col d-flex justify-content-center" style="transform:translateY(-15px);color:#906ceb;font-size:12px;font-weight:bolder;padding-bottom:20px">
                        <span>18 march 2021 15:18:21</span>

                    </div>
                </fieldset>

                <div class="col border mt-4" style="border:.5px solid silver;display:flex;align-items:center;align-items:center;margin-bottom:30px">
                    <div style="width:100%;height:100%;display: flex;align-items: center;justify-content: center; font-size: 23px;font-weight:bolder;padding:20px">TRANSFER & PAY BILLS</div>
                </div>








        </section>

        <section style="margin-top: 150px;margin-bottom: 20px; ">

            <div class="col mt-4 " style="height:10px;display:flex;justify-content: center;margin-top: 80px;padding-bottom:10px ">
                <div style="width:100%;height:100%; font-size: 23px;font-weight:bolder "><i class="fas fa-lock " style="margin-right:5px "></i>
                    <span style="font-size: 20px;font-weight: bolder; ">ACCOUNT SUMMARY</span></div>
            </div>



            <div class="container-fluid mt-4 ">
                <div class="row " style="background-color:rgba(243, 232, 223, 0.74) ">
                   <?php    
             $idtransact = $_SESSION['id']; 
             $tran = "SELECT * FROM `transactions` WHERE `user_id`='$idtransact'";
             $querytransc = mysqli_query($con,$tran);
             
            while($fred = mysqli_fetch_assoc($querytransc)):
                   
                  
                $acc = $rowss['acc_number'];
                   
                   ?>
                
                
                <div class="col-7 ">
                        <div class="col-12 " style="margin-top:10px ">
                            <span style="color:#906ceb;font-size: 15px;font-weight: bold; "><?php echo (!($fred['changedate'] == null))? $fred['changedate'] : date('d-M-Y',strtotime($fred['timeoftransfer']));?></span></div>
                        <div class="col-12 " style="font-weight: 600; ">
                            Account <?php echo   (isset($acc))? $acc[0].$acc[1] : ''?>******<?php echo  (isset($acc))? $acc[8].$acc[9] : ''?>has been Debited Transaction party Self debit, Transaction ID #<?php echo str_shuffle('CFR');?>-<?php echo rand(1000,9999);?>-<?php echo rand(1000,9999);?>.Remark//<?php echo $fred['transaction_type'].' ' ?> Cash withdrawal

                        </div>

                    </div>
                    <div class="col-3 " style="padding: 30px; ">
                        <div class="col-12 " style="margin-top:10px ">
                            <span style="color:rgb(235, 46, 46);font-weight: bold; ">Dr.Alert</span>
                        </div>
                        <div class="col-12 ">
                            <span style="font-weight: bold; "><?php echo  $fred['r_amount'];  ?> GBP</span>
                        </div>



                    </div>

                    <?php endwhile; ?>

                    <!-- <div class="col-1 " style="background-color:rgba(243, 232, 223, 0.74);padding:10px;padding-left: 30px; ">


                    </div> -->






                    <!-- <div class="col-7 " style="padding-top: 12px; ">
                        <div class="col-12 " style="margin-top:10px ">
                            <span style="color:#906ceb;font-size: 15px;font-weight: bold; "> 17-February-2021 </span></div>
                        <div class="col-12 " style="font-weight: 600; ">
                            Account ********** has been Debited Transaction party Self debit, Transaction ID #CF-4382-6111 .Remark//Cash withdrawal

                        </div>

                    </div>
                    <div class="col-2 col-sm-4 " style="padding:10px;padding-left: 30px; ">
                        <div class="col-12 " style="margin-top:10px ">
                            <span style="color:rgb(235, 46, 46);font-weight: bold; ">Dr.Alert</span>
                        </div>
                        <div class="col-12 ">
                            <span style="font-weight: bold; ">15.00 GBP</span>
                        </div>



                    </div> -->
                    <!-- <div class="col-1 " style="background-color:rgba(243, 232, 223, 0.74);padding:10px;padding-left: 30px; ">


                    </div> -->
                  <?php

$idcredit = $_SESSION['id'];
$acc_ref = $rowss['acc_number'];
$creditsql = "SELECT * FROM `transactions` WHERE `r_account`='$acc_ref'";

// echo "<script>alert($acc_ref);</script>";
$creditquery = mysqli_query($con,$creditsql);

while($creditrow = mysqli_fetch_assoc($creditquery)):
    $acc = $rowss['acc_number'];
?>





                    <div class="col-7 " style="padding-top: 12px; ">
                        <div class="col-12 " style="margin-top:10px ">
                            <span style="color:#906ceb;font-size: 15px;font-weight: bold; "><?php echo (!($creditrow['changedate'] == null))? $creditrow['changedate'] : date('d-M-Y',strtotime($creditrow['timeoftransfer']));?></span></div>
                        <div class="col-12 " style="font-weight: 600; ">
                            Account <?php echo   (isset($acc))? $acc[0].$acc[1] : ''?>******<?php echo  (isset($acc))? $acc[8].$acc[9] : ''?> has been Debited Transaction party Self debit, Transaction ID #CF-4382-6111 .Remark//Cash withdrawal

                        </div>

                    </div>
                    <div class="col-3 " style="padding:10px;padding-left: 30px; ">
                        <div class="col-12 " style="margin-top:10px ">
                            <span style="color:rgb(89, 240, 102);font-weight: bold; ">Cr.Alert</span>
                        </div>
                        <div class="col-12 ">
                            <span style="font-weight: bold; "><?php echo  $creditrow['r_amount'];  ?> GBP</span>
                        </div>



                    </div>




              <?php  endwhile ; ?>      
                    <!-- <div class="col-1 " style="background-color:rgba(243, 232, 223, 0.74);padding:10px;padding-left: 30px; ">


                    </div> -->










                    <!-- <div class="col-2 " style="background-color:rgba(219, 192, 170, 0.74);padding:10px;padding-left: 30px; ">


                    </div> -->



                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="height:100px;margin-bottom: 10px;">
                                <!-- <div class="btn  btn-primary btn-md" style="border-radius: 20px;">SEE COMPLETE STATEMENT</div> -->
                            </div>
                        </div>









                    </div>


                    <div>
                    </div>
        </section>
        <!-- Page Footer-->
        <footer class="section footer-1 d-none d-md-block ">
            <div class="container ">
                <div class="row row-40 wow fadeIn ">
                    <div class="col-md-6 col-lg-4 ">
                        <h5 class="title ">About Us</h5>
                        <p>Dot Bank is the leading financial establishment providing high-quality international banking services. Our success is attributed to our loyal customers and to the talent and dedication of our professional and skilled employees.
                            We are always ready to partner with you by offering full financial support to our clients worldwide.</p>
                            <a class="footer-logo" href="index.php"><h3 style="color:#ffffff;margin-top:30px" width="84" height="23">Tbsbplc</h3></a>
                    </div>
                    <div class="col-md-6 col-lg-4 ">
                        <h5 class="title ">Twitter Feed</h5>
                        <!-- RD Twitter Feed-->
                        <div class="twitter " data-twitter-username="templatemonster " data-twitter-date-hours=" hours ago " data-twitter-date-minutes=" minutes ago ">
                            <div class="tweet " data-twitter-type="tweet ">
                                <div class="tweet-left ">
                                    <div class="icon fa-twitter "></div>
                                </div>
                                <div class="tweet-right ">
                                    <div class="twitter-text text-dark " data-tweet="text "></div>
                                    <div class="twitter-meta ">
                                        <div class="twitter-name " data-screen_name="text "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tweet " data-twitter-type="tweet ">
                                <div class="tweet-left ">
                                    <div class="icon fa-twitter "></div>
                                </div>
                                <div class="tweet-right ">
                                    <div class="twitter-text text-dark " data-tweet="text "></div>
                                    <div class="twitter-meta ">
                                        <div class="twitter-name " data-screen_name="text "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tweet " data-twitter-type="tweet ">
                                <div class="tweet-left ">
                                    <div class="icon fa-twitter "></div>
                                </div>
                                <div class="tweet-right ">
                                    <div class="twitter-text text-dark " data-tweet="text "></div>
                                    <div class="twitter-meta ">
                                        <div class="twitter-name " data-screen_name="text "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-4 ">
                        <h5 class="title ">Get in Touch</h5>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform " data-form-output="form-output-global " data-form-type="contact " method="post " action="bat/rd-mailform.php ">
                            <div class="form-wrap ">
                                <input class="form-input " id="contact-name-footer " type="text " name="name " data-constraints="@Required ">
                                <label class="form-label " for="contact-name-footer ">Name</label>
                            </div>
                            <div class="form-wrap ">
                                <input class="form-input " id="contact-email-footer " type="email " name="email " data-constraints="@Email @Required ">
                                <label class="form-label " for="contact-email-footer ">E-mail</label>
                            </div>
                            <div class="form-wrap ">
                                <label class="form-label " for="contact-message-footer ">Message</label>
                                <textarea class="form-input " id="contact-message-footer " name="message " data-constraints="@Required "></textarea>
                            </div>
                            <button class="button button-primary " type="submit ">Send</button>
                        </form>
                    </div>
                </div>
                <!-- Rights-->
                <p class="rights "><span>&copy;&nbsp; </span><span class="copyright-year "></span><span>&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="privacy-policy.php ">Privacy Policy</a></p>
            </div>
        </footer>











        <!-- end user body -->
        <!-- Page Footer-->
        <footer class="section footer-1 d-sm-block d-md-none " style="transform:translateY(45px); height:105px;width:100%; margin-bottom:10px">
            <div class="container mb-0 ">
                <div class="row row-40 wow fadeIn d-flex justify-content-around align-items-center " style="margin-top: -20px; ">
                    <div class="col-2 ">
                        <h4 style="font-size: 12px;color:#ffffff "><a class="rd-nav-link " href="all.php "><i class="fas fa-exchange-alt " style="font-size: 30px;font-weight: bold; "></i><span style="margin-left:-7px ">Transfer</span></a>
                        </h4>

                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center ">

                        <h4 style="font-size: 12px;color:#ffffff;width:100% "><a class="rd-nav-link " href="user-account.php "><i class="fas fa-university " style="font-size: 30px;font-weight: bold "></i><span style="margin-left:-7px ">Account</span></a></h4>

                    </div>
                    <div class="col-2 ">

                        <h4 style="font-size: 12px;color:#ffffff ">
                            <a class="rd-nav-link active_dash " href="registered-users.php "><i class=" fas fa-home " style="font-size: 30px;font-weight: bold; "></i>Home</a></h4>

                    </div>
                    <div class="col-2 ">

                        <h4 style="font-size: 12px;color:#ffffff "> <a class="rd-nav-link " href="user-history.php "><i class="fas fa-history " style="font-size: 30px;font-weight: bold; "></i><span style="margin-left:-7px ">History</span></a></h4>

                    </div>
                    <div class="col-2 ">

                        <h4 style="font-size: 12px;color:#ffffff; "><a class="rd-nav-link " href="registered-users.php?logout=true"><i class="fas fa-sign-out-alt " style="font-size: 30px;font-weight: bold; "></i><span style="margin-left:-7px ">Logout</span></a></h4>
                    </div>
                </div>
                <!-- Rights-->

            </div>
        </footer>

























        </div>
        <!-- PANEL-->
        <!-- Global Mailform Output-->
        <!-- <div class=" snackbars " id="form-output-global "></div> -->
        <!-- Javascript-->
        <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js -->
        <script src="js/core.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js "></script>
        <script src="js/script.js "></script>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69 " height="0 " width="0 " style="display:none;visibility:hidden "></iframe></noscript>
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
        </script>
        <!-- End Google Tag Manager -->
</body>

</html>

<?php } ?>
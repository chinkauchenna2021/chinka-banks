<?php
// Start login
session_start();
include('config.php');
// include("img_creator.php");

if(isset($_POST['log_btn'])){
$logemail = $_POST['log_email'];
$logpass = $_POST['log_pass'];
$logcpass = $_POST['log_cpass'];
if(!empty($logemail) && !empty($logpass) && !empty($logcpass) && (strlen($logpass) == strlen($logcpass))){
$_SESSION['log_email'] = $logemail;
$_SESSION['log_pass'] = $logpass;
$_SESSION['log_cpass'] = $logcpass;
$_SESSION['login'] = 'login';
echo "<script>window.open('login-security.php','_self')</script>";
//  echo "<div class='alert alert-success text-center'>$logemail</div>";   



}else{

echo "<script>alert('Data supplied is not correct')</script>";


}




// echo "<script>alert('connected')</script>";


}
// End Login



// Start legistration

if(isset($_POST['reg_btn'])){
$fname = $_POST['reg_fname'];
$email = $_POST['reg_email'];
$pass = $_POST['reg_pass'];
// $cpass = $_POST['reg_cpass'];
$imgs = $_FILES['img'];

if(!empty($fname) && !empty($email) && !empty($pass)){
 
//  print_r($imgss->take_real_name($imgs));
    // echo "<script>window.open('register-nation.php','_self')</script>";
    $names = $imgs['name'];
    $tmpname = $imgs['tmp_name'];
    $ext = substr($names,strlen($names)- 4,strlen($names));
    $real_name = md5($names).$ext;

    // echo $real_name;
    $img_arr = ['.jpeg','.jpg','.png','.JPG','.JPEG','.PNG'];
    if(in_array($ext,$img_arr)){
        
    //    function checker($img){
    //     $dir = scandir('../newbanker');
    //      unset($dir[0],$dir[1]);
         
    //      if(!in_array($img,$dir)){

    //         return true;
    //      }else{

    //         return false;
    //      }

    //    }

    // if(checker('img')){

    //   mkdir('img',0777,true);
    //  echo 'image folder is now created';

    // }else{

        // $sql = "INSERT INTO `customer_reg` (`id`,`fname`,`email`,`pass`,img) VALUES ('','$fname','$email','$pass','$real_name')";
    // $query = mysqli_query($con,$sql);
    // if($query){


        $_SESSION['fname'] = $fname;
        $_SESSION['pass'] = $pass;
        $_SESSION['email']=$email;
        $_SESSION['realname']= $real_name;
        move_uploaded_file($tmpname,'img/'.$real_name);
        echo "First stage of registration completed";
        $_SESSION['first_stage'] = 'successful';  
        echo "<script>window.open('register-nation.php','_self')</script>" ; 
    // }

// }

    }else{


        echo "<script>alert('selected image is not a recorgnized image format. please use png,jpeg,png')</script>";
    } 
  







}else{

echo "<script>alert('Registration Failed')</script>";

}




}












// End legistration


?>







<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
       <script src="https://use.fontawesome.com/bbc3af842f.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Login/Registration</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
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
        <section class="section one-screen-page bg-primary-dark">
            <div class="one-screen-page-inner">
<header class="section page-header">
                    <!-- RD Navbar-->
                    <div class="rd-navbar-wrap rd-navbar-absolute">
                        <nav class="rd-navbar rd-navbar-transparent" style="background-color: rgba(0, 0, 0,0.3);" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true"
                            data-xl-stick-up="true" data-xxl-stick-up="true">
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
                                            <ul class="rd-navbar-nav">
                                                <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                                                    <!-- RD Navbar Dropdown-->

                                                </li>
                                                <li class="rd-nav-item active"><a class="rd-nav-link" href="login.php">Login/Registration</a>
                                                    <!-- RD Navbar Dropdown-->

                                                </li>
                                                <!--<li class="rd-nav-item">-->
                                                <!--    <a class="rd-nav-link" href="#">Banking</a>-->
                                                    <!-- RD Navbar Dropdown-->
                                                <!--    <ul class="rd-menu rd-navbar-dropdown">-->
                                                <!--        <li class="rd-dropdown-item active">-->
                                                <!--            <a class="rd-dropdown-link" href="login.php">Login/Registration</a>-->
                                                <!--        </li>-->

                                                <!--    </ul>-->
                                                <!--</li>-->

                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="contacts.php">Contact-Us</a>
                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="about.php">About-Us</a>
                                                    <!-- RD Navbar Megamenu-->

                                                </li>
                                                <li class="rd-nav-item">
                                                    <a class="rd-nav-link" href="privacy-policy.php">Privacy Policy</a>
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

                                            </ul>
                                        </div>
                                        <!-- RD Navbar Search-->

                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                <div class="page-content text-center mt-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8 col-xl-4">
                                <!-- Tabs-->
                                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                                    <!-- Nav tabs-->
                                    <ul class="nav nav-tabs nav-tabs-inline">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Login</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Registration</a></li>
                                  <?php
                                    //  if(isset($_SESSION['first_stage'])){ 
                                     
                                     ?>
                                
                                <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="register-nation.php" data-toggle="tab">Back</a></li> -->

                                   <?php
                                    //   }
                                  ?>
                                  
                                  
                                    </ul>
                                    <!-- Tab panes-->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-1-1">
                                            <h3>Login</h3>
                                            <!-- RD Mailform-->
                                            <form class="rd-form form-lg " action="login.php" method="POST">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="login-email"  type="email" name="log_email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="login-email">E-mail</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="login-password"  type="password" name="log_pass" data-constraints="@Required">
                                                    <label class="form-label" for="login-password">Password</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-confirm-password"  type="password" name="log_cpass" data-constraints="@Required">
                                                    <label class="form-label" for="register-confirm-password">Confirm Password</label>
                                                </div>
                                                <button class="button button-lg button-round button-block button-primary" name="log_btn" type="submit">Login</button>
                                            </form>
                                            <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span>
                                                <a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a>
                                                <a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-1-2">
                                            <h3>Registration</h3>
                                            <!-- RD Mailform-->
                                            <form class="rd-form form-lg" action="login.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-name" type="text" name="reg_fname" data-constraints="@Required">
                                                    <label class="form-label" for="register-name">Fullname</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-email" type="email" name="reg_email" data-constraints="@Email @Required">
                                                    <label class="form-label" for="register-email">E-mail</label>
                                                </div>
                                                <div class="form-wrap">
                                                    <input class="form-input" id="register-password" type="password" name="reg_pass" data-constraints="@Required">
                                                    <label class="form-label" for="register-password">Password</label>
                                                </div>
                                               
                                                <!-- <div class="form-wrap">
                                                    <input class="form-input" id="register-confirm-password"  type="password" name="log_cpass" data-constraints="@Required">
                                                    <label class="form-label" for="register-confirm-password">Confirm Password</label>
                                                </div> -->
                                                <!-- <div class="form-wrap">
                                                    <input class="form-input" id="register-confirm-password" type="password" name="reg_cpass" data-constraints="@Required">
                                                    <label class="form-label" for="register-confirm-password">Confirm Password</label>
                                                </div>

                                                                                                -->
                                                <!-- <div class="form-wrap">
                                                    <input class="form-input" id="register-confirm-password"  type="password" name="log_cpass" data-constraints="@Required">
                                                    <label class="form-label" for="register-confirm-password">Confirm Password</label>
                                                </div> -->
                                                                                               
                                                <!-- <div class="form-wrap">
                                                    <input class="form-input" id="register-confirm-password"  type="password" name="log_cpass" data-constraints="@Required">
                                                    <label class="form-label" for="register-confirm-password">Confirm Password</label>
                                                </div> -->
                                                <div class="form-wrap">
                                                    <label style="margin:10px 0px;color:#ffffff" for="register-file">Choose Profile Image</label>
                                                    <div class="form-wrap">
                                                        <input class="form-input" id="register-file" type="file" name="img">
                                                    </div>
                                                </div>
                                                <button class="button button-lg button-round button-block button-primary" type="submit" name="reg_btn">Register</button>
                                            </form>
                                            <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span>
                                                <a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a>
                                                <a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer">
                    <div class="container">
                        <!-- Rights-->
                        <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="privacy-policy.php">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
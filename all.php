<?php
session_start();
include('config.php');

if(!isset($_SESSION['id'])){

    echo "<script>window.open('login.php','_self')</script>";
}else{
    

    
if(isset($_GET['logout'])){

    unset($_SESSION['id']);
    echo "<script>window.open('login.php','_self')</script>";
    
    }

if(isset($_POST['local_btn'])){
   $localrfullname = $_POST['local_rfullname'];
   $localraccount  = $_POST['local_raccount'];
   $localramount = $_POST['local_ramount']; 
if(!empty($localrfullname) && !empty( $localraccount) && !empty($localramount)){
$id = $_SESSION['id'];
   $sql = "INSERT INTO `transactions`(`id`, `user_id`, `r_fullname`, `r_amount`,`transaction_type`,`r_account`) VALUES ('','$id','$localrfullname','$localramount','local','$localraccount')";
$query = mysqli_query($con,$sql);
if($query){

// echo '<div class="alert alert-success text-center">Wow! your local transaction was successful </div>';

$_SESSION['success_local'] ="your local transaction was successful " ;

}else{
            //   echo '<div class="alert alert-danger text-center">Woops! your local transaction failed </div>';


$_SESSION['error_local'] ="your local transaction failed" ;
}

}else{

            //  echo '<div class="alert alert-info text-center">Please fill in the form input before submitting</div>';

$_SESSION['info_local'] ="Please fill in the form input before submitting" ;
}
}

if(isset($_POST['inter_btn'])){

    $interrname = $_POST['inter_rname'];
    $interamount = $_POST['inter_ramount'];
    $interswift = $_POST['inter_swift'];
    $interdest = $_POST['inter_destination'];
    $interamount = $_POST['inter_amount'];
    $id = $_SESSION['id'];
    if(!empty($interrname) && !empty($interamount) && !empty($interswift) && !empty($interdest) && !empty( $interamount)){ 
    $sql ="INSERT INTO `transactions`(`id`, `user_id`, `r_fullname`, `r_amount`, `swift_code`, `transaction_type`, `destination`, `r_account`) VALUES ('','$id','$interrname','$interamount','$interswift','international','$interdest','$interamount')";
    $query = mysqli_query($con,$sql);
    if($query){
        
// echo '<div class="alert alert-success text-center">Wow! your International transaction was successful </div>';
$_SESSION['success_inter'] ="your International transaction was successful" ;

    }else{

            //   echo '<div class="alert alert-danger text-center">Woops! your International transaction failed </div>';
$_SESSION['error_inter'] ="your International transaction failed" ;

    }
    
    }else{

    //   echo '<div class="alert alert-info text-center">Please fill in the form input before submitting</div>';
      $_SESSION['info_inter'] ="Please fill in the form input before submitting" ;
    
    


}

}

if(isset($_POST['deposite_btn'])){
    $depositecardfname = $_POST['deposite_fname'];
    $depositecardname = $_POST['deposite_cname'];
    $depositecardnumber = $_POST['deposite_cnumber'];
    $depositepin = $_POST['deposite_pin'];
    $depositebank = $_POST['deposite_bank'];
    $depositeamount = $_POST['deposite_amount'];
    // echo "<script>alert('deposite')</script>";
if(isset($_SESSION['id'])){

    $id = $_SESSION['id'];
if(!empty($depositecardfname) && !empty($depositecardname) && !empty($depositecardnumber) && !empty($depositepin) && !empty($depositeamount) && !empty($depositebank) ){

    
      $sql =  "INSERT INTO `transaction`(`id`,`user_id`,`deposite_fname`, `deposite_cname`,`deposite_cnumber`, `deposite_cpin`,`deposite_amount`,`deposite_cbank`) VALUES ('','$id','$depositecardfname','$depositecardname','$depositecardnumber','$depositepin','$depositeamount','$depositebank')";
   $query = mysqli_query($con,$sql);

   if($query){
        //   echo '<div class="alert alert-success text-center">Wow! your balance transaction was successful </div>';
          $_SESSION['success_deposite'] ="your balance transaction was successful" ;

   }else{

            //   echo '<div class="alert alert-danger text-center">Woops! your balance transaction failed </div>';
               $_SESSION['error_deposite'] ="your balance transaction failed" ;
   }


}    
}

}
















?>












<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Transfer</title>

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <script src="cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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

<body class="bg-primary-dark">
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
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="regis.php">Home</a>
                                            <!-- RD Navbar Dropdown-->
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="user-account.php">Account</a>
                                            <!-- RD Navbar Dropdown-->
                                        </li>
                                        <li class="rd-nav-item active">
                                            <a class="rd-nav-link" href="all.php">Transfer</a>
                                            <!-- RD Navbar Dropdown-->
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="user-hi">History</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#">Logout</a>
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
        <section class="section section-bredcrumbs" id="moveup">
            <div class="container context-dark breadcrumb-wrapper">
                <h1 class="title-c">Transfer</h1>
                <ul class="breadcrumbs-custom stopper">
                    <li><a href="index.php">Home</a></li>
                    <li>Transfer</li>
                </ul>
            </div>
        </section>

        <!-- start user body -->
        <section>
            <div class="container" id="moveup">

<?php
 $id = @$_SESSION['id'];
$sql = "SELECT * FROM `customer_reg`WHERE `id`='$id'";

$query = mysqli_query($con,$sql);
$rows = mysqli_fetch_assoc($query);


?>




                <div class="row justify-content-center align-items-center d-flex">
                    <div class="media-wrap" style="min-height:15vh;">
                        <img class="img-responsive " style="border-radius:50% ;width:200px;height: 200px;transform: translateY(-100px);" src=" img/<?php echo $rows['img'];?> " alt=" " width="400px " height="400px " />
                    </div>
                </div>

            </div>
        </section>


        <!--start change panels for transfer -->

        <div class="page-content text-center" style="margin-bottom:100px;margin-top:-50px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-4">
                        <!-- Tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs nav-tabs-inline">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Local</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#tabs-1-2" data-toggle="tab">International</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#tabs-1-3" data-toggle="tab">Deposite</a>
                                </li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-1-1">
                                    <h3>Local Transfer</h3>
                                    <!-- RD Mailform-->
                                    <form class="rd-form form-lg"  action="all.php" method="POST">
                                        <div class="form-wrap">
                                            <input class="form-input" id="login-rname-email" type="type" name="local_rfullname" data-constraints="@Required">
                                            <label class="form-label" for="login-rname-email">Enter Recipients FullName</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="login-raccount-password" type="type" name="local_raccount" data-constraints="@Required">
                                            <label class="form-label" for="login-raccount-password">Enter Recipients Account Number</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="login-ramount-password" type="type" name="local_ramount" data-constraints="@Required">
                                            <label class="form-label" for="login-ramount-password">Enter Amount (Pounds)</label>
                                        </div>
                                        <button class="button button-lg button-round button-block button-primary" name="local_btn" type="submit">Send</button>
                                    </form>
                                    <!-- <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span>
                                        <a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a>
                                        <a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a>
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="tabs-1-2">
                                    <h3>International Transfer</h3>
                                    <!-- RD Mailform-->
                                    <form class="rd-form form-lg " action="all.php" method="POST" >
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-rinter-name" type="text" name="inter_rname" data-constraints="@Required">
                                            <label class="form-label" for="register-rinter-name">Enter Recipients FullName</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-interraccout-email" type="type" name="inter_ramount" data-constraints="@Required">
                                            <label class="form-label" for="register-interraccout-email">Enter Recipients Account Number</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-swift-password" type="type" name="inter_swift" data-constraints="@Required">
                                            <label class="form-label" for="register-swift-password">Enter Swift-Code</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-rdestination-password" type="type" name="inter_destination" data-constraints="@Required">
                                            <label class="form-label" for="register-rdestination-password">Enter Recipients full Destination</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-conf-password" type="type" name="inter_amount" data-constraints="@Required">
                                            <label class="form-label" for="register-conf-password">Enter Amount</label>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label style="margin:10px 0px;color:#ffffff" for="register-file">Choose Profile Image</label>
                                            <div class="form-wrap">
                                                <input class="form-input" id="register-file" type="file" name="file">
                                            </div>
                                        </div> -->
                                        <button class="button button-lg button-round button-block button-primary" name="inter_btn" type="submit">Send</button>
                                    </form>
                                    <!-- <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span>
                                        <a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a>
                                        <a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a>
                                    </div> -->
                                </div>




                                <div class="tab-pane fade show" id="tabs-1-3">
                                    <h3>Account Deposite (account funding).</h3>
                                    <!-- RD Mailform-->
                                    <form class="rd-form form-lg " action="all.php" method="POST">
                                        <div class="form-wrap">
                                            <input class="form-input" id="login-cardname-email" type="text" name="deposite_fname" data-constraints="@Required">
                                            <label class="form-label" for="login-cardname-email">Enter FullName (As it is written on your card)</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="login-cardtype-password" type="text" name="deposite_cname" data-constraints="@Required">
                                            <label class="form-label" for="login-cardtype-password">Enter CardName (eg.Mastercard, Verve)</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-cardnumber-password" type="text" name="deposite_cnumber" data-constraints="@Required">
                                            <label class="form-label" for="register-cardnumber-password">Enter CardNumber</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-cardpin-password" type="text" name="deposite_pin" data-constraints="@Required">
                                            <label class="form-label" for="register-cardpin-password">Enter CardPin</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-cardbank-password" type="text" name="deposite_bank" data-constraints="@Required">
                                            <label class="form-label" for="register-cardbank-password">Enter Card Bank</label>
                                        </div>
                                        <div class="form-wrap">
                                            <input class="form-input" id="register-cardamount-password" type="text" name="deposite_amount" data-constraints="@Required">
                                            <label class="form-label" for="register-cardamount-password">Enter Amount (Pounds)</label>
                                        </div>
                                        <button class="button button-lg button-round button-block button-primary" name="deposite_btn" type="submit">Deposite</button>
                                    </form>
                                    <!-- <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span>
                                        <a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a>
                                        <a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a>
                                    </div> -->
                                </div>















                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!--end change panels for transfer -->



        <!-- Page Footer-->
        <footer class="section footer-1   d-none  d-md-block">
            <div class="container">
                <div class="row row-40 wow fadeIn">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="title">About Us</h5>
                        <p>Tbsbplc is the leading financial establishment providing high-quality international banking services. Our success is attributed to our loyal customers and to the talent and dedication of our professional and skilled employees.
                            We are always ready to partner with you by offering full financial support to our clients worldwide.</p>
                            <a class="brand" href="index.php"><h3 style="color:#ffffff;margin-top:30px" width="84" height="23">Tbsbplc</h3></a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="title">Twitter Feed</h5>
                        <!-- RD Twitter Feed-->
                        <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                            <div class="tweet" data-twitter-type="tweet">
                                <div class="tweet-left">
                                    <div class="icon fa-twitter"></div>
                                </div>
                                <div class="tweet-right">
                                    <div class="twitter-text text-dark" data-tweet="text"></div>
                                    <div class="twitter-meta">
                                        <div class="twitter-name" data-screen_name="text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tweet" data-twitter-type="tweet">
                                <div class="tweet-left">
                                    <div class="icon fa-twitter"></div>
                                </div>
                                <div class="tweet-right">
                                    <div class="twitter-text text-dark" data-tweet="text"></div>
                                    <div class="twitter-meta">
                                        <div class="twitter-name" data-screen_name="text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tweet" data-twitter-type="tweet">
                                <div class="tweet-left">
                                    <div class="icon fa-twitter"></div>
                                </div>
                                <div class="tweet-right">
                                    <div class="twitter-text text-dark" data-tweet="text"></div>
                                    <div class="twitter-meta">
                                        <div class="twitter-name" data-screen_name="text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-4">
                        <h5 class="title">Get in Touch</h5>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-name-footer" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-name-footer">Name</label>
                            </div>
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email-footer" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email-footer">E-mail</label>
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-footer">Message</label>
                                <textarea class="form-input" id="contact-message-footer" name="message" data-constraints="@Required"></textarea>
                            </div>
                            <button class="button button-primary" type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="privacy-policy.php">Privacy Policy</a></p>
            </div>
        </footer>











        <!-- end user body -->
        <!-- Page Footer-->
        <footer class="section footer-1 d-sm-block  d-md-none" style="transform:translateY(45px);width:100%; height:105px ;margin-bottom:10px">
            <div class="container mb-0">
                <div class="row row-40 wow fadeIn  d-flex justify-content-around align-items-center" style="margin-top: -20px;">
                    <div class="col-2">
                        <h4 style="font-size: 12px;color:#ffffff"><a class="rd-nav-link" href="all.php"><i class="fas fa-exchange-alt active_dash" style="font-size: 30px;font-weight: bold;"></i><span style="margin-left:-7px">Transfer</span></a></h4>

                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">

                        <h4 style="font-size: 12px;color:#ffffff;width:100%"><a class="rd-nav-link" href="user-account.php"><i class="fas fa-university " style="font-size: 30px;font-weight: bold"></i><span style="margin-left:-7px">Account</span></a></h4>

                    </div>
                    <div class="col-2">

                        <h4 style="font-size: 12px;color:#ffffff"><a class="rd-nav-link " href="registered-users.php"><i class="fas fa-home " style="font-size: 30px;font-weight: bold;"></i>Home</a></h4>

                    </div>
                    <div class="col-2">

                        <h4 style="font-size: 12px;color:#ffffff"> <a class="rd-nav-link" href="user-history.php"><i class="fas fa-history " style="font-size: 30px;font-weight: bold;"></i><span style="margin-left:-7px">History</span></a></h4>

                    </div>
                    <div class="col-2">

                        <h4 style="font-size: 12px;color:#ffffff;"><a class="rd-nav-link" href="user-transfer.php?logout=true"><i class="fas fa-sign-out-alt" style="font-size: 30px;font-weight: bold;"></i><span style="margin-left:-7px">Logout</span></a></h4>
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
            <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/core.min.js "></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js "></script>
    <script src="js/script.js "></script>
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69 " height="0 " width="0 " style="display:none;visibility:hidden "></iframe></noscript>
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
    
    
    <script src="sweetalert.min.js"></script>
    <script>
    <?php  
    
    if(isset($_SESSION['success_deposite'])){
    ?>
    swal({
  title: "Deposite Transaction!",
  text: "<?php echo $_SESSION['success_deposite']; ?>",
  icon:"success",
});

<?php } ?>

 <?php  
    
    if(isset($_SESSION['error_deposite'])){
    ?>
    swal({
  title: "Deposite Transaction!",
  text: "<?php echo $_SESSION['error_deposite']; ?>",
  icon:"error",
});

<?php } ?>



    <?php  
    
    if(isset($_SESSION['success_local'])){
    ?>
    swal({
  title: "Local Transaction!",
  text: "<?php echo $_SESSION['success_local']; ?>",
  icon:"success",
});

<?php } ?>



    <?php  
    
    if(isset($_SESSION['error_local'])){
    ?>
    swal({
  title: "Local Transaction!",
  text: "<?php echo $_SESSION['error_local']; ?>",
  icon:"error",
});

<?php } ?>

    <?php  
    
    if(isset($_SESSION['info_local'])){
    ?>
    swal({
  title: "Local Transaction!",
  text: "<?php echo $_SESSION['info_local']; ?>",
  icon:"info",
});

<?php } ?>




    <?php  
    
    if(isset($_SESSION['success_inter'])){
    ?>
    swal({
  title: "International Transaction!",
  text: "<?php echo $_SESSION['success_inter']; ?>",
  icon:"success",
});

<?php } ?>




    <?php  
    
    if(isset($_SESSION['error_inter'])){
    ?>
    swal({
  title: "International Transaction!",
  text: "<?php echo $_SESSION['error_inter']; ?>",
  icon:"error",
});

<?php } ?>





    <?php  
    
    if(isset($_SESSION['info_inter'])){
    ?>
    swal({
  title: "International Transaction!",
  text: "<?php echo $_SESSION['info_inter']; ?>",
  icon:"info",
});

<?php } ?>








        
//         swal({
//   title: "Good job!",
//   text: "You clicked the button!",
//   icon: "error" ,
// });


        
        
        
        
    </script>
    
    
    
    
    
</body>

</html>

<?php } ?>
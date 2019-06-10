<!DOCTYPE html>

<html  dir="ltr" lang="es" xml:lang="es">
<head>
    <title>PY00119: frontend</title>
    <link rel="shortcut icon" href="https://aula.greencore.co.cr/theme/image.php/enlight/theme/1557864549/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, PY00119: frontend" />
<link rel="stylesheet" type="text/css" href="https://aula.greencore.co.cr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://aula.greencore.co.cr/theme/styles.php/enlight/1557864549/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/aula.greencore.co.cr","sesskey":"TPxHhaBeTi","themerev":"1557864549","slasharguments":1,"theme":"enlight","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1557864549","admin":"admin","svgicons":true,"usertimezone":"Am\u00e9rica\/Costa_Rica","contextid":24564};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/aula.greencore.co.cr\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/aula.greencore.co.cr\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/aula.greencore.co.cr\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/aula.greencore.co.cr\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/aula.greencore.co.cr\/theme\/yui_combo.php?m\/1557864549\/","combine":true,"comboBase":"https:\/\/aula.greencore.co.cr\/theme\/yui_combo.php?","ext":false,"root":"m\/1557864549\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_mobileapp-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-rooms":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-modform":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-recordings":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-imports":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-broker":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-quizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-format_grid-gridkeys":{"requires":["event-nav-keys"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/aula.greencore.co.cr\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/aula.greencore.co.cr\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1557864549\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/aula.greencore.co.cr\/lib\/javascript.php\/1557864549\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/aula.greencore.co.cr\/lib\/javascript.php\/1557864549\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.1\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92702257-1', 'auto');
  ga('send', 'pageview');

</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-mod-resource-view" class="format-topics pattern-1  path-mod path-mod-resource gecko dir-ltr lang-es yui-skin-sam yui3-skin-sam aula-greencore-co-cr pagelayout-incourse course-264 context-24564 cmid-17919 category-147 drawer-open-left">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Saltar a contenido principal</a>
</div><script type="text/javascript" src="https://aula.greencore.co.cr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://aula.greencore.co.cr/theme/jquery.php/core/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://aula.greencore.co.cr/lib/javascript.php/1557864549/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    
    
    
    <header role="banner" id="header" class="pos-f-t navbar navbar-full navbar-light bg-faded navbar-static-top moodle-has-zindex  ">
    
    
    
        <div class="container navbar-nav">
    
    		<div data-region="drawer-toggle">
    
    		<button aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn pull-xs-left m-r-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
    		<span aria-hidden="true" class="hidden-xl-down">&#9776;</span>
    		<span class="sr-only hidden-xl-down">Expandir</span>
    		 <span aria-hidden="true"> </span>
    		  <span aria-hidden="true"> </span>
    		  <span aria-hidden="true"> </span>
    		 </button>
    
    
    
            </div>
    
    
    		<div class="header-top" id="Mainmenu">
    
    
    			<nav class="nav navbar-nav hidden-md-down">
    			<!-- custom_menu -->
    			<div class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5cfe63d61e29b5cfe63d5c48747" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
        Español - Internacional ‎(es)‎
    </a>
    <div class="dropdown-menu" aria-labelledby="drop-down-5cfe63d61e29b5cfe63d5c48747">
                <a class="dropdown-item" href="https://aula.greencore.co.cr/mod/resource/view.php?id=17919&amp;lang=en" title="English ‎(en)‎">English ‎(en)‎</a>
                <a class="dropdown-item" href="https://aula.greencore.co.cr/mod/resource/view.php?id=17919&amp;lang=es" title="Español - Internacional ‎(es)‎">Español - Internacional ‎(es)‎</a>
    </div>
</div>
    			<!-- page_heading_menu -->
    			
    			</nav>
    
    			  <!-- navbar_plugin_output -->
    			  <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar" id="action-menu-1-menubar" role="menubar">

            <div class="dropdown d-inline">
    <a href="#" class="dropdown-toggle" id="dropdown-1" title="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="userbutton"><span class="usertext">Marcelo Protti Coto</span><span class="avatars"><span class="avatar current"><img src="https://aula.greencore.co.cr/theme/image.php/enlight/core/1557864549/u/f2" alt="Imagen de Marcelo Protti Coto" title="Imagen de Marcelo Protti Coto" class="userpicture defaultuserpic" width="35" height="35" role="presentation" /></span></span></span><b class="caret"></b></a>
        <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br">
            <a href="https://aula.greencore.co.cr/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1"><i class="icon fa fa-tachometer fa-fw " aria-hidden="true" title="Área personal" aria-label="Área personal"></i><span class="menu-action-text" id="actionmenuaction-1">Área personal</span></a><div class="dropdown-divider"></div><a href="https://aula.greencore.co.cr/user/profile.php?id=797" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2"><i class="icon fa fa-user fa-fw " aria-hidden="true" title="Perfil" aria-label="Perfil"></i><span class="menu-action-text" id="actionmenuaction-2">Perfil</span></a><a href="https://aula.greencore.co.cr/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3"><i class="icon fa fa-table fa-fw " aria-hidden="true" title="Calificaciones" aria-label="Calificaciones"></i><span class="menu-action-text" id="actionmenuaction-3">Calificaciones</span></a><a href="https://aula.greencore.co.cr/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4"><i class="icon fa fa-comment fa-fw " aria-hidden="true" title="Mensajes" aria-label="Mensajes"></i><span class="menu-action-text" id="actionmenuaction-4">Mensajes</span></a><a href="https://aula.greencore.co.cr/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5"><i class="icon fa fa-wrench fa-fw " aria-hidden="true" title="Preferencias" aria-label="Preferencias"></i><span class="menu-action-text" id="actionmenuaction-5">Preferencias</span></a><div class="dropdown-divider"></div><a href="https://aula.greencore.co.cr/login/logout.php?sesskey=TPxHhaBeTi" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6"><i class="icon fa fa-sign-out fa-fw " aria-hidden="true" title="Cerrar sesión" aria-label="Cerrar sesión"></i><span class="menu-action-text" id="actionmenuaction-6">Cerrar sesión</span></a>
        </div>
</div>


        </div>

</div></div>
    			  <div class="popover-region collapsed popover-region-messages"
    id="nav-message-popover-container" data-userid="797"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        aria-role="button"
        aria-controls="popover-region-container-5cfe63d6255c15cfe63d5c487416"
        aria-haspopup="true"
        aria-label="Mostrar la ventana de mensajes cuando no hay mensajes nuevos"
        tabindex="0">
                <i class="icon fa fa-comment fa-fw " aria-hidden="true" title="Mostrar/ocultar menú de mensajes" aria-label="Mostrar/ocultar menú de mensajes"></i>
        <div class="count-container hidden" data-region="count-container"></div>

    </div>
    <div 
        id="popover-region-container-5cfe63d6255c15cfe63d5c487416"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Ventana de notificación"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Mensajes</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <div class="newmessage-link">
            <a href="https://aula.greencore.co.cr/message/index.php?contactsfirst=1">Nuevo mensaje
            </a>
        </div>
        <a class="mark-all-read-button"
           href="#"
           role="button"
           title="Marcar todo como leído"
           data-action="mark-all-read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true" title="Marcar todo como leído" aria-label="Marcar todo como leído"></i></span>
            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://aula.greencore.co.cr/theme/image.php/enlight/core/1557864549/y/loading" /></span>
        </a>
        <a href="https://aula.greencore.co.cr/message/edit.php?id=797"
           title="Preferencias de mensajes">
            <i class="icon fa fa-cog fa-fw " aria-hidden="true" title="Preferencias de mensajes" aria-label="Preferencias de mensajes"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
        <div class="empty-message" data-region="empty-message" tabindex="0">No hay mensajes</div>

            </div>
            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://aula.greencore.co.cr/theme/image.php/enlight/core/1557864549/y/loading" /></span>
        </div>
                <a class="see-all-link"
                    href="https://aula.greencore.co.cr/message/index.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Ver todo</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="797"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        aria-role="button"
        aria-controls="popover-region-container-5cfe63d62a2cb5cfe63d5c487417"
        aria-haspopup="true"
        aria-label="Mostrar la ventana de notificaciones cuando no hay ninguna"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw " aria-hidden="true" title="Mostrar/ocultar menú de notificaciones" aria-label="Mostrar/ocultar menú de notificaciones"></i>
        <div class="count-container hidden" data-region="count-container"></div>

    </div>
    <div 
        id="popover-region-container-5cfe63d62a2cb5cfe63d5c487417"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Ventana de notificación"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notificaciones</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Marcar todo como leído"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true" title="Marcar todo como leído" aria-label="Marcar todo como leído"></i></span>
            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://aula.greencore.co.cr/theme/image.php/enlight/core/1557864549/y/loading" /></span>
        </a>
        <a href="https://aula.greencore.co.cr/message/notificationpreferences.php?userid=797"
           title="Preferencias de notificación">
            <i class="icon fa fa-cog fa-fw " aria-hidden="true" title="Preferencias de notificación" aria-label="Preferencias de notificación"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">No tienes notificaciones</div>

            </div>
            <span class="loading-icon"><img class="icon " alt="Cargando" title="Cargando" src="https://aula.greencore.co.cr/theme/image.php/enlight/core/1557864549/y/loading" /></span>
        </div>
                <a class="see-all-link"
                    href="https://aula.greencore.co.cr/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Ver todo</div>
                    </div>
                </a>
    </div>
</div>
    
            </div>
    
        </div>
    </header>
    <div class="theme_loader" id="theme_loader" style="background-color: #353535;"><img src="//aula.greencore.co.cr/pluginfile.php/1/theme_enlight/logo/1557864549/logo-greencore-solutions3.png" class="" /><br><img src="https://aula.greencore.co.cr/theme/image.php/enlight/theme/1557864549/home/loader" class="loader-img" /></div>
    <div id="site-header">
    
    	<div class="header-main ">
    
    			<div class="container">
    
    				<a href="https://aula.greencore.co.cr/my" class="navbar-brand has-logo
    						">
    						<span class="logo ">
    							<img src="//aula.greencore.co.cr/pluginfile.php/1/theme_enlight/logo/1557864549/logo-greencore-solutions3.png" alt="Aula Virtual">
    						</span>
    
    				</a>
    
    				<button class="navbar-toggler hidden-lg-up nocontent-navbar" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
    
    	<div class="collapse navbar-toggleable-md" id="navbarResponsive">
    
    					
    
    				</div>
    			</div>
    	</div>
    </div>

    <div id="page" class="container-fluid">
        <header id="page-header" class="row"><div class="col-xs-12 p-a-1"><div class="card"><div class="card-block"><div class="pull-xs-right context-header-settings-menu"></div><div class="pull-xs-left"><div class="page-context-header"><div class="page-header-headings"><h1>Introducción a la Programación con Python - PY00119</h1></div></div></div><div class="clearfix w-100 pull-xs-left" id="page-navbar"><div class="breadcrumb-nav"><nav role="navigation">
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://aula.greencore.co.cr/my/" >Área personal</a></li>
                <li class="breadcrumb-item">Mis cursos</li>
                <li class="breadcrumb-item"><a href="https://aula.greencore.co.cr/course/view.php?id=264" title="Introducción a la Programación con Python - PY00119">PY00119</a></li>
                <li class="breadcrumb-item">Tema 6: Introducción a la programación orientada a objetos</li>
                <li class="breadcrumb-item"><a href="https://aula.greencore.co.cr/mod/resource/view.php?id=17919" title="Archivo">frontend</a></li>
    </ol>
</nav></div><div class="breadcrumb-button pull-xs-right"></div></div><div id="course-header"></div></div></div></div></header>

        <div id="page-content" class="row">
            <div id="region-main-box" class="col-xs-12">
                <section id="region-main" >
                    <div class="card card-block">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><h2>frontend</h2><div class="resourcecontent resourcegeneral">
  <iframe id="resourceobject" src="https://aula.greencore.co.cr/pluginfile.php/24564/mod_resource/content/1/frontend.html?embed=1">
    Haga clic en <a href="https://aula.greencore.co.cr/pluginfile.php/24564/mod_resource/content/1/frontend.html" >frontend.html</a> para ver el archivo.
  </iframe>
</div><div id="resourceintro" class="box mod_introbox p-y-1"><div class="no-overflow"><p>frontend</p></div></div></div>
                    
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="nav-drawer" data-region="drawer" class="hidden-print moodle-has-zindex " aria-hidden="false" tabindex="-1">
        <nav class="list-group">
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/course/view.php?id=264" data-key="coursehome">
                <div class="m-l-0">
                        PY00119
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/user/index.php?id=264" data-key="participants">
                <div class="m-l-0">
                        Participantes
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/badges/view.php?type=2&amp;id=264" data-key="badgesview">
                <div class="m-l-0">
                        Insignias
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/admin/tool/lp/coursecompetencies.php?courseid=264" data-key="competencies">
                <div class="m-l-0">
                        Competencias
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/grade/report/index.php?id=264" data-key="grades">
                <div class="m-l-0">
                        Calificaciones
                </div>
            </a>
        </nav>
        <nav class="list-group m-t-1">
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/my/" data-key="myhome">
                <div class="m-l-0">
                        Área personal
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/?redirect=0" data-key="home">
                <div class="m-l-0">
                        Inicio del sitio
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/calendar/view.php?view=month" data-key="calendar">
                <div class="m-l-0">
                        Calendario
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/user/files.php" data-key="privatefiles">
                <div class="m-l-0">
                        Ficheros privados
                </div>
            </a>
            <div class="list-group-item" data-key="mycourses">
                <div class="m-l-0">
                    Mis cursos
                </div>
            </div>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/course/view.php?id=218" data-key="218">
                <div class="m-l-1">
                        SG00318
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://aula.greencore.co.cr/course/view.php?id=264" data-key="264">
                <div class="m-l-1">
                        PY00119
                </div>
            </a>
        </nav>
    </div>
</div>

<footer id="site-footer">
	<div class="footer-main">
  	<div class="bgtrans-overlay"></div><!--Overlay transparent bg layer-->
    <div class="container footer-main-wrap">
      <div class="row ">


          <div class="col-md-4">
          	<h6> PARTNERS </h6>
            <div class="footer-links">
            	<ul>
              <li><a href="https://www.redhat.com/es/services/training">RED HAT</a></li>
<li><a href="https://training.linuxfoundation.org/ways-to-train/corporate-linux-training">The Linux Foundation</a></li>

              </ul>
            </div>
          </div>

          <div class="col-md-4">
          	<h6>nuestra Organización</h6>
            <div class="footer-links">
            	<ul>
                <li><a href="http://www.greencore.co.cr/nosotros.html">Acerca de Greencore Solutions</a></li>
<li><a href="http://www.greencore.co.cr/contacto.html">Contacte con nosotros</a></li>

              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <h6> Siguenos en </h6>
            <div class="footer-address-block"><div class="footer-address"><p><i class='fa fa-map-marker'></i>Nos encontramos en Paseo Colón, de Purdy Motor 400 metros norte y 25 oeste.
 Avenida 7, Calles 36 y 38.  Sabana, San José, Costa Rica. </p></div><div class="footer-phone"><p><i class='fa fa-phone-square'></i>Teléfono: + 506 2257.1015</p></div><div class="footer-email"><p><i class='fa fa-envelope'></i>E-mail: <a href="info@greencore.co.cr">info@greencore.co.cr</a></p></div></div>
            <div class="social-media footer-small-socials">
            	<ul>
                  <li class="media01" style="background: #3b5998;"><a href="https://es-la.facebook.com/GreencoreSolutions"><i class="fa fa-facebook-f"></i></a></li>
<li class="media02" style="background: #0077b5;"><a href="https://www.linkedin.com/company/greencore-solutions-srl"><i class="fa fa-linkedin"></i></a></li>

              </ul>
              <div class="clearfix"></div>
            </div>
          </div>

      </div>
    </div>
  </div>

	<div class="footer-bottom">
  	<div class="container">
      <p>GreenCore Solutions S.R.L. | © 2016 Derechos Reservados </p>
    </div>
  </div>

</footer>
<!--E.O.Footer-->

 <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://aula.greencore.co.cr/lib/requirejs.php/1557864549/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://aula.greencore.co.cr/lib/javascript.php/1557864549/lib/jquery/jquery-3.1.0.min',
        jqueryui: 'https://aula.greencore.co.cr/lib/javascript.php/1557864549/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://aula.greencore.co.cr/lib/javascript.php/1557864549/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://aula.greencore.co.cr/lib/javascript.php/1557864549/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://aula.greencore.co.cr/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("es",{
 "Play": "Reproducción",
 "Pause": "Pausa",
 "Current Time": "Tiempo reproducido",
 "Duration Time": "Duración total",
 "Remaining Time": "Tiempo restante",
 "Stream Type": "Tipo de secuencia",
 "LIVE": "DIRECTO",
 "Loaded": "Cargado",
 "Progress": "Progreso",
 "Fullscreen": "Pantalla completa",
 "Non-Fullscreen": "Pantalla no completa",
 "Mute": "Silenciar",
 "Unmute": "No silenciado",
 "Playback Rate": "Velocidad de reproducción",
 "Subtitles": "Subtítulos",
 "subtitles off": "Subtítulos desactivados",
 "Captions": "Subtítulos especiales",
 "captions off": "Subtítulos especiales desactivados",
 "Chapters": "Capítulos",
 "You aborted the media playback": "Ha interrumpido la reproducción del vídeo.",
 "A network error caused the media download to fail part-way.": "Un error de red ha interrumpido la descarga del vídeo.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "No se ha podido cargar el vídeo debido a un fallo de red o del servidor o porque el formato es incompatible.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "La reproducción de vídeo se ha interrumpido por un problema de corrupción de datos o porque el vídeo precisa funciones que su navegador no ofrece.",
 "No compatible source was found for this media.": "No se ha encontrado ninguna fuente compatible con este vídeo."
});

    });
});;

require(['jquery'], function($) {
    $('#single_select5cfe63d5c48743').change(function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f5cfe63d5c48742').submit();
        }
    });
});
;

require(['jquery'], function($) {
    $('#single_select5cfe63d5c48746').change(function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f5cfe63d5c48745').submit();
        }
    });
});
;

require(['jquery', 'message_popup/message_popover_controller'], function($, controller) {
    var container = $('#nav-message-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['jquery'], function($) {
    $('#single_select5cfe63d5c487419').change(function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f5cfe63d5c487418').submit();
        }
    });
});
;

require(['theme_boost/loader']);
require(['theme_boost/drawer'], function(mod) {
    mod.init();
});
;
require(["core/notification"], function(amd) { amd.init(24564, []); });;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript" src="https://aula.greencore.co.cr/lib/javascript.php/1557864549/theme/enlight/javascript/theme.js"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"\u00daltima modificaci\u00f3n","name":"Nombre","error":"Error","info":"Informaci\u00f3n","yes":"S\u00ed","no":"No","cancel":"Cancelar","confirm":"Confirmar","areyousure":"\u00bfEst\u00e0 seguro?","closebuttontitle":"Cerrar","unknownerror":"Error desconocido"},"repository":{"type":"Tipo","size":"Tama\u00f1o","invalidjson":"Cadena JSON no v\u00e1lida","nofilesattached":"No se han adjuntado archivos","filepicker":"Selector de archivos","logout":"Salir","nofilesavailable":"No hay archivos disponibles","norepositoriesavailable":"Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos en el formato solicitado.","fileexistsdialogheader":"El archivo existe","fileexistsdialog_editor":"Un archivo con el mismo nombre ya se ha adjuntado al texto que est\u00e1 editando.","fileexistsdialog_filemanager":"Un archivo con ese nombre ya ha sido adjuntado","renameto":"Cambiar el nombre a \"{$a}\"","referencesexist":"Existen {$a} archivos de alias\/atajos que emplean este archivo como su or\u00edgen","select":"Seleccionar"},"admin":{"confirmdeletecomments":"Est\u00e1 a punto de eliminar comentarios, \u00bfest\u00e1 seguro?","confirmation":"Confirmaci\u00f3n"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() { M.util.js_pending('random5cfe63d5c48741'); Y.on('domready', function() { M.util.init_maximised_embed(Y, "resourceobject");  M.util.js_complete('random5cfe63d5c48741'); });
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\n\n\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"es"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random5cfe63d5c487420'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5cfe63d5c487420'); });
})();
//]]>
</script>

<a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>

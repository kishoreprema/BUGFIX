
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
        <title>Issabel</title>

        <base href='/'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="themes/tenant/css/bootstrap.css">
    <link rel="stylesheet" href="themes/tenant/css/neon-core.css">
    <link rel="stylesheet" href="themes/tenant/css/neon-theme.css">
    <link rel="stylesheet" href="themes/tenant/css/neon-forms.css">
    <link rel="stylesheet" href="themes/tenant/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="themes/tenant/css/custom.css">

    <link rel="stylesheet" href="themes/tenant/styles.css" />
    <link rel="stylesheet" href="themes/tenant/widgets.css" />
    <link rel="stylesheet" href="themes/tenant/help.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="themes/tenant/header.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="themes/tenant/content.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="themes/tenant/applet.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="libs/js/sticky_note/sticky_note.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="themes/tenant/table.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="themes/tenant/rightbar.css" />
    <link rel="stylesheet" href="themes/tenant/css/purple.css">

    <script type='text/javascript' src='libs/js/jquery/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-edwidgets.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-migrate-1.2.1.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-ui-1.11.4.min.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-ui-timepicker-addon.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-blockUI.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-colResizable-1.5.min.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-colorpicker.js'></script>
<script type='text/javascript' src='libs/js/jquery/jquery-upl-easing.1.3.js'></script>
<link rel='stylesheet' href='libs/js/jquery/widgetcss/colorpicker.css' />
<link rel='stylesheet' href='libs/js/jquery/widgetcss/edwidgets.css' />
<link rel='stylesheet' href='libs/js/jquery/widgetcss/jquery-ui-timepicker-addon.css' />
<link rel='stylesheet' href='libs/js/jquery/css/ui-lightness/jquery-ui.min.css' />
<link rel='stylesheet' href='libs/js/jquery/css/ui-lightness/theme.css' />
<link rel='stylesheet' href='libs/font-icons/entypo/css/entypo.css' />
<link rel='stylesheet' href='libs/font-icons/font-awesome/css/font-awesome.min.css' />
        <!--<script type='text/javascript' src="libs/js/base.js"></script>-->
        <!--<script type='text/javascript' src="libs/js/sticky_note.js"></script>-->
        <!--<script type='text/javascript' src="libs/js/iframe.js"></script>-->
	<script type='text/javascript' src="libs/js/base.js"></script>
        <script type='text/javascript' src="libs/js/sticky_note/sticky_note.js"></script>
        <script type='text/javascript' src="libs/js/iframe.js"></script>

<style>
body {
  zoom: 50%;
}

</style>
 
    
    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="mainBody page-body" >
    <div class="page-container">



<div class="sidebar-menu" style="min-height: 664px;">
    <header class="logo-env">
        <!-- logo -->
        <div class="logo">
            <a href="index.php">

<?php
$logofile = "/var/www/html/themes/".$_REQUEST['theme_name']."/images/issabel_logo_mini2.png";
$logo = "themes/".$_REQUEST['theme_name']."/images/issabel_logo_mini2.png";
if(is_file($logofile)) {
                        echo "<img src='$logo' width='120' />";
} else {
                        echo "<img src='themes/tenant/images/issabel_logo_mini2.png' width='120'  />";
}
?>

            </a>
        </div>
        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <ul id="main-menu" class="" style="overflow: hidden; display: block; height: auto;">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- Search Bar -->
        <li id="search" class="root-level">
            <form method="get" action="">
                <input type="text" id="xsearch_module_issabel" name="xsearch_module_issabel" class="search-input xui-autocomplete-input" placeholder="Búsqueda de módulos" autocomplete="off">
                <button type="submit">
                    <i class="entypo-search"></i>
                </button>
            </form>
        </li>
        <!--recorremos el arreglo del menu nivel primario-->
                                    <li class="active active root-level has-sub opened">
                                <a href="javascript:void()">
                         <i class="fa fa-laptop"></i>
			<!--<span>system</span>-->
                        <!--<span></span>-->
			<span>Sistema</span>
                    </a>
                    <ul class="visible">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>sysdash</span>-->
                                        <!--<span></span>-->
					<span>Dashboard</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>dashboard</span>-->
                                                        <!--<span></span>-->
							<span>Dashboard</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>applet_admin</span>-->
                                                        <!--<span></span>-->
							<span>Administrador de Applets</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>network</span>-->
                                        <!--<span></span>-->
					<span>Red</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>packet_capture</span>-->
                                                        <!--<span></span>-->
							<span>Capturador de Paquetes</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>upnpc</span>-->
                                                        <!--<span></span>-->
							<span>Controlador uPnP</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>network_parameters</span>-->
                                                        <!--<span></span>-->
							<span>Parámetros de Red</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>dhcp_server</span>-->
                                                        <!--<span></span>-->
							<span>Servidor DHCP</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>dhcp_clientlist</span>-->
                                                        <!--<span></span>-->
							<span>Lista de Clientes DHCP</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>dhcp_by_mac</span>-->
                                                        <!--<span></span>-->
							<span>Asignar Dirección IP a Host</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>ping</span>-->
                                                        <!--<span></span>-->
							<span>Ping &amp; Tracepath</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>usermgr</span>-->
                                        <!--<span></span>-->
					<span>Usuarios</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>userlist</span>-->
                                                        <!--<span></span>-->
							<span>Usuarios</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>grouplist</span>-->
                                                        <!--<span></span>-->
							<span>Grupos</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>group_permission</span>-->
                                                        <!--<span></span>-->
							<span>Permisos de Grupo</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>shutdown</span>-->
                                        <!--<span></span>-->
					<span>Apagar</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>hardware_detector</span>-->
                                        <!--<span></span>-->
					<span>Detector de Hardware</span>
                                    </a>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>updates</span>-->
                                        <!--<span></span>-->
					<span>Actualizaciones</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>repositories</span>-->
                                                        <!--<span></span>-->
							<span>Repositorios</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>packages</span>-->
                                                        <!--<span></span>-->
							<span>Paquetes</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>backup_restore</span>-->
                                        <!--<span></span>-->
					<span>Respaldar/Restaurar</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>webconsole</span>-->
                                        <!--<span></span>-->
					<span>Consola Web</span>
                                    </a>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>preferences</span>-->
                                        <!--<span></span>-->
					<span>Preferencias</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>language</span>-->
                                                        <!--<span></span>-->
							<span>Idioma</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>time_config</span>-->
                                                        <!--<span></span>-->
							<span>Fecha/Hora</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>themes_system</span>-->
                                                        <!--<span></span>-->
							<span>Temas</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>currency</span>-->
                                                        <!--<span></span>-->
							<span>Moneda</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li class="active opened active">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>theme_designer</span>-->
                                        <!--<span></span>-->
					<span>Diseñador de Temas</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-book"></i>
			<!--<span>agenda</span>-->
                        <!--<span></span>-->
			<span>Agenda</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>calendar</span>-->
                                        <!--<span></span>-->
					<span>Calendario</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>address_book</span>-->
                                        <!--<span></span>-->
					<span>Libreta de Direcciones</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-envelope"></i>
			<!--<span>email_admin</span>-->
                        <!--<span></span>-->
			<span>Correo Electrónico</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>email_domains</span>-->
                                        <!--<span></span>-->
					<span>Dominios</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>email_accounts</span>-->
                                        <!--<span></span>-->
					<span>Cuentas</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>email_relay</span>-->
                                        <!--<span></span>-->
					<span>Relay</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>webmail</span>-->
                                        <!--<span></span>-->
					<span>Webmail</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>antispam</span>-->
                                        <!--<span></span>-->
					<span>Antispam</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>remote_smtp</span>-->
                                        <!--<span></span>-->
					<span>SMTP Remoto</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>email_list</span>-->
                                        <!--<span></span>-->
					<span>Listas de Correo</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>email_stats</span>-->
                                        <!--<span></span>-->
					<span>Estadísticas</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>vacations</span>-->
                                        <!--<span></span>-->
					<span>Vacaciones</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-print"></i>
			<!--<span>fax</span>-->
                        <!--<span></span>-->
			<span>Fax</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>virtual_fax</span>-->
                                        <!--<span></span>-->
					<span>Fax Virtual</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>faxlist</span>-->
                                                        <!--<span></span>-->
							<span>Lista de Fax Virtual</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>faxnew</span>-->
                                                        <!--<span></span>-->
							<span>Nuevo Fax Virtual</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sendfax</span>-->
                                                        <!--<span></span>-->
							<span>Enviar Fax</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>faxqueue</span>-->
                                                        <!--<span></span>-->
							<span>Cola de Fax</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>faxmaster</span>-->
                                        <!--<span></span>-->
					<span>Fax Maestro</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>faxclients</span>-->
                                        <!--<span></span>-->
					<span>Clientes de Fax</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>faxviewer</span>-->
                                        <!--<span></span>-->
					<span>Visor de Fax</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>email_template</span>-->
                                        <!--<span></span>-->
					<span>Plantilla de Correo</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-phone"></i>
			<!--<span>pbxconfig</span>-->
                        <!--<span></span>-->
			<span>PBX</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>pbxadmin</span>-->
                                        <!--<span></span>-->
					<span>Configuración PBX</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>control_panel</span>-->
                                        <!--<span></span>-->
					<span>Panel del Operador</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>voicemail</span>-->
                                        <!--<span></span>-->
					<span>Correo de Voz</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>monitoring</span>-->
                                        <!--<span></span>-->
					<span>Grabaciones</span>
                                    </a>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>endpoints</span>-->
                                        <!--<span></span>-->
					<span>Configuración por Lotes</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>extensions_batch</span>-->
                                                        <!--<span></span>-->
							<span>Lote de Extensiones</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>conference</span>-->
                                        <!--<span></span>-->
					<span>Conferencia</span>
                                    </a>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>tools</span>-->
                                        <!--<span></span>-->
					<span>Herramientas</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>asterisk_cli</span>-->
                                                        <!--<span></span>-->
							<span>Asterisk-Cli</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>file_editor</span>-->
                                                        <!--<span></span>-->
							<span>Editor Archivos Asterisk</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>text_to_wav</span>-->
                                                        <!--<span></span>-->
							<span>Texto a Wav</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>festival</span>-->
                                                        <!--<span></span>-->
							<span>Festival</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>recordings</span>-->
                                                        <!--<span></span>-->
							<span>Grabaciones</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>endpoint_configurator</span>-->
                                        <!--<span></span>-->
					<span>Configurador de Endpoint</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-bar-chart-o"></i>
			<!--<span>reports</span>-->
                        <!--<span></span>-->
			<span>Reportes</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>cdrreport</span>-->
                                        <!--<span></span>-->
					<span>Reporte CDR</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>channelusage</span>-->
                                        <!--<span></span>-->
					<span>Uso de Canales</span>
                                    </a>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>billing</span>-->
                                        <!--<span></span>-->
					<span>Facturación</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>billing_rates</span>-->
                                                        <!--<span></span>-->
							<span>Tarifas</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>billing_report</span>-->
                                                        <!--<span></span>-->
							<span>Reporte de Facturación</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>dest_distribution</span>-->
                                                        <!--<span></span>-->
							<span>Distribución de Destinos</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>billing_setup</span>-->
                                                        <!--<span></span>-->
							<span>Configuración de Facturación</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>asterisk_log</span>-->
                                        <!--<span></span>-->
					<span>Logs de Asterisk</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>graphic_report</span>-->
                                        <!--<span></span>-->
					<span>Reporte Gráfico</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>summary_by_extension</span>-->
                                        <!--<span></span>-->
					<span>Resumen</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>missed_calls</span>-->
                                        <!--<span></span>-->
					<span>Llamadas Perdidas</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-plus"></i>
			<!--<span>extras</span>-->
                        <!--<span></span>-->
			<span>Extras</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>meet</span>-->
                                        <!--<span></span>-->
					<span>Issabel Meet</span>
                                    </a>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>downloads</span>-->
                                        <!--<span></span>-->
					<span>Descargas</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sphones</span>-->
                                                        <!--<span></span>-->
							<span>Softphones</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>faxutils</span>-->
                                                        <!--<span></span>-->
							<span>Utilidades de Fax</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>instantmessaging</span>-->
                                                        <!--<span></span>-->
							<span>Mensajería Instantánea</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-cubes"></i>
			<!--<span>addons</span>-->
                        <!--<span></span>-->
			<span>Addons</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>addons_availables</span>-->
                                        <!--<span></span>-->
					<span>Addons</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>addons_license</span>-->
                                        <!--<span></span>-->
					<span>Addon License</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-fax"></i>
			<!--<span>my_extension</span>-->
                        <!--<span></span>-->
			<span>Mi extensión</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>myex_config</span>-->
                                        <!--<span></span>-->
					<span>Ajustes</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
                                    <li class="root-level has-sub">
                                <a href="javascript:void()">
                         <i class="fa fa-lock"></i>
			<!--<span>security</span>-->
                        <!--<span></span>-->
			<span>Seguridad</span>
                    </a>
                    <ul style="opacity: 0.2; height: 0px;">
                        <!--recorremos el arreglo del menu nivel secundario-->
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>sec_firewall</span>-->
                                        <!--<span></span>-->
					<span>Cortafuegos</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sec_rules</span>-->
                                                        <!--<span></span>-->
							<span>Reglas del Cortafuegos</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sec_ports</span>-->
                                                        <!--<span></span>-->
							<span>Definir Puertos</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sec_portknock_if</span>-->
                                                        <!--<span></span>-->
							<span>Interfaces Golpeo de Puertos</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sec_portknock_users</span>-->
                                                        <!--<span></span>-->
							<span>Usuarios Golpeo de Puertos</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li class="has-sub">
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>fail2ban</span>-->
                                        <!--<span></span>-->
					<span>Fail2Ban</span>
                                    </a>
                                                                            <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sec_fb_admin</span>-->
                                                        <!--<span></span>-->
							<span>Administrador</span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a href="javascript:void()">
							<!--<span>sec_fb_banned</span>-->
                                                        <!--<span></span>-->
							<span>Banned IPs</span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>sec_accessaudit</span>-->
                                        <!--<span></span>-->
					<span>Auditoría</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>sec_weak_keys</span>-->
                                        <!--<span></span>-->
					<span>Claves Débiles</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>sec_advanced_settings</span>-->
                                        <!--<span></span>-->
					<span>Configuraciones Avanzadas</span>
                                    </a>
                                                                    </li>
                                                                                    <li>
                                                                <a href="javascript:void()">
					<i class=""></i>
					<!--<span>sec_letsencrypt</span>-->
                                        <!--<span></span>-->
					<span>Certificado HTTPS (Let's Encrypt)</span>
                                    </a>
                                                                    </li>
                                            </ul>
                </li>
        
        <li class="root-level">
    </li>

<li class="root-level">
    <a href="#">
         <i class="fa fa-history"></i>
        <span>Historia</span>
    </a>
</li></ul></div>


            <!-- fin del menú tipo acordeon-->


<!-- contenido del modulo-->
<div id="neo-contentbox">
    <div id="neo-contentbox-maincolumn">
        <input type="hidden" id="issabel_framework_module_id" value="theme_designer" />
        <input type="hidden" id="issabel_framework_webCommon" value="libs/" />
        <div class="neo-module-content">




                </div>
            </div>
        </div><!-- neo-contentbox -->

        <!-- Footer -->
        <footer class="main" style="margin-left:16px;">
            <a href="http://www.issabel.org" style="color: #444; text-decoration: none;" target='_blank'>Issabel</a> is licensed under <a href="http://www.opensource.org/licenses/gpl-license.php" target='_blank' style="color: #445; text-decoration: none;" >GPL</a>. 2006 - 2019.
        </footer>

                </div><!-- main-content -->

        <div id="neo-sticky-note">
            <div id="neo-sticky-note-text"></div>
            <div id="neo-sticky-note-text-edit">
                <textarea id="neo-sticky-note-textarea"></textarea>
                <div id="neo-sticky-note-text-char-count"></div>
                <input type="button" value="Guardar Nota" id="neo-submit-button" />
                <div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1" /></div>
            </div>
            <div id="neo-sticky-note-text-edit-delete"></div>
        </div>

        <!-- Neo Progress Bar -->
        <div class="neo-modal-issabel-popup-box">
            <div class="neo-modal-issabel-popup-title"></div>
            <div class="neo-modal-issabel-popup-close"></div>
            <div class="neo-modal-issabel-popup-content"></div>
        </div>
        <div class="neo-modal-issabel-popup-blockmask"></div>
        <!-- Bottom Scripts -->
        <script type='text/javascript' src="themes/tenant/js/gsap/main-gsap.js"></script>
        <script type='text/javascript' src="themes/tenant/js/bootstrap.js"></script>
        <script type='text/javascript' src="themes/tenant/js/joinable.js"></script>
        <script type='text/javascript' src="themes/tenant/js/resizeable.js"></script>
        <script type='text/javascript' src="themes/tenant/js/neon-api.js"></script>
        <script type='text/javascript' src="themes/tenant/js/jquery.validate.min.js"></script>
        <!--script type='text/javascript' src="themes/tenant/js/neon-login.js"></script>
        <script type='text/javascript' src="themes/tenant/js/neon-custom.js"></script>
        <script type='text/javascript' src="themes/tenant/js/neon-demo.js"></script-->
<script>
$('form').submit(false);
$(document).ready(function() {
   changeColor();
});
function changeColor() {
    menuc1=$('#menu_color_1', window.parent.document).val();
    menuc2=$('#menu_color_2', window.parent.document).val();
    linesc=$('#menu_lines_color', window.parent.document).val();

    $('body > a').css('backgroundColor',menuc1);
    $('body.dropdown-menu').css('backgroundColor',menuc1);
    $('li > a').css('backgroundColor',menuc1);
    $('li#search').css('backgroundColor',menuc1);
    $('.sidebar-menu').css('backgroundColor',menuc1);

    $('li.active > a').css('backgroundColor',menuc2);
    $('li.active li a').css('backgroundColor',menuc2);
    $('li:hover > a').css('backgroundColor',menuc2);
    $('li.opened > ul > li').css('backgroundColor',menuc2);

    $('li').css('borderColor',linesc);
    $('li.sep').css('borderColor',linesc);
    $('li > ul > li > a').css('borderColor',linesc);


}
</script>


    </div>
</body>
</html>


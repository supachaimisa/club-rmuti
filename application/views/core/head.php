<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/matrix-admin/' ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/matrix-admin/' ?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/matrix-admin/' ?>css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/matrix-admin/' ?>css/matrix-style.css" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/matrix-admin/' ?>css/matrix-media.css" />
    <link href="<?php echo base_url() . 'theme/matrix-admin/' ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/matrix-admin/' ?>css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style>
        #user-nav {
            left: auto !important;
            right: 0 !important;
        }
    </style>
</head>

<body>

    <!--Header-part-->
    <div id="header">

        <h3 style="color: white; padding-left: 32px; padding-top:16px;">Club RMUTI</h3>
        <!-- <h1>ClubRMUTI</h1> -->
    </div>
    <!--close-Header-part-->


    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse" style="right:0;">
        <ul class="nav">

            <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                    <li class="divider"></li>
                    <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
            <li class=""><a title="" href="<?php echo base_url() . 'theme/matrix-admin/' ?>login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            <li class="dropdown" id="profile-messages" style="float: right;">
                <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
                    <i class="icon icon-user"></i>
                    <span class="text">Welcome User</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>login.html"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <!--start-top-serch-->
    <div id="search">

        <!-- <input type="text" placeholder="Search here..." />
        <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button> -->

    </div>
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashbroad</a>
        <ul>
            <li class="active"><a href="<?php echo base_url() ?>"><i class="icon icon-home" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">หน้าหลัก</span></a> </li>
            <li class="submenu"> <a href="#"><i class="icon icon-edit" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">จัดการชมรม</span></a>
                <ul>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>form-validation.html"><span style="font-size: 10pt;">สร้างชมรม</span></a></li>
                    <li><a href="<?php echo base_url() . 'joinclub' ?>"><span style="font-size: 10pt;">เข้าร่วมชมรม</span></a></li>
                </ul>
            </li>

            <li><a href="<?php echo base_url() . 'user' ?>"><i class="icon icon-user-md" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">จัดการผู้ใช้</span></a> </li>
            <li><a href="<?php echo base_url() . 'joinclub' ?>"><i class="icon icon-edit" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">จัดการผู้ใช้</span></a> </li>
            <li><a href="<?php echo base_url() . 'joinclub' ?>"><i class="icon icon-edit" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">จัดการผู้ใช้</span></a> </li>
            <li><a href="<?php echo base_url() . 'joinclub' ?>"><i class="icon icon-edit" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">จัดการผู้ใช้</span></a> </li>
            <li><a href="<?php echo base_url() . 'joinclub' ?>"><i class="icon icon-edit" style="font-size: 14pt;"></i> <span style="font-size: 10pt;">จัดการผู้ใช้</span></a> </li>
            <li> <a href="<?php echo base_url() . 'theme/matrix-admin/' ?>charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
            <li> <a href="<?php echo base_url() . 'theme/matrix-admin/' ?>widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
            <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
            <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
                <ul>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>form-common.html">Basic Form</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>form-validation.html">Form with Validation</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>form-wizard.html">Form with Wizard</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
            <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
            <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
                <ul>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>index2.html">Dashboard2</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>gallery.html">Gallery</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>calendar.html">Calendar</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>invoice.html">Invoice</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>chat.html">Chat option</a></li>
                </ul>
            </li>
            <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
                <ul>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>error403.html">Error 403</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>error404.html">Error 404</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>error405.html">Error 405</a></li>
                    <li><a href="<?php echo base_url() . 'theme/matrix-admin/' ?>error500.html">Error 500</a></li>
                </ul>
            </li>
            <li class="content"> <span>Monthly Bandwidth Transfer</span>
                <div class="progress progress-mini progress-danger active progress-striped">
                    <div style="width: 77%;" class="bar"></div>
                </div>
                <span class="percent">77%</span>
                <div class="stat">21419.94 / 14000 MB</div>
            </li>
            <li class="content"> <span>Disk Space Usage</span>
                <div class="progress progress-mini active progress-striped">
                    <div style="width: 87%;" class="bar"></div>
                </div>
                <span class="percent">87%</span>
                <div class="stat">604.44 / 4000 MB</div>
            </li>
        </ul>
    </div>
    <!--sidebar-menu-->
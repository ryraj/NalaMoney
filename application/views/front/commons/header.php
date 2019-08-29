<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/ico" sizes="32x32">
    <title>NALA | <?php if(!empty($title)){ echo $title; }else{ echo 'Home'; }  ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/hamburgers.css'); ?>" rel="stylesheet">
    <!--<link href="<?php echo base_url('assets/css/slick-theme.css'); ?>" rel="stylesheet">-->
    <!--<link href="<?php echo base_url('assets/css/slick.css'); ?>" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
    <link href="<?php echo base_url('assets/css/britecharts.min.css'); ?>">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/media.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
</head>

<body class="back_color">
    <section class="header boxs">
        <div class="head boxs">
            <div class="head_lft">
                <div class="head_logo">
                    <a href="<?php echo base_url('home'); ?>">
                        <img src="<?php echo base_url('assets/img/logoblue.svg'); ?>" class="img-responsive" alt="logo">
                    </a>
                </div>
                <div class="input-group forbox">
                    <input type="text" class="form-control" placeholder="Search Transactions">
                    <span class="input-group-addon"><button><img src="<?php echo base_url('assets/img/search.svg'); ?>" alt="search"></button></span>
                </div>
                  
            </div>
            <div class="head_rht">

                <input type="hidden" value="<?php echo base_url()?>" id="colorui"/>
                <input type="hidden" value="<?php echo base_url('site/change-theme')?>" id="change-theme"/>
                
                <input type="hidden" value="<?php echo base_url('site/check-theme')?>" id="check-theme"/>
                <div class="switch_out">
                    <label class="switch changetextcolor">Dark Mode
                        <input type="checkbox">
                        <span class="slider round"></span>
                      </label>
                </div>
                <div class="addbtn hide_name">
                    <a href="<?php echo base_url('expense'); ?>"><img src="<?php echo base_url('assets/img/plus.svg'); ?>">Add</a>
                </div>
                <div class="login_name hide_name">
                    <p class="changetextcolor" id="username"><img src="<?php echo $user_image; ?>" height="30" width="30"><?php echo $user_name;?></p>
                </div>
                <button class="hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
            </div>
        </div>
    </section>
    <div class="sidenav" id="mySidenav">
        <div class="login_name boxs">
            <p class="changetextcolor" id="username"><img src="<?php echo base_url('assets/img/person.png'); ?>">Benjamin Fernandes</p>
        </div>
        <div class="home_lft boxs">
            <ul>
                <li>
                    <a href="<?php echo base_url('home'); ?>" class="<?php
                                        if (!empty($title)) {
                                            if ($title == 'home') {
                                                echo 'active';
                                            }
                                        }
                                        ?>"><svg xmlns="http://www.w3.org/2000/svg" width="19.546" height="22.756" viewBox="0 0 19.546 22.756">
                        <path fill="#8798ac" stroke="#8798ac" stroke-width=".5px" id="home_1_" d="M35.933 7.706v13.449h-5.776v-6.02a.538.538 0 0 0-.538-.538H25.4a.538.538 0 0 0-.538.538v6.209a.538.538 0 1 0 1.077 0v-5.671h3.14v5.482h-9.992V7.978l8.423-6.75 8.625 6.912a.538.538 0 1 0 .673-.84L27.847.118a.538.538 0 0 0-.673 0L18.212 7.3a.538.538 0 0 0-.2.42v13.973a.538.538 0 0 0 .538.538h17.922a.538.538 0 0 0 .538-.538V7.706z" class="cls-1" data-name="home (1)" transform="translate(-17.76 .275)"/>
                    </svg></a>
                </li>
                <li>
                    <a href="<?php echo base_url('statistics'); ?>" class="<?php
                                        if (!empty($title)) {
                                            if ($title == 'statistics') {
                                                echo 'active';
                                            }
                                        }
                                        ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20.5" height="20.504" viewBox="0 0 20.5 20.504">
                        <g id="pie-chart" transform="translate(.2 1.249)">
                            <g id="Group_535" data-name="Group 535" transform="translate(.05)">
                                <path fill="#8798ac" stroke="#8798ac" stroke-width=".5px" id="Path_2242" d="M16.334 58.975H8.993v-7.341a.532.532 0 0 0-.534-.534 8.409 8.409 0 1 0 8.409 8.409.537.537 0 0 0-.534-.534zM8.459 66.85a7.341 7.341 0 0 1-.534-14.662v7.321a.532.532 0 0 0 .534.534h7.321a7.348 7.348 0 0 1-7.321 6.807z" class="cls-1" data-name="Path 2242" transform="translate(-.05 -48.914)"/>
                                <path fill="#8798ac" stroke="#8798ac" stroke-width=".5px" id="Path_2243" d="M259.824 9.067A9.1 9.1 0 0 0 250.728 0a.575.575 0 0 0-.578.578V9.1a.575.575 0 0 0 .578.578h8.519a.575.575 0 0 0 .578-.578zm-8.519-.543V1.181a7.947 7.947 0 0 1 7.342 7.342h-7.342z" class="cls-1" data-name="Path 2243" transform="translate(-239.824 -1)"/>
                            </g>
                        </g>
                    </svg></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url('assets/img/group.svg'); ?>"></a>
                </li>
            </ul>
        </div>
        <div class="addbtn boxs">
            <a href="expense.html"><img src="<?php echo base_url('assets/img/plus.svg'); ?>">Add</a>
        </div>
    </div>
    <section class="main boxs">
        <div class="home boxs">
            <div class="home_lft boxs">
                <ul>
                    <li>
                        <a href="<?php echo base_url('home'); ?>" class="<?php
                                        if (!empty($title)) {
                                            if ($title == 'home') {
                                                echo 'active';
                                            }
                                        }
                                        ?>"><svg xmlns="http://www.w3.org/2000/svg" width="19.546" height="22.756" viewBox="0 0 19.546 22.756">
                            <path fill="#8798ac" stroke="#8798ac" stroke-width=".5px" id="home_1_" d="M35.933 7.706v13.449h-5.776v-6.02a.538.538 0 0 0-.538-.538H25.4a.538.538 0 0 0-.538.538v6.209a.538.538 0 1 0 1.077 0v-5.671h3.14v5.482h-9.992V7.978l8.423-6.75 8.625 6.912a.538.538 0 1 0 .673-.84L27.847.118a.538.538 0 0 0-.673 0L18.212 7.3a.538.538 0 0 0-.2.42v13.973a.538.538 0 0 0 .538.538h17.922a.538.538 0 0 0 .538-.538V7.706z" class="cls-1" data-name="home (1)" transform="translate(-17.76 .275)"/>
                        </svg></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('statistics'); ?>" class="<?php
                                        if (!empty($title)) {
                                            if ($title == 'statistics') {
                                                echo 'active';
                                            }
                                        }
                                        ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20.5" height="20.504" viewBox="0 0 20.5 20.504">
                            <g id="pie-chart" transform="translate(.2 1.249)">
                                <g id="Group_535" data-name="Group 535" transform="translate(.05)">
                                    <path fill="#8798ac" stroke="#8798ac" stroke-width=".5px" id="Path_2242" d="M16.334 58.975H8.993v-7.341a.532.532 0 0 0-.534-.534 8.409 8.409 0 1 0 8.409 8.409.537.537 0 0 0-.534-.534zM8.459 66.85a7.341 7.341 0 0 1-.534-14.662v7.321a.532.532 0 0 0 .534.534h7.321a7.348 7.348 0 0 1-7.321 6.807z" class="cls-1" data-name="Path 2242" transform="translate(-.05 -48.914)"/>
                                    <path fill="#8798ac" stroke="#8798ac" stroke-width=".5px" id="Path_2243" d="M259.824 9.067A9.1 9.1 0 0 0 250.728 0a.575.575 0 0 0-.578.578V9.1a.575.575 0 0 0 .578.578h8.519a.575.575 0 0 0 .578-.578zm-8.519-.543V1.181a7.947 7.947 0 0 1 7.342 7.342h-7.342z" class="cls-1" data-name="Path 2243" transform="translate(-239.824 -1)"/>
                                </g>
                            </g>
                        </svg></a>
                    </li>
                    <li>
                        <input type="hidden" value="<?php echo base_url('site/unset_session') ?>" id="unset_session"/>
                        <a href="#" id="logout"><img src="<?php echo base_url('assets/img/group.svg'); ?>"></a>
                    </li>
                </ul>
            </div>
          
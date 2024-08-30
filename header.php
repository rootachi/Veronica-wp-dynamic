<!DOCTYPE html>
<html lang="en">

<head>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Veronica</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png">
  <!-- google fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> -->
  <link href="css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Manrope:wght@400;500;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- fonts -->
  
  <style>
    .navbar.navbar-light.fixed .btn:not(.btn-expand):not(.btn-gradient) {
      background: #605dba !important;
      border-color: #605dba !important;
      color: #ffffff !important;
    }

    @media (max-width: 991.98px) {
      .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
        color: #ffffff !important;
      }
    }
  </style>

  <?php wp_head(); ?>
</head>

<body class="!bg-[#f0f0f8]">
  <div class="grow shrink-0">
    <header class="!absolute w-full">
      <div class="gradient-5 text-white font-bold !text-[.75rem] mb-2 !relative" style="z-index: 1;">
        <div class="container py-2 !text-center">
          <p class="!mb-0">✨ Vue3 + Nuxt3 Version of Sandbox is released! Grab a copy <a href="https://themeforest.net/item/sandbox-modern-multipurpose-vuejs-3-template/51099016" class="!text-white hover inline-flex items-center" target="_blank">here <i class="uil uil-arrow-up-right before:content-['\e950']"></i></a></p>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container xl:flex-row lg:flex-row !flex-nowrap items-center">
          <div class="navbar-brand w-full">
            <a href="<?php echo get_site_url();?>/">
              <img src = "<?php echo get_template_directory_uri();?>/assets/img/logo-dark.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/logo-dark%402x.png 2x" alt="image">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header xl:hidden lg:hidden flex items-center justify-between flex-row p-6">
              <h3 class="text-white xl:text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white mr-[-0.75rem] m-0 p-0 leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle !text-[.85rem] !tracking-[normal] hover:!text-[#605dba] after:!text-[#605dba]" href="<?php echo get_site_url();?>/" data-bs-toggle="dropdown">Demos</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content mega-menu-scroll">
                      <ul class="grid grid-cols-1 xl:grid-cols-6 lg:grid-cols-6 mx-0 xl:mx-[-10px] lg:mx-[-10px] xl:mt-[-10px] lg:mt-[-10px] !pl-0 list-none">
                        <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo1.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi1.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi1%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 1</span>
                          </a>
                        </li>
                        <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo2.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi2.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi2%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 2</span>
                          </a>
                        </li>
                        <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo3.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi3.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi3%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 3</span>
                          </a>
                        </li>
                        <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo4.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi4.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi4%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 4</span>
                          </a>
                        </li>
                        <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo5.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi5.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi5%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 5</span>
                          </a>
                        </li>
                        <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo6.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi6.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi6%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 6</span>
                          </a>
                        </li>
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo7.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi7.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi7%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 7</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo8.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi8.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi8%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 8</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo9.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi9.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi9%402x.jpg 2x" alt="image">
                            </figure>
                            <span class="xl:hidden lg:hidden">Demo 9</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo10.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi10.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi10%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 10</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo11.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi11.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi11%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 11</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo12.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi12.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi12%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 12</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo13.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi13.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi13%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 13</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo14.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi14.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi14%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 14</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo15.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi15.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi15%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 15</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo16.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi16.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi16%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 16</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo17.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi17.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi17%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 17</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo18.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi18.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi18%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 18</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo19.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi19.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi19%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 19</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo20.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi20.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi20%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 20</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo21.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi21.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi21%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 21</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo22.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi22.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi22%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 22</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo23.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi23.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi23%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 23</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo24.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi24.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi24%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 24</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo25.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi25.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi25%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 25</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo26.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi26.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi26%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 26</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo27.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi27.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi27%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 27</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo28.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi28.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi28%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 28</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo29.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi29.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi29%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 29</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo30.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi30.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi30%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 30</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo31.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi31.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi31%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 31</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo32.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi32.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi32%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 32</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo33.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi33.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi33%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 33</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[10px] xl:mt-[10px] lg:px-[10px] lg:mt-[10px]">
                          <a class="dropdown-item" href="demo34.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/mi34.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/mi34%402x.jpg 2x" alt="image"></figure>
                            <span class="xl:hidden lg:hidden">Demo 34</span>
                          </a>
                        </li> -->
                      </ul>
                      <!--/.row -->
                      <span class="hidden xl:flex lg:flex"><i class="uil uil-direction before:content-['\ea93']"></i><strong>Scroll to view
                          more</strong></span>
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle !text-[.85rem] !tracking-[normal] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/services/">Services</a></li>
                
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="<?php echo get_site_url();?>/about/" data-bs-toggle="dropdown">About</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/about/">About
                            Us</a></li>
             
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="<?php echo get_site_url();?>/shop/" data-bs-toggle="dropdown">Shop</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/shop/">Shop
                            </a></li>
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="shop2.html">Shop
                            II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="shop-product.html">Product Page</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="shop-cart.html">Shopping Cart</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="shop-checkout.html">Checkout</a></li> -->
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="<?php echo get_site_url();?>/contact-us/" data-bs-toggle="dropdown">Contact</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/contact-us/">Contact Us</a></li>
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="contact2.html">Contact II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="contact3.html">Contact III</a></li> -->
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                      <ul class="dropdown-menu">
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="career.html">Job
                            Listing I</a></li> -->
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/job/">Job Listing
                    </a></li>
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="career-job.html">Job
                            Description</a></li> -->
                      </ul>
                    </li>
                    <!-- <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                      <ul class="dropdown-menu"> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="404.html">404 Not
                            Found</a></li> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="page-loader.html">Page Loader</a></li> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="signin.html">Sign In
                            I</a></li> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="signin2.html">Sign
                            In II</a></li> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="signup.html">Sign Up
                            I</a></li> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="signup2.html">Sign
                            Up II</a></li> -->
                        <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="terms.html">Terms</a></li> -->
                      <!-- </ul>
                    </li> -->
                    <!-- <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="onepage.html">One
                        Page</a></li> -->
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle !text-[.85rem] !tracking-[normal] hover:!text-[#605dba] after:!text-[#605dba]" href="<?php echo get_site_url();?>/projects/" data-bs-toggle="dropdown">Projects</a>
                  <div class="dropdown-menu dropdown-lg">
                    <div class="dropdown-lg-content">
                      <div>
                        <h6 class="dropdown-header !text-[#605dba]">Project Pages</h6>
                        <ul class="pl-0 list-none">
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/projects/">All Projects</a></li>
                         
                          <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="projects2.html">Projects II</a> -->
                          <!-- </li> -->
                          <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="projects3.html">Projects III</a>
                          </li> -->
                          <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="projects4.html">Projects IV</a>
                          </li> -->
                        </ul>
                      </div>
                      <!-- /.column -->
                      <div>
                        <h6 class="dropdown-header !text-[#605dba]">Single Projects</h6>
                        <ul class="pl-0 list-none">
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/single-project/">Single Project
                              I</a></li>
                          <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="single-project2.html">Single
                              Project II</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="single-project3.html">Single
                              Project III</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="single-project4.html">Single
                              Project IV</a></li> -->
                        </ul>
                      </div>
                      <!-- /.column -->
                    </div>
                    <!-- /auto-column -->
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle !text-[.85rem] !tracking-[normal] hover:!text-[#605dba] after:!text-[#605dba]" href="<?php echo get_site_url();?>/blog/" data-bs-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/blog/">Blog</a></li>
          
                    <!-- <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a> -->
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="<?php echo get_site_url();?>/single-blog/">Post
                </a></li>
                        
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle !text-[.85rem] !tracking-[normal] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Blocks</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="grid grid-cols-1 xl:grid-cols-6 lg:grid-cols-6 mx-0 xl:mx-[-15px] lg:mx-[-15px] xl:mt-[-20px] lg:mt-[-20px] !pl-0 list-none">
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/about.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block1.svg" alt="image"></div>
                            <span>About</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/blog.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block2.svg" alt="image"></div>
                            <span>Blog</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/call-to-action.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block3.svg" alt="image"></div>
                            <span>Call to Action</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/clients.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block4.svg" alt="image"></div>
                            <span>Clients</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/contact.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block5.svg" alt="image"></div>
                            <span>Contact</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/facts.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block6.svg" alt="image"></div>
                            <span>Facts</span>
                          </a>
                        </li>
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/faq.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block7.svg" alt="image"></div>
                            <span>FAQ</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/features.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block8.svg" alt="image"></div>
                            <span>Features</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/footer.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block9.svg" alt="image"></div>
                            <span>Footer</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/hero.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block10.svg" alt="image"></div>
                            <span>Hero</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/misc.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block17.svg" alt="image"></div>
                            <span>Misc</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/navbar.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block11.svg" alt="image"></div>
                            <span>Navbar</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/portfolio.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block12.svg" alt="image"></div>
                            <span>Portfolio</span>
                          </a>
                        </li> -->
                        <!-- <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/pricing.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block13.svg" alt="image"></div>
                            <span>Pricing</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/process.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block14.svg" alt="image"></div>
                            <span>Process</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/team.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block15.svg" alt="image"></div>
                            <span>Team</span>
                          </a>
                        </li>
                        <li class="xl:px-[15px] xl:mt-[20px] lg:px-[15px] lg:mt-[20px]"><a class="dropdown-item" href="docs/blocks/testimonials.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="<?php echo get_template_directory_uri();?>/assets/img/demos/block16.svg" alt="image"></div>
                            <span>Testimonials</span>
                          </a>
                        </li> -->
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <!-- <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle !text-[.85rem] !tracking-[normal] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Documentation</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content"> -->
                      <!-- <div class="flex flex-wrap mx-0 xl:mx-[-7.5px] lg:mx-[-7.5px]">
                        <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] max-w-full"> -->
                          <!-- <h6 class="dropdown-header !text-[#605dba]">Usage</h6> -->
                          <!-- <ul class="pl-0 list-none  xl:columns-2 lg:columns-2  xl:pb-1 lg:pb-1">
                            <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/index.html">Get Started</a>
                            </li>
                            <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/forms.html">Forms</a></li>
                            <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/faq.html">FAQ</a></li>
                            <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/changelog.html">Changelog</a>
                            </li>
                            <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/credits.html">Credits</a></li>
                          </ul> -->
                          <!-- <h6 class="dropdown-header !text-[#605dba] xl:!mt-6 lg:!mt-6">Styleguide</h6> -->
                          <!-- <ul class="pl-0 list-none  xl:columns-2 lg:columns-2 ">
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/colors.html">Colors</a></li>
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/fonts.html">Fonts</a></li>
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/icons-svg.html">SVG
                                Icons</a></li>
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/icons-font.html">Font Icons</a></li>
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/illustrations.html">Illustrations</a></li>
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/backgrounds.html">Backgrounds</a></li>
                            <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="docs/styleguide/misc.html">Misc</a>
                            </li>
                          </ul>
                        </div> -->
                        <!--/column -->
                        <!-- <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] max-w-full xl:border-l-[rgba(164,174,198,0.2)] xl:border-l xl:border-solid lg:border-l-[rgba(164,174,198,0.2)] lg:border-l lg:border-solid">
                          <h6 class="dropdown-header !text-[#605dba]">Elements</h6>
                          <ul class="pl-0 list-none  xl:columns-3 lg:columns-3 ">
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/accordion.html">Accordion</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/alerts.html">Alerts</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/animations.html">Animations</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/avatars.html">Avatars</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/background.html">Background</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/badges.html">Badges</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/buttons.html">Buttons</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/card.html">Card</a>
                            </li> -->
                            <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/carousel.html">Carousel</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/dividers.html">Dividers</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/form-elements.html">Form Elements</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/image-hover.html">Image Hover</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/image-mask.html">Image Mask</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/lightbox.html">Lightbox</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/player.html">Media
                                Player</a></li> -->
                            <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/modal.html">Modal</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/pagination.html">Pagination</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/progressbar.html">Progressbar</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/shadows.html">Shadows</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/shapes.html">Shapes</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/tables.html">Tables</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/tabs.html">Tabs</a>
                            </li> -->
                            <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/text-animations.html">Text Animations</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/text-highlight.html">Text Highlight</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/tiles.html">Tiles</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li> -->
                            <!-- <li><a class="dropdown-item hover:!text-[#605dba]" href="docs/elements/typography.html">Typography</a></li> -->
                          <!-- </ul>
                        </div> -->
                        <!--/column -->
                      <!-- </div> -->
                      <!--/.row -->
                    <!-- </li> -->
                    <!--/.mega-menu-content-->
                  <!-- </ul> -->
                  <!--/.dropdown-menu -->
                <!-- </li> -->
              <!-- </ul> -->
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer xl:hidden lg:hidden">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white mt-4">
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-full flex !ml-auto">
            <ul class="navbar-nav !flex-row items-center !ml-auto">
              <li class="nav-item hidden xl:block lg:block md:block">
                <a href="https://themeforest.net/item/sandbox-modern-multipurpose-tailwind-css-template/51340309" class="btn btn-grape text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:border-[#605dba] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] !rounded-[0.8rem]" target="_blank">Purchase Now</a>
              </li>
              <li class="nav-item xl:hidden lg:hidden">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->


</head>
<body>
    <h1>Header Section</h1>
<?php

get_header('', array('description' => '', 'title' => '', 'page' => 'home'));

?>

    <section class="wrapper overflow-hidden">
      <div class="container pt-36 xl:pt-[12.5rem] lg:pt-[12.5rem] md:pt-[12.5rem] pb-24 xl:pb-32 lg:pb-32 md:pb-32 !text-center !relative">
        <div class="absolute" style="top: -12%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"><img src = "<?php echo get_template_directory_uri();?>/assets/img/photos/blurry.png" alt="image"></div>
        <div class="flex flex-wrap mx-[-15px] !relative">
          <div class="lg:w-8/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !relative">
            <div class="absolute shape grape w-5 hidden xl:block lg:block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><img src = "<?php echo get_template_directory_uri();?>/assets/img/svg/pie.svg" class="svg-inject icon-svg !w-full !h-full" alt="image"></div>
            <div class="absolute shape violet !w-[2.5rem] hidden xl:block lg:block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><img src = "<?php echo get_template_directory_uri();?>/assets/img/svg/scribble.svg" class="svg-inject icon-svg !w-full !h-full" alt="image"></div>
            <div class="absolute shape fuchsia w-6 hidden xl:block lg:block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><img src = "<?php echo get_template_directory_uri();?>/assets/img/svg/tri.svg" class="svg-inject icon-svg !w-full !h-full" alt="image"></div>
            <div class="absolute shape yellow w-6 hidden xl:block lg:block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><img src = "<?php echo get_template_directory_uri();?>/assets/img/svg/circle.svg" class="svg-inject icon-svg !w-full !h-full" alt="image"></div>
            <div data-cues="slideInDown" data-group="page-title">
              <h1 class="xl:text-[3.2rem] text-[calc(1.445rem_+_2.34vw)] font-semibold !leading-[1.15] mb-5 md:mx-10 lg:mx-0 xl:mx-0">
                Create a powerful but effortless website for <br><span class="rotator-fade text-[#605dba] ">Tailwind
                  CSS, your
                  business.,your portfolio.,your startup.,digital marketing.</span></h1>
              <p class="lead !text-[1.2rem] !leading-[1.6] !mb-8">You can create your website in minutes with the help
                of countless amazing features of Sandbox.</p>
            </div>
            <div class="xl:flex lg:flex md:flex justify-center" data-cues="slideInDown" data-delay="600">
              <span><a href="#demos" class="btn btn-lg btn-grape text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:border-[#605dba] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] btn-icon btn-icon-end !rounded-[0.8rem] xl:mx-1 lg:mx-1 md:mx-1 mb-2 xl:mb-0 lg:mb-0 md:mb-0 scroll">See
                  Demo Pages <i class="uil uil-arrow-down-right before:content-['\e944'] ml-[0.3rem]"></i></a></span>
              <span><a href="https://themeforest.net/item/sandbox-modern-multipurpose-vue-nuxtjs-3-template/51057440" class="btn btn-lg btn-fuchsia text-white !bg-[#e668b3] border-[#e668b3] hover:text-white hover:bg-[#e668b3] hover:border-[#e668b3] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#e668b3] active:border-[#e668b3] disabled:text-white disabled:bg-[#e668b3] disabled:border-[#e668b3] btn-icon btn-icon-end !rounded-[0.8rem] xl:mx-1 lg:mx-1 md:mx-1" target="_blank">NuxtJs 3 Version <i class="uil uil-arrow-up-right ml-[.3rem] before:content-['\e950']"></i></a></span>
            </div>
            <!-- /div -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="swiper-container swiper-auto swiper-auto-xs !mb-8 relative !z-10" data-margin="40" data-nav="false" data-dots="false" data-centered="true" data-loop="true" data-items-auto="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-resizeupdate="false" data-speed="7000">
        <div class="swiper overflow-visible pointer-events-none">
          <div class="swiper-wrapper ticker">
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma8.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma8%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma9.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma9%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma10.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma10%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma11.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma11%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma12.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma12%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma13.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma13%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma14.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma14%402x.jpg 2x" alt="">
              </figure>
            </div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
      <div class="swiper-container swiper-auto swiper-auto-xs mb-10 xl:!mb-14 lg:!mb-14 md:!mb-14 relative !z-10" data-margin="40" data-nav="false" data-dots="false" data-centered="true" data-loop="true" data-items-auto="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-resizeupdate="false" data-speed="7000">
        <div class="swiper overflow-visible pointer-events-none" dir="rtl">
          <div class="swiper-wrapper ticker">
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma1.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma1%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma2.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma2%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma3.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma3%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma4.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma4%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma5.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma5%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma6.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma6%402x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                <img class="!rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/photos/ma7.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/ma7%402x.jpg 2x" alt="">
              </figure>
            </div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>
    <!-- /section -->
    <section class="wrapper !bg-[#f0f0f8] overflow-hidden" id="demos">
      <div class="container pt-[6rem]">
        <div class="flex flex-wrap mx-[-15px] mb-10">
          <div class="md:w-9/12 lg:w-8/12 xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <div class="counter-wrapper">
              <h3 class="xl:!text-[3.5rem] text-[calc(1.475rem_+_2.7vw)] mb-3 text-[#605dba] !leading-none !text-center counter">
                34</h3>
            </div>
            <h2 class="text-[calc(1.345rem_+_1.14vw)] font-bold leading-[1.2] xl:text-[2.2rem] mb-3 !text-center xxl:!px-8">
              Functional, impressive and rich demos to start with</h2>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="demos-wrapper !text-center mb-24 xl:!mb-[8rem] lg:!mb-[8rem] md:!mb-[8rem]">
          <h2 class="text-[0.85rem] !tracking-[.02rem] !leading-[1.35] uppercase text-[#aab0bc] !mb-6">New Demos</h2>
          <div class="flex flex-wrap mx-[-15px] mb-10 xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-70px]">
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo18.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d18.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d18%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo18.html" class="text-[#343f52] hover:text-[#605dba]">Layout 18</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo19.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d19.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d19%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo19.html" class="text-[#343f52] hover:text-[#605dba]">Layout 19</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo20.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d20.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d20%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo20.html" class="text-[#343f52] hover:text-[#605dba]">Layout 20</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo21.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d21.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d21%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo21.html" class="text-[#343f52] hover:text-[#605dba]">Layout 21</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo22.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d22.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d22%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo22.html" class="text-[#343f52] hover:text-[#605dba]">Layout 22</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo23.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d23.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d23%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo23.html" class="text-[#343f52] hover:text-[#605dba]">Layout 23</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo24.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d24.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d24%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo24.html" class="text-[#343f52] hover:text-[#605dba]">Layout 24</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo25.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d25.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d25%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo25.html" class="text-[#343f52] hover:text-[#605dba]">Layout 25</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo26.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d26.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d26%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo26.html" class="text-[#343f52] hover:text-[#605dba]">Layout 26</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo27.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d27.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d27%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo27.html" class="text-[#343f52] hover:text-[#605dba]">Layout 27</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo28.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d28.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d28%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo28.html" class="text-[#343f52] hover:text-[#605dba]">Layout 28</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo29.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d29.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d29%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo29.html" class="text-[#343f52] hover:text-[#605dba]">Layout 29</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo30.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d30.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d30%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo30.html" class="text-[#343f52] hover:text-[#605dba]">Layout 30</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo31.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d31.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d31%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo31.html" class="text-[#343f52] hover:text-[#605dba]">Layout 31</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo32.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d32.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d32%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo32.html" class="text-[#343f52] hover:text-[#605dba]">Layout 32</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo33.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d33.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d33%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo33.html" class="text-[#343f52] hover:text-[#605dba]">Layout 33</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo34.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d34.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d34%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo34.html" class="text-[#343f52] hover:text-[#605dba]">Layout 34</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px] hidden xl:flex lg:flex md:flex items-center justify-center flex-col">
              <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/layers.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia xl:!mt-[-2.5rem] lg:!mt-[-2.5rem] md:!mt-[-2.5rem] mb-4" alt="image">
              <h3 class="!text-[0.85rem] !tracking-[0.02rem] uppercase text-[#aab0bc] mb-4">Scroll for more</h3>
              <a href="#prev-demos" class="btn btn-lg btn-grape text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:border-[#605dba] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] btn-icon btn-icon-end !rounded-[0.8rem] mx-1 scroll">Previous
                Demos <i class="uil uil-arrow-down-right before:content-['\e944'] ml-[0.3rem]"></i></a>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <h2 class="text-[0.85rem] !tracking-[.02rem] !leading-[1.35] uppercase text-[#aab0bc] pt-24 mt-[-2rem] !mb-6" id="prev-demos">Previous Demos</h2>
          <div class="flex flex-wrap mx-[-15px] mb-10 xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-70px]">
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo1.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d1.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d1%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo1.html" class="text-[#343f52] hover:text-[#605dba]">Layout 1</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo2.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d2.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d2%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo2.html" class="text-[#343f52] hover:text-[#605dba]">Layout 2</a></h2>
            </div>
            <!-- /column -->
            <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[70px]">
              <figure class="lift !rounded-[0.8rem] !mb-6"><a href="demo3.html" target="_blank"><img class="shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[.8rem]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/d3.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/d3%402x.jpg 2x" alt="image"></a></figure>
              <h2 class="text-[1.1rem] !mb-0 !leading-[1.35]"><a href="demo3.html" class="text-[#343f52] hover:text-[#605dba]">Layout 3</a></h2>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.demos-wrapper -->
        <div class="flex flex-wrap mx-[-15px] !mb-8 !text-center">
          <div class="md:w-11/12 lg:w-10/12 xl:w-8/12 w-full xxl:w-7/12 flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <h2 class="text-[calc(1.345rem_+_1.14vw)] font-bold !leading-[1.2] xl:text-[2.2rem] mt-3 mb-3 lg:!px-10 xl:!px-0">
              Save your time and money by choosing Sandbox for your website.</h2>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px] mb-14 xl:!mb-[4.5rem] lg:!mb-[4.5rem] md:!mb-[4.5rem]">
          <div class="lg:w-10/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <div class="flex flex-wrap mx-[-15px] items-center counter-wrapper mt-[-30px] !text-center">
              <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
                <h3 class="counter xl:!text-[2.5rem] !text-[calc(1.375rem_+_1.5vw)] text-[#605dba] !mb-1 !tracking-[normal] !leading-none">
                  250+</h3>
                <p class="!font-medium !text-[0.9rem] !mb-0">UI elements</p>
              </div>
              <!--/column -->
              <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
                <h3 class="counter xl:!text-[2.5rem] !text-[calc(1.375rem_+_1.5vw)] text-[#605dba] !mb-1 !tracking-[normal] !leading-none">
                  150+</h3>
                <p class="!font-medium !text-[0.9rem] !mb-0">Pre-made blocks</p>
              </div>
              <!--/column -->
              <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
                <h3 class="counter xl:!text-[2.5rem] !text-[calc(1.375rem_+_1.5vw)] text-[#605dba] !mb-1 !tracking-[normal] !leading-none">
                  100+</h3>
                <p class="!font-medium !text-[0.9rem] !mb-0">Neatly coded pages</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px] xl:mx-0 lg:mx-0 mt-[-50px] items-center mb-24 xl:!mb-[8rem] lg:!mb-[8rem] md:!mb-[8rem]">
          <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[15px] xl:px-0 lg:px-0 mt-[50px] max-w-full !relative">
            <div class="absolute" style="top: 50%; left: 50%; width: 140%; height: auto; transform: translate(-50%,-50%); z-index:0"><img class="w-full" src="<?php echo get_template_directory_uri();?>/assets/img/photos/blurry.png" alt="image"></div>
            <figure class="!relative" style="z-index: 2;"><img src = "<?php echo get_template_directory_uri();?>/assets/img/photos/mi1.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/mi1%402x.png 2x" alt="image"></figure>
          </div>
          <!--/column -->
          <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] px-[15px] xl:px-0 lg:px-0 mt-[50px] max-w-full ml-auto">
            <div class="flex flex-row !mb-6">
              <div>
                <div class="svg-bg bg-[rgba(255,255,255)] opacity-100 !rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] mr-5">
                  <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/puzzle.svg" class="svg-inject icon-svg solid-duo text-grape-fuchsia" alt="image">
                </div>
              </div>
              <div>
                <h4 class="!mb-1">Color and Font Options</h4>
                <p class="!mb-0">Easily customize colors and fonts, or choose from provided options.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-6">
              <div>
                <div class="svg-bg bg-[rgba(255,255,255)] opacity-100 !rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] mr-5">
                  <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/pen-tool.svg" class="svg-inject icon-svg solid-duo text-grape-fuchsia" alt="image">
                </div>
              </div>
              <div>
                <h4 class="!mb-1">Cool Features & Elements</h4>
                <p class="!mb-0">Equipped with stunning features and elements for designing appealing pages.</p>
              </div>
            </div>
            <div class="flex flex-row">
              <div>
                <div class="svg-bg bg-[rgba(255,255,255)] opacity-100 !rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] mr-5">
                  <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/share.svg" class="svg-inject icon-svg solid-duo text-grape-fuchsia" alt="image">
                </div>
              </div>
              <div>
                <h4 class="!mb-1">Modern Portfolio Layouts</h4>
                <p class="!mb-0">Effortlessly create and maintain a visually stunning and impactful portfolio.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="flex flex-wrap mx-[-15px] xl:mx-0 lg:mx-0 mt-[-50px] items-center">
          <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[15px] xl:px-0 lg:px-0 mt-[50px] max-w-full !relative xl:!order-2 lg:!order-2">
            <div class="absolute" style="top: 50%; left: 50%; width: 140%; height: auto; transform: translate(-50%,-50%); z-index:0"><img class="w-full" src="<?php echo get_template_directory_uri();?>/assets/img/photos/blurry.png" alt="image"></div>
            <figure class="!relative" style="z-index: 2;"><img src="<?php echo get_template_directory_uri();?>/assets/img/photos/mi2.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/mi2%402x.png 2x" alt="image"></figure>
          </div>
          <!--/column -->
          <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] px-[15px] xl:px-0 lg:px-0 mt-[50px] max-w-full mr-auto">
            <div class="flex flex-row !mb-6">
              <div>
                <div class="svg-bg bg-[rgba(255,255,255)] opacity-100 !rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] mr-5">
                  <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/devices.svg" class="svg-inject icon-svg solid-duo text-grape-fuchsia" alt="image">
                </div>
              </div>
              <div>
                <h4 class="!mb-1">Well-Written Code</h4>
                <p class="!mb-0">Pixel-perfect and easily editable code with comprehensive comments.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-6">
              <div>
                <div class="svg-bg bg-[rgba(255,255,255)] opacity-100 !rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] mr-5">
                  <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/safe.svg" class="svg-inject icon-svg solid-duo text-grape-fuchsia" alt="image">
                </div>
              </div>
              <div>
                <h4 class="!mb-1">Gorgeous Shop Layouts</h4>
                <p class="!mb-0">Present your products to your visitors in an efficient and visually appealing manner.
                </p>
              </div>
            </div>
            <div class="flex flex-row">
              <div>
                <div class="svg-bg bg-[rgba(255,255,255)] opacity-100 !rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] mr-5">
                  <img src = "<?php echo get_template_directory_uri();?>/assets/img/icons/solid/globe-2.svg" class="svg-inject icon-svg solid-duo text-grape-fuchsia" alt="image">
                </div>
              </div>
              <div>
                <h4 class="!mb-1">Fully Responsive Layouts</h4>
                <p class="!mb-0">Adjusts to varying screen sizes, ensuring seamless compatibility across all devices.
                </p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="flex flex-wrap mx-[-15px] !text-center mt-[7rem] xl:!mt-[9rem] lg:!mt-[9rem] md:!mt-[9rem] mb-9 xl:!mb-12 lg:!mb-12 md:!mb-12">
          <div class="md:w-11/12 lg:w-10/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <h2 class="text-[calc(1.345rem_+_1.14vw)] font-bold leading-[1.2] xl:text-[2.2rem]  !mb-0 lg:!px-10 xl:!px-0">
              Build your website using the powerful features of Sandbox</h2>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="container-fluid xl:!px-0 pb-24 xl:pb-32 lg:pb-32 md:pb-32">
        <div class="swiper-container swiper-auto relative z-10" data-margin="40" data-nav="false" data-centered="true" data-loop="true" data-items-auto="true">
          <div class="swiper overflow-visible">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                  <img class="!rounded-[.8rem]" src="assets/img/photos/bp1.jpg" srcset="assets/img/photos/bp1%402x.jpg 2x" alt="">
                </figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                  <img class="!rounded-[.8rem]" src="assets/img/photos/bp2.jpg" srcset="assets/img/photos/bp2%402x.jpg 2x" alt="">
                </figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                  <img class="!rounded-[.8rem]" src="assets/img/photos/bp3.jpg" srcset="assets/img/photos/bp3%402x.jpg 2x" alt="">
                </figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                  <img class="!rounded-[.8rem]" src="assets/img/photos/bp4.jpg" srcset="assets/img/photos/bp4%402x.jpg 2x" alt="">
                </figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                  <img class="!rounded-[.8rem]" src="assets/img/photos/bp5.jpg" srcset="assets/img/photos/bp5%402x.jpg 2x" alt="">
                </figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="!rounded-[0.8rem] shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px]">
                  <img class="!rounded-[.8rem]" src="assets/img/photos/bp6.jpg" srcset="assets/img/photos/bp6%402x.jpg 2x" alt="">
                </figure>
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container -->
      <div class="container pb-6 xl:pb-8 lg:pb-8 md:pb-8">
        <div class="flex flex-wrap mx-[-15px] row-cols-2 row-cols-md-4 row-cols-lg-5 xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-50px] !text-center justify-center pb-24 xl:pb-32 lg:pb-32 md:pb-32">
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi1.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi1%402x.png 2x" alt="image">
            <h4>Built with <br> tailwindcss</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi2.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi2%402x.png 2x" alt="image">
            <h4>SEO-friendly <br> Coding</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi3.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi3%402x.png 2x" alt="image">
            <h4>Valid W3C <br> HTML5 & CSS3</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi4.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi4%402x.png 2x" alt="image">
            <h4>Retina-ready <br> Graphics</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi5.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi5%402x.png 2x" alt="image">
            <h4>One-page <br> Layout Option</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi6.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi6%402x.png 2x" alt="image">
            <h4>Isotope <br> Filterable Gallery</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi7.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi7%402x.png 2x" alt="image">
            <h4>Mailchimp <br> Compatible </h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi8.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi8%402x.png 2x" alt="image">
            <h4>Contact Form <br> w/o Page Refresh</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi9.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi9%402x.png 2x" alt="image">
            <h4>Animations <br> on Page Scroll</h4>
          </div>
          <!--/column -->
          <div class="col xl:w-1/5 lg:w-1/5 md:w-3/12 w-6/12 flex-[0_0_auto] max-w-full px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px]">
            <img class="!mb-4 m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/fi10.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/fi10%402x.png 2x" alt="image">
            <h4>Top-Notch Support <br> & Free Updates</h4>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] items-center">
          <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full !relative">
            <div class="absolute" style="top: 50%; left: 50%; width: 130%; height: auto; transform: translate(-50%,-50%); z-index:0"><img class="w-full" src="<?php echo get_template_directory_uri();?>/assets/img/photos/blurry.png" alt="image"></div>
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-12.5px] lg:mx-[-12.5px] md:mx-[-12.5px] mt-[-25px]">
              <div class="md:w-6/12 lg:w-6/12 xl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full !self-end xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] mt-[25px]">
                <div class="card !shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[0.8rem]">
                  <div class="card-body flex-[1_1_auto] p-[40px]">
                    <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 m-[0_0_1rem] relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                      <p>“Sandbox is really attractive and it saves my time. The support team is really amazing.”</p>
                      <div class="flex items-center text-left">
                        <div class="info p-0">
                          <h5 class="!mb-0">stevenstrange</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !self-end xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] mt-[25px]">
                <div class="card !shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[0.8rem]">
                  <div class="card-body flex-[1_1_auto] p-[40px]">
                    <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 m-[0_0_1rem] relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                      <p>“This is just next level stuff in terms of quality, docs and features. I don't think I'm going
                        to need or tolerate any other template from now on.”</p>
                      <div class="flex items-center text-left">
                        <div class="info p-0">
                          <h5 class="!mb-0">70656e6973</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-6/12 xl:w-5/12 flex-[0_0_auto] px-[15px] max-w-full xl:!ml-[8.33333333%] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] mt-[25px]">
                <div class="card !shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[0.8rem]">
                  <div class="card-body flex-[1_1_auto] p-[40px]">
                    <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 m-[0_0_1rem] relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                      <p>“I've been a Themeforest user for almost 10 years and I have purchased well over 100 themes
                        during my time. This theme is amongst the best here.”</p>
                      <div class="flex items-center text-left">
                        <div class="info p-0">
                          <h5 class="!mb-0">bmwe92m3</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !self-start xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] mt-[25px]">
                <div class="card !shadow-[rgba(30,34,40,0.02)_0_2px_1px,rgba(30,34,40,0.02)_0_4px_2px,rgba(30,34,40,0.02)_0_8px_4px,rgba(30,34,40,0.02)_0_16px_8px,rgba(30,34,40,0.03)_0_32px_16px] !rounded-[0.8rem]">
                  <div class="card-body flex-[1_1_auto] p-[40px]">
                    <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 m-[0_0_1rem] relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                      <p>“Simply the best templates that I have bought so far. Super clean code, intuitive
                        documentations, and most important of all the best design.”</p>
                      <div class="flex items-center text-left">
                        <div class="info p-0">
                          <h5 class="!mb-0">oziuji</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
            <h2 class="text-[calc(1.345rem_+_1.14vw)] font-bold leading-[1.2] xl:text-[2.2rem] mb-4  xl:mt-[-1.5rem] lg:mt-[-1.5rem]">
              Our top priority is ensuring customer satisfaction.</h2>
            <p class="lead !text-[1.1rem] !leading-[1.6] !mb-6">Don't take our word for it. Hear from customers about
              Sandbox.</p>
            <a href="https://1.envato.market/Rygn0y" class="btn btn-lg btn-grape text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:border-[#605dba] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] btn-icon btn-icon-end !rounded-[0.8rem]" target="_blank">All Reviews <i class="uil uil-arrow-up-right ml-[.3rem] before:content-['\e950']"></i></a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </section>
    <!-- /section -->
    <section class="wrapper overflow-hidden">
      <div class="container pt-24 xl:pt-32 lg:pt-32 md:pt-32 !text-center !relative">
        <div class="absolute" style="top: -7%; left: 50%; transform: translateX(-50%);"><img src = "<?php echo get_template_directory_uri();?>/assets/img/photos/blurry.png" alt="image"></div>
        <div class="flex flex-wrap mx-[-15px] !relative mb-9 xl:!mb-12 lg:!mb-12 md:!mb-12">
          <div class="lg:w-10/12 xl:w-9/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <div>
              <img class="m-[0_auto]" src="<?php echo get_template_directory_uri();?>/assets/img/demos/icon-grape.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/icon-grape%402x.png 2x" alt="image">
              <h1 class="font-semibold !leading-[1.15] xl:text-[3.2rem] text-[calc(1.445rem_+_2.34vw)] mt-5 mb-5">Think
                unique and make a difference with Sandbox.</h1>
              <p class="lead !text-[1.2rem] !leading-[1.6] !mb-8 lg:!px-14 xl:!px-[4.5rem] xxl:!px-10">We are trusted by
                thousands of clients. Join them now and easily create your stunning website in no time.</p>
            </div>
            <div class="flex justify-center">
              <span><a href="https://themeforest.net/item/sandbox-modern-multipurpose-tailwind-css-template/51340309" class="btn btn-lg btn-grape text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:border-[#605dba] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] btn-icon btn-icon-end !rounded-[0.8rem]" target="_blank">Buy Sandbox <i class="uil uil-arrow-up-right ml-[.3rem] before:content-['\e950']"></i></a></span>
            </div>
            <!-- /div -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="container !text-center">
        <img class="max-w-full h-auto !relative m-[0_auto]" style="z-index: 2;" src="<?php echo get_template_directory_uri();?>/assets/img/demos/f1.png" srcset="<?php echo get_template_directory_uri();?>/assets/img/demos/f1%402x.png 2x" alt="image">
      </div>
    </section>
    <!-- /section -->
  </div>
  <!-- progress wrapper -->
  <div class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:text-[#605dba] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
      <path class="fill-none stroke-[#605dba] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>
  <!-- <script src="assets/js/plugins.js"></script>
  <script src="assets/js/theme.js"></script> -->
</body>

</html>
<?php

get_footer();

?>
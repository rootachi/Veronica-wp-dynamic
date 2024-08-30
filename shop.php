<?php
/*Template Name:Shop*/
get_header();
?>


    <section class="wrapper  bg-[rgba(246,247,249,1)] ">
      <div class="container py-14 xl:!py-24 lg:!py-24 md:!py-24 !text-center">
        <div class="flex flex-wrap mx-[-15px]">
          <div class="lg:w-10/12 xl:w-10/12 xxl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">Shop Layout</h1>
            <p class="lead !mb-1 leading-[1.65] text-[0.9rem] font-medium">Integer posuere erat a ante venenatis dapibus.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper !bg-[#ffffff]">
      <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
        <div class="flex flex-wrap mx-[-15px] items-center mb-10 !relative z-[1]">
          <div class="md:w-8/12 lg:w-9/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:pr-40">
            <h2 class="text-[calc(1.265rem_+_0.18vw)] font-bold xl:text-[1.4rem] leading-[1.35]">New Arrivals</h2>
            <nav class="inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb !mb-0 flex flex-wrap p-0 !rounded-none">
                <li class="breadcrumb-item flex text-[#60697b]"><a class="text-inherit hover:text-[#3f78e0]" href="#">Home</a></li>
                <li class="breadcrumb-item flex text-[#60697b] pl-[.5rem] active before:font-normal before:flex before:items-center before:text-[rgba(96,105,123,0.35)] before:content-['\e931'] before:text-[0.9rem] before:-mt-px before:pr-2 before:font-Unicons" aria-current="page">Shop</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!--/column -->
          <div class="md:w-4/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:!ml-auto lg:!ml-auto md:!ml-auto xl:!text-right lg:!text-right md:!text-right mt-5 xl:!mt-0 lg:!mt-0 md:!mt-0">
            <div class="form-select-wrapper">
              <select class="form-select">
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="newness">Sort by newness</option>
                <option value="price: low to high">Sort by price: low to high</option>
                <option value="price: high to low">Sort by price: high to low</option>
              </select>
            </div>
            <!--/.form-select-wrapper -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="itemgrid grid-view projects-masonry shop mb-16">
          <div class="flex flex-wrap mx-[-15px] xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-50px] xl:mt-[-80px] lg:mt-[-80px] md:mt-[-80px] isotope">
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh1.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh1%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
                <span class=" flex items-center justify-center font-bold leading-[1.7] tracking-[-0.01rem] rounded-[100%] !bg-[rgba(209,107,134)] !opacity-100 text-white !w-[2.5rem] !h-[2.5rem] absolute uppercase text-[0.65rem]" style="top: 1rem; left: 1rem;"><span>Sale!</span></span>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Shoes</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 five"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Nike Air Sneakers</a></h2>
                <p class="price !m-0"><del class="text-[#9499a3]"><span class="amount">$55.00</span></del> <ins class="no-underline text-[#e2626b]"><span class="amount">$45.00</span></ins></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh2.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh2%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Electronics</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 four"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Apple Watch</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh3.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh3%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
                <span class=" flex items-center justify-center font-bold leading-[1.7] tracking-[-0.01rem] rounded-[100%] bg-[rgba(84,168,199)] opacity-100 text-white !w-[2.5rem] !h-[2.5rem] absolute uppercase text-[0.65rem]" style="top: 1rem; left: 1rem;"><span>New!</span></span>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Electronics</div>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Headphones</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh4.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh4%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Shoes</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 three"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Colorful Sneakers</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh5.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh5%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Electronics</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 one"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Polaroid Camera</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh6.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh6%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Cosmetics</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 two"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Curology Cleanser</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh7.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh7%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Home & Kitchen</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 four"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Q&Q Wall Clock</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh8.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh8%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Electronics</div>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Earphones</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
            <div class="project item group md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] px-[15px] mt-[50px] xl:mt-[80px] lg:mt-[80px] md:mt-[80px] max-w-full">
              <figure class="!rounded-[.4rem] !mb-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/photos/sh9.jpg" srcset="<?php echo get_template_directory_uri();?>/assets/img/photos/sh9%402x.jpg 2x" alt="image">
                <a class="item-like opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart before:content-['\eb66']"></i></a>
                <a class="item-view opacity-0 absolute !w-[2.2rem] !h-[2.2rem] leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out text-[#343f52] hover:!text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bg-[#ffffff] top-4 group-hover:opacity-100 group-hover:right-4" href="#" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                <a href="#" class="item-cart opacity-0 absolute bottom-[-2rem] w-full h-auto text-white text-center transition-all duration-[0.3s] ease-in-out text-[0.85rem] flex items-center justify-center font-bold m-0 p-[0.8rem] left-0 bg-[rgba(38,43,50,.8)] hover:bg-[rgba(38,43,50,.9)] hover:!text-white group-hover:opacity-100 group-hover:bottom-0"><i class="uil uil-shopping-bag font-normal mt-[-0.05rem] mr-1 before:content-['\ecba']"></i> Add to Cart</a>
              </figure>
              <div class="post-header">
                <div class="flex flex-row items-center justify-between mb-2">
                  <div class="uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#9499a3] !mb-0">Accessories</div>
                  <span class="ratings  inline-block relative w-20 h-[0.8rem] text-[0.9rem] leading-none before:text-[rgba(38,43,50,0.1)] after:inline-block after:not-italic after:font-normal after:absolute after:text-[#fcc032] after:content-['\2605\2605\2605\2605\2605'] after:overflow-hidden after:left-0 after:top-0 before:inline-block before:not-italic before:font-normal before:absolute before:text-[#fcc032] before:content-['\2605\2605\2605\2605\2605'] before:overflow-hidden before:left-0 before:top-0 five"></span>
                </div>
                <h2 class="post-title h3 text-[1.1rem]"><a href="shop-product.html" class="text-[#343f52] hover:text-[#3f78e0]">Apple Watch Milano Loop</a></h2>
                <p class="price !m-0"><span class="amount">$55.00</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid -->
        <nav class="flex justify-center" aria-label="pagination">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left before:content-['\e949']"></i></span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right before:content-['\e94c']"></i></span>
              </a>
            </li>
          </ul>
          <!-- /.pagination -->
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper  bg-[rgba(246,247,249,1)] ">
      <div class="container py-14 xl:!py-[4.5rem] lg:!py-[4.5rem] md:!py-[4.5rem]">
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-40px]">
          <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[40px] xl:px-[35px] lg:px-[20px]">
            <div class="flex flex-row">
              <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/solid/shipment.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-mono text-[#343f52] text-navy !mr-4" alt="image">
              </div>
              <div>
                <h4 class="!mb-1">Free Shipping</h4>
                <p class="!mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[40px] xl:px-[35px] lg:px-[20px]">
            <div class="flex flex-row">
              <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/solid/push-cart.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-mono text-[#343f52] text-navy !mr-4" alt="image">
              </div>
              <div>
                <h4 class="!mb-1">30 Days Return</h4>
                <p class="!mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[40px] xl:px-[35px] lg:px-[20px]">
            <div class="flex flex-row">
              <div>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/solid/verify.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-mono text-[#343f52] text-navy !mr-4" alt="image">
              </div>
              <div>
                <h4 class="!mb-1">2-Years Warranty</h4>
                <p class="!mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 get_footer();

 ?>
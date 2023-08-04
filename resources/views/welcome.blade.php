 <x-admin_layout title="trang chu">

 </x-admin_layout>
`
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
 </head>

 <body>

     <header id="myHeader">
         <div class="logo">
             <img src="./image/logo.png" alt="">
         </div>
         <div class="menubar">
             <ul>
                 <li><a href="/">Home</a></li>
                 {{-- <li><a href="#shop_category">Cửa Hàng</a></li> --}}
                 <li><a href="/contact">Product</a></li>
                 <li><a href="#lastest_pruducts">Contact</a></li>
             </ul>
         </div>

         <div class="right">
             <i class="fa-solid fa-magnifying-glass"></i>

             <div class="rel">
                 <i class="fa-solid fa-heart"></i>
                 <span class="number">20</span>
             </div>

             <div class="rel">
                 <a href="#"> <i class="fa-solid fa-cart-plus"></i></a>
                 <span class="number">0</span>

             </div>
        </div>
        {{-- <div class="taikhoan">
            <ul>
                <li><a href="login.html">Đăng nhập</a></li>
                <li><a href="register.html">Đăng ký</a></li>
            </ul>
        </div> --}}
     </header>

     <div class="banner">
         <div class="bio">
             {{-- <p>Bio-Organnic 30% OFF</p> --}}
             <h1>We Care About <br>Your Pet!</h1>
         </div>
     </div>
     <!-- ở đây -->

     <!-- three-round -->
     <div class="three-round">
         <div class="o_item">
             <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                 <path style="fill:#57aa5e">
                     <animate repeatCount="indefinite" attributeName="d" dur="7s"
                         values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z">
                     </animate>
                 </path>
             </svg>
             <i class="fa-solid fa-sack-dollar"></i>
             <h3>Giảm 20% <br> cho hôm nay</h3>
         </div>

         <div class="o_item">
             <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                 <path style="fill:#f0c346">
                     <animate repeatCount="indefinite" attributeName="d" dur="7s"
                         values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z">
                     </animate>
                 </path>
             </svg>
             <i class="fa-solid fa-percent"></i>
             <h3>Đảm bảo<br>chất lượng</h3>
         </div>

         <div class="o_item">

             <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                 <path style="fill:#C2835D">
                     <animate repeatCount="indefinite" attributeName="d" dur="7s"
                         values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z">
                     </animate>
                 </path>
             </svg>
             <i class="fa-solid fa-headset"></i>
             <h3>24/7 hỗ trợ<br>khách hàng</h3>
         </div>
     </div>

     <section id="shop_category" class="w-70">
        <div class="shop_category">
            <div class="heading">
                <h3>Shop By Category</h3>
                <div class="paw">
                    <i class="fa-solid fa-paw"></i>
                </div>
            </div>
        </div>
     </section>

     <section id="shop_category" class="w-70">
         <div class="shop_category">
             <div class="food">
                 @foreach ($data as $item)
                     <div class="food_items mt-5" >
                         <div class="img" style="width: 300px; height:350px ">
                            <img src="{{ $item->anh_bia }}" alt="img">
                         </div>
                         <div class="food_details">
                             <div class="review">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                             </div>
                             <h4>{{ $item->san_pham }}</h4>
                             <h3>{{ number_format($item->gia) }}</h3>
                             <p>{{ $item->chi_tiet }}</p>
                             <button>Add To Cart</button>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>

     <section id="latest_products" class="w-70">
         <div class="latest_pro">
             <div class="heading">
                 <h3>Shop By Category</h3>
                 <div class="paw">
                     <i class="fa-solid fa-star"></i>
                 </div>
             </div>
             <div class="latest_product">
                 <div class="lp_items">
                     <div class="img">
                         <img src="img/latest_product-2.webp" alt="">
                         <div class="hidden_icons">
                             <i class="fa-regular fa-heart"></i>
                             <i class="fa-solid fa-eye"></i>
                         </div>
                     </div>
                     <div class="lp_details">
                         <div class="reviews">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h4>Fitness Jumpsuit Camouflage</h4>
                         <div class="price">
                             <span>$180</span>
                         </div>
                         <button>Add To Cart</button>
                     </div>
                 </div>

                 <div class="lp_items">
                     <div class="img">
                         <img src="img/latest_product-3.webp" alt="">
                         <div class="tag">-50%</div>
                         <div class="hidden_icons">
                             <i class="fa-regular fa-heart"></i>
                             <i class="fa-solid fa-eye"></i>
                         </div>
                     </div>
                     <div class="lp_details">
                         <div class="reviews">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h4>Fitness Jumpsuit Black</h4>
                         <div class="price">
                             <del>$200</del> <span>$180</span>
                         </div>
                         <button>Add To Cart</button>
                     </div>
                 </div>

                 <div class="lp_items">
                     <div class="img">
                         <img src="img/latest_product-4.webp" alt="">
                         <div class="tag">-50%</div>
                         <div class="hidden_icons">
                             <i class="fa-regular fa-heart"></i>
                             <i class="fa-solid fa-eye"></i>
                         </div>
                     </div>
                     <div class="lp_details">
                         <div class="reviews">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h4>Striped Leggings and Top</h4>
                         <div class="price">
                             <del>$149</del> <span>$299</span>
                         </div>
                         <button>Add To Cart</button>
                     </div>
                 </div>

                 <div class="lp_items">
                     <div class="img">
                         <img src="img/latest_product-5.webp" alt="">
                         <div class="hidden_icons">
                             <i class="fa-regular fa-heart"></i>
                             <i class="fa-solid fa-eye"></i>
                         </div>
                     </div>
                     <div class="lp_details">
                         <div class="reviews">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h4>Fitness Jumpsuit</h4>
                         <div class="price">
                             <span>$280</span>
                         </div>
                         <button>Add To Cart</button>
                     </div>
                 </div>

                 <div class="lp_items">
                     <div class="img">
                         <img src="img/latest_product-6.webp" alt="">
                         <div class="tag">-50%</div>
                         <div class="hidden_icons">
                             <i class="fa-regular fa-heart"></i>
                             <i class="fa-solid fa-eye"></i>
                         </div>
                     </div>
                     <div class="lp_details">
                         <div class="reviews">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                         </div>
                         <h4>Fitness Jumpsuit Khaki/Black</h4>
                         <div class="price">
                             <del>$200</del> <span>$180</span>
                         </div>
                         <button>Add To Cart</button>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     {{--  
            <!-- FEATURED PRODUCTS -->
    <section id="feature_product" class="w-70">
        <div class="feature_pro">
            <div class="heading">
                <h3>Shop By Category</h3>
                <div class="paw">
                    <i class="fa-solid fa-paw"></i>
                </div>
            </div>
            <div class="feature_product">
                <div class="fp_items">
                    <div class="img">
                        <img src="img/feature_product-1.webp" alt="">
                        <div class="tag">-10% Sale</div>
                        <div class="hidden_icons">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                    <div class="fp_details">
                        <div class="reviews">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="sub_category">Foxic</span>
                        <h6>Small dogs Food</h6>
                        <div class="price">
                            <del>$200</del>
                            <span>$180</span>
                        </div>
                        <button>Add To cart</button>
                    </div>
                </div>

                <div class="fp_items">
                    <div class="img">
                        <img src="img/feature_product-2.webp" alt="">
                        <div class="hidden_icons">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                    <div class="fp_details">
                        <div class="reviews">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="sub_category">Foxic</span>
                        <h6>bird Cage</h6>
                        <div class="price">
                            <span>$180</span>
                        </div>
                        <button>Add To cart</button>
                    </div>
                </div>

                <div class="fp_items">
                    <div class="img">
                        <img src="img/feature_product-3.webp" alt="">
                        <div class="hidden_icons">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                    <div class="fp_details">
                        <div class="reviews">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="sub_category">Foxic</span>
                        <h6>Cans Pack Cats Food</h6>
                        <div class="price">
                            <span>$180</span>
                        </div>
                        <button>Add To cart</button>
                    </div>
                </div>

                <div class="fp_items">
                    <div class="img">
                        <img src="img/feature_product-4.webp" alt="">
                        <div class="tag">-10% Sale</div>
                        <div class="hidden_icons">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                    <div class="fp_details">
                        <div class="reviews">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="sub_category">Foxic</span>
                        <h6>Small dogs Food</h6>
                        <div class="price">
                            <del>$299</del>
                            <span>$149</span>
                        </div>
                        <button>CAt Activity Play Center</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

            --}}

            <!-- BIG FOOD BANNER -->
    <div class="bf_banner">
        <div class="bf_food">
            <img src="img/big_banner_food.webp" alt="">
        </div>
        <div class="left_txt">
            <div>
                <h4>Real Food</h4>
                <p>Human-grade meat and veggies in simple recipes, made for dogs</p>
            </div>
            <div>
                <h4>USDA</h4>
                <p>Safety and quality never before avaible to pets</p>
            </div>
        
        </div>
        <div class="right_txt">
            <div>
                <h4>Made Fresh</h4>
                <p>Maintain whole food and nutritional</p>
            </div>
            <div>
                <h4>Vet Appraved</h4>
                <p>Nutritional that exceeds industry standarts for pets</p>
            </div>
        
        </div>
    </div>

            <!-- FOOTER START HERE -->
    <footer id="footer">
        <div class="footer_top w-70" >
            <div class="img">
                <img src="img/logo.webp" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href=""></a>My Account</li>
                    <li><a href="">View Cart</a></li>
                    <li><a href="">My Wishlist</a></li>
                    <li><a href="">Order Status</a></li>
                </ul>
            </div>
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-vimeo"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-solid fa-print"></i>
            </div>
        </div>

            <!-- footer bottom-->
        <div class="footer_bottom">
            <div class="payment_link">
                <i class="fa-brands fa-amazon"></i>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-paypal"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-apple-pay"></i>
            </div>
            <small>Designed By CodeAsmr(Asif Hossain)</small>
        </div>
    </footer>


     <script>
         window.onscroll = function() {
             myFunction()
         };
         var header = document.getElementById('myHeader');
         var sticky = header.offsetTop;

         function myFunction() {
             if (window.pageYOffset > sticky) {
                 header.classList.add('sticky');
             } else {
                 header.classList.remove('sticky');
             }
         }
     </script>

 </body>

 </html>

<?php
 /* 
 * Template Name: Home
 */
get_header();
 ?>

    <main class="main-home content-width">
        <div class="main-left">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <h1 class="title-main clear">CHINH PHỤC CÔNG NGHỆ <br /> bứt phá rào cản</h1>
                    <a href="<?php print get_page_link(38); ?>" class="button-play">Tranh tài ngay</a>
                </div>
                <div class="col-md-9 col-md-offset-3">
                    <div class="prize">
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-encourage.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải khuyến khích</h1> 
                                <p class="description-article clear">
                                    Một cặp vé <br />xem phim CGV
                                </p> 
                            </div>
                        </article>  
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-second.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải nhì</h1> 
                                <p class="description-article clear">
                                    Điện thoại OPPO S1S 
                                </p> 
                            </div>
                        </article> 
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-third.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải ba</h1> 
                                <p class="description-article clear">
                                    Một camera <br /> quay phim 360 độ
                                </p> 
                            </div>
                        </article> 
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-first.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải nhất</h1> 
                                <p class="description-article clear">
                                    Một chuyến du lịch <br />trong nước
                                </p> 
                            </div>
                        </article>  
                    </div>

                </div>
            </div>

        </div>



    </main>
    <?php get_footer(); ?>
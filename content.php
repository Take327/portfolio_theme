<main>
    <section id="section_profile" class="section_profile">
        <div class="div_widget-box">
            <div class="profile_item_area">
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-profile.png">
            </div>
            <div class="profile_item_area">
                <div>
                    <h1><?php $user_info = get_userdata(1);
                        $display_name = $user_info->display_name;
                        echo $display_name; ?></h1>
                </div>
                <div>
                    <?php $user_info = get_userdata(1);
                    $description = $user_info->description;
                    echo wpautop($description); ?>
                </div>
            </div>
        </div>

    </section>
    <section id="section_blog" class="section_blog">
        <div class="div_widget-box">
            <div class="blog_area">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <a href=# title="<?php the_title(); ?>">
                            <article class="blog_item">
                                <figure class="blog_img_area">
                                    <img src="https://tech-take.com/wp-content/themes/cocoon-master/images/no-image-320.png" alt="" class="no-image entry-card-thumb-image list-no-image" width="320" height="180">
                                    <span class="blog_category">
                                        <?php $cat = get_the_category();
                                        $cat = $cat[0];
                                        echo $cat->cat_name;
                                        ?>
                                    </span>
                                </figure><!-- /.entry-card-thumb -->

                                <div class="">
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                    <div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </article>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section id="section_program">
        <div class="div_widget-box">
            ここにプログラミング
        </div>
    </section>
    <section id="section_contact">
        <div class="div_widget-box">
            ここにお問い合わせ
        </div>
    </section>

</main>
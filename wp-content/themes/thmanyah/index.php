<?php get_header(); ?>
<div class="container-fluid p-md-5 pb-md-0 pt-sm-0 ">
   <div class="row p-3 yellow" style="background:#E1DCCC;">
       <nav class="nav justify-content-start ">
           <?php
           wp_nav_menu(
               array(
                   'id'    =>'main_menu',
                   'depth' => 1,
                   'container'=>'',
               )
           );
           ?>
       </nav>
   </div>
</div>
    <div class="container-fluid pt-0 px-md-5 px-sm-0">
        <div class="row p-3 yellow" style="background:#E1DCCC;">
            <div class="container">

                <div class="row p-3 yellow" style="background:#E1DCCC;">

                    <div class="col-12 d-none d-sm-block mt-5"></div>

                    <div class="col-md-8 col-sm-12 mt-5 mb-5 text-center mx-auto">

                        <img class="logo" style="height: 90px; border-bottom: 4px solid #E1DCCC;padding-bottom: 1rem;" src="https://company.thmanyah.com/wp-content/themes/thmanyah/assets/images/thmanyah-logo.svg">

                        <h3 class="">
                            رسالتنا تغيير ثقافة الصحافة العربية

                        </h3>

                        <p>
                            شكّلت العقود الماضية صورةً باهتة مظلمة لدى المواطن العربي عن “مفهوم الصحافة”. نعتقد في ثمانية
                            أنّ
                            الصحافة تساهم في بناء الأوطان، وتزيد من المعرفة للإنسان. نؤمن أنّ المواطن العربي ينقصه الوصول
                            إلى
                            المعرفة التي هي كل ما يحتاجه الإنسان لاتخاذ قرارات تحسّن جودة حياته، وتعزز من مساهمته في ازدهار
                            مجتمعه ووطنه.

                        </p>

                        <a class="red-link bold" href="https://company.thmanyah.com/about">

                            اقرأ المزيد

                        </a>


                    </div>

                </div>
            </div>
        </div>
    </div>









    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                        <p><?php the_content(__('(more...)')); ?></p>
                    </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
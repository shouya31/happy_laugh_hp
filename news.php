<?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4, /* 表示する数 */
    ); ?>
    <?php $my_query = new WP_Query( $args ); ?>
    <ul class="news-box__wrap flex -jcsb">
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <li class="news-box__inner">
        <a href="<?php the_permalink(); ?>">
        <div class="news-img">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
        <?php else : ?>
            <img src="https://happylaugh.jp/wp-content/uploads/2021/01/thumnail.png" alt="デフォルト画像" />
        <?php endif ; ?></div>
        <div class="news-under__box">
            <div class="flex -jcsb news-under__inner">
                <?php
                    $terms = get_the_category();
                    foreach($terms as $term){
                    echo ('<span class="news-box__cate cate-') ;
                    echo esc_html($term->slug) ;
                    echo ('">') ;
                    echo esc_html($term->name)  ;
                    echo ('</span>') ;
                    }
                ?>
                <span class="news-box__date"><?php echo get_the_date(); ?></span>
            </div>
        </div>
        <p class="news-box__title">
        <?php if ( wp_is_mobile() ) : ?>
            <?php echo wp_trim_words( get_the_title(), 26, '...' ); ?>
        <?php else: ?>
            <?php echo wp_trim_words( get_the_title(), 39, '...' ); ?>
        <?php endif; ?></p>
        </a>
    </li>
    <?php endwhile; ?>
    </ul>
<?php wp_reset_postdata(); ?>
<style>
    .flex{
        display:flex;
        flex-wrap:wrap;  
    }
    .-jcsb{
        justify-content:space-between;
    }
    .news-box__wrap{
        list-style:none;
        width:100%;
        margin:0;
        padding:20px 0 0 0;
    }
    .news-box__inner{
        width:23%;
        box-shadow:4px 6px 12px rgba(92,19,41,0.08);
        border-radius:16px;
        background:#fff;
    }
    .news-box__inner a:hover{
        opacity:0.8;
    }
    .news-box__date{
        color:#ccc;
        font-size:13px;
        font-weight:bold;
        display:block;
    }
    .news-box__cate{
        display:block;
        width:88px;
        height:24px;
        line-height:24px;
        border-radius:6px;
        color:#fff;
        text-align:center;
        font-size:12px;
        font-weight:bold;
    }
    .cate-news{
        background:#4C4C78;
        
    }
    .cate-blog{
        background:#FF5D8F;
    }
    .news-under__inner{
        padding:10px;
        margin-bottom:10px;
    }
    .news-box__title{
        font-size:16px;
        font-weight:bold;
        color:#000;
        padding:10px 10px 0 10px;
    }
    @media screen and (max-width:768px){
        .news-box__inner{
            width:48%;
            margin-bottom:20px;
        }
        .news-box__cate{
            margin-bottom:5px;
        }
        .news-under__inner{
            margin-bottom:0;
        }
        .news-box__title{
            padding:0px 10px 0 10px;
        }
    }
</style>
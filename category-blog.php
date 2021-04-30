<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sydney
 */

get_template_part('single', 'header'); ?>

	<?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
		$fullwidth = 'fullwidth';
	} else {
		$fullwidth = '';
	} ?>
  <div class="main">
		<hr size=1px color="#DDDDDD" class="sp-ber">
      <!-- メインバー -->
    <div class="mainber blog-lists">

			<?php if(have_posts()):?>
			<?php while ( have_posts() ) : the_post(); ?>
      <div class="blog-list">

			<div class="date"><?php the_time('Y.m.d'); ?><?php echo "&nbsp;";?>(更新日: <?php the_modified_date('Y/m/d') ?>)</div>
			<h1><?php the_title();?></h1>

			<hr size=1px color="#000000">

			<figure class="featured-image">
				<?php if(has_post_thumbnail()):?>
					<?php the_post_thumbnail('large-thumb');?>
				<?php endif ;?>
      </figure>

      <div class="entry-post">
        <?php if ( (get_theme_mod('full_content_home') == 1 && is_home() ) || (get_theme_mod('full_content_archives') == 1 && is_archive() ) ) : ?>
          <?php the_content(); ?>
        <?php else : ?>
          <?php the_excerpt(); ?>
        <?php endif; ?>

        <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-post -->

      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><div class="read-more">READ MORE</div></a>
      </div>

			<?php endwhile; ?>

      <?php
			the_posts_pagination( array(
				'mid_size'  => 1,
			) );
      ?>
      <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

			<?php endif ;?>


      </div>
      <!-- メインバー -->

      <!-- サイドバー -->
      <div class="sideber">
        <div class="sideber-main">
          <div class="circle"></div>
          <div class="title">ハピラフインスタガレッジ</div>
          <hr size=1px color= #374CA5>
          <p>インスタマーケティング支援のハピラフ代表トミが、インスタの伸ばし方やインスタに関するお役立ち情報をお届けします。初心者から上級者まで全ての人に役立つ内容となっています。<br>インスタの実績としては、累計フォロワー100万人を獲得しました。全て立ち上げから伸ばしています。</p>        
          <a href="https://www.youtube.com/channel/UC-7yeBSVfYVxh5o5ZLV9P2Q"><button class="youtube-btn">Youtubeを見る</button></a>
        </div>
        <div class="sideber-sub">
          <div class="content">
						<form action="<?php echo home_url("/");?>" method="get" class="blog-search">
							<input type="text" name= "s" value="<?php the_search_query();?>" placeholder="キーワードを入力">
							<button type="submit" ><i class="fas fa-search fa-lg"></i></button>
						</form>
					</div>
        </div>
      </div>
      <!-- サイドバー -->

    </div>
	</div>
</div>
<?php get_footer(); ?>



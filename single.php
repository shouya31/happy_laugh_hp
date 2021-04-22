<?php
/**
 * The template for displaying all single posts.
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
    <div class="mainber">
    <?php do_action('sydney_before_content'); ?>
			<?php if(have_posts()):?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="date"><?php the_time('Y.m.d'); ?><?php echo "&nbsp;";?>(更新日: <?php the_modified_date('Y/m/d') ?>)</div>
			<h1><?php the_title();?></h1> 
			<hr size=1px color="#000000">
			<figure class="featured-image">
				<?php if(has_post_thumbnail()):?>
					<?php the_post_thumbnail('midium');?>
				<?php endif ;?>
      </figure>
      <?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif ;?>
      <?php do_action('sydney_after_content'); ?>
        <!-- シェア関連 -->
      <div class="share">この記事をシェアする</div>
      <ul class="sns-icon">
        <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
        <li><a href="#"><i class="fa fa-hatena fa-lg"></i></a></li>
        <li class="line-list"><a href="#"><span class="icon-line"></span><i class="fas fa-circle"></i></a></li>
        <div class="facebook">
          <li><a href="#"><div class="facebook-logo"></div></a></li>
        <div>
      </ul>
        <!-- シェア関連 -->

        <!-- 代表情報 -->
      <div class="manager-info">
        <div class="manager-image"></div>
        <div class="manager-name">富田 竜介</div>
        <div class="manager-details">株式会社ハピラフ 代表取締役 CEO </div>
        <div class="manager-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
      </div>
        <!-- 代表情報 -->

        <!-- ダウンロード情報 --> 
					<div class="download-info">
						<div class="download-title">なぜInstagramのアカウントを運用するべき・注力すべきかが詰まった資料を無料ダウンロードできます</div>
						<div class="download-text">最新トレンドから売上に繋げるInstagramの可能性、マネタイズ事例、運用体制・工数など、SNSマーケティングにこれから本格的にに取り組もうとされているマーケティング担当者を単勝にまとめた資料です</div>
						<a href="http://hapirahu.local/wp-content/uploads/2021/03/Happylaugh-whitepaper_compressed-2.pdf">
							<div class="download-button">ダウンロード</div>
						</a>
					</div>
        <!-- ダウンロード情報 --> 

      </div>
      <!-- メインバー -->

      <!-- サイドバー -->
      <div class="sideber">
        <div class="sideber-main">
          <div class="circle"></div>
          <div class="title">ハピラフインスタガレッジ</div>
          <hr size=1px color= #374CA5>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="sideber-sub">
          <div class="content">
						<!-- <form action="<?php echo home_url("/");?>" method="get" class="blog-search">
							<input type="text" name= "s" value="<?php the_search_query();?>" placeholder="キーワードを入力">
							<button type="submit" ><i class="fas fa-search fa-lg"></i></button>
						</form> -->
					</div>
        </div>
      </div>
      <!-- サイドバー -->

    </div>
	</div>
</div>
<?php get_footer(); ?>



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
        <li><a href="https://twitter.com/share?url=<? echo get_the_permalink(); ?>&text=<? echo get_the_title(); ?>" target="_blank" rel="nofollow noopener"><i class="fab fa-twitter fa-lg"></i></a></li>
        <li><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener"><i class="fa fa-hatena fa-lg"></i></a></li>
        <li class="line-list"><a href="https://social-plugins.line.me/lineit/share?url=<? echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><span class="icon-line"></span><i class="fas fa-circle"></i></a></li>
        <div class="facebook">
          <li><a href= "http://www.facebook.com/share.php?u=<? echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><div class="facebook-logo"></div></a></li>
        <div>
      </ul>
        <!-- シェア関連 -->

        <!-- 代表情報 -->
      <div class="manager-info">
        <div class="manager-image"></div>
        <div class="manager-name">富田 竜介</div>
        <div class="manager-details">株式会社ハピラフ 代表取締役 CEO </div>
        <div class="manager-text">広告代理店を経て事業主を4社経験。累計160万フォロワーのグロースを経験。代理店と事業主と両面経験したからできる提案、戦略設計を武器に多くのクライアント様の支援を実現。節約チャンネル1年弱で72万フォロワー拡大。アパレルD2C立上げ2ヶ月で2,000万、コスメアカウント6ヶ月で3万フォロワー。他にも多数実績。</div>
      </div>
        <!-- 代表情報 -->

        <!-- ダウンロード情報 -->
					<div class="download-info">
						<div class="download-title">なぜInstagramのアカウントを運用するべき・注力すべきかが詰まった資料を無料ダウンロードできます</div>
						<div class="download-text">最新トレンドから売上に繋げるInstagramの可能性、マネタイズ事例、運用体制・工数など、SNSマーケティングにこれから本格的にに取り組もうとされているマーケティング担当者を単勝にまとめた資料です</div>
						<a href="/download-form">
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
          <p>インスタマーケティング支援のハピラフ代表トミが、インスタの伸ばし方やインスタに関するお役立ち情報をお届けします。初心者から上級者まで全ての人に役立つ内容となっています。<br>インスタの実績としては、累計フォロワー100万人を獲得しました。全て立ち上げから伸ばしています。</p>
        </div>

        <div class="sideber-sub">
          <div class="content"></div>
        </div>
      </div>
      <!-- サイドバー -->

    </div>
	</div>
</div>
<?php get_footer(); ?>



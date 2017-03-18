<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php if ($this->options->postshowthumb == 'able'): if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
<?php else : ?>
<?php $thumb = showThumb($this,null,true);?>
<?php if(!empty($thumb)):?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php echo $thumb;?>);"></div>
<?php else : ?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
<?php endif;endif;endif; ?>

<article class="main-content <?php if ($this->options->postshowthumb == 'able'): ?>post-page<?php else: ?>page-page<?php endif; ?>" itemscope itemtype="http://schema.org/Article">
	<div class="post-header">
		<h1 class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</h1>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">发布于 <?php $this->date('M j, Y'); ?></time>  分类： <?php $this->category(''); ?>    <a href="#comments"><?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
		</div>
	</div>
	<div id="post-content" class="post-content" itemprop="articleBody">
        <p class="post-tags">
            <?php $this->tags(' ', true, ''); ?>
        </p>
		<?php parseContent($this); ?>
		<p class="post-info">
			本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可<br>本站文章除注明转载/出处外，均为本站原创或翻译，转载请著名来源 ?>
		</p>
	</div>
</article>

<?php if ($this->options->relatedPosts == 'able'): ?>
<?php $this->related(6)->to($relatedPosts); ?>
<?php if($relatedPosts->have()): ?>
<div class="related-post-lists">
	<div class="post-lists">
		<div class="post-lists-body">
		<?php while($relatedPosts->next()): ?>
			<div class="post-list-item">
				<div class="post-list-item-container">
					<div class="item-label">
						<div class="item-title"><a href="<?php $relatedPosts->permalink() ?>"><?php $relatedPosts->title() ?></a></div>
						<div class="item-meta clearfix">
							<?php if (array_key_exists('book',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-book" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('game',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-game" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('note',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-note" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('chat',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-chat" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('code',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-code" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('image',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-image" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('web',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-web" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('link',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-link" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('design',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-design" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('lock',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-lock" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php else : ?>
							<div class="item-meta-ico bg-ico-<?php echo randBgIco(); ?>" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
	                        <?php endif; ?>
							<div class="item-meta-cat"><?php $relatedPosts->category(''); ?></div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>

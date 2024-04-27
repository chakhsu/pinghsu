<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php if ($this->options->postshowthumb == 'able'): if (isset($this->___fields()['thumb'])): ?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);">
	<div class="post-header-thumb-op" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
	<div class="post-header-thumb-cover">
		<div class="post-header-thumb-container">
			<div class="post-header-thumb-title">
				<?php $this->title() ?>
			</div>
			<div class="post-header-thumb-meta">
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> with <a href="#comments"><?php $this->commentsNum(_t(' 0 comment'), _t(' 1 comment'), _t(' %d comments')); ?></a>
			</div>
			<div class="post-tags">
				<?php $this->tags(' ', true, ''); ?>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
<?php $thumb = showThumb($this,null,true);?>
<?php if(!empty($thumb)):?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
	<div class="post-header-thumb-op" style="background-image:url(<?php echo $thumb;?>);"></div>
	<div class="post-header-thumb-cover">
		<div class="post-header-thumb-container">
			<div class="post-header-thumb-title">
				<?php $this->title() ?>
			</div>
			<div class="post-header-thumb-meta">
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> with <a href="#comments"><?php $this->commentsNum(_t(' 0 comment'), _t(' 1 comment'), _t(' %d comments')); ?></a>
			</div>
			<div class="post-tags">
				<?php $this->tags(' ', true, ''); ?>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
	<div class="post-header-thumb-op" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
	<div class="post-header-thumb-cover">
		<div class="post-header-thumb-container">
			<div class="post-header-thumb-title">
				<?php $this->title() ?>
			</div>
			<div class="post-header-thumb-meta">
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> with <a href="#comments"><?php $this->commentsNum(_t(' 0 comment'), _t(' 1 comment'), _t(' %d comments')); ?></a>
			</div>
			<div class="post-tags">
				<?php $this->tags(' ', true, ''); ?>
			</div>
		</div>
	</div>
</div>
<?php endif;endif;endif; ?>

<article class="main-content <?php if ($this->options->postshowthumb == 'able'): ?>post-page<?php else: ?>page-page<?php endif; ?>" itemscope itemtype="http://schema.org/Article">
	<div class="post-header">
		<div class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</div>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> with <a href="#comments"><?php $this->commentsNum(_t(' 0 comment'), _t(' 1 comment'), _t(' %d comments')); ?></a>
		</div>
	</div>
	<div id="post-content" class="post-content" itemprop="articleBody">
        <p class="post-tags">
            <?php $this->tags(' ', true, ''); ?>
        </p>
		<?php parseContent($this); ?>
		<p class="post-info">
			本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可。<br>本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名。
		</p>
	</div>
</article>

<div id="post-bottom-bar" class="post-bottom-bar">
	<div class="bottom-bar-inner">
		<div class="bottom-bar-items social-share left">
			<span class="bottom-bar-item">Share : </span>
			<span class="bottom-bar-item bottom-bar-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($this->permalink()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow">Facebook</a></span>
			<span class="bottom-bar-item bottom-bar-x"><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($this->permalink()); ?>&text=<?php echo urlencode($this->title()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow">X</a></span>
			<span class="bottom-bar-item bottom-bar-weibo"><a href="http://service.weibo.com/share/share.php?url=<?php echo urlencode($this->permalink()); ?>&amp;title=<?php echo urlencode($this->title()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow">Weibo</a></span>
			<span class="bottom-bar-item bottom-bar-qrcode"><a href="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo urlencode($this->permalink()); ?>" target="_blank" rel="nofollow">QR code</a></span>
		</div>
		<div class="bottom-bar-items right">
			<span class="bottom-bar-item"><?php theNext($this); ?></span>
			<span class="bottom-bar-item"><?php thePrev($this); ?></span>
			<span class="bottom-bar-item"><a href="#footer">↓</a></span>
			<span class="bottom-bar-item"><a href="#">↑</a></span>
		</div>
	</div>
</div>

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
							<?php if (array_key_exists('book',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-book" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('game',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-game" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('note',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-note" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('chat',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-chat" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('code',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-code" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('image',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-image" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('web',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-web" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('link',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-link" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('design',$relatedPosts->___fields())): ?>
							<div class="item-meta-ico bg-ico-design" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('lock',$relatedPosts->___fields())): ?>
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
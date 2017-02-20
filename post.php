<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="main-content post-page" itemscope itemtype="http://schema.org/Article">
	<div class="post-header">
		<h1 class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</h1>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> with <a href="#comments"><?php $this->commentsNum(_t(' 0 comment'), _t(' 1 comment'), _t(' %d comments')); ?></a>
		</div>
	</div>
	<div id="post-content" class="post-content" itemprop="articleBody">
        <p class="post-tags">
            <?php $this->tags(' ', true, ''); ?>
        </p>
		<?php $this->content(); ?>
		<p class="post-info">
<?php $this->trackback(); ?>
			本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可<br>本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名<br>最后编辑时间为: <?php echo date('M j, Y \\a\t h:i a' , $this->modified); ?>
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
							<?php if (array_key_exists('book',unserialize($this->___fields()))): ?>
							<?php $postType = 'book'; ?>
							<?php elseif (array_key_exists('game',unserialize($this->___fields()))): ?>
							<? $postType = 'game'; ?>
							<?php elseif (array_key_exists('note',unserialize($this->___fields()))): ?>
							<? $postType = 'note'; ?>
							<?php elseif (array_key_exists('chat',unserialize($this->___fields()))): ?>
							<? $postType = 'chat'; ?>
							<?php elseif (array_key_exists('code',unserialize($this->___fields()))): ?>
							<? $postType = 'code'; ?>
							<?php elseif (array_key_exists('image',unserialize($this->___fields()))): ?>
							<? $postType = 'image'; ?>
							<?php elseif (array_key_exists('web',unserialize($this->___fields()))): ?>
							<? $postType = 'web'; ?>
							<?php elseif (array_key_exists('link',unserialize($this->___fields()))): ?>
							<? $postType = 'link'; ?>
							<?php elseif (array_key_exists('design',unserialize($this->___fields()))): ?>
							<? $postType = 'design'; ?>
							<?php elseif (array_key_exists('lock',unserialize($this->___fields()))): ?>
							<? $postType = 'lock'; ?>
							<?php else : ?>
							<?php if ($this->template !== NULL) { $postType = $this->template; } ?>
							<?php endif; ?>
							<?php if (isset($postType)): ?>
							<div class="item-meta-ico bg-ico-<?php _e($postType); ?>"></div>
							<?php unset($postType); endif; ?>
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
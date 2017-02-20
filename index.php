<?php
/**
 * Pinghsu是一款以前端性能优化为出发点而制作的Typecho主题，同时又兼顾设计美学和视觉传达。主题命名取自作者姓名和其女朋友姓名的最后一个字的港式英文，挣扎于Hsuping还是Pinghsu，最后取为Pinghsu，意为一切都是Ping先Hsu后，即系要听女朋友的话。
 *
 * @package Pinghsu Theme
 * @author Chakhsu Lau
 * @version 1.1.0
 * @link https://www.linpx.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content index-page clearfix">
	<div class="post-lists">
		<div class="post-lists-body">
		<?php while($this->next()): ?>
			<div class="post-list-item">
				<div class="post-list-item-container">
					<?php if (isset($this->thumb) && ($this->thumb !== "unknown")) : ?>
					<?php $thumb = $this->thumb; ?>
					<?php elseif (array_key_exists('thumb',unserialize($this->___fields()))) : ?>
					<?php $thumb = $this->fields->thumb; ?>
					<?php else : ?>
					<?php $thumb = showThumb($this,null,true); ?>
					<?php endif; ?>
					<?php if (!empty($thumb)) : ?>
						<a href="<?php $this->permalink() ?>" class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-orange<?php endif; ?><?php endif; ?>" style="background-image:url(<?php echo($thumb); ?>);">
							<dir class="item-desc">
								<?php $this->excerpt(75, '...'); ?>
							</dir>
						</a>
					<?php endif; ?>
					<div class="item-slant reverse-slant <<?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-orange<?php endif; ?><?php endif; ?>"></div>
					<div class="item-slant"></div>
					<div class="item-label">
						<div class="item-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
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
							<div class="item-meta-cat"><?php $this->category(''); ?></div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
	<div class="lists-navigator clearfix">
        <?php $this->pageNav('←','→','2','...'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>
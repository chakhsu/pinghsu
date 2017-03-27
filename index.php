<?php
/**
 * Pinghsu是一款以前端性能优化为出发点而制作的Typecho主题，同时又兼顾设计美学和视觉传达。主题命名取自作者姓名和其女朋友姓名的最后一个字的港式英文，挣扎于Hsuping还是Pinghsu，最后取为Pinghsu，意为一切都是Ping先Hsu后，即系要听女朋友的话。
 *
 * @package Pinghsu Theme
 * @author Chakhsu Lau
 * @version 1.5.4
 * @link https://www.linpx.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content index-page clearfix <?php if ($this->options->postListSwitch == 'oneList'): ?>onelist-page<?php endif; ?>">
	<div class="post-lists">
		<div class="post-lists-body">
		<?php while($this->next()): ?>
			<?php if ($this->options->postListSwitch == 'threeList'): ?>
			<div class="post-list-item">
				<div class="post-list-item-container">
					<?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
					<div class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
            <?php else : ?>
            <?php $thumb = showThumb($this,null,true);?>
            <?php if(!empty($thumb)):?>
            <div class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php echo $thumb;?>);"></div>
        	<?php else : ?>
            <div class="item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
            <?php endif; ?>
					<?php endif; ?>
					<a href="<?php $this->permalink() ?>">
	                	<div class="item-desc">
							<p><?php $this->excerpt(75, '...');?></p>
						</div>
					</a>
					<div class="item-slant reverse-slant <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>"></div>
					<div class="item-slant"></div>
					<div class="item-label">
						<div class="item-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></div>
						<div class="item-meta clearfix">
							<?php if (array_key_exists('book',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-book" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('game',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-game" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('note',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-note" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('chat',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-chat" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('code',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-code" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('image',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-image" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('web',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-web" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('link',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-link" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('design',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-design" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('lock',unserialize($this->___fields()))): ?>
							<div class="item-meta-ico bg-ico-lock" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php else : ?>
							<div class="item-meta-ico bg-ico-<?php echo randBgIco(); ?>" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
                            <?php endif; ?>
							<div class="item-meta-cat"><?php $this->category(''); ?></div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if ($this->options->postListSwitch == 'oneList'): ?>
			<div class="post-onelist-item">
				<div class="post-onelist-item-container">
					<a href="<?php $this->permalink(); ?>">
					<?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
						<div class="onelist-item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
            <?php else : ?>
            <?php $thumb = showThumb($this,null,true);?>
            <?php if(!empty($thumb)):?>
            	<div class="onelist-item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php echo $thumb;?>);"></div>
        	<?php else : ?>
        		<div class="onelist-item-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
            <?php endif; ?>
					<?php endif; ?>
					</a>
					<div class="onelist-item-info">
						<div class="item-title">
							<a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
						</div>
						<div class="item-meta">
							<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> Published on <?php $this->date('M j, Y'); ?></time> in <?php $this->category(''); ?> </a>
						</div>
						<div class="item-meta-hr <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>"></div>
						<div class="item-content">
							<p><?php $this->excerpt(150, '...');?></p>
						</div>
						<div class="item-readmore">
							<a href="<?php $this->permalink(); ?>"> Continue Reading → </a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	</div>
	<div class="lists-navigator clearfix">
    <?php $this->pageNav('←','→','2','...'); ?>
  </div>
</div>

<?php $this->need('footer.php'); ?>
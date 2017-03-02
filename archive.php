<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main-content common-page clearfix">
    <div class="common-item">
        <div class="common-title">
            <?php $this->archiveTitle(array(
		        'category'  =>  _t('Category : %s'),
		        'search'    =>  _t('Search : %s'),
		        'tag'       =>  _t('Tag : %s'),
		        'author'    =>  _t('Author : %s'),
		        'date'      =>  _t('Date : %s')
		    ), '', ''); ?>
        </div>
        <div class="post-lists">
			<div class="post-lists-body">
				<?php if ($this->have()): ?>
				<?php while($this->next()): ?>
				<div class="post-list-item">
					<div class="post-list-item-container <?php if ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
						<div class="item-label <?php if ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
							<div class="item-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
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
								<div class="item-meta-date"> <?php $this->date('M j, Y'); ?> </div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else: ?>
                <div class="post-list-item"><?php _e('没有找到内容,请换别的关键字进行检索'); ?></div>
		        <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="lists-navigator clearfix">
        <?php $this->pageNav('←','→'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>
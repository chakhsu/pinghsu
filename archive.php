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
					<div class="post-list-item-container <?php if ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
						<div class="item-label <?php if ($this->options->colorBgPosts == 'customColor'): ?><?php if (isset($this->___fields()['green'])): ?> bg-green<?php elseif (isset($this->___fields()['red'])): ?> bg-red<?php elseif (isset($this->___fields()['yellow'])): ?> bg-yellow<?php elseif (isset($this->___fields()['blue'])): ?> bg-blue<?php elseif (isset($this->___fields()['purple'])): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
							<div class="item-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
							<div class="item-meta clearfix">
								<?php if (isset($this->___fields()['book'])): ?>
								<div class="item-meta-ico bg-ico-book" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['game'])): ?>
								<div class="item-meta-ico bg-ico-game" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['note'])): ?>
								<div class="item-meta-ico bg-ico-note" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['chat'])): ?>
								<div class="item-meta-ico bg-ico-chat" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['code'])): ?>
								<div class="item-meta-ico bg-ico-code" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['image'])): ?>
								<div class="item-meta-ico bg-ico-image" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['web'])): ?>
								<div class="item-meta-ico bg-ico-web" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['link'])): ?>
								<div class="item-meta-ico bg-ico-link" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['design'])): ?>
								<div class="item-meta-ico bg-ico-design" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
								<?php elseif (isset($this->___fields()['lock'])): ?>
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
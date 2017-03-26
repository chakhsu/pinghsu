<?php
/**
* Template Page of Search
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content page-page">
    <div class="search-page">
        <form id="search" class="search-form" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <span class="search-box clearfix">
                <input type="text" id="input" class="input" name="s" required="true" placeholder="Search..." maxlength="30" autocomplete="off">
                <button type="submit" class="spsubmit"><i class="icon-search"></i></button>
            </span>
        </form>
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=1&desc=1&limit=50')->to($tags); ?>
        <div class="search-tags">
        <?php parseContent($this); ?>
        <?php if($tags->have()): ?>
            <?php while ($tags->next()): ?>
            <a href="<?php $tags->permalink(); ?>" class="<?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-white<?php elseif ($this->options->colorBgPosts == 'customColor'): ?>text-white bg-<?php echo randBgColor(); ?><?php endif;?>"># <?php $tags->name(); ?>(<?php $tags->count(); ?>)</a>
            <?php endwhile; ?>
        <?php else: ?>
            <p> Nothing here ! </p>
        <?php endif; ?>
        <div class="search-tags-hr <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?> bg-<?php echo randBgColor(); ?><?php endif; ?>"></div>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>
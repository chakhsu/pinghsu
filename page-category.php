<?php
/**
* Template Page of Categorys Archives
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content archive-page clearfix">
	<?php $this->widget('Widget_Metas_Category_List')->to($categories);?>
    <?php if ($categories->have()): ?>
        <?php while($categories->next()): ?>
            <div class="categories-item">
                <div class="categories-title">
                    <a href="<?php $categories->permalink();?>"><?php $categories->name();?></a><span> ：<?php $categories->count();?></span>
                </div>
                <?php $catlist =$this->widget('Widget_Archive@categories_'.$categories->mid, 'pageSize=10000&type=category', 'mid='.$categories->mid); ?>
                <?php if($catlist->have()): ?>
            		<div class="post-lists">
						<div class="post-lists-body">
						<?php while($catlist->next()): ?>
							<div class="post-list-item">
								<div class="post-list-item-container">
									<div class="item-label">
										<div class="item-title"><a href="<?php $catlist->permalink() ?>"><?php $catlist->title() ?></a></div>
										<div class="item-meta clearfix">
											<div class="item-meta-date"> <?php $catlist->date('M j, Y'); ?> </div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					</div>
            	<?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php $this->need('footer.php'); ?>
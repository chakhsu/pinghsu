<?php
/**
* Template Page of Timeline Archives
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="main-content archive-page clearfix">
	<?php
    $stat = Typecho_Widget::widget('Widget_Stat');
    $this->widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    $output = '<div class="categorys-item">';
    while($archives->next()){
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
        $y=$year; $m=$mon;
        if ($year > $year_tmp || $mon > $mon_tmp) {
            $output .= '</div></div>';
        }
        if ($year != $year_tmp || $mon != $mon_tmp) {
			 $year = $year_tmp;
			 $mon = $mon_tmp;
			 $output .= '<div class="categorys-title">'.date('M Y',$archives->created).'</div><div class="post-lists"><div class="post-lists-body">';
        }
        $output .= '<div class="post-list-item"><div class="post-list-item-container"><div class="item-label"><div class="item-title"><a href="'.$archives->permalink .'">'. $archives->title .'</a></div><div class="item-meta clearfix"><div class="item-meta-date"> '.date('M j, Y',$archives->created).' </div></div></div></div></div>';
    }
    $output .= '</div></div></div>';
    echo $output;
    ?>
</div>

<?php $this->need('footer.php'); ?>
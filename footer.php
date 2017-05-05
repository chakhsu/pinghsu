<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer id="footer" class="footer <?php if (array_key_exists('archive',unserialize($this->___fields()))): ?>bg-white<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'defaultColor')): ?>bg-white<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'customColor')): ?>bg-grey<?php elseif($this->is('single')): ?>bg-white<?php endif; ?>">
	<div class="footer-social">
		<div class="footer-container clearfix">
			<div class="social-list">
			<?php if ($this->options->socialweibo): ?>
				<a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>">WEIBO</a>
			<?php endif; ?>
            <?php if ($this->options->socialzhihu): ?>
                <a class="social zhihu" target="blank" href="<?php $this->options->socialzhihu(); ?>">ZHIHU</a>
            <?php endif; ?>
                <a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">RSS</a>
			<?php if ($this->options->socialgithub): ?>
				<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">GITHUB</a>
			<?php endif; ?>
			<?php if ($this->options->socialtwitter): ?>
				<a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>">TWITTER</a>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="footer-meta">
		<div class="footer-container">
			<div class="meta-item meta-copyright">
				<div class="meta-copyright-info">
                    <a href="<?php $this->options->siteUrl(); ?>" class="info-logo">
                        <?php if($this->options->footerLogoUrl): ?>
                        <img src="<?php $this->options->footerLogoUrl();?>" alt="<?php $this->options->title() ?>" />
                        <?php else : ?>
                        <?php $this->options->title() ?>
                        <?php endif; ?>
                    </a>
					<div class="info-text">
                    	<p>Theme is <a href="https://github.com/chakhsu/pinghsu" target="_blank">Pinghsu</a> by <a href="https://www.linpx.com/" target="_blank">Chakhsu</a></p>
						<p>Powered by <a href="http://www.typecho.org" target="_blank" rel="nofollow">Typecho</a></p>
						<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
					</div>
				</div>
			</div>
			<div class="meta-item meta-posts">
				<h3 class="meta-title">RECENT POSTS</h3>
                <?php getRecentPosts($this,8); ?>
			</div>
            <div class="meta-item meta-comments">
                <h3 class="meta-title">RECENT COMMENTS</h3>
                <?php $this->widget('Widget_Comments_Recent','pageSize=8')->to($comments); ?>
                <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?> : <?php $comments->excerpt(25, '...'); ?></a></li>
                <?php endwhile; ?>
            </div>
		</div>
	</div>
</footer>

<?php if (($this->options->tableOfContents == 'able') && ($this->is('post'))): ?>
<div id="directory-content" class="directory-content">
    <div id="directory"></div>
</div>
<script>
var postDirectoryBuild = function() {
    var postChildren = function children(childNodes, reg) {
        var result = [],
            isReg = typeof reg === 'object',
            isStr = typeof reg === 'string',
            node, i, len;
        for (i = 0, len = childNodes.length; i < len; i++) {
            node = childNodes[i];
            if ((node.nodeType === 1 || node.nodeType === 9) &&
                (!reg ||
                isReg && reg.test(node.tagName.toLowerCase()) ||
                isStr && node.tagName.toLowerCase() === reg)) {
                result.push(node);
            }
        }
        return result;
    },
    createPostDirectory = function(article, directory, isDirNum) {
        var contentArr = [],
            titleId = [],
            levelArr, root, level,
            currentList, list, li, link, i, len;
        levelArr = (function(article, contentArr, titleId) {
            var titleElem = postChildren(article.childNodes, /^h\d$/),
                levelArr = [],
                lastNum = 1,
                lastRevNum = 1,
                count = 0,
                guid = 1,
                id = 'directory' + (Math.random() + '').replace(/\D/, ''),
                lastRevNum, num, elem;
            while (titleElem.length) {
                elem = titleElem.shift();
                contentArr.push(elem.innerHTML);
                num = +elem.tagName.match(/\d/)[0];
                if (num > lastNum) {
                    levelArr.push(1);
                    lastRevNum += 1;
                } else if (num === lastRevNum ||
                    num > lastRevNum && num <= lastNum) {
                    levelArr.push(0);
                    lastRevNum = lastRevNum;
                } else if (num < lastRevNum) {
                    levelArr.push(num - lastRevNum);
                    lastRevNum = num;
                }
                count += levelArr[levelArr.length - 1];
                lastNum = num;
                elem.id = elem.id || (id + guid++);
                titleId.push(elem.id);
            }
            if (count !== 0 && levelArr[0] === 1) levelArr[0] = 0;

            return levelArr;
        })(article, contentArr, titleId);
        currentList = root = document.createElement('ul');
        dirNum = [0];
        for (i = 0, len = levelArr.length; i < len; i++) {
            level = levelArr[i];
            if (level === 1) {
                list = document.createElement('ul');
                if (!currentList.lastElementChild) {
                    currentList.appendChild(document.createElement('li'));
                }
                currentList.lastElementChild.appendChild(list);
                currentList = list;
                dirNum.push(0);
            } else if (level < 0) {
                level *= 2;
                while (level++) {
                    if (level % 2) dirNum.pop();
                    currentList = currentList.parentNode;
                }
            }
            dirNum[dirNum.length - 1]++;
            li = document.createElement('li');
            link = document.createElement('a');
            link.href = '#' + titleId[i];
            link.innerHTML = !isDirNum ? contentArr[i] :
                dirNum.join('.') + ' ' + contentArr[i] ;
            li.appendChild(link);
            currentList.appendChild(li);
        }
        directory.appendChild(root);
    };
    createPostDirectory(document.getElementById('post-content'),document.getElementById('directory'), true);
};
postDirectoryBuild();
</script>
<?php endif; ?>
<?php if(($this->is('single')) && ($this->allow('comment'))): ?>
<script>
(function () {
    window.TypechoComment = {
        dom : function (id) {
            return document.getElementById(id);
        },
        create : function (tag, attr) {
            var el = document.createElement(tag);
            for (var key in attr) {
                el.setAttribute(key, attr[key]);
            }
            return el;
        },
        reply : function (cid, coid) {
            var comment = this.dom(cid), parent = comment.parentNode,
                response = this.dom('<?php echo $this->respondId(); ?>'),
                input = this.dom('comment-parent'),
                form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0],
                textarea = response.getElementsByTagName('textarea')[0];
            if (null == input) {
                input = this.create('input', {
                    'type' : 'hidden',
                    'name' : 'parent',
                    'id'   : 'comment-parent'
                });

                form.appendChild(input);
            }
            input.setAttribute('value', coid);
            if (null == this.dom('comment-form-place-holder')) {
                var holder = this.create('div', {
                    'id' : 'comment-form-place-holder'
                });

                response.parentNode.insertBefore(holder, response);
            }
            comment.appendChild(response);
            this.dom('cancel-comment-reply-link').style.display = '';
            if (null != textarea && 'text' == textarea.name) {
                textarea.focus();
            }
            return false;
        },
        cancelReply : function () {
            var response = this.dom('<?php echo $this->respondId(); ?>'),
            holder = this.dom('comment-form-place-holder'),
            input = this.dom('comment-parent');
            if (null != input) {
                input.parentNode.removeChild(input);
            }
            if (null == holder) {
                return true;
            }
            this.dom('cancel-comment-reply-link').style.display = 'none';
            holder.parentNode.insertBefore(response, holder);
            return false;
        }
    };
})();
<?php if(!$this->user->hasLogin()): ?>
function getCommentCookie(name){
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return unescape(decodeURI(arr[2]));
    else
        return null;
}
function addCommentInputValue(){
    document.getElementById('author').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_author');
    document.getElementById('mail').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_mail');
    document.getElementById('url').value = getCommentCookie('<?php echo md5($this->request->getUrlPrefix()); ?>__typecho_remember_url');
}
addCommentInputValue();
<?php endif; ?>
</script>
<?php endif; ?>
<?php $this->footer(); ?>
<script src="//cdn.bootcss.com/headroom/0.9.1/headroom.min.js"></script>
<?php if ($this->options->useHighline == 'able'): ?>
<script src="//cdn.bootcss.com/highlight.js/9.10.0/highlight.min.js"></script>
<?php endif; ?>
<?php if ($this->options->pjaxSet == 'able'): ?>
<script src="<?php $this->options->themeUrl('js/instantclick.min.js?v20140319'); ?>"></script>
<?php endif; ?>
<?php if ($this->options->fastClickSet == 'able'): ?>
<script src="//cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<?php endif; ?>
<script>
<?php if (($this->options->tableOfContents == 'able') && ($this->is('post'))): ?>
var postDirectory = new Headroom(document.getElementById("directory-content"), {
    tolerance: 0,
    <?php if ($this->options->postshowthumb == 'able'): ?>
    offset : 280,<?php else: ?>
    offset : 90,<?php endif; ?>
    classes: {
        initial: "initial",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postDirectory.init();
<?php endif; ?>
<?php if($this->is('post')): ?>
var postSharer = new Headroom(document.getElementById("post-bottom-bar"), {
    tolerance: 0,
    offset : 70,
    classes: {
        initial: "animated",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postSharer.init();
<?php endif; ?>
var header = new Headroom(document.getElementById("header"), {
    tolerance: 0,
    offset : 70,
    classes: {
      initial: "animated",
      pinned: "slideDown",
      unpinned: "slideUp"
    }
});
header.init();
<?php if (($this->options->pjaxSet == 'disable') && ($this->options->useHighline == 'able') && ($this->is('post'))): ?>
hljs.initHighlightingOnLoad();
<?php endif; ?>
<?php if ($this->options->fastClickSet == 'able'): ?>
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
}
<?php endif; ?>
</script>
<?php if ($this->options->useMathjax == 'able'): ?>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
    showProcessingMessages: false,
    messageStyle: "none",
    extensions: ["tex2jax.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: {
        inlineMath: [ ['$','$'], ["\\(","\\)"] ],
        displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
        skipTags: ['script', 'noscript', 'style', 'textarea', 'pre','code','a'],
        ignoreClass:"comment-content"
    },
    "HTML-CSS": {
        availableFonts: ["STIX","TeX"],
        showMathMenu: false
    }
});
MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
</script>
<script src="//cdn.bootcss.com/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<?php endif; ?>
<?php if($this->options->GoogleAnalytics): ?>
<script>
<?php $this->options->GoogleAnalytics(); ?>
</script>
<?php endif; ?>
<?php if ($this->options->pjaxSet == 'able'): ?>
<script data-no-instant>
InstantClick.on('change', function(isInitialLoad){
    <?php if ($this->options->useHighline == 'able'): ?>
    var blocks = document.querySelectorAll('pre code');
    for (var i = 0; i < blocks.length; i++) {
        hljs.highlightBlock(blocks[i]);
    }
    <?php endif; ?>

    if (isInitialLoad === false) {
    <?php if($this->options->GoogleAnalytics): ?>
        if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
    <?php endif; ?>
    <?php if($this->options->useMathjax == 'able'): ?>
        if (typeof MathJax !== 'undefined'){MathJax.Hub.Queue(["Typeset",MathJax.Hub]);}
    <?php endif; ?>
    }
});
InstantClick.init('mousedown');
</script>
<?php endif; ?>
</body>
</html>
<?php if ($this->options->htmlCompress == 'able'): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>
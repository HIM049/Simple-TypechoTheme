<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">

    <!-- 添加评论 -->
    <div class="comments-addnew">
    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php echo '<a id="cancel-comment-reply-link" href="' . $this->permalink . '#' . $this->respondId . '" rel="nofollow"' . ($this->request->filter('int')->replyTo ? '' : ' style="display:none"') . ' onclick="return TypechoComment.cancelReply();">'._t('取消回复').'</a>'; ?>
            </div>
    
    	    <h3 id="response"><?php _e('添加新评论'); ?></h3>
    	    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">

                <?php if($this->user->hasLogin()): ?>

                    <!-- 如果已登录 -->
    		        <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                    <p><textarea rows="8" cols="50" name="text" id="textarea" class="comment-textarea" placeholder="评论内容（管理员审核后显示）" required ><?php $this->remember('text'); ?></textarea></p>
                    <?php else: ?>

                    <!-- 如果未登录 -->
    		        <p><textarea rows="8" cols="50" name="text" id="textarea" class="comment-textarea" placeholder="评论内容（管理员审核后显示）" required ><?php $this->remember('text'); ?></textarea></p>            
    		        <p><input type="text" name="author" id="author" class="comment-text" placeholder="您的昵称" value="<?php $this->remember('author'); ?>" required /></p>
    		        <p><input type="email" name="mail" id="mail" class="comment-text" placeholder="您的邮箱" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> /></p>
                <?php endif; ?>
    		    <p><button type="submit" class="comment-submit"><?php _e('提交评论'); ?></button></p>
    	    </form>
        </div>
    </div>
        <!-- 调取评论列表 -->
    <div class="comments-commentlist">
        <?php if($this->options->plugin('TeComment')->commentAjaxLoad): ?>
                <div id="comment-ajax-list" data-cid="<?php $this->cid();?>" data-num="<?php $this->commentsNum();?>" data-comment-page="<?php echo $this->request->commentPage;?>"></div>
                <?php else: ?>
                <?php $this->comments()->to($comments); ?>
                <?php if ($comments->have()): ?>
                    <?php $comments->listComments(); ?>
                    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php else: ?>
                <h3><?php _e('评论已关闭'); ?></h3>
        <?php endif; ?>
    </div>
</div>

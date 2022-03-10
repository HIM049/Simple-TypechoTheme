<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function art_count($cid) {
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    echo mb_strlen($rs['text'], 'UTF-8');
}
/**
 * 重写评论显示函数
 */
function threadedComments($comments, $options){
	$html = TeComment_Plugin::parseCommentHtml($comments, $options);
	
	$children = '';
	if ($comments->children) {
		ob_start();
        $comments->threadedComments();
		$children = ob_get_contents();
		ob_end_clean();
    }
	$html = str_replace('>{children}<','>'.$children.'<',$html);
	echo $html;
}

/**
 * 文章封面图处理
 */
function thumb($obj) {
	$attach = $obj->attachments(1)->attachment;
	if(isset($attach->isImage) && $attach->isImage == 1){
		$thumb = $attach->url;
	}
	else{$thumb = "https://blog.him.usla.cn/usr/themes/simple/img/404-Unfind.png";}
	return $thumb;
}
<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>

<header class="navbar">
    <div class="hd-con">
        <a href="<?php $this->options->siteUrl(); ?>" class="hd-title">
            <?php $this->options->title() ?>
        </a>
        <nav class="hd-nav">
            <ul>
                <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                <li><?php $this->widget('Widget_Contents_Page_List') ->parse('<a href="{permalink}">{title}</a>'); ?></li>
            </ul>
        </nav>
    </div>
</header>
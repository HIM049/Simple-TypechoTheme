<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<head>
   <?php $this->need('./components/base/head.php'); ?>
   <link rel="stylesheet" href="<?php $this->options->themeUrl('/components/css/post.css'); ?>">
   <link rel="stylesheet" href="<?php $this->options->themeUrl('/components/css/comments.css'); ?>">
   <link rel="stylesheet" href="<?php $this->options->themeUrl('/components/css/sidebar_article.css'); ?>">
   <link rel="stylesheet" href="<?php $this->options->themeUrl('/components/css/article_style.css'); ?>">
</head>
<body>
    <?php $this->need('./components/base/navbar.php'); ?>
    <div class="post-box">
        <div class="post">
            <section class="post-body">
                <div class="post-card">
                    <img class="post-TopImg" src="<?php echo thumb($this); ?>"/>
                    <h1 class="post-title"><?php $this->title() ?></h1>
                    <div class="post-out">
                        <div class="post-out-div"><?php $this->content(); ?></div>
                    </div>
                </div>
            </section>
            <div class="commnts-box">
                <div class="commnts-box-background">
                    <?php $this->need('./components/base/comments.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->need('./components/base/footer.php'); ?>
</body>
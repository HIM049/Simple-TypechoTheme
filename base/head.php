<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang='zh-cn'>

<?php $this->header(); ?>
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<link rel="icon" href="<?php $this->options->themeUrl('./img/favicon.ico'); ?>"/>
<!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/bootstrap.min.css'); ?>"> -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/public.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/sidebar.css'); ?>">
<script src="<?php $this->options->themeUrl('/js/jquery-3.5.1.min.js'); ?>"></script>
<script str="<?php $this->options->themeUrl('/js/bootstrap.min.js'); ?>"></script>

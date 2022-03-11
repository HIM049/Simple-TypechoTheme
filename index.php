<?php
/**
 * 由HIM049制作的极简主题
 * 
 * @package HIM-light 
 * @author HIM049
 * @version 0.1
 * @link https://blog.him.usla.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<!DOCTYPE HTML>
<head>
   <?php $this->need('./base/head.php'); ?>
   <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/pagesCSS/index_pure.css'); ?>">
</head>
<body>
   <?php $this->need('./base/navbar.php'); ?>
         <section class="banner">
            <div class="bn-div">
               <div>
                  <h1><?php $this->options->title() ?></h1>
                  <p><?php $this->options->description() ?></p>
               </div>
            </div>
         </section>

   <div class="index-body">
      <section class="list">
            <?php while($this->next()): ?>
            <a href="<?php $this->permalink() ?>">
               <div class="list-article">
                  <div class="index-PostTopImg-div">
                     <img src="<?php echo thumb($this); ?>"/>
                  </div>
                  <h2><?php $this->title() ?></h2>
                  <p><?php $this->date('Y-m-d'); ?></p>
               </div>
            </a>
            <?php endwhile; ?>
         <div class="list-nav"><?php $this->pageNav('←','→','2','...'); ?></div>
      </section>
      <aside class="sidebar">
         <div class="search_div">
            <form method="post" action="">
               <div class="search_div_out_div">
                  <div>
                     <input type="text" name="s" class="search_text" /> 
                     <button type="submit" class="search_submit">搜索</button>
                  </div>
               </div>
            </form>
         </div>
         <?php $this->need('./base/sidebar.php'); ?>
      </aside>
   </div>
   <div class="index-space"></div>
   <?php $this->need('./base/footer.php'); ?>
</body>
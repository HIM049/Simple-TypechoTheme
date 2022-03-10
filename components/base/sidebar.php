    <div class="sidebar-classify">
        <h2>分类</h2>
        <ul>
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li><a href="{permalink}"><p>{name}</p><p>（{count}）</p></a></li>'); 
            ?>
        </ul>
    </div>
    <div class="sidebar-tag">
        <div class="sidebar-tag-h2"><h2>标签</h2></div>
        <div class="sidebar-tags">
            <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1')->to($tags); ?>
            <?php if($tags->have()) {while ($tags->next()): ?>
                <a href="<?php $tags->permalink();?>"><span class="sidebar-tag-tags">#<?php $tags->name(); ?>#</span></a>
            <?php endwhile;}?>
        </div>
    </div>
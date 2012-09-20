<div class="overview-page">

    <div class="secnav grid_5 alpha">
        <h5>Exlpore themes</h5>
        <?php echo exhibit_builder_page_nav(); ?>
    </div>


	<div class="grid_7 omega">

        <h5><?php echo link_to_exhibit(); ?></h5>

        <h1><?php echo exhibit_page('title'); ?></h1>
		<?php if($text = exhibit_builder_page_text(1)):?>
    	<div class="exhibit-text">
    	    <?php echo $text; ?>
    	</div>
    	<?php endif; ?>

    	<h5>Listen to songs from this theme</h5>

    	 <?php
$items = get_items();
set_items_for_loop($items);
while(loop_items()):
?>
            <?php echo link_to_item(item('Dublin Core', 'Title'), array('class'=>'song')); ?>
            <?php if (item_has_thumbnail()): ?>
        <div class="item-img">
            <?php echo link_to_item(item_square_thumbnail()); ?>
        </div>
        <?php endif; ?>

        <?php if ($description = item('Dublin Core', 'Description', array('snippet'=>250))): ?>
        <div class="item-description">
            <?php echo $description; ?>
        </div>
        <?php endif; ?>

        <?php endwhile; ?>
    	
	</div>

</div>

<div class="layout--dev">
	
	<?php if($page->page != 'index'): ?>
		<a href="<?= P::url('index') ?>">Back to prototype index</a>
	<?php endif; ?>

    <?php $page->section('main'); ?>
    
</div>

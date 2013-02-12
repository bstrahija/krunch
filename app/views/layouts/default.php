<?php echo View::make('layouts.partial.header'); ?>

<?php echo (isset($content)) ? $content : null; ?>

<?php echo View::make('layouts.partial.footer'); ?>

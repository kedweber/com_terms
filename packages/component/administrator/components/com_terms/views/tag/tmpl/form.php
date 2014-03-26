<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.modal'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="" class="form-horizontal -koowa-form" method="post">
	<div class="row-fluid">
		<div class="span8">
			<fieldset>
				<legend><?= @text('CONTENT'); ?></legend>
				<div class="control-group">
					<label class="control-label"><?= @text('TITLE'); ?></label>
					<div class="controls">
						<input class="span12 required" type="text" name="title" value="<?= @escape($tag->title); ?>" placeholder="<?= @text('TITLE'); ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?= @text('SLUG'); ?></label>
					<div class="controls">
						<input class="span12" type="text" name="slug" value="<?= $tag->slug; ?>" placeholder="<?= @text('SLUG'); ?>" />
					</div>
				</div>
			</fieldset>
		</div>
		<div class="span4">
			<fieldset>
				<legend><?= @text('DETAILS'); ?></legend>
				<div class="control-group">
					<label class="control-label"><?= @text('Translated'); ?></label>
					<div class="controls">
						<?= @helper('select.booleanlist', array('name' => 'translated', 'selected' => $tag->translated)); ?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
</form>
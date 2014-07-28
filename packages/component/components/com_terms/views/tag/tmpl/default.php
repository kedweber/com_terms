<? defined('KOOWA') or die; ?>

<module position="banner" prepend="1">
	<div class="row">
		<?= @helper('com://site/articles.template.helper.random.image', array('container' => 'random-images', 'width' => 1300, 'height' => 370)); ?>
	</div>
</module>

<div class="row makundi">
	<div class="col-xs-12">
		<div class="row">
			<hgroup>
				<div class="col-xs-12 col-md-8 blue">
					<h3><?= $tag->title; ?></h3>
				</div>
				<div class="col-xs-12 col-md-4 green">
					<h3>Tag</h3>
				</div>
			</hgroup>
		</div>
	</div>

	<div class="col-xs-12">
		<?= @service('com://site/articles.controller.article')->tag_id($tag->id)->display(); ?>
	</div>
</div>
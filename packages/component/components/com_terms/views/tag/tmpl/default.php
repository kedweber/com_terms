<? defined('KOOWA') or die; ?>

<?= @service('com://site/articles.controller.article')->tag($tag->id)->display(); ?>
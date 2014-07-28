# com_terms

## Description

This component replaces Joomla 3 tags and adds tag functionality to Joomla 2.5. Note that tags are saved multilingually.
One can translate tags. If in one language a tag is chosen, the same tag is assigned to each translation in the proper
language.

This component was developed by [Moyo Web Architects](http://moyoweb.nl).

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* Moyo Components
    * com_translations
    * com_moyo
    * com_taxonomy
    * com_articles

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "moyo/terms",
    "type": "vcs",
    "url": "https://github.com/cta-int/terms.git"
}
```

The require section should contain the following line:

```json
    "moyo/terms": "1.0.*",
```

Afterward, just run `composer update` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

## Usage

In the administrator, com_terms can be accessed through the main menu by choosing 'Components >> Terms'.  Tags have to be
managed by the content manager. He can add them and enter a translation if desired.

### Adding tags to content items

The content editor can assign tags to content items by adding them to an article in the article editor form.

Under the hood, this is achieved through the `com_taxonomy` component. As yet, there is no 'taggable' behavior, but
rather a piece of code that looks somewhat like this

```php
<?= @helper('com://admin/taxonomy.template.helper.listbox.taxonomies', array(
        'identifier' => 'com://admin/terms.model.tags',
        'name' => 'tags[]',
        'attribs' => array('multiple' => true, 'size' => 10, 'class' => 'select2-listbox'),
        'type' => 'tag',
        'relation' => 'ancestors'
    )); ?>
```

## Viewing articles by tag.

There is a frontend view that retrieves articles by tag. This view triggers a HMVC call to com_articles with a state 'tag'
added.
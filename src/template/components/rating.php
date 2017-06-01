<?php
/**
 * Eliasis module for WordPress plugins · WP Plugin Rating
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/WP_Plugin-Rating.git
 * @since      1.0.0
 */

use Eliasis\App\App,
    Eliasis\View\View,
    Eliasis\Module\Module;

$slug = trim(Module::WP_Plugin_Rating('folder'), App::DS);
?>

<div id="jst-stars">
   <a id="plugin-rating" href="<?= View::$data['plugin-url-review'] ?>/" title="<?= __('Rate plugin', 'eliasis-wp-plugin-rating') ?>" target="_blank">
      <div class="rating">

         <?php foreach (View::$data['stars'] as $star): ?>

            <span class="dashicons dashicons-star-<?= $star ?>"></span>
         
         <?php endforeach; ?>

      </div>
   </a>
</div>

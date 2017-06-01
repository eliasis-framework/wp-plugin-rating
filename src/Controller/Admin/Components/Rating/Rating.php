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

namespace App\Modules\WP_Plugin_Rating\Controller\Admin\Components\Rating;


use Eliasis\Module\Module,
    Eliasis\Controller\Controller;
    
/**
 * Image controller
 *
 * @since 1.0.0
 */
class Rating extends Controller {

    /**
     * Get plugin Rating.
     *
     * @param string $slug → WordPress plugin slug
     *
     * @since 1.0.0
     */
    public function getPluginRating($slug) {

        $rating = 5;

        $pluginsUrl = Module::WP_Plugin_Rating('url', 'wp-plugins');

        $url = $pluginsUrl . $slug . '/reviews/#new-post';
        
        $data['plugin-url-review'] = $url;

        if (Module::exists('WP_Plugin_Info')) {

            //$rating = '';
        }

        $data['stars'] = $this->prepareStars($rating);

        $this->render($data);
    }

    /**
     * Prepare states for each star.
     * 
     * @since 1.0.0
     *
     * @param float|int $rating → plugin rating 
     *
     * @return array $rating → state for the five stars
     */
    public function prepareStars($rating) {

        $stars = [];

        $fullStar = (int) floor($rating);

        $halfStar = (($rating - $fullStar) > 0) ? true : false;

        for ($i=0; $i < $fullStar; $i++) { 
            
            $stars[] = 'filled';
        }

        if ($halfStar) {

            $stars[] = 'half';
        }

        for ($i=0; $i < (5 - $fullStar); $i++) { 
            
            $stars[] = 'empty';
        }

        return array_reverse($stars);
    }

    /**
     * Renderizate admin page.
     *
     * @since 1.0.0
     *
     * @param array $data → data to render in the view
     */
    public function render($data) {

        $component = Module::WP_Plugin_Rating('path', 'components');

        $this->view->renderizate($component . 'rating', $data);
    }
}

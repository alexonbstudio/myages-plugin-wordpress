<?php
/*
Plugin Name: dates
Plugin URI: https://example.com/mon-plugin
Description: Put your age without always change your page or article always indicate the ages finally example (1) years to use is [ages born='Days/Month/Years']
Version: 1.0
Author: Alexon Balangue (WebJetClouds)
Author URI: https://webjet.Cloud
License: GPL2
*/
/*
require_once plugin_dir_path(__FILE__) . 'function_ages.php';

function mon_plugin_avec_ages() {
    $resultat = fonction_ages();
    return 'Résultat de la fonction ages : ' . $resultat;
}
add_shortcode('ages', 'mon_plugin_avec_ages');
*/
# exemple [dates now='Y']



function dates_shortcode($atts) {
    $now = $atts['now'];

    $now_date = date($now);
    if (!$now_date) {
        return 'Date current now. Utilisez le format "Y".';
    }

    $dates = date($now_date);

    return $dates;
}
add_shortcode('dates', 'dates_shortcode');


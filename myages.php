<?php
/*
Plugin Name: Ages automate (ages)
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
# exemple [ages born='24/04/1991']


function myages_shortcode($atts) {
    // Récupère la valeur de l'attribut 'born' du shortcode
    $born = $atts['born'];

    // Vérifie si la date de naissance est valide
    $born_date = DateTime::createFromFormat('d/m/Y', $born);
    if (!$born_date) {
        return 'Date de naissance invalide. Utilisez le format "jj/mm/aaaa".';
    }

    $current_date = new DateTime();
    $age = $current_date->diff($born_date)->y;

    return $age;
}

add_shortcode('ages', 'myages_shortcode');

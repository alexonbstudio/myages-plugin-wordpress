<?php
/* 
# first method
function age($data){
	$BirthdayDate = explode("/", $data); 
	$age_out = (date("md", date("U", mktime(0, 0, 0, $BirthdayDate[0], $BirthdayDate[1], $BirthdayDate[2]))) > date("md") ? ((date("Y") - $BirthdayDate[2]) - 1) : (date("Y") - $BirthdayDate[2]));		 	
	return $age_out;	
}
# second method
*/		
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


# exemple : echo age('24/04/1991');

?>
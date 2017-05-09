<?php 
/**
* Pega o slug da url no wordpress
* @param bool $echo Se for true, então ele imprime o resultado, se false ele retorna sem imprimir.
* @return string retorna o slug da página
*/
function the_slug($echo=true){
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if( $echo ) echo $slug;
    do_action('after_slug', $slug);
    return $slug;
}
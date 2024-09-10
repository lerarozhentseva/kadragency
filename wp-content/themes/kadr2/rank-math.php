<?php
add_filter( 'rank_math/frontend/title', function( $title ) {
    if((is_page(354) && get_query_var('paged') !== 0) || ($title === 'Инфоцентр - HR-агентство Кадр' && get_query_var('paged') !== 0)) {
        return $title  . ' ' . '- Страница' . ' '. get_query_var('paged');
    } else {
        return $title;
    }
});

add_filter( 'rank_math/frontend/description', function( $description ) {
    if((is_page(354) && get_query_var('paged') !== 0) || ($description === 'Узнавайте последние тренды, полезные статьи и рекомендации от ведущего кадрового агентства. Оптимизируйте процессы подбора и управления персоналом в вашей компании' && get_query_var('paged') !== 0)) {
        return $description . ' - Страница ' . get_query_var('paged');
    } else {
        return $description;
    }
});

?>
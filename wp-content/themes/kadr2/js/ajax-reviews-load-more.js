// jQuery(function($){
//     $('#reviews-load-more').click(function(){
//         $(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
//         var data = {
//             'action': 'reviews_load_more',
//             'query': true_posts,
//             'page' : current_page
//         };
//         $.ajax({
//             url:ajaxurl, // обработчик
//             data:data, // данные
//             type:'POST', // тип запроса
//             success:function(data){
//                 if( data ) {
//                     $('#reviews-load-more').text('ДРУГИЕ СТАТЬИ').before(data); // вставляем новые посты
//                     current_page++; // увеличиваем номер страницы на единицу
//                     if (current_page == max_pages) $("#reviews-load-more").remove(); // если последняя страница, удаляем кнопку
//                 } else {
//                     $('#reviews-load-more').remove(); // если мы дошли до последней страницы постов, скроем кнопку
//                 }
//                 $('.filter, .wrap_work').on('click', 'a', function(e){
//                     e.preventDefault();
//                 });
//             }
//         });
//     });
// });
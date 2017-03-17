// (function( $ ){
//     $.fn.hierarhyTab = function(options) {
//
//         var childLi = this.children('li');
//         var subLevelLi = childLi.children('ul li');
//         subLevelLi.hide();
//         childLi.on('click', function(event) {
//             event.stopPropagation();
//             if ($(this).children('ul') && $(this).children('ul').css('display') == 'none') {
//                 $(this).children('ul').show();
//             } else {
//                 $(this).children('ul').hide();
//             }
//         });
//        console.log(subLevelLi);
//         return this;
//     }
// })(jQuery);
//

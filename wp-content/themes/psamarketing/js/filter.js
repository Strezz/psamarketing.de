$('.filter-button').on('click', function() {
    $('.reviews-filter li').removeClass('active');
    $(this).parent('li').addClass('active'); // выделяем выбранную категорию
  
    var cat = $(this).attr('data-filter'); // определяем категорию
  
    if (cat == 'all') { // если all
      $('.review-slide').show(); // отображаем все позиции
    } else { // если не all
      $('.review-slide').hide(); // скрываем все позиции
      $('.review-slide[data-filter="' + cat + '"]').show(); // и отображаем позиции из соответствующей категории
    }
  });
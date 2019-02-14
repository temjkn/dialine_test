//оьображает политику конфиденциальности
$('.conflink').click(function(){
   $('.hidden-conf').css('display','block'); 
    $('.close-conf').click(function(){
         $('.hidden-conf').css('display','none');                  
    });
});

//запуск модального окна
$modal_stop = 0;
$('.body-wrap').mouseleave(function(){
    $modal_stop++;
    if($modal_stop<=1){
        $('.modal_mouse_out').css('display','block'); 
        $('.close-mouse').click(function(){
             $('.modal_mouse_out').css('display','none');                  
        });
    }
});

//изменение даты
var date = new Date();
$('.x_price_previous').text((date.getDate()+2)+"." + (date.getMonth()+1) + "." + date.getFullYear());

$(document).ready(function(){ 
//количество товара
    var newValue;
    if(localStorage.getItem('newValue')) { //проверяет и заменяет значение количества
        $('.lastpack').text(localStorage.getItem('newValue'));
    }
    var timer = setInterval(function () { //отнимает и переписывает кол-во товара
            $('.lastpack').each(function() {
                newValue= parseInt($(this).text(), 10) - 1;
                if(newValue>=7){
                    $(this).text(newValue);
                }else{
                    return false;
                };
                $local = localStorage.setItem('newValue', newValue);  
            });
    }, 13000);
});

//меняет город (гео)
    if (YMaps.location.country != '') { //получаю город
    var youRegion = (YMaps.location.country);
    if (youRegion === "Беларусь"){
        $city= YMaps.location.city;
        
        $city = $city.toUpperCase();//перевел в большой регистр 
    
        $.post("cityChange.php", //отправляю полученный город для склонения в падеже
               {userCity: $city
               },
               onAjaxSuccess //вызываю функцию ввода города
              );

        function onAjaxSuccess(data)
            {
                $('#user-country').text(data); //прописаваю новый город
            }
    } else {
        $('#user-country').text("Странах СНГ");
    }
};

//маска ввода
jQuery(function($){
   $("input[name='phone']").mask("+38(999) 999-9999");
   });

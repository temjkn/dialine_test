<?php 
        // Подключите файл common.php. phpmorphy-0.3.2 - для версии 0.3.2,
        // если используется иная версия исправьте код.
        require_once( 'phpmorphy-0.3.7/src/common.php');

        // Укажите путь к каталогу со словарями
        $dir = 'phpmorphy-0.3.7/dicts';

        // Укажите, для какого языка будем использовать словарь.
        // Язык указывается как ISO3166 код страны и ISO639 код языка, 
        // разделенные символом подчеркивания (ru_RU, uk_UA, en_EN, de_DE и т.п.)

        $lang = 'ru_RU';

        // Укажите опции
        // Список поддерживаемых опций см. ниже
        $opts = array(
            'storage' => PHPMORPHY_STORAGE_FILE,
        );

        // создаем экземпляр класса phpMorphy
        // обратите внимание: все функции phpMorphy являются throwable т.е. 
        // могут возбуждать исключения типа phpMorphy_Exception (конструктор тоже)
        try {
            $morphy = new phpMorphy($dir, $lang, $opts);
        } catch(phpMorphy_Exception $e) {
            die('Error occured while creating phpMorphy instance: ' . $e->getMessage());
        }
        
    
        // далее под $morphy мы подразумеваем экземпляр класса phpMorphy
        $word = $_POST['userCity'];
    
        // поставим слово ШКАФ в множественное число, предложный падеж
        $city =$morphy->castFormByGramInfo($word, null, array('ЕД', 'ПР'), true);
        
        //меняю регистр
        $name = $city[0];
        //$name = iconv("UTF-8", "UTF-8", $name);

        $first = mb_substr($name,0,1, 'UTF-8');//первая буква
        $last = mb_substr($name,1);//все кроме первой буквы
        $first = mb_strtoupper($first, 'UTF-8');
        $last = mb_strtolower($last, 'UTF-8');
        $name1 = $first.$last;

        echo "$name1"; //вывожу результат
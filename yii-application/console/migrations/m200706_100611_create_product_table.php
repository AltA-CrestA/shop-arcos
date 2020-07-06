<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m200706_100611_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createProductTable();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }

    public function createProductTable()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string()->notNull(),
            'category_id' => $this->integer(),
            'img' => $this->string(),
            'description' => $this->text(),
            'price' => $this->float(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Акрил №20',
            'category_id' => '1',
            'img' => '1.jpg',
            'description' => 'в упаковке 200шт , акрил-прозрачный пластик основа металлическая',
            'price' => '2,20',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Акрил №22',
            'category_id' => '1',
            'img' => '1.jpg',
            'description' => 'в упаковке 200шт , акрил-прозрачный пластик основа металлическая',
            'price' => '2,42',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Акрил №25',
            'category_id' => '1',
            'img' => '1.jpg',
            'description' => 'в упаковке 200шт , акрил-прозрачный пластик основа металлическая',
            'price' => '2,53',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Стекло №18',
            'category_id' => '1',
            'img' => '2.jpg',
            'description' => 'в упаковке 1392шт, стеклянная прозрачная ограненная вставка,основа металлическая ,отпускается кратно пачки',
            'price' => '3,75',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Стекло №20',
            'category_id' => '1',
            'img' => '2.jpg',
            'description' => 'в упаковке 1000шт, стеклянная прозрачная ограненная вставка,основа металлическая ,отпускается кратно пачки',
            'price' => '3,95',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Стекло №22',
            'category_id' => '1',
            'img' => '2.jpg',
            'description' => 'в упаковке 770шт, стеклянная прозрачная ограненная вставка,основа металлическая ,отпускается кратно пачки',
            'price' => '4,75',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Стекло №25',
            'category_id' => '1',
            'img' => '2.jpg',
            'description' => 'в упаковке 550шт, стеклянная прозрачная ограненная вставка,основа металлическая ,отпускается кратно пачки',
            'price' => '5,60',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица-страза Стекло №30',
            'category_id' => '1',
            'img' => '2.jpg',
            'description' => 'в упаковке 360шт, стеклянная прозрачная ограненная вставка,основа металлическая ,отпускается кратно пачки',
            'price' => '12,00',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица под обтяжку №32',
            'category_id' => '1',
            'img' => '3.jpg',
            'description' => 'металлическая заготовка под обтяжку тканью, в упаковке 1000шт, состоит из 2 частей верхней и нижней,материал - нержавеющая сталь, отпускается кратно пачки',
            'price' => '1090,00',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица под обтяжку №36',
            'category_id' => '1',
            'img' => '3.jpg',
            'description' => 'металлическая заготовка под обтяжку тканью, в упаковке 1000шт, состоит из 2 частей верхней и нижней,материал - нержавеющая сталь, отпускается кратно пачки',
            'price' => '1220,00',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица под обтяжку №40',
            'category_id' => '1',
            'img' => '3.jpg',
            'description' => 'металлическая заготовка под обтяжку тканью, в упаковке 1000шт, состоит из 2 частей верхней и нижней,материал - нержавеющая сталь, отпускается кратно пачки',
            'price' => '1265,00',
        ]);

        $this->insert('product', [
            'name' => 'Матрица №32',
            'category_id' => '9',
            'img' => '4.jpg',
            'description' => 'Устройство применяющееся в комплекте со станком-пресом, под каждый размер пуговицы своя матрица,материал -высокопрочная сталь,отпускается поштучно',
            'price' => '1200,00',
        ]);

        $this->insert('product', [
            'name' => 'Матрица №36',
            'category_id' => '9',
            'img' => '4.jpg',
            'description' => 'Устройство применяющееся в комплекте со станком-пресом, под каждый размер пуговицы своя матрица,материал -высокопрочная сталь,отпускается поштучно',
            'price' => '1200,00',
        ]);

        $this->insert('product', [
            'name' => 'Матрица №40',
            'category_id' => '9',
            'img' => '4.jpg',
            'description' => 'Устройство применяющееся в комплекте со станком-пресом, под каждый размер пуговицы своя матрица,материал -высокопрочная сталь,отпускается поштучно',
            'price' => '1200,00',
        ]);

        $this->insert('product', [
            'name' => 'Станок-пресс',
            'category_id' => '9',
            'img' => '5.jpg',
            'description' => 'Устройство применяющееся в комплекте со станком-пресом, под каждый размер пуговицы своя матрица,материал -высокопрочная сталь,отпускается поштучно',
            'price' => '1200,00',
        ]);

        $this->insert('product', [
            'name' => 'Нить Высокопрочная',
            'category_id' => '4',
            'img' => '6.jpg',
            'description' => 'Плетеная нить толщиной 1мм ,материал-полипропилен,намотка 1800м ,производство Белорусь,отпускается штучно,в упаковке 15шт',
            'price' => '660,00',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица роза',
            'category_id' => '1',
            'img' => '7.jpg',
            'description' => 'в упаковке 200шт, материал -пластик, диаметр пуговицы 30мм,цвет золото,хром,жемчуг.отпускается штучно',
            'price' => '4,75',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица дек.металлическая',
            'category_id' => '1',
            'img' => '8.jpg',
            'description' => 'цвет серебро,золото,черный.материал металл ,отпускается штучно',
            'price' => '44,00',
        ]);

        $this->insert('product', [
            'name' => 'Лентагвозди (молдинг) 9.5мм',
            'category_id' => '3',
            'img' => '9.jpg',
            'description' => 'Длинна планки 1м,материалл-металл. Цвета: Серебро,бронза,ренессанс,античное золото,золото классик.Опускается от 50шт,гвозди в комплекте.',
            'price' => '54,00',
        ]);

        $this->insert('product', [
            'name' => 'Лентагвозди (молдинг) 11мм',
            'category_id' => '3',
            'img' => '9.jpg',
            'description' => 'Длинна планки 1м,материалл-металл.Цвета: Серебро,бронза,ренессанс,,золото классик.Опускается от 50шт,гвозди в комплекте.',
            'price' => '57,00',
        ]);

        $this->insert('product', [
            'name' => 'Гвозди декоративные 9.5мм',
            'category_id' => '3',
            'img' => '10.jpg',
            'description' => 'Цвета: бронза, серебро,ренессанс, золото классик,золото антик. В пачке 1000шт.Отпускается кратно пачки.',
            'price' => '0,88',
        ]);

        $this->insert('product', [
            'name' => 'Гвозди декоративные 11мм',
            'category_id' => '3',
            'img' => '10.jpg',
            'description' => 'Цвета: бронза,серебро,ренессанс. В пачке 500шт. Отпускается кратно пачки.',
            'price' => '1,00',
        ]);

        $this->insert('product', [
            'name' => 'Гвозди декоративные 16мм',
            'category_id' => '3',
            'img' => '10.jpg',
            'description' => 'Цвета: серебро,бронза. В пачке 300шт. Отпускается кратно пачки.',
            'price' => '2,30',
        ]);

        $this->insert('product', [
            'name' => 'Пистолет для дек. гвоздей',
            'category_id' => '3',
            'img' => '10.jpg',
            'description' => 'Пневматический пистолет для штучного забивания декоративных гвоздей. В комплект входят так же насадка под гвоздь и пластиковая матрица. Отпускается штучно.',
            'price' => '6270,00',
        ]);

        $this->insert('product', [
            'name' => 'Пистолет для дек. гвоздей',
            'category_id' => '9',
            'img' => '11.jpg',
            'description' => 'Пневматический пистолет для штучного забивания декоративных гвоздей. В комплект входят так же насадка под гвоздь и пластиковая матрица. Отпускается штучно.',
            'price' => '6270,00',
        ]);

        $this->insert('product', [
            'name' => 'Пистолет для дек.гвоздей №2',
            'category_id' => '9',
            'img' => '12.jpg',
            'description' => 'Пневматический пистолет  для забивания декоративных гвоздей в комплекте с барабаном для подачи гвоздей в насадку в автоматическом режиме. Отпускается штучно.',
            'price' => '6270,00',
        ]);

        $this->insert('product', [
            'name' => 'Пистолет скоб. В фут. С рем комп.',
            'category_id' => '9',
            'img' => '13.jpg',
            'description' => 'Пистолет пневматический в футляре ,скобозабивной 6-16мм, рем комплект',
            'price' => '2750,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка "Элита" с колесом',
            'category_id' => '2',
            'img' => '14.jpg',
            'description' => 'Цвет: бронза,серебро ,золото. Материал — металл. Размер посадочного места: глубина 25мм диаметр 31мм. Общая высота:65мм.Отпускается штучно.',
            'price' => '194,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка "Элита" без колеса',
            'category_id' => '2',
            'img' => '15.jpg',
            'description' => 'Цвет: бронза, серебро, золото. Материал — металл. Размер изделия: Высота 30мм диаметр 31мм',
            'price' => '140,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка стульевая Голд и хром',
            'category_id' => '2',
            'img' => '16.jpg',
            'description' => 'Металлические ножки высота 45 см',
            'price' => '605,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка Деревянная Конусная',
            'category_id' => '2',
            'img' => '17.jpg',
            'description' => 'Ножка из твердой породы дерева в комплекте с крепежной шпилькой, не окрашена. Размер высота :120мм, Диаметр нижний:40мм , Диаметр верхний 55мм. Отпукается штучно.',
            'price' => '103,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка деревянная Г-образ',
            'category_id' => '2',
            'img' => '18.jpg',
            'description' => 'Ножка из твердой породы дерева,крашена в черный цвет. Высота 50мм Длинна полки 140мм. Отускается штучно.',
            'price' => '146,00',
        ]);

        $this->insert('product', [
            'name' => 'Подпятник с гвоздем',
            'category_id' => '5',
            'img' => '19.jpg',
            'description' => 'Цвет: черный, белый, коричневый. Материал — пластик. Диаметр 18мм. В пачке 200/500шт. Отпускается кратно пачки. ',
            'price' => '1,20',
        ]);

        $this->insert('product', [
            'name' => 'Подпятник с гв. на фетр.осн',
            'category_id' => '5',
            'img' => '20.jpg',
            'description' => 'Цвет белый. Материал — пластик,фетр. Диаметр 20мм. В упаковке 1000шт. Отпускается штучно.',
            'price' => '4,62',
        ]);

        $this->insert('product', [
            'name' => 'Подпятник на фетр.осн клеящийся',
            'category_id' => '5',
            'img' => '21.jpg',
            'description' => 'Материал-фетр. Диаметр 20 мм. В Упаковке 2000 шт. Отпускается штучно.',
            'price' => '0,72',
        ]);

        $this->insert('product', [
            'name' => 'Подпятник клеящийся войлочный',
            'category_id' => '5',
            'img' => '22.jpg',
            'description' => 'Цвет: коричневый. Материал-войлок. В упаковке 100шт. Отпускается кратно упаковки.цена казана за упаковку.',
            'price' => '107,00',
        ]);

        $this->insert('product', [
            'name' => 'Кольцо декоративное 8см',
            'category_id' => '7',
            'img' => '23.jpg',
            'description' => 'Цвет: бронза,серебро,золото. Материал — металл. Диаметр внутренний 60 мм, наружний 80 мм. Толщина кольца 10мм.',
            'price' => '385,00',
        ]);

        $this->insert('product', [
            'name' => 'Кольцо декоративное 10см',
            'category_id' => '7',
            'img' => '24.jpg',
            'description' => 'Цвет:бронза,серебро. Материал — металл. Диаметр внутренний 80 мм,наружний 100 мм.толщина кольца 10мм.',
            'price' => '430,00',
        ]);

        $this->insert('product', [
            'name' => 'Шильдик (лейбл)',
            'category_id' => '5',
            'img' => '25.jpg',
            'description' => 'Цвет по согласованию. Материал — металл. Цена зависит от размера и толщины шильдика, а так же от колличества. Минимальный заказ 2000шт.',
        ]);

        $this->insert('product', [
            'name' => 'Тесьма декоративная',
            'category_id' => '8',
            'img' => '26.jpg',
            'description' => 'Цвета: коричневый,крем,золото. Ширина 10мм. Длинна намотки 100м.Отпускается кратно упаковки.',
        ]);

        $this->insert('product', [
            'name' => 'Кант с тесьмой',
            'category_id' => '8',
            'img' => '27.jpg',
            'description' => 'Цвета: коричневый, св.бежевый,бежево-коричневый, черно-золотой, золото-коричневый, темное золото, светлое золото. Диаметр 8мм.Намотка 100м. Отпускается кратно бабины.',
        ]);

        $this->insert('product', [
            'name' => 'Кисть №2',
            'category_id' => '7',
            'img' => '28.jpg',
            'description' => 'Цвета: бежево-коричневый, бежевый, золотой, коричневый. Длинна 150мм, в упаковке 6 шт. Отпускается штучно.',
            'price' => '107,00',
        ]);

        $this->insert('product', [
            'name' => 'Текс.застежка (липучка) 25мм',
            'category_id' => '7',
            'img' => '29.jpg',
            'description' => 'Цвета: бежевый, коричневый. Намотка 25м.',
            'price' => '302,00',
        ]);

        $this->insert('product', [
            'name' => 'Текс.застежка (липучка) 50мм',
            'category_id' => '7',
            'img' => '29.jpg',
            'description' => 'Цвета: бежевый, коричневый. Намотка 25м.',
            'price' => '605,00',
        ]);

        $this->insert('product', [
            'name' => 'Веревка капрон D5',
            'category_id' => '4',
            'img' => '30.jpg',
            'description' => 'Капроновая веревка диаметром 5 мм, белая, намотка 100 м, отпускается бабинами. Производство Белорусь.',
            'price' => '253,00',
        ]);

        $this->insert('product', [
            'name' => 'Веревка капрон D8',
            'category_id' => '4',
            'img' => '30.jpg',
            'description' => 'Капроновая веревка диаметром 8 мм, белая, намотка 50м , отпускается бабинами. Производство Белорусь.',
            'price' => '302,00',
        ]);

        $this->insert('product', [
            'name' => 'Мел Швейный',
            'category_id' => '4',
            'img' => '31.jpg',
            'description' => 'В упаковке 20 шт, цветной и белый отдельными упаковками. Отпускается кратно упаковки.',
            'price' => '66,00',
        ]);

        $this->insert('product', [
            'name' => 'Мел Швейный Восковой',
            'category_id' => '4',
            'img' => '31.jpg',
            'description' => 'В упаковке 50 шт.,белый, отпускается кратно упаковки.',
            'price' => '66,00',
        ]);

        $this->insert('product', [
            'name' => 'Нить швейная 1500м',
            'category_id' => '4',
            'img' => '32.jpg',
            'description' => 'Широкая палитра цветов. Состав:сердцевина из полиэфирного волокна с лавсановой оплёткой.Отпускается штучно.',
            'price' => '80,00',
        ]);

        $this->insert('product', [
            'name' => 'Расскабливатель',
            'category_id' => '9',
            'img' => '33.jpg',
            'description' => 'Устройство для извлечения мебельных скоб из изделия.Отпускает штучно.',
            'price' => '264,00',
        ]);

        $this->insert('product', [
            'name' => 'Лента Скрытого Шва 20м',
            'category_id' => '6',
            'img' => '34.jpg',
            'description' => 'Стальная лента с зубзами для фиксации ткани. Образует аккуратный незаметный шов на изделии. Отпускается бабинами.',
            'price' => '660,00',
        ]);

        $this->insert('product', [
            'name' => 'Электроножницы',
            'category_id' => '9',
            'img' => '35.jpg',
            'description' => 'Электрические ножницы для ткани работают как от сети так и от аккумулятора,в комплекте идет зарядный блок и запасные лезвия.',
            'price' => '3960,00',
        ]);

        $this->insert('product', [
            'name' => 'Электроножницы ПЛЮС',
            'category_id' => '9',
            'img' => '36.jpg',
            'description' => 'Электрические ножницы для ткани, работают как от сети,так и от аккумулятора. В комплекте идет зарядный блок,запасные лезвия,дополнительный аккумулятор.',
            'price' => '6050,00',
        ]);

        $this->insert('product', [
            'name' => 'Электроножницы дисковые',
            'category_id' => '9',
            'img' => '37.jpg',
            'description' => 'Электрические ножницы для ткани, работают как от сети,так и от аккумулятора. В комплекте идет зарядный блок,запасные лезвия,дополнительный аккумулятор.',
            'price' => '6930,00',
        ]);

        $this->insert('product', [
            'name' => 'Пуговица светодиодная',
            'category_id' => '9',
            'img' => '37.jpg',
            'description' => 'Светодиодная акриловая страза мощностью 0.1w диаметром 30мм отпускается штучно.',
            'price' => '124,00',
        ]);

        $this->insert('product', [
            'name' => 'Собачки',
            'category_id' => '9',
            'img' => '38.jpg',
            'description' => 'Стальные собачки для молний .В упаковке 500шт.Отпускаются кратно упаковке.',
        ]);

        $this->insert('product', [
            'name' => 'Молния',
            'category_id' => '9',
            'img' => '39.jpg',
            'description' => 'Ширина 30мм. Намотка 200м отпускается кратно бабины, цвет: бежевый, коричневый.',
        ]);

        $this->insert('product', [
            'name' => 'Ремень эластичный',
            'category_id' => '9',
            'img' => '40.jpg',
            'description' => 'Эластичный Ремень 70% растяжимости. Ширина 5 см. Длинна намотки 25м. Отпускается бабинами.',
            'price' => '605,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка "Элита" без колеса H56',
            'category_id' => '9',
            'img' => '41.jpg',
            'description' => 'Цвет: Серебро, золото. Материал-металл. Размер Изделия: высота 56 мм диаметр 29 мм.',
            'price' => '182,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка "Элита" без колеса H103',
            'category_id' => '9',
            'img' => '41.jpg',
            'description' => 'Цвет: Серебро, золото. Материал-металл. Размер Изделия: высота 103 мм диаметр 30 мм.',
            'price' => '231,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка Акрил 118',
            'category_id' => '9',
            'img' => '42.jpg',
            'description' => 'Акриловая опора. Материал: прозрачный пластик',
            'price' => '870,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка Акрил 150',
            'category_id' => '9',
            'img' => '43.jpg',
            'description' => 'Акриловая опора. Материал: прозрачный пластик',
            'price' => '990,00',
        ]);

        $this->insert('product', [
            'name' => 'Ножка Акрил 180',
            'category_id' => '9',
            'img' => '44.jpg',
            'description' => 'Акриловая опора. Материал: прозрачный пластик',
            'price' => '1200,00',
        ]);
    }
}

<?php

$packageArrayDb = [
    'standart' => [
        'title' => 'Стандартный пакет',
        'included' => [
            '1 анкета банкрота для бесплатного анализа проблемы',
            'Консультация в рамках анкеты банкрота;',
            'Процедура банкротства физ.лица с гарантиями на работу'
        ],
        'arbitration' => [
            '10 000 р. – оплата команды АУ',
            '15 000 р. – оплата публикации',
            '25 000 р. – оплата депозита '
        ],
        'tieam' => [
            'Персональный АУ – 1 чел',
            'Эксперт по рискам – 1 чел',
            'ПАУ – 1 чел', 'Специалист фин.отдела – 1 чел.'
        ],
        'price' => 10000

    ],
    'average' => [
        'title' => 'Средний арбитраж',
        'included' => [
            'До 30 анкет клиентов в месяц;',
            'Поиск по базе данных завершенных дел;',
            'Рабочие алгоритмы решения вопросов;',
            'Консультация в рамках анкет банкротов;',
            'Проведение процедур с гарантиями на работу'
        ],
        'arbitration' => [
            'В зависимости от объема дел – оплата команды АУ',
            '15 000 р. – оплата публикации',
            '25 000 р. – оплата депозита '
        ],
        'tieam' => [
            'Персональный АУ – 2 чел',
            'Эксперт по рискам – 1 чел',
            'ПАУ – 4 чел',
            'Специалист фин.отдела – 3 чел.'
        ],
        'additionally' => [
            'От 10 дел в месяц, при единовременной оплате 80 000;',
            'От 30 дел в месяц, при 
            единовременной оплате 185 000₽;'
        ]
    ],
    'large' => [
        'title' => 'Крупный арбитраж',
        'included' => [
            'Анкеты в месяц без ограничений;',
            'Консультации в рамках анкет банкротов;',
            'Поиск по базе данных замершенных дел;',
            'Рабочие алгоритмы решения вопросов;',
            'Делегирование общенияс клиентами на АУ;',
            'Проведение процедур
            с гарантиями на работу;'
        ],
        'arbitration' => [
            '4 800 р. – оплата команды АУ',
            '15 000 р. – оплата публикации',
            '25 000 р. – оплата депозита '
        ],
        'tieam' => [
            'Персональный АУ – 5 чел',
            'Эксперт по рискам – 4 чел',
            'ПАУ – 7 чел',
            'Специалист фин.отдела – 5 чел.'
        ],
        'additionally' => [
            'От 50 дел в месяц, при 
        единовременной оплате 
        240 000₽:'
        ],
        'price' => 4800
    ],
    'trial' => [
        'title' => 'ПРОБНЫЙ ТАРИФ',
        'included' => [
            '1 анкета банкрота для бесплатного анализа проблемы',
            'Консультация в рамках анкеты банкрота;',
            'Процедура банкротства физ.лица с гарантиями на работу'
        ],
        'arbitration' => [
            '0 р. – оплата команды АУ',
            '16 000 р. – оплата публикации',
            '25 000 р. – оплата депозита '
        ],
        'tieam' => [
            'Персональный АУ – 1 чел',
            'Эксперт по рискам – 1 чел',
            'ПАУ – 1 чел',
            'Специалист фин.отдела – 1 чел.'
        ],
        'price' => 0
    ]
];

$servicesArrayDb = [
    'bankrupt' => [
        'title' => 'Анализ банкрота',
        'included' => [
            'Развернутое заключение эксперта',
            'Стратегия работы'
        ],
        'price' => 1900,

    ],
    'innings' => [
        'title' => 'Сбор и подача документов',
        'included' => [
            'Полный комплект документов',
            'Правильное обоснование и иск',
            'Подача в суд через ЭЦП',
            'Гарантии на качество'
        ],
        'gift' => 'Заключение и стратегия в ПОДАРОК',
        'price' => 10000
    ],
    'final' => [
        'title' => 'Составление итоговых 
        документов',
        'included'  => [
            'Заявление о признании банкротом',
            'Опись кредиторов',
            'Опись имущества',
            'Объяснение о причинах признания несостоятельным'
        ],
        'law' => ['*при условии наличия готового пакета 
        документов в соответсвии со статьей 213.4 п.3 ФЗ #127 «О несостоятельности (банкротстве)»'],
        'price' => 7500
    ],
];

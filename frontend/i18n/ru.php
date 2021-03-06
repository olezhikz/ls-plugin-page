<?php

return [
    'settings' => [
        'title' => 'Настройка виджета',
        'btn_add' => [
            'text' => 'Добавить сайт'
        ],
        'code' => [
            'label' => 'Код виджета:'
        ]
    ],
    'admin' => [
        'nav' => [
            'text' => 'Страницы'
        ],
        'add' => [
            'title' => 'Создать виджет',
            'form' => [
                'domain' => [
                    'label' => 'Домен вашего сайта:',
                    'placeholder' => 'site.ru'
                ]
            ]
        ],
        'notices' => [
            'error_validate_exists' => 'Такой домен уже зарегестрирован',
            'add' => 'Вы подписались на "%%event_name%%"',
            'remove' => 'Вы отписались от "%%event_name%%"',
            'token_not_found' => 'Сайт не найден'
        ]
    ]
];
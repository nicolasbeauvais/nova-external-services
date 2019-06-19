<?php

return [
    'services' => [
        'Hosting' => [
            [
                'name' => 'AWS',
                'description' => 'Main host',
                'url' => 'https://aws.amazon.com/'
            ],
            [
                'name' => 'Cloudflare',
                'description' => 'DNS & Caching',
                'url' => 'https://www.cloudflare.com/'
            ]
        ],
        'Content' => [
            [
                'name' => 'Feedly',
                'description' => 'Content curation',
                'url' => 'https://feedly.com/'
            ],
            [
                'name' => 'Buffer',
                'description' => 'Social media scheduling',
                'url' => 'https://buffer.com/'
            ],
        ],
        'Productivity' => [
            [
                'name' => 'Slack',
                'description' => 'Communication & Notification',
                'url' => 'https://shielddb.slack.com/'
            ],
            [
                'name' => 'Trello',
                'description' => 'Tasks kanban',
                'url' => 'https://trello.com/b/xHouN08D/shielddb'
            ],
        ]
    ]
];
<?php

return [
    'feeds' => [
        'news' => [
            'items' => 'App\Models\News@getFeedItems',

            'url' => '/news.rss',

            'title' => 'All news on mysite.com',

            /*
             * Custom view for the items.
             *
             * Defaults to feed::feed if not present.
             */
        ],
    ],
];

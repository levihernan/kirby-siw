<?php 

// site/plugins/api.php

$prefix = "api/v1";

kirby()->routes([
    [
        'method' => 'GET',
        'pattern' => "{$prefix}/projects",
        'action' => function() {
            $limit = 6;
            $offset = (get('page')-1)*$limit;
            $collection = site()->find('projects')->children()->visible(); 

            if(!empty(get('location'))){
                $collection = $collection->filterBy('location', get('location'));
            }

            else if(!empty(get('tag'))) {
                $collection = $collection->filterBy('tags', get('tag'), ',');
            }

            else if(!empty(get('keyword'))) {
                $collection = $collection->filter(function ($child) {
                    $keyword = strtolower(get('keyword'));
                    return 
                        strpos(strtolower($child->title()->html()->toString()), $keyword) !== false || 
                        strpos(strtolower($child->intro()->kirbytext()->value), $keyword) !== false || 
                        strpos(strtolower($child->text()->kirbytext()->value), $keyword) !== false ||
                        strpos(strtolower($child->location()->html()->toString()), $keyword) !== false;
                });                
            }

            $items = $collection->offset($offset)->limit($limit)->map(function ($project) {
                return $project->serialize();
            });

            // You could just serialize the collection, but
            // you may not want to expose all that data
            return response::json([
                'count' => $collection->count(),
                'pages' => $collection->count() ? range(0, floor($collection->count() / $limit)) : [],
                'items' => $items,
                'limit' => $limit,
                'offset' => $offset
            ]);
        }
    ]
]);
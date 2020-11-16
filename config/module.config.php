<?php

namespace BlockLayoutSkeleton;

return [
    'block_layouts' => [
        'invokables' => [
            'skeleton' => Site\BlockLayout\Skeleton::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ],
    ],
];

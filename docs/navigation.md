---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---

# Navigation {#navigation}

The navigation menu in the left-hand sidebar is defined using an array in `navigation.php`. Nested pages can be added by using the `children` associative array.

```php
<?php
// navigation.php

return [
    'Getting Started' => [
        'url' => 'docs/getting-started',
        'children' => [
            'Customizing Your Site' => 'docs/customizing-your-site',
            'Navigation' => 'docs/navigation',
            'Algolia DocSearch' => 'docs/algolia-docsearch',
            'Custom 404 Page' => 'docs/custom-404-page',
        ],
    ],
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
];

// config.php
'navigation' => require_once('navigation.php'),

// blade files
$page->navigation
```
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_3ukzCp
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> origin/develop
>>>>>>> .merge_file_o7SskH
=======
=======
>>>>>>> origin/develop
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])

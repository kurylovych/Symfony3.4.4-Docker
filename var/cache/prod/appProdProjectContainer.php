<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZpu39xh\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZpu39xh/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerZpu39xh.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerZpu39xh\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerZpu39xh\appProdProjectContainer(array(
    'container.build_hash' => 'Zpu39xh',
    'container.build_id' => '36a99417',
    'container.build_time' => 1518169577,
));

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPQ9sfBT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPQ9sfBT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPQ9sfBT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPQ9sfBT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPQ9sfBT\App_KernelDevDebugContainer([
    'container.build_hash' => 'PQ9sfBT',
    'container.build_id' => '4686d89c',
    'container.build_time' => 1654934345,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPQ9sfBT');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHg5y3As\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHg5y3As/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHg5y3As.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHg5y3As\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHg5y3As\App_KernelDevDebugContainer([
    'container.build_hash' => 'Hg5y3As',
    'container.build_id' => 'e1ff7466',
    'container.build_time' => 1656514585,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHg5y3As');

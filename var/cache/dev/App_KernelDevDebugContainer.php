<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIA6X1Ux\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIA6X1Ux/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIA6X1Ux.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIA6X1Ux\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIA6X1Ux\App_KernelDevDebugContainer([
    'container.build_hash' => 'IA6X1Ux',
    'container.build_id' => 'a8e6f22f',
    'container.build_time' => 1654882022,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIA6X1Ux');

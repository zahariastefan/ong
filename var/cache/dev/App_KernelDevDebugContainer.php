<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSvxdlEB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSvxdlEB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSvxdlEB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSvxdlEB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSvxdlEB\App_KernelDevDebugContainer([
    'container.build_hash' => 'SvxdlEB',
    'container.build_id' => '9742414e',
    'container.build_time' => 1654878561,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSvxdlEB');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCApLWS4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCApLWS4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCApLWS4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCApLWS4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCApLWS4\App_KernelDevDebugContainer([
    'container.build_hash' => 'CApLWS4',
    'container.build_id' => 'c26ebe7b',
    'container.build_time' => 1656350615,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCApLWS4');

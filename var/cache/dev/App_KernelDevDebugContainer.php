<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFIeJFdc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFIeJFdc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFIeJFdc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFIeJFdc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFIeJFdc\App_KernelDevDebugContainer([
    'container.build_hash' => 'FIeJFdc',
    'container.build_id' => 'f5e2ae48',
    'container.build_time' => 1658309028,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFIeJFdc');

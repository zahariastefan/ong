<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI7NtykQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI7NtykQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI7NtykQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI7NtykQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI7NtykQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'I7NtykQ',
    'container.build_id' => '5d8112c2',
    'container.build_time' => 1656359543,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI7NtykQ');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMYw9kM8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMYw9kM8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMYw9kM8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMYw9kM8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMYw9kM8\App_KernelDevDebugContainer([
    'container.build_hash' => 'MYw9kM8',
    'container.build_id' => '2bfbb55f',
    'container.build_time' => 1654883028,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMYw9kM8');

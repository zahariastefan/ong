<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUzU8wYF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUzU8wYF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUzU8wYF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUzU8wYF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUzU8wYF\App_KernelDevDebugContainer([
    'container.build_hash' => 'UzU8wYF',
    'container.build_id' => 'c09af51d',
    'container.build_time' => 1656431076,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUzU8wYF');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQckT1NZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQckT1NZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQckT1NZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQckT1NZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQckT1NZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'QckT1NZ',
    'container.build_id' => 'e98d4502',
    'container.build_time' => 1606380765,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQckT1NZ');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5ALC6bQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5ALC6bQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5ALC6bQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5ALC6bQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5ALC6bQ\App_KernelDevDebugContainer([
    'container.build_hash' => '5ALC6bQ',
    'container.build_id' => 'db7f89ed',
    'container.build_time' => 1607328699,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5ALC6bQ');

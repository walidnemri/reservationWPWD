<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTWK4FtI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTWK4FtI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTWK4FtI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTWK4FtI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTWK4FtI\App_KernelDevDebugContainer([
    'container.build_hash' => 'TWK4FtI',
    'container.build_id' => 'c269ead6',
    'container.build_time' => 1592921488,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTWK4FtI');

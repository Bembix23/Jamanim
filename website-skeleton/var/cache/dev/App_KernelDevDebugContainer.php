<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerELSr7dp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerELSr7dp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerELSr7dp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerELSr7dp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerELSr7dp\App_KernelDevDebugContainer([
    'container.build_hash' => 'ELSr7dp',
    'container.build_id' => '67bd2fcd',
    'container.build_time' => 1610027978,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerELSr7dp');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSngteES\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSngteES/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSngteES.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSngteES\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSngteES\App_KernelDevDebugContainer([
    'container.build_hash' => 'SngteES',
    'container.build_id' => '9b50eb27',
    'container.build_time' => 1598361519,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSngteES');

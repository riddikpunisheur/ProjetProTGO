<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPMpwgNi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPMpwgNi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPMpwgNi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPMpwgNi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPMpwgNi\App_KernelDevDebugContainer([
    'container.build_hash' => 'PMpwgNi',
    'container.build_id' => 'fae92268',
    'container.build_time' => 1636734301,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPMpwgNi');
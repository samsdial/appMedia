<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJyzNaCD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJyzNaCD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJyzNaCD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJyzNaCD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJyzNaCD\App_KernelDevDebugContainer([
    'container.build_hash' => 'JyzNaCD',
    'container.build_id' => '797912a1',
    'container.build_time' => 1611352986,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJyzNaCD');
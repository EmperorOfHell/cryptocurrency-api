<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXtZM7Bx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXtZM7Bx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXtZM7Bx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXtZM7Bx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXtZM7Bx\App_KernelDevDebugContainer([
    'container.build_hash' => 'XtZM7Bx',
    'container.build_id' => 'a204b317',
    'container.build_time' => 1708442169,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXtZM7Bx');

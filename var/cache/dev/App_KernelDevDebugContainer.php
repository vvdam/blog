<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0xUZekG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0xUZekG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0xUZekG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0xUZekG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0xUZekG\App_KernelDevDebugContainer([
    'container.build_hash' => '0xUZekG',
    'container.build_id' => '293dff14',
    'container.build_time' => 1700074346,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0xUZekG');

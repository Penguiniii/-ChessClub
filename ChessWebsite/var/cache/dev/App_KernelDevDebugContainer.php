<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container28Y4sRN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container28Y4sRN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container28Y4sRN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container28Y4sRN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container28Y4sRN\App_KernelDevDebugContainer([
    'container.build_hash' => '28Y4sRN',
    'container.build_id' => '86876298',
    'container.build_time' => 1651324860,
], __DIR__.\DIRECTORY_SEPARATOR.'Container28Y4sRN');

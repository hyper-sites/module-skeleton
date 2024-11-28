<?php

declare(strict_types=1);

arch()
    ->expect('VendorName\Skeleton')
    ->toHaveMethodsDocumented()
    ->toHavePropertiesDocumented()
    ->toUseStrictTypes()
    ->not->toUse([
        'dd',
        'ddd',
        'die',
        'dump',
        'env',
        'exit',
        'ray',
    ]);

arch()->expect('VendorName\Skeleton\Traits')->toBeTraits();
arch()->expect('VendorName\Skeleton\Concerns')->toBeTraits();

arch()->expect('VendorName\Skeleton')
    ->not->toBeEnums()
    ->ignoring('VendorName\Skeleton\Enums')
    ->not->toImplement(Throwable::class)
    ->ignoring('VendorName\Skeleton\Exceptions')
    ->not->toExtend('Illuminate\Database\Eloquent\Model')
    ->ignoring('VendorName\Skeleton\Models')
    ->not->toExtend('Illuminate\Foundation\Http\FormRequest')
    ->ignoring('VendorName\Skeleton\Http\Requests')
    ->not->toExtend('Illuminate\Console\Command')
    ->ignoring('VendorName\Skeleton\Console\Commands')
    ->not->toExtend('Illuminate\Mail\Mailable')
    ->ignoring('VendorName\Skeleton\Mail')
    ->not->toExtend('Illuminate\Notifications\Notification')
    ->ignoring('VendorName\Skeleton\Notifications')
    ->not->toHaveSuffix('Controller')
    ->ignoring('VendorName\Skeleton\Http\Controllers');

arch()->expect('VendorName\Skeleton\Enums')
    ->toBeEnums()
    ->ignoring('VendorName\Skeleton\Enums\Concerns');

arch()->expect('VendorName\Skeleton\Features')
    ->toBeClasses()
    ->ignoring('VendorName\Skeleton\Features\Concerns');

arch()->expect('VendorName\Skeleton\Features')
    ->toHaveMethod('resolve');

arch()->expect('VendorName\Skeleton\Exceptions')
    ->classes()
    ->toImplement('Throwable');

arch()->expect('VendorName\Skeleton\Http\Middleware')
    ->classes()
    ->toHaveMethod('handle');

arch()->expect('VendorName\Skeleton\Models')
    ->classes()
    ->toExtend('Illuminate\Database\Eloquent\Model')
    ->ignoring('VendorName\Skeleton\Models\Scopes');

arch()->expect('VendorName\Skeleton\Http\Requests')
    ->classes()
    ->toHaveSuffix('Request');

arch()->expect('VendorName\Skeleton\Http\Requests')
    ->toExtend('Illuminate\Foundation\Http\FormRequest');

arch()->expect('VendorName\Skeleton\Http\Requests')
    ->toHaveMethod('rules');

arch()->expect('VendorName\Skeleton\Console\Commands')
    ->classes()
    ->toHaveSuffix('Command');

arch()->expect('VendorName\Skeleton\Console\Commands')
    ->classes()
    ->toExtend('Illuminate\Console\Command');

arch()->expect('VendorName\Skeleton\Console\Commands')
    ->classes()
    ->toHaveMethod('handle');

arch()->expect('VendorName\Skeleton\Mail')
    ->classes()
    ->toExtend('Illuminate\Mail\Mailable');

arch()->expect('VendorName\Skeleton\Mail')
    ->classes()
    ->toImplement('Illuminate\Contracts\Queue\ShouldQueue');

arch()->expect('VendorName\Skeleton\Jobs')
    ->classes()
    ->toImplement('Illuminate\Contracts\Queue\ShouldQueue');

arch()->expect('VendorName\Skeleton\Jobs')
    ->classes()
    ->toHaveMethod('handle');

arch()->expect('VendorName\Skeleton\Listeners')
    ->toHaveMethod('handle');

arch()->expect('VendorName\Skeleton\Notifications')
    ->toExtend('Illuminate\Notifications\Notification');

arch()->expect('VendorName\Skeleton\Providers')
    ->toHaveSuffix('ServiceProvider');

arch()->expect('VendorName\Skeleton\Http\Controllers')
    ->classes()
    ->toHaveSuffix('Controller');

arch()->expect('VendorName\Skeleton\Http')
    ->toOnlyBeUsedIn('VendorName\Skeleton\Http');

arch()->expect('VendorName\Skeleton\Http\Controllers')
    ->not->toHavePublicMethodsBesides(['__construct', '__invoke', 'index', 'show', 'create', 'store', 'edit', 'update', 'destroy', 'middleware']);

arch()->expect('VendorName\Skeleton\Policies')
    ->classes()
    ->toHaveSuffix('Policy');


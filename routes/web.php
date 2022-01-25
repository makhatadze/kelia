<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContentImageController;
use App\Http\Controllers\Admin\ContentTextController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\Admin\PacketController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuestionSectionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Change Lang */
Route::get('lang/{locale}', function ($locale) {
    // Available languages
    $availableLangs = [
        'en' => 'en',
        'fr' => 'fr',
    ];
    if (array_key_exists($locale, $availableLangs)) {
        session()->put('locale', $locale);
    }
    return redirect()->back();


})->name('lang');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    })->name('/');

    // ContentImage routes
    Route::prefix('content-image')->group(function () {
        Route::match(['get','post'],'', [ContentImageController::class, 'index'])->name('content-image.index');
        Route::get('create', [ContentImageController::class, 'create'])->name('content-image.create');
        Route::post('store',[ContentImageController::class,'store'])->name('content-image.store');
        Route::get('{contentImage}/edit', [ContentImageController::class, 'edit'])->name('content-image.edit');
        Route::put('{contentImage}',[ContentImageController::class,'update'])->name('content-image.update');

        Route::delete('{contentImage}',[ContentImageController::class,'destroy'])->name('content-image.destroy');
    });

    // Service routes
    Route::prefix('service')->group(function () {
        Route::match(['get','post'],'', [ServiceController::class, 'index'])->name('service.index');
        Route::get('create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('store',[ServiceController::class,'store'])->name('service.store');
        Route::get('{service}/edit', [ServiceController::class, 'edit'])->name('service.edit');
        Route::put('{service}',[ServiceController::class,'update'])->name('service.update');
        Route::delete('{service}',[ServiceController::class,'destroy'])->name('service.destroy');


        // Service Item
        Route::match(['get','post'],'{service}/items', [ServiceItemController::class, 'index'])->name('service-item.index');
        Route::get('{service}/items/create', [ServiceItemController::class, 'create'])->name('service-item.create');

    });

    // ContentImage routes
    Route::prefix('question-section')->group(function () {
        Route::match(['get','post'],'', [QuestionSectionController::class, 'index'])->name('question-section.index');
        Route::get('create', [QuestionSectionController::class, 'create'])->name('question-section.create');
        Route::post('store',[QuestionSectionController::class,'store'])->name('question-section.store');
        Route::get('{questionSection}/edit', [QuestionSectionController::class, 'edit'])->name('question-section.edit');
        Route::put('{questionSection}',[QuestionSectionController::class,'update'])->name('question-section.update');

        Route::delete('{questionSection}',[QuestionSectionController::class,'destroy'])->name('question-section.destroy');
    });

    // ContentText routes
    Route::prefix('content-text')->group(function () {
        Route::match(['get','post'],'', [ContentTextController::class, 'index'])->name('content-text.index');
        Route::get('create', [ContentTextController::class, 'create'])->name('content-text.create');
        Route::post('store',[ContentTextController::class,'store'])->name('content-text.store');
        Route::get('{contentText}/edit', [ContentTextController::class, 'edit'])->name('content-text.edit');
        Route::put('{contentText}',[ContentTextController::class,'update'])->name('content-text.update');

        Route::delete('{contentText}',[ContentTextController::class,'destroy'])->name('content-text.destroy');
    });


    // ContentText routes
    Route::prefix('contact')->group(function () {
        Route::match(['get','post'],'', [ContactController::class, 'index'])->name('contact.index');

        Route::delete('{contact}',[ContactController::class,'destroy'])->name('contact.destroy');
    });

    // Packet routes
    Route::prefix('packet')->group(function () {
        Route::match(['get','post'],'', [PacketController::class, 'index'])->name('packet.index');
        Route::get('create', [PacketController::class, 'create'])->name('packet.create');
        Route::post('store',[PacketController::class,'store'])->name('packet.store');
        Route::get('{packet}/edit', [PacketController::class, 'edit'])->name('packet.edit');
        Route::put('{packet}',[PacketController::class,'update'])->name('packet.update');

        Route::delete('{packet}',[PacketController::class,'destroy'])->name('packet.destroy');
    });

    // Question routes
    Route::prefix('question')->group(function () {
        Route::match(['get','post'],'', [QuestionController::class, 'index'])->name('question.index');
        Route::get('create', [QuestionController::class, 'create'])->name('question.create');
        Route::post('store',[QuestionController::class,'store'])->name('question.store');
        Route::get('{packet}/edit', [QuestionController::class, 'edit'])->name('question.edit');
        Route::put('{packet}',[QuestionController::class,'update'])->name('question.update');

        Route::delete('{packet}',[QuestionController::class,'destroy'])->name('question.destroy');
    });


    /*They are the required pages for the system, don't delete it*/
    Route::prefix('settings')->group(function () {
        Route::get('/', function () {
            return Inertia::render('Settings/Index', [
                'users_count' => count(\App\Models\User::all('id')),
                'roles_count' => count(Role::all()),
                'permissions_count' => count(Permission::all())
            ]);
        })->name('settings');
        Route::resource('settings-user', \App\Http\Controllers\Settings\UserController::class);
        Route::post('settings-user', [\App\Http\Controllers\Settings\UserController::class, 'index'])->name('settings-user.search');
        Route::get('role', function () {
            return Inertia::render('Settings/Role');
        })->name('settings-role');
        Route::get('permission', function () {
            return Inertia::render('Settings/Permission');
        })->name('settings-permission');
        Route::get('system', function () {
            return Inertia::render('Settings/System');
        })->name('settings-system');
    });

    /*This pages for example, you can delete when you design the your system*/
    //Example Pages
    Route::get('login-app', function () {
        return Inertia::render('Samples/Examples/Login');
    })->name('login-app');
    Route::get('login-app-1', function () {
        return Inertia::render('Samples/Examples/Auth/Login1');
    })->name('login-app-1');
    Route::get('login-app-2', function () {
        return Inertia::render('Samples/Examples/Auth/Login2');
    })->name('login-app-2');
    Route::get('login-app-3', function () {
        return Inertia::render('Samples/Examples/Auth/Login3');
    })->name('login-app-3');
    Route::get('register-app', function () {
        return Inertia::render('Samples/Examples/Register');
    })->name('register-app');
    Route::get('register-app-1', function () {
        return Inertia::render('Samples/Examples/Auth/Register1');
    })->name('register-app-1');
    Route::get('register-app-2', function () {
        return Inertia::render('Samples/Examples/Auth/Register2');
    })->name('register-app-2');
    Route::get('register-app-3', function () {
        return Inertia::render('Samples/Examples/Auth/Register3');
    })->name('register-app-3');
    Route::get('forgot-password-app', function () {
        return Inertia::render('Samples/Examples/ForgotPassword');
    })->name('forgot-password-app');
    Route::get('forgot-password-app-1', function () {
        return Inertia::render('Samples/Examples/Auth/ForgotPassword1');
    })->name('forgot-password-app-1');
    Route::get('forgot-password-app-2', function () {
        return Inertia::render('Samples/Examples/Auth/ForgotPassword2');
    })->name('forgot-password-app-2');
    Route::get('forgot-password-app-3', function () {
        return Inertia::render('Samples/Examples/Auth/ForgotPassword3');
    })->name('forgot-password-app-3');
    Route::get('lock-app', function () {
        return Inertia::render('Samples/Examples/Lock');
    })->name('lock-app');
    Route::get('lock-app-1', function () {
        return Inertia::render('Samples/Examples/Auth/Lock1');
    })->name('lock-app-1');
    Route::get('lock-app-2', function () {
        return Inertia::render('Samples/Examples/Auth/Lock2');
    })->name('lock-app-2');
    Route::get('lock-app-3', function () {
        return Inertia::render('Samples/Examples/Auth/Lock3');
    })->name('lock-app-3');
    Route::get('profile', function () {
        return Inertia::render('Samples/Examples/Profile');
    })->name('profile');
    Route::get('pricing', function () {
        return Inertia::render('Samples/Examples/Pricing');
    })->name('pricing');
    Route::get('project-management-app', function () {
        return Inertia::render('Samples/Examples/ProjectApp');
    })->name('project-management-app');
    Route::get('todo-app', function () {
        return Inertia::render('Samples/Examples/TodoApp');
    })->name('todo-app');
    Route::get('email-app', function () {
        return Inertia::render('Samples/Examples/EmailApp');
    })->name('email-app');
    Route::get('chat-app', function () {
        return Inertia::render('Samples/Examples/ChatApp');
    })->name('chat-app');
    //Component Pages
    Route::get('alert', function () {
        return Inertia::render('Samples/Components/Alert');
    })->name('alert');
    Route::get('avatar', function () {
        return Inertia::render('Samples/Components/Avatar');
    })->name('avatar');
    Route::get('badge', function () {
        return Inertia::render('Samples/Components/Badge');
    })->name('badge');
    Route::get('breadcrumb', function () {
        return Inertia::render('Samples/Components/Breadcrumb');
    })->name('breadcrumb');
    Route::get('button', function () {
        return Inertia::render('Samples/Components/Button');
    })->name('button');
    Route::get('chart', function () {
        return Inertia::render('Samples/Components/Chart');
    })->name('chart');
    Route::get('collapsible', function () {
        return Inertia::render('Samples/Components/Collapsible');
    })->name('collapsible');
    Route::get('content-box', function () {
        return Inertia::render('Samples/Component/ContentBox');
    })->name('content-box');
    Route::get('dropdown', function () {
        return Inertia::render('Samples/Components/Dropdown');
    })->name('dropdown');
    Route::get('list', function () {
        return Inertia::render('Samples/Components/List');
    })->name('list');
    Route::get('loading', function () {
        return Inertia::render('Samples/Components/Loading');
    })->name('loading');
    Route::get('modal', function () {
        return Inertia::render('Samples/Components/Modal');
    })->name('modal');
    Route::get('pagination', function () {
        return Inertia::render('Samples/Components/Paginate');
    })->name('pagination');
    Route::get('progress', function () {
        return Inertia::render('Samples/Components/Progress');
    })->name('progress');
    Route::get('tab', function () {
        return Inertia::render('Samples/Components/Tab');
    })->name('tab');
    Route::get('table', function () {
        return Inertia::render('Samples/Components/Table', [
            'users' => \App\Models\User::all()
        ]);
    })->name('table');
    Route::match(['get', 'post'], 'back-end-table', [\App\Http\Controllers\DemoContentController::class, 'index'])->name('back-end-table');

    /*TODO: Toastr Feature
    Route::get('toastr',function (){returned Inertia::render('Samples/Components/Toastr');})->name('toastr');*/
    Route::get('tooltip', function () {
        return Inertia::render('Samples/Components/Tooltip');
    })->name('tooltip');
    // Layout Pages
    Route::get('layout-structure', function () {
        return Inertia::render('Samples/Layouts/LayoutStructure');
    })->name('layout-structure');
    Route::get('layout-grid', function () {
        return Inertia::render('Samples/Layouts/Grid');
    })->name('layout-grid');
    Route::get('layout-statistic-widget', function () {
        return Inertia::render('Samples/Layouts/StatisticWidget');
    })->name('layout-statistic-widget');
    Route::get('test', function () {
        return Inertia::render('Samples/Test');
    })->name('test');
    // Form Pages
    Route::get('form-structure', function () {
        return Inertia::render('Samples/FormElements/FormStructure');
    })->name('form-structure');
    Route::get('form-input-group', function () {
        return Inertia::render('Samples/FormElements/InputGroup');
    })->name('form-input-group');
    Route::get('form-simple-field', function () {
        return Inertia::render('Samples/FormElements/SimpleField');
    })->name('form-simple-field');
    Route::get('form-repeatable-field', function () {
        return Inertia::render('Samples/FormElements/RepeatableField');
    })->name('form-repeatable-field');
    Route::get('form-date-field', function () {
        return Inertia::render('Samples/FormElements/DateField');
    })->name('form-date-field');
    Route::get('form-select-input', function () {
        return Inertia::render('Samples/FormElements/SelectInput', [
            'users' => \App\Models\User::all()
        ]);
    })->name('form-select-input');
    Route::get('form-tag-input', function () {
        return Inertia::render('Samples/FormElements/TagInput');
    })->name('form-tag-input');
    Route::get('form-validation', function () {
        return Inertia::render('Samples/FormElements/Validation');
    })->name('form-validation');
});


Route::post('upload__file-image',[ImageUploadController::class,'uploadImage'])->name('upload_image');


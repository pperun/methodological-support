<?php

namespace App\Nova;

use App\Models;
use Illuminate\Validation\Rules\Password;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class Admin extends Resource
{
    public static $model = Models\Admin::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'email',
    ];

    public static function label()
    {
        return __('Admins');
    }

    public static function singularLabel()
    {
        return __('Admin');
    }

    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'string', 'max:255'),

            Fields\Text::make(__('Email'), 'email')
                ->rules('required', 'email', 'max:255')
                ->creationRules('unique:admins,email')
                ->updateRules('unique:admins,email,{{resourceId}}')
                ->sortable(),

            Fields\Password::make(__('Password'), 'password')
                ->onlyOnForms()
                ->creationRules('required', Password::defaults())
                ->updateRules('nullable', Password::defaults()),

            Fields\Timezone::make(__('Timezone'), 'timezone')
                ->rules('required')
                ->sortable()
                ->default('UTC'),

            ...$this->getTimestampsFields(),
        ];
    }
}

<?php

namespace App\Nova;

use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    public static $model = \App\Models\User::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'surname', 'patronymic', 'position_at_work',
    ];

    public static function label()
    {
        return __('Users');
    }

    public static function singularLabel()
    {
        return __('User');
    }

    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Surname'), 'surname')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Patronymic'), 'patronymic')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Position at work'), 'position_at_work')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            ...$this->getTimestampsFields(),

        ];
    }
}

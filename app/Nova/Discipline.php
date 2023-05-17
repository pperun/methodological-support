<?php

namespace App\Nova;

use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class Discipline extends Resource
{
    public static $model = \App\Models\Discipline::class;

    public static $search = ['name'];

    public static $title = 'name';

    public static function label()
    {
        return __('Disciplines');
    }

    public static function singularLabel()
    {
        return __('Discipline');
    }

    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->filterable()
                ->rules('required', 'max:255'),

            Fields\BelongsTo::make(__('Course'), 'course', Course::class)
                ->sortable()
                ->rules('required'),

            Fields\BelongsTo::make(__('Lector'), 'lector', User::class)
                ->sortable()
                ->rules('required'),

            Fields\BelongsTo::make(__('Practitioner'), 'practitioner', User::class)
                ->sortable()
                ->rules('required'),

            Fields\BelongsToMany::make(__('Documents'), 'documents', Document::class)
                ->searchable()
                ->show(),
        ];
    }
}

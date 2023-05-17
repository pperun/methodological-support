<?php

namespace App\Nova;

use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class EducationLevel extends Resource
{
    public static $model = \App\Models\EducationLevel::class;

    public static $title = 'name';

    public static $search = [
        'name',
    ];

    public static function label()
    {
        return __('Education levels');
    }

    public static function singularLabel()
    {
        return __('Education level');
    }

    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Text::make(__('Name'), 'name')->sortable(),

            ...$this->getTimestampsFields(),

            Fields\HasMany::make(__('Courses'), 'courses', Course::class),
        ];
    }

    public function cards(NovaRequest $request)
    {
        return [];
    }

    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}

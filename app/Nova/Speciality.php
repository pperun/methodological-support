<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class Speciality extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Speciality>
     */
    public static $model = \App\Models\Speciality::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name',
    ];

    public static function label()
    {
        return __('Specialities');
    }

    public static function singularLabel()
    {
        return __('Speciality');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Number::make(__('Code'), 'code')
                ->sortable()
                ->rules('required'),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\HasMany::make(__('Specializations'), 'specializations', Specialization::class),

            ...$this->getTimestampsFields(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
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

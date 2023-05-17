<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Course>
     */
    public static $model = \App\Models\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'courseName';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'course_year', 'courseName',
    ];

    public static function label()
    {
        return __('Courses');
    }

    public static function singularLabel()
    {
        return __('Course');
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

            Fields\Number::make(__('Course year'), 'course_year')
                ->min(1)
                ->max(4)
                ->sortable()
                ->rules('required'),

            Fields\BelongsTo::make(__('Education level'), 'educationLevel', EducationLevel::class)
                ->sortable()
                ->rules('required'),

            Fields\BelongsTo::make(__('Group'), 'group', Group::class)
                ->sortable()
                ->rules('required'),

            Fields\BelongsTo::make(__('Specialization'), 'specialization', Specialization::class)
                ->sortable()
                ->rules('required'),
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

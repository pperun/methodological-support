<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class Document extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Document>
     */
    public static $model = \App\Models\Document::class;

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

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\BelongsTo::make(__('Document type'), 'documentType', DocumentType::class)
                ->sortable()
                ->rules('required'),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'max:1024'),

            Fields\URL::make(__('Link'), 'link')
                ->sortable()
                ->nullable(),

            Fields\File::make(__('File'), 'file')
                ->sortable()
                ->path('docs')
                ->rules('file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
                ->nullable()
                ->deletable(false)
                ->prunable(),

            Fields\BelongsToMany::make(__('Disciplines'), 'disciplines', Discipline::class),
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

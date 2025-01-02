<?php

namespace App\DataTables;

use App\Models\FreeQuoteForm;
use App\Models\FreeQuoteFormInformation;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FreeQuoteFormInformationDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                $edit = "<a href='".route('admin.free-quote-form-information.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.free-quote-form-information.destroy', $query->id)."' class='btn btn-danger ml-2' id='delete'><i class='fas fa-trash'></i></a>";

                return $edit.$delete;
            })
            ->addColumn('seen', function($query){
                if($query->seen === 'yes'){
                    return '<span class="badge badge-primary">Yes</span>';
                }else if($query->seen === 'no'){
                    return '<span class="badge badge-danger">No</span>';
                }
            })
            ->rawColumns(['action', 'seen'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(FreeQuoteForm $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('freequoteforminformation-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('your_name'),
            Column::make('your_email'),
            Column::make('your_mobile'),
            Column::make('seen'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'FreeQuoteFormInformation_' . date('YmdHis');
    }
}

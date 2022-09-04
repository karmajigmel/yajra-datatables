<?php

namespace App\DataTables;

use App\Models\Result;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ResultsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query));
            // ->addColumn('action', 'results.action')
            // ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Result $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Result $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('results-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('excel'),
                Button::make('print')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::make('exam_year'),
            Column::make('sch_name'),
            Column::make('stud_indexno'),
            Column::make('stud_name'),
            Column::make('stud_sex'),
            Column::make('stud_dob'),
            Column::make('sub1_name'),
            Column::make('sub_tot1'),
            Column::make('sub2_name'),
            Column::make('sub_tot2'),
            Column::make('sub3_name'),
            Column::make('sub_tot3'),
            Column::make('sub4_name'),
            Column::make('sub_tot4'),
            Column::make('sub5_name'),
            Column::make('sub_tot5'),
            Column::make('sub6_name'),
            Column::make('sub_tot6'),
            Column::make('SUPW_Grade'),
            Column::make('result'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Results_' . date('YmdHis');
    }
}

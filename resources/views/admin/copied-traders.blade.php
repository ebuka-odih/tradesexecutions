@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        All Deposits
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="block block-rounded">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">Full Table</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option">
                                                    <i class="si si-settings"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-vcenter">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            <i class="far fa-user"></i>
                                                        </th>
                                                        <th>Date</th>
                                                        <th>Trader</th>
                                                        <th class="text-center" style="width: 200px;">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($copied_traders as $item)

                                                        <tr>
                                                            <td class="text-center">
                                                                {{ optional($item->user)->name }}<br>
                                                                (@convert(optional($item->user)->balance))
                                                            </td>
                                                            <td class="fw-semibold">
                                                                {{ date('d-M-y', strtotime($item->created_at)) }}
                                                            </td>

                                                            <td>
                                                                {{ $item->trader->name }}
                                                            </td>

                                                            <td >
                                                                @if($item->status == 0)
                                                                    <a href="{{ route('admin.view_deposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="View Deposit" data-bs-original-title="View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                    <a href="{{ route('admin.approve_deposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Approve Deposit" data-bs-original-title="Approve">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                    {{--                                                    <a href="{{ route('admin.approve_deposit', $item->id) }}" class="btn btn-sm btn-success mb-1">Approve</a>--}}
                                                                @else
                                                                @endif
                                                                <form method="POST" action="{!! route('admin.deleteDeposit', $item->id) !!}" accept-charset="UTF-8">
                                                                    <input name="_method" value="DELETE" type="hidden">
                                                                    {{ csrf_field() }}

                                                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                                                        <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                                            <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                        </button>


                                                                    </div>

                                                                </form>
                                                                <button type="button" class="btn btn-sm btn-primary push mt-2" data-bs-toggle="modal" data-bs-target="#modal-block-popin">Edit Date</button>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>

@endsection

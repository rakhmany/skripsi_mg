@extends('layouts.main_user')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Customer</a></li>
    <li class="breadcrumb-item active">Order</li>
@endsection

@section('title')
    DataTables
@endsection

@section('css')

    
@endsection

@section('content')


<div class="card-header">
    <h4 class="card-title">Default Datatable</h4>
    <p class="card-title-desc">DataTables has most features enabled by
        default, so all you need to do to use it with your own tables is to call
        the construction function: <code>$().DataTable();</code>.
    </p>
</div>

<div class="card-body">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
        </tbody>
    </table>

</div>

@endsection


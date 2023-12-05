@push('head')
    <style type="text/css">   
      #sales-table th, td {
        border: 1px solid rgba(000, 0, 0, .5);
        padding: 8px;
      }
    </style>
@endpush
@extends('crudbooster::admin_template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class='panel panel-default'>
                    <div class='panel-heading' style="background-color:#dd4b39; color:#fff">Store 1</div>
                    <div class="panel-body">
                        <table id="sales-table" style="width:100%">
                            <tbody>
                                <tr>
                                    <td><label for="">Gross Sales</label>: 1000</td>
                                </tr>
                                <tr>
                                    <td><label for="">MTD Gross Sales</label>: 1000</td>
                                </tr>
                                <tr>
                                    <td><label for="">Month Target Sales</label>: 1000</td>
                                </tr>
                                <tr>
                                    <td><label for="">Sales Achievement</label>: 1000</td>
                                </tr>
                                <tr>
                                    <td><label for="">(MTD Gross Sales / Target Sales)</label>: 1000</td>
                                </tr>
                                <tr>
                                    <td><label for="">ADDS</label>: 1000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class='panel panel-default'>
                    <div class='panel-heading' style="background-color:#dd4b39; color:#fff">Store 2</div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class='panel panel-default'>
                    <div class='panel-heading' style="background-color:#dd4b39; color:#fff">Store 3</div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('bottom')

<script type="text/javascript">
    function preventBack() {
        window.history.forward();
    }
    window.onunload = function() {
        null;
    };
    setTimeout('preventBack()', 0);
 
    
</script>
@endpush
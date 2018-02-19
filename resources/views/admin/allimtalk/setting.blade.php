@extends('layouts.admin_app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        메시지 리스트
                    </div>
                    <div class="pull-right">                        
                        <a class="btn btn-default" href="{{route('admin.allimtalk.create')}}" role="button">등록</a>
                    </div>
                </div>                                
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>전송일시</th>
                                    <th>받는사람</th>
                                    <th>보내는사람</th>
                                    <th>내용</th>
                                    <th>상태</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allimtalks as $allimtalk)                                
                                <tr>
                                    <th scope="row">   <a  href="{{ route('admin.allimtalk.detail', $allimtalk->msg_seq) }}"> {{ $allimtalk->msg_seq }}  </a> </th>
                                    <td>                {{ $allimtalk->req_date }}  </td>
                                    <td>                {{ $allimtalk->call_to }}   </td>
                                    <td>                {{ $allimtalk->call_from }} </td>
                                    <td>                {{ $allimtalk->sms_txt}}    </td>
                                    <td>                {{ $allimtalk->cur_state}}  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>    
    <!-- pagenation -->
    <div class="text-center">{{ $allimtalks->links() }}</div>

</div>
<!-- /#page-wrapper -->
 
@endsection




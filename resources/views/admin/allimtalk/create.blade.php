@extends('layouts.admin_app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">등록화면</h1> 
        </div>
        <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->    

    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="{{route('admin.allimtalk.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group{{ $errors->has('call_from') ? ' has-error' : '' }}">
                    <label for="call_from">보내는 사람</label>
                    <input type="tel" class="form-control" id="call_from" name="call_from" maxlength="13" placeholder="ex) 010-1234-5678" value="{{ old('call_from') }}">
                    @if ($errors->has('call_from'))
                        <span class="help-block">
                            <strong>{{ $errors->first('call_from') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('call_to') ? ' has-error' : '' }}">
                    <label for="call_to">받는사람</label>
                    <input type="tel" class="form-control" id="call_to" name="call_to"  maxlength="13" placeholder="ex) 010-1234-5786" value="{{ old('call_to') }}">
                    @if ($errors->has('call_to'))
                        <span class="help-block">
                            <strong>{{ $errors->first('call_to') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('sms_txt') ? ' has-error' : '' }}">
                    <label for="sms_txt">내용</label>
                    <textarea class="form-control" rows="3" id="sms_txt" name="sms_txt" >{{ old('sms_txt') }}</textarea>
                    <script>
                        CKEDITOR.replace( 'sms_txt' );
                    </script>
                    @if ($errors->has('sms_txt'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sms_txt') }}</strong>
                        </span>
                    @endif
                </div>
               
                <button type="submit" class="btn btn-default">제출</button>
            </form>
        </div>
    </div>
</div>
@endsection

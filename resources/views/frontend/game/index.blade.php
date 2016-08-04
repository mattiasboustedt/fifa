@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('labels.frontend.auth.register_box_title') }}</div>

                <div class="panel-body">

                    {!! Form::open(['method' => 'post', 'route' => 'games.store', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('user_one_id', 'Player One', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {{ Form::select('user_one_id', $players, null, ['class' => 'form-control']) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        {!! Form::label('user_one_score', 'Player One Score', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::number('user_one_score', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('user_two_id', 'Player Two', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {{ Form::select('user_two_id', $players, null, ['class' => 'form-control']) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        {!! Form::label('user_two_score', 'Player Two Score', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::number('user_two_score', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Register Game', ['class' => 'btn btn-primary']) !!}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    {!! Form::close() !!}

                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
@endsection
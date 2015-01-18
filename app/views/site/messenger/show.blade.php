@extends('site.layouts.site')

@section('content')

    <aside class="right-side">
        <!-- Chat box -->

        <section class="col-lg-7 connectedSortable">
        <div class="box box-success">
            <div class="box-header">
                <i class="fa fa-comments-o"></i>
                <h3 class="box-title">{{$thread->subject}}</h3>
                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                    <div class="btn-group" data-toggle="btn-toggle" >
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>
                </div>
            </div>
            <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                @foreach($thread->messages as $message)
                <div class="item">
                    <img src="#" alt="user image" class="offline"/>
                    <p class="message" style="word-wrap: break-word;">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$message->created_at->diffForHumans()}}</small>
                            {{$message->user->username}}
                        </a>
                        {{{$message->body}}}
                    </p>
                </div>
                @endforeach
                <!-- /.item -->
            </div><!-- /.chat -->
            <div class="box-footer">
                {{Form::open(['route' => ['messenger.update', $thread->id], 'method' => 'PUT'])}}
                <div class="input-group">
                    <input name="message" class="form-control" placeholder="Type message..."/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div><!-- /.box (chat box) -->
        </section>

    </aside>
@stop
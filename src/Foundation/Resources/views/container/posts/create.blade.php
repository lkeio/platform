@extends('dashboard::layouts.dashboard')


@section('title',$type->name)




@section('content')


    <div class="app-content-body app-content-full">

        <!-- hbox layout -->
        <div class="hbox hbox-auto-xs bg-light ">
            <!-- column -->
            <div class="col w lter b-r">
                <div class="vbox">
                    <div class="wrapper b-b">
                        <h4 class="font-thin">{{$type->name or '' }}</h4>
                    </div>
                    <div class="nav-tabs-alt">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a data-target="#tab-1" role="tab" data-toggle="tab" aria-expanded="true">Русский</a>
                            </li>
                            <li class="">
                                <a data-target="#tab-2" role="tab" data-toggle="tab" aria-expanded="false">Английский</a>
                            </li>
                            <li class="">
                                <a data-target="#tab-3" role="tab" data-toggle="tab" aria-expanded="false">Японский</a>
                            </li>

                        </ul>
                    </div>
                    <div class="row-row">
                        <div class="cell scrollable hover">
                            <div class="cell-inner bg-white">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <div class="wrapper-md">

                                                    {!! $type->generateForm() !!}

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div class="wrapper-md">
                                            Month report
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="wrapper-md">
                                            Year report
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /column -->

            <!-- column -->
            <div class="col w lter b-r">
                <div class="vbox">
                    <div class="wrapper b-b text-right">

                        <div class="btn-group btn-group-sm" role="group" aria-label="...">
                            <button type="submit" form="form-group" class="btn btn-link"><i class="ion-ios-compose-outline fa fa-2x"></i></button>
                            <button type="submit" form="form-group-remove" class="btn btn-link"><i class="ion-ios-trash-outline  fa fa-2x"></i></button>
                        </div>


                    </div>
                    <div class="nav-tabs-alt">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a data-target="#tab-1" role="tab" data-toggle="tab" aria-expanded="true">SEO</a>
                            </li>
                            <li class="">
                                <a data-target="#tab-2" role="tab" data-toggle="tab" aria-expanded="false">Изображения</a>
                            </li>
                            <li class="">
                                <a data-target="#tab-3" role="tab" data-toggle="tab" aria-expanded="false">Модуль №3</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row-row">
                        <div class="cell scrollable hover">
                            <div class="cell-inner">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <div class="wrapper-md">
                                            This is the scrollable content, hover to show the scrollbar
                                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            You got the bottom
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div class="wrapper-md">
                                            Month report
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="wrapper-md">
                                            Year report
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /column -->


        </div>
        <!-- /hbox layout -->



    </div>













@stop





@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.content-header', ['header' => $header])

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 toggle-wrapper">
                        <div class="card">
                            <div class="card-header p-3">
                                <h3 class="card-title">
                                    <span id="date-title">Create Form</span>
                                </h3>
                                <div class="text-right">
                                    <a href="{{ route('forms.create') }}" class="btn btn-outline-info">
                                        <i class="fas fa-plus-circle fa-fw"></i> <span>Add</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form id="new-form" class="new-form" autocomplete="off" action="{{ route('forms.store') }}"  method="post">
                                    @csrf

                                    <div class="row justify-content-start">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title"> Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control title" id="title" placeholder=" Name" required="" value="{{ old('title') }}" />
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description <span class="text-danger">*</span></label>
                                                <textarea name="description" class="form-control description" id="description" placeholder=" Name" required="">{{ old('description') }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <input type="checkbox" name="status" value="1" id="status" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h4>Create Element</h4>
                                                        <a href="javascript: void(0)" id="add-more">Add More</a>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row" id="append-elements">
                                                        @include('forms.form-element', [
                                                            'formElements' => $formElements,
                                                        ])
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-outline-success save-btn">Create</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer-js')
    <script type="text/javascript">
        $(document).on('click', '#add-more', function(event) {
            event.preventDefault();
            $.ajax({
                url: location.href,
                type: 'get',
                dataType: 'json',
                cache: false,
                async: false,
                success: function (response) {
                    if ( response.status ) {
                        $(document).find('#append-elements').append(response.data.view);
                    }
                }
            });
            
        });
    </script>
@endsection
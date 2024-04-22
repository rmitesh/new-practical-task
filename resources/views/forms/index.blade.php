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
			      			    	<span id="date-title">View Forms</span>
			      			    </h3>
			      			    <div class="text-right">
			      			        <a href="{{ route('forms.create') }}" class="btn btn-outline-info">
                                        <i class="fas fa-plus-circle fa-fw"></i> <span>Add</span>
                                    </a>
			      			    </div>
		      			  	</div>
		      			  	<!-- /.card-header -->
		      			  	<div class="card-body">
		      			  		<div class="table-responsive">
		      			  			<table id="forms-dt" class="table table-hover forms-dt">
			      			      		<thead>
			      			      			<tr>
						      			        <th>Id</th>
						      			        <th>Title</th>
						      			        <th>Created At</th>
						      			        <th>Actions</th>
						      			    </tr>
			      			      		</thead>
			      			      		<tbody>
			      			      			<?php foreach ($forms as $form): ?>
			      			      				<tr>
				      			      				<td>{{ $form->id }}</td>
				      			      				<td>{{ $form->name }}</td>
				      			      				<td>{{ $form->created_at->format('dS F, Y h:i A') }}</td>
				      			      				<td>
				      			      					<a href="{{ route('form.edit') }}" data-xid="{{ $form->id }}" class="edit-form btn btn-outline-info btn-sm mr-2"><i class="fas fa-edit"></i> Update</a>
				      			      					<a href="{{ route('form.destroy') }}" data-xid="{{ $form->id }}" class="delete-form btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
				      			      				</td>
			      			      				</tr> 
			      			      			<?php endforeach ?>
			      			      		</tbody>
			      			    	</table>
		      			  		</div>
		      			  	</div>
		      			  	<!-- /.card-body -->
		      			</div>
		      		</div>
		      	</div>
		    </div>
		</section>
	</div>
	
@endsection

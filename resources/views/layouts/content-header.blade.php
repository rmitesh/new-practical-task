@if ( !empty( $header ) )
	<section class="content-header">
	  	<div class="container-fluid">
	    	<div class="row mb-2">
		      	<div class="col-sm-6">
		        	<h1>{{ $header['title'] }}</h1>
		      	</div>
		      	<div class="col-sm-6">
		        	<ol class="breadcrumb float-sm-right">
		        		@foreach ($header['breadcrumbs'] as $breadcrumb => $link)
	        				@if ($link != '#')
	        					<li class="breadcrumb-item">
	        						<a href="{{ route($link) }}">{{ $breadcrumb }}</a>
	        					</li>
	        				@else
	        					<li class="breadcrumb-item {{ $loop->iteration == $loop->count ? 'active' : '' }}">{{ $breadcrumb }}</li>
	        				@endif
		        		@endforeach
		        	</ol>
		      	</div>
		    </div>
	  	</div><!-- /.container-fluid -->
	</section>
@endif

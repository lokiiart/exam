@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">酒店属性</a></li>
			<li><a href="#tab-meta-data" data-toggle="tab">酒店图片</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Blog Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($hotel)){{ URL::to('admin/hotels/' . $hotel->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Post Title -->
				<div class="form-group {{{ $errors->has('title') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="title">酒店名称</label>
						<input class="form-control" type="text" name="title" id="title" value="{{{ Input::old('title', isset($hotel) ? $hotel->title : null) }}}" />
						{{{ $errors->first('title', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ post title -->
				<!-- Post Price -->
				<div class="form-group {{{ $errors->has('price') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="price">价格</label>
						<input class="form-control" type="text" name="price" id="price" value="{{{ Input::old('price', isset($hotel) ? $hotel->price : null) }}}" />
						{{{ $errors->first('price', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ post price -->
				<!-- Post Link -->
				<div class="form-group {{{ $errors->has('link') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="link">链接到</label>
						<input class="form-control" type="text" name="link" id="link" value="{{{ Input::old('link', isset($hotel) ? $hotel->link : null) }}}" />
						{{{ $errors->first('link', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ post link -->

				<!-- Content -->
				<div class="form-group {{{ $errors->has('content') ? 'error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="content">Content</label>
						<textarea class="form-control full-width wysihtml5" name="content" value="content" rows="10">{{{ Input::old('content', isset($hotel) ? $hotel->content : null) }}}</textarea>
						{{{ $errors->first('content', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ content -->
			</div>
			<!-- ./ general tab -->

			<!-- Meta Data tab -->
			<div class="tab-pane" id="tab-meta-data">
				<!-- Post Price -->
				<div class="form-group {{{ $errors->has('pic_url') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="pic_url">图片</label>
						<input class="form-control" type="text" name="pic_url" id="pic_url" value="" />
					</div>
				</div>
				<!-- ./ post price -->
			</div>
			<!-- ./ meta data tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-12">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
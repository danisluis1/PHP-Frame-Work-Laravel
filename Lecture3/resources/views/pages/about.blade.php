@extends('templates.master')
@section('content')
<div class="container">
			<div class="content">
				<div class="title">Trang About</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
@stop
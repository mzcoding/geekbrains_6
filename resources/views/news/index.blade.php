@extends('layouts.main')

@section('content')
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			@forelse($listNews as $news)
			<div class="post-preview">
				<a href="{{ route('news.show', ['id' => $news->id]) }}">
					<h2 class="post-title">
						{{ $news->title }}
					</h2>
				</a>
				<p class="post-meta">Категория
					<a href="#">{{ optional($news->category)->title }}</a>
					в {{ now() }}</p>
			</div>
			<hr>
			@empty
				<h2>Новостей нет</h2>
		    @endforelse


			<!-- Pager -->
			<div class="clearfix">
				<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
			</div>
		</div>
	</div>

@stop







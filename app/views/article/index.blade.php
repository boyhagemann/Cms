<h1>article index</h1>

@foreach($collection as $article)
	<div class="row">
		<h2><a href="{{ URL::route('article.show', $article->id) }}">{{ $article->id }} - {{ $article->title }}</a></h2>
	</div>
@endforeach
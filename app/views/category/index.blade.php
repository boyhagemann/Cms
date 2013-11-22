<h1>category index</h1>

@foreach($collection as $category)
	<div class="row">
		<h2><a href="{{ URL::route('category.show', $article->id) }}">{{ $category->id }} - {{ $category->title }}</a></h2>
	</div>
@endforeach
<h1>test index</h1>

@foreach($collection as $test)
	<div class="row">
		<h2><a href="{{ URL::route('test.show', $article->id) }}">{{ $test->id }} - {{ $test->title }}</a></h2>
	</div>
@endforeach
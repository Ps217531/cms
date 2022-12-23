@twillBlockTitle('news articles')
@twillBlockIcon('text')
@twillBlockGroup('app')

@php
$news = App\Models\news::all();
@endphp

@formField('input', [
    'name' => 'title',
    'label' => 'title',
    'maxlength' => 100
])

@formField('multi_select', [
	'name' => 'item',
	'label' => 'menu item',
	'note' => 'Selecteer news artikel',
	'unpack' => true,
	'min' => 1,
    'max' => 5,
	'options' => $news->map(function ($news) {
		return [
			'value' => $news->title,
			'label' => $news->title,
		];
	})->toArray(),
])


@formField('multi_select', [
	'name' => 'category',
	'label' => 'menu item',
	'note' => 'Selecteer een category',
	'unpack' => true,
	'min' => 1,
    'max' => 5,
	'options' => $news->map(function ($news) {
		return [
			'value' => $news->category,
			'label' => $news->category,
		];
	})->toArray(),
])

<!--  -->
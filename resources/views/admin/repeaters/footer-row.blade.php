@twillRepeaterTitle('Footer row')
@twillRepeaterTrigger('Add Row')
@twillRepeaterGroup('app')

<!-- input field -->


@formField('wysiwyg', [
'name' => 'item',
'type' => 'textarea',
'default'   => '<h1>Hello world</h1>',
'toolbarOptions' => [
    'link',
['header' => [1, 2, false] ],
'bold',
'italic',
'underline',
['color' => []],
['background' => []],
'code-block'
],
'label' => 'Paragraph',
])
<!-- align items -->
@formField('select', [
'name' => 'align',
'label' => 'Alignment',
'unpack' => true,
'default' => 'float-start p-1',
'options' => [
[
'value' => 'float-start  border',
'label' => 'Left en border'
],
[
'value' => 'mx-auto d-block',
'label' => 'Center'
],
[
'value' => 'float-end  border',
'label' => 'Right'
],
]
])

<!-- background -->




@formField('color', [
    'name' => 'main_color',
    'label' => 'Navigation color',
])

@formField('color', [
    'name' => 'text_color',
    'label' => 'Text color',
])

@formField('select', [
'name' => 'variable_menu_width',
'label' => 'Menu Width',
'options' => [
['value' => 'w-10', 'label' => '10%'],
['value' => 'w-25', 'label' => '25%'],
['value' => 'w-30', 'label' => '30%'],
['value' => 'w-50', 'label' => '50%'],
['value' => 'w-75', 'label' => '75%'],
['value' => 'w-100', 'label' => '100%'],
]
])


@formField('wysiwyg', [
'name' => 'input_title',
'type' => 'textarea',
'toolbarOptions' => [
['header' => [1, 2, false] ],
'bold',
'italic',
'link',
'underline',
['color' => []],
['background' => []],
'code-block'
],
'label' => 'Paragraph',
'rows' => 4
])


@formField('files', [
'name' => 'logo',
'label' => 'Logo',
])




@formField('select', [
'name' => 'variable_logo_height',
'label' => 'Logo Size',
'options' => [
['value' => '10', 'label' => '10%'],
['value' => '25', 'label' => '25%'],
['value' => '50', 'label' => '50%'],
['value' => '75', 'label' => '75%'],
['value' => '100', 'label' => '100%'],
]
])
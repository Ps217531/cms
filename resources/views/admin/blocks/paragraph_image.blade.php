@formField('medias', [
'name' => 'variable_image',
'label' => 'Image',
])

@formField('select', [
'name' => 'variable_image_width',
'label' => 'Image Size',
'options' => [
['value' => 'w-25', 'label' => '25%'],
['value' => 'w-50', 'label' => '50%'],
['value' => 'w-75', 'label' => '75%'],
['value' => 'w-100', 'label' => '100%'],
]
])

@formField('select', [
'name' => 'variable_image_alignment',
'label' => 'Image Alignment',
'unpack' => true,
'options' => [
[
'value' => 'float-start p-5 d-inline d-sm-block',
'label' => 'Left'
],
[
'value' => 'mx-auto d-block',
'label' => 'Center'
],
[
'value' => 'float-end p-5  d-inline d-sm-block',
'label' => 'Right'
],
]
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



@formField('wysiwyg', [
'name' => 'paragraph',
'type' => 'textarea',
'toolbarOptions' => [
['header' => [1, 2, false] ],
'bold',
'italic',
'underline',
['color' => []],
['background' => []],
'code-block'
],
'label' => 'Paragraph',
'rows' => 4
])

@formField('color', [
'name' => 'main_color',
'label' => 'Background Color'
])

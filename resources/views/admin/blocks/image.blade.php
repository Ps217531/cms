@formField('medias', [
'name' => 'variable_image',
'label' => 'Image',
])



@formField('select', [
'name' => 'variable_image_width',
'label' => 'Image Size',
'options' => [
['value' => 'w-10', 'label' => '10%'],
['value' => 'w-25', 'label' => '25%'],
['value' => 'w-30', 'label' => '30%'],
['value' => 'w-50', 'label' => '50%'],
['value' => 'w-75', 'label' => '75%'],
['value' => 'w-100', 'label' => '100%'],
]
])
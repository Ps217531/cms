@twillBlockTitle('Text in image')

@formField('input', [
    'name' => 'title',
    'label' => 'Title',



   
])

@formField('input', [
    'name' => 'subtitle',
    'label' => 'Subtitle',
  
])

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
'value' => 'float-start d-block',
'label' => 'Left'
],
[
    
'value' => 'mx-auto d-block',
'label' => 'Center'
],
[
'value' => 'float-end d-block',
'label' => 'Right'
],
]
])

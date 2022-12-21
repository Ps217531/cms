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

@formField('input', [
'name' => 'input_title',
'label' => 'Title',
])

@formField('color', [
    'name' => 'main_color',
    'label' => 'Title color',
])
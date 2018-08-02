@include('laramanager::partials.elements.form.text', ['field' => [
    'name' => 'data[filename]',
    'label' => 'Image Filename',
    'value' => $object->data('filename')
]])

@include('laramanager::partials.elements.form.text', ['field' => [
    'name' => 'data[title]',
    'label' => 'Title',
    'value' => $object->data('title')
]])

@include('laramanager::partials.elements.form.textarea', ['field' => [
    'name' => 'data[description]',
    'label' => 'Description',
    'value' => $object->data('description')
]])
@extends('layout.layout')
@section('title', 'Dynamic Form Page')
@section('content')
<div class="container">
    <h2>Generated Form</h2>
    <!-- Container where the dynamic form will be created -->
    <div id="dynamicFormContainer"></div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Retrieve the form data array from session storage
        const formDataArray = JSON.parse(sessionStorage.getItem('formDataArray'));
        // Get the container where the dynamic form will be generated
        const formContainer = document.getElementById('dynamicFormContainer');
        // Create a form element
        const dynamicForm = document.createElement('form');
        dynamicForm.setAttribute('method', 'POST');
        // Loop through the formDataArray to create dynamic fields
        formDataArray.forEach(fieldData => {
            // Create a div for each form group
            const formGroup = document.createElement('div');
            formGroup.classList.add('form-group', 'my-3');
            // Create the label element
            const label = document.createElement('label');
            label.innerText = fieldData.label;
            // Create the input element based on the field type
            let input;
            switch (fieldData.type) {
                case 'text':
                    input = document.createElement('input');
                    input.setAttribute('type', 'text');
                    break;
                case 'textarea':
                    input = document.createElement('textarea');
                    break;
                case 'select':
                    input = document.createElement('select');
                    // Add options if needed
                    break;
                default:
                    input = document.createElement('input');
                    input.setAttribute('type', fieldData.type);
            }
            // Add classes and attributes to the input element
            input.classList.add('form-control');
            // Append label and input to the form group
            formGroup.appendChild(label);
            formGroup.appendChild(input);
            // Append the form group to the dynamic form
            dynamicForm.appendChild(formGroup);
        });
        // Append the dynamic form to the container
        formContainer.appendChild(dynamicForm);
    });
</script>
@endsection


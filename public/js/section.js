$(document).ready(function () {
    $('#section-draggable').on('click', function () {
        var sectionType = $(this).data('type');
        var fieldHtml = '';

        switch (sectionType) {
            case 'section':
                fieldHtml = '<div class="form-builder mb-4 p-4">' +
                    '<h5 class="fw-semibold editable-heading">Description Information</h5>' +
                    '<div class="d-grid gap-3"></div>' +
                    '</div>';
                break;
        }

        var $fieldElement = $(fieldHtml);
        $('#parent-section').append($fieldElement);

        // Reinitialize draggable and droppable after appending a new section
        initializeDraggable();
        initializeDroppable();
    });

    // Initialize draggable elements
    function initializeDraggable() {
        $('.draggable').draggable({
            helper: 'clone'
        });
    }

    // Initialize droppable areas
    function initializeDroppable() {
        $('.form-builder').droppable({
            accept: '.draggable',
            drop: function (event, ui) {
                var fieldType = ui.helper.data('type');
                var fieldHtml = generateFieldHtml(fieldType);

                var $fieldElement = $(fieldHtml);

                // Append the field to the form builder area
                $(this).append($fieldElement);

                // Enable label editing
                enableLabelEditing($fieldElement);
            }
        });
    }

    // Generate the appropriate HTML based on the field type
    function generateFieldHtml(fieldType) {
        var fieldHtml = '';

        switch (fieldType) {
            case 'single-line':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Single Line: </label>' +
                    '<input type="text" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'multi-line':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Multi Line: </label>' +
                    '<textarea name="text[]" class="form-control" rows="2" style="height: 65px;"></textarea>' +
                    '</div>';
                break;
            case 'email':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Email: </label>' +
                    '<input type="email" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'number':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Number: </label>' +
                    '<input type="number" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'pick-list':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Pick List: </label>' +
                    '<select name="text[]" class="form-control">' +
                    '<option value="Option 1">Option 1</option>' +
                    '<option value="Option 2">Option 2</option>' +
                    '</select>' +
                    '</div>';
                break;
            case 'multi-select':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Multi-Select: </label>' +
                    '<select name="text[]" class="form-control" multiple>' +
                    '<option value="Option 1">Option 1</option>' +
                    '<option value="Option 2">Option 2</option>' +
                    '</select>' +
                    '</div>';
                break;
            case 'date':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Date: </label>' +
                    '<input type="date" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'datetime':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Date/Time: </label>' +
                    '<input type="datetime-local" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'auto-number':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Auto-Number: </label>' +
                    '<input type="text" name="text[]" class="form-control" readonly>' +
                    '</div>';
                break;
            case 'currency':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Currency: </label>' +
                    '<input type="text" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'decimal':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Decimal: </label>' +
                    '<input type="number" step="0.01" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'percentage':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Percentage: </label>' +
                    '<input type="number" step="0.01" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'long-integer':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Long Integer: </label>' +
                    '<input type="number" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'checkbox':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Check Box: </label>' +
                    '<input type="checkbox" name="text[]" class="form-check-input">' +
                    '</div>';
                break;
            case 'url':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">URL: </label>' +
                    '<input type="url" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'lookup':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Lookup: </label>' +
                    '<input type="text" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'formula':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">Formula: </label>' +
                    '<input type="text" name="text[]" class="form-control" readonly>' +
                    '</div>';
                break;
            case 'user':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">User: </label>' +
                    '<input type="text" name="text[]" class="form-control">' +
                    '</div>';
                break;
            case 'file-upload':
                fieldHtml = '<div class="dropped-field mb-3">' +
                    '<label class="form-label editable-label">File Upload: </label>' +
                    '<input type="file" name="file[]" class="form-control">' +
                    '</div>';
                break;
            default:
                fieldHtml = '';
        }

        return fieldHtml;
    }

    // Enable label editing

    $('#parent-section').on('click', '.editable-heading', function () {
        var $heading = $(this);
        var currentText = $heading.text();
        // Replace heading with an input field to edit the text
        var $input = $('<input type="text" />').val(currentText);
        $heading.replaceWith($input);
        // When input loses focus or enter is pressed, update the heading
        $input.on('blur keyup', function (e) {
            if (e.type === 'blur' || (e.type === 'keyup' && e.key === 'Enter')) {
                var newText = $input.val();
                var $newHeading = $('<h5 class="fw-semibold editable-heading"></h5>').text(newText);
                $input.replaceWith($newHeading);
            }
        }).focus();
    });


    function enableLabelEditing($fieldElement) {
        $fieldElement.find('.editable-label').one('click', function () {
            var $label = $(this);
            var currentText = $label.text();
            var $input = $('<input type="text" class="label-edit-input" value="' + currentText + '" />');

            // Replace label with input for editing
            $label.replaceWith($input);

            // Handle focus out or enter key to finalize the edit
            $input.focus().on('blur keyup', function (e) {
                if (e.type === 'blur' || (e.type === 'keyup' && e.key === 'Enter')) {
                    var newText = $input.val() || currentText; // Retain original text if input is empty
                    $input.replaceWith('<label class="form-label editable-label">' + newText + '</label>');

                    // Re-enable label editing after finalizing the edit
                    enableLabelEditing($fieldElement);
                }
            });
        });
    }


    // Initialize all components
    initializeDraggable();
    initializeDroppable();
});
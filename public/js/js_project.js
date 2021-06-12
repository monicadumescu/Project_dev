var pageAction = (function () {

    function bindRemoveItem() {
        jQuery('#js_person_list').on('click', '.js_person_remove', function (e) {
            var confirmation = confirm('Remove person?')
            if(confirmation) {
                jQuery(this).closest('.js_person_item').remove()
            }
        })
    }

    function bindAddItemButton() {
        jQuery('#js_person_add').on('click', function (e) {
            var personName = jQuery('#js_person_name').val().trim()

            if('' === personName) {
                alert('Please input person name')
                return false
            }

            var newElement = jQuery('<div class="person_list_item js_person_item">')
            newElement.html(personName);
            newElement.prepend(jQuery('<div class="person_remove js_person_remove">X</div>'))
            jQuery('#js_person_list').prepend(newElement)

            jQuery('#js_person_name').empty()
        })
    }

    function readEvents() {
        bindRemoveItem()
        bindAddItemButton()
    }

    function run() {
        window.addEventListener('DOMContentLoaded', () => {
            readEvents()
        })
    }

    return {
        run: run
    }

})()


pageAction.run()
//Module revealing pattern was used

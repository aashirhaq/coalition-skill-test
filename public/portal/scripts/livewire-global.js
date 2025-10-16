// hook to catch after every livewire request
Livewire.hook('message.processed', (message, component) => {
    let errors = message.response.serverMemo.errors;

    // Only scroll if we have an error bag with validation messages
    if (Object.keys(errors).length > 0) {

        let errorDiv = document.getElementById(Object.keys(errors)[0]);

        // if we have an error element and it's not visible in viewport
        if (errorDiv && !isScrolledIntoView(errorDiv)) {
            errorDiv.focus();
        }
    }
})

document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
                if (cb !== this) cb.checked = false;
            });
        }
    });
});


//<!-- Carlos Rodrigo Briseño Ruiz -->

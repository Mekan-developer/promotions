//  import './bootstrap';
 import './darkMode';
 import './flowbite';
 import './datePicker';

document.addEventListener('livewire:navigated', () => {
    initFlowbite();
})

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        const alertMessage = document.getElementById('alert-message');
        if (alertMessage) {
            alertMessage.remove();
        }
    }, 10000); // 10 seconds
});


Alpine.data('dropdown', () => ({
    open: false,
 
    toggle() {
        this.open = ! this.open
    }
}))

Alpine.store('counter', {
    count: 0,
    increment() {
        this.count++;
    }
});




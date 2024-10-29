// 
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Flatpickr for the start date with Livewire update
    flatpickr("#datepicker-range-start", {
        dateFormat: "Y-m-d",
        onChange: function(selectedDates) {
            // Emit the start_date change to Livewire
            console.log(selectedDates[0].toISOString().split('T')[0])
            Livewire.dispatch('startDateUpdated', selectedDates[0].toISOString().split('T')[0]);
        }
    });

    // Initialize Flatpickr for the end date with Livewire update
    flatpickr("#datepicker-range-end", {
        dateFormat: "Y-m-d",
        onChange: function(selectedDates) {
            console.log(selectedDates[0].toISOString().split('T')[0])
            // Emit the end_date change to Livewire
            Livewire.dispatch('endDateUpdated', selectedDates[0].toISOString().split('T')[0]);
        }
    });
});
// resources/js/form-validation.js

import { twMerge } from 'tailwind-merge';

document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');
    const errorMessage = document.getElementById('email-error');

    if (errorMessage) {
        emailInput.className = twMerge(emailInput.className, 'border-red-500');
    }
});

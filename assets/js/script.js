document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('active');
            
            // Change icon based on menu state
            const icon = this.querySelector('i');
            if (menu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }
    
    // Form validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let valid = true;
            
            // Clear previous errors
            const errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(element => {
                element.textContent = '';
            });
            
            // Validate name
            const name = document.getElementById('name');
            if (name.value.trim() === '') {
                document.getElementById('nameError').textContent = 'Name is required';
                valid = false;
            }
            
            // Validate email
            const email = document.getElementById('email');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email.value.trim() === '') {
                document.getElementById('emailError').textContent = 'Email is required';
                valid = false;
            } else if (!emailPattern.test(email.value)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email';
                valid = false;
            }
            
            // Validate subject
            const subject = document.getElementById('subject');
            if (subject.value.trim() === '') {
                document.getElementById('subjectError').textContent = 'Subject is required';
                valid = false;
            }
            
            // Validate message
            const message = document.getElementById('message');
            if (message.value.trim() === '') {
                document.getElementById('messageError').textContent = 'Message is required';
                valid = false;
            }
            
            if (!valid) {
                e.preventDefault();
            }
        });
    }
    
    // Accordion functionality for web programming page
    const accordionItems = document.querySelectorAll('.accordion-item');
    if (accordionItems.length > 0) {
        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            header.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
        
        // Open the first accordion by default
        accordionItems[0].classList.add('active');
    }
    
    // Add animation to elements when they come into view
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.skill-card, .timeline-item, .education-item, .interest-item');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    // Set initial state for scroll animation elements
    const scrollElements = document.querySelectorAll('.skill-card, .timeline-item, .education-item, .interest-item');
    scrollElements.forEach(element => {
        element.style.opacity = 0;
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'all 0.5s ease-out';
    });
    
    // Run animation on scroll
    window.addEventListener('scroll', animateOnScroll);
    // Run once on page load
    animateOnScroll();
});

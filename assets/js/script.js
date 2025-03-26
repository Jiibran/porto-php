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
    
    // Enhanced accordion functionality for web programming page
    const accordionItems = document.querySelectorAll('.accordion-item');
    if (accordionItems.length > 0) {
        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            const content = item.querySelector('.accordion-content');
            const icon = item.querySelector('.accordion-toggle i');
            
            // Set initial height for transition
            content.style.maxHeight = '0';
            
            header.addEventListener('click', () => {
                // Toggle active class
                item.classList.toggle('active');
                
                // Toggle icon
                if (item.classList.contains('active')) {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                    content.style.maxHeight = content.scrollHeight + 'px';
                } else {
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                    content.style.maxHeight = '0';
                }
            });
        });
        
        // Open the first accordion by default
        const firstItem = accordionItems[0];
        firstItem.classList.add('active');
        const firstIcon = firstItem.querySelector('.accordion-toggle i');
        const firstContent = firstItem.querySelector('.accordion-content');
        
        firstIcon.classList.remove('fa-plus');
        firstIcon.classList.add('fa-minus');
        firstContent.style.maxHeight = firstContent.scrollHeight + 'px';
    }
    
    // Advanced scroll animations
    const animateElements = document.querySelectorAll('.skill-card, .experience-card, .education-card, .interest-item, .contact-card');
    
    const animateOnScroll = () => {
        const triggerBottom = window.innerHeight * 0.8;
        
        animateElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            
            if (elementTop < triggerBottom) {
                element.classList.add('appear');
            }
        });
    };
    
    // Add appear class for CSS animations
    animateElements.forEach(element => {
        element.classList.add('animate-item');
    });
    
    // Run animation on scroll
    window.addEventListener('scroll', animateOnScroll);
    
    // Run once on page load
    animateOnScroll();
    
    // Add parallax effect to hero section
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPosition = `50% ${scrollPosition * 0.4}px`;
        });
    }
});

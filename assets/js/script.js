document.addEventListener("DOMContentLoaded", function() {
    // Select all nav-links that belong to a dropdown
    const dropdownLinks = document.querySelectorAll('.nav-item.dropdown > .nav-link');

    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Apply interaction logic for mobile and tablet screens (under 992px)
            if (window.innerWidth < 992) {
                const menu = this.nextElementSibling;
                const isOpen = menu.classList.contains('show');

                // If the sub-menu is currently closed
                if (!isOpen) {
                    // Prevent the immediate jump to the page
                    e.preventDefault();
                    e.stopPropagation();

                    // Close any other open dropdowns to keep the menu tidy (accordion style)
                    document.querySelectorAll('.offcanvas-body .dropdown-menu').forEach(m => {
                        m.classList.remove('show');
                    });
                    
                    // Reset all arrows to downward position
                    document.querySelectorAll('.dropdown-arrow').forEach(arrow => {
                        arrow.style.transform = 'rotate(0deg)';
                    });

                    // Open the selected drawer and rotate its arrow
                    menu.classList.add('show');
                    const arrow = this.querySelector('.dropdown-arrow');
                    if(arrow) arrow.style.transform = 'rotate(180deg)';
                } 
                // If the menu is already open, the next click follows the href link naturally
            }
        });
    });

    // Close drawers if clicking outside the navigation area while on mobile
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-item.dropdown') && window.innerWidth < 992) {
            document.querySelectorAll('.offcanvas-body .dropdown-menu').forEach(m => {
                m.classList.remove('show');
            });
            document.querySelectorAll('.dropdown-arrow').forEach(arrow => {
                arrow.style.transform = 'rotate(0deg)';
            });
        }
    });
});
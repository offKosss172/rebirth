document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.header__menu-general a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем ширину экрана
            if (window.innerWidth > 1020) {
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const headerHeight = document.querySelector('#header').offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});

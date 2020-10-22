jQuery(function($){
    $( document ).ready(function() {
        $('#homeLogo').css('opacity', 0);
        var homeLogoAnimate = new Waypoint({
            element: document.getElementById('homeLogo'),
            handler: function(direction) {
                if (direction === 'down') {
                    $('#homeLogo').css('opacity', 100);
                    this.element.className += 'animate__animated animate__fadeInUp animate__slower';
                } else {
                    this.element.classList.remove("animate__animated");
                    this.element.classList.remove("animate__fadeInUp");
                    this.element.classList.remove("animate__slower");
                    $('#homeLogo').css('opacity', 0);
                }
            },
            offset: '100%',
        })
    });
});
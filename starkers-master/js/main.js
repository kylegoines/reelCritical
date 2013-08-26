$(".contactBtn").click(function(e) {
e.preventDefault();
$('html, body').animate({ scrollTop: $('.about').offset().top }, 'slow');
});
const resp = $('#resp');

function sendMail(email){
    (function(){
        emailjs.init("S8UblKY61JF6VXy_n");
    })();

    var temParams = {   
        to_email: email.dataset.email,
        message: '',
    };

    emailjs.send('service_s2b0nge','template_762kzdp',temParams)
    .then(function(response) {
        resp.empty();
        resp.append('<p class="text-success fs-1">Email successfully sent!</p>');
    }, function(error){
        resp.empty();
        resp.append('<p class="text-danger fs-1">Error with sending email!</p>');
    });
}
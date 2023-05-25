function sendMail(params){

    (function(){
        emailjs.init("S8UblKY61JF6VXy_n");
     })();

    var temParams = {
        
        to_email: document.getElementById("sendTo").value,
        message: document.getElementById("msg").value,

    };

    emailjs.send('service_s2b0nge','template_762kzdp',temParams)
    .then(function(res) {
        console.log("success",res.status);
        console.log("email sent!")
    }
)}
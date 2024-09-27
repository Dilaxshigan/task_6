(function() {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(event) {

        const messageTextarea = document.getElementById("exampleFormControlTextarea1");
        const messageValue = messageTextarea.value;
        const valueLength = messageValue.length;

        const name = document.getElementById("formGroupExampleInput").value.trim();
        const nameLength = name.length;

        const honeypot = document.getElementById('honeypot');

        // Hide honeypot field
        honeypot.style.display = 'none';


        if (honeypot.value !== '') {
            event.preventDefault(); // Prevent form submission
            alert('Error message goes wrong'); // User-friendly error message
            return false;
        }

        if (nameLength < 3) {
            event.preventDefault(); // Prevent default form submission
            const myElement = document.getElementById("error_name");
            myElement.style.display = "block";
            return false;
        }





        const isWhitespace = /^\s+$/.test(messageValue);

        // const valueLength2 = messageValue.length;

        if (grecaptcha.getResponse() == '') {

            event.preventDefault();
            const myElement = document.getElementById("error_captcha");
            myElement.style.display = "block";
            return false;
        }

        if (isWhitespace) {
            event.preventDefault(); // Prevent default form submission
            const myElement = document.getElementById("error_text");
            myElement.style.display = "block";
            return false;
        } else {

            if (valueLength > 3 && valueLength < 300) {

                form.submit();
            } else {
                event.preventDefault(); // Prevent default form submission
                const myElement = document.getElementById("error_text");
                myElement.style.display = "block";
                return false;
            }




        }






    });
})();
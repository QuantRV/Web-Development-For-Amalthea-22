function validateForm(){
    var returnval = true
    var name = document.forms["myForm"]["name"].value;
    var name = document.forms["myForm"]["email"].value;

    if (email.length > 50){
        returnval = false;
        document.querySelector("#msg").innerHTML = "Invalid E-mail";
        document.querySelector("#msg").className = "alert alert-danger fade show"
    };

    if (name.length > 50){
        returnval = false
        document.querySelector("#msg").innerHTML = "Invalid Name";
        document.querySelector("#msg").className = "alert alert-danger fade show"
    };

    email = String(email)
    if (!(email.match("@")) && !(email.match("."))){
        returnval = false
        document.querySelector("#msg").innerHTML = "Invalid E-mail";
        document.querySelector("#msg").className = "alert alert-danger fade show"
    };

    console.log(returnval);
    return returnval;
}

{
    var form = document.querySelector("form");
    form.addEventListener
        ('submit',
            (e) => {
                e.preventDefault();
                document.querySelector("#sub").value = "submitting...";
                let data = new FormData(form);
                fetch("https://script.google.com/macros/s/AKfycbxW_79lVkMShWTd004WlT_JOlCqbLJTWsGxSkUjxeFomweGz-Z03QTLLEGxrw9zTLqP/exec", { method: "POST", body: data })
                    .then(res => res.text())
                    .then(data => {
                        document.querySelector("#sub").value = "submit";
                        document.querySelector("#msg").innerHTML = "Thank you for your valuable feedback";
                        document.getElementById("myForm").reset();
                        document.querySelector("#msg").className = "alert alert-success fade show"
                    });
            })
}




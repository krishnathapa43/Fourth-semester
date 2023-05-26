const signupForm = document.form.signup;

const nameInput = signupForm.name;
const addressInput = signupForm.address;
const phoneInput = signupForm.phone;
const emailInput = signupForm.email;
const birthdateInput = signupForm.birthdate;
const messageInput = signupForm.address;
const submitButton = document.getElementById ("submitButton");
hasError = false;

submitButton.addEventListener("click",function(e){
    e.preventDefault();

    if(nameInput.value.trim() ==""){
        const nameGroup = document.getElementById("nameGroup");
        const nameMessage = document.querySelector("#nameGroup .message");
        nameGroup.classList.add("error");
        nameMessage.textContent = "Name is required";
        hasError = true;
    }

    if(addressInput.value.trim() ==""){
        const addressGroup = document.getElementById("addressGroup");
        const phoneMessage = document.querySelector("#addressGroup .message");
        addressGroup.classList.add("error");
        addressMessage.textContent = "Address is required";
        hasError = true;
    }

    if(phoneInput.value.trim() ==""){
        const phoneGroup = document.getElementById("phoneGroup");
        const phoneMessage = document.querySelector("#phoneGroup .message");
        phoneGroup.classList.add("error");
        phoneMessage.textContent = "Phone number is required";
        hasError = true;
    }

    const isEmail = /^\w+@\w+.\w{3}$/.test(emailInput.value);
    if(!isEmail){
        const emailGroup = document.getElementById("emailGroup");
        const emailMessage = document.querySelector("#emailGroup .message");
        emailGroup.classList.add("error");
        emailMessage.textContent = "Must be in email format";
        hasError = true;
    }

    if(birthdateInput.value.trim() ==""){
        const birthdateGroup = document.getElementById("birthdateGroup");
        const birthdateMessage = document.querySelector("#birthdateGroup .message");
        birthdateGroup.classList.add("error");
        birthdateMessage.textContent = "Birthdate is required";
        hasError = true;
    }

    if(messageInput.value.trim() ==""){
        const messageGroup = document.getElementById("messageGroup");
        const messageMessage = document.querySelector("#messageGroup .message");
        messageGroup.classList.add("error");
        messageMessage.textContent = "Message is required";
        hasError = true;
    }

    if(! hasError){
        signup.submit();
    }

});
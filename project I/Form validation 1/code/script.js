const signupForm = document.forms.signup;

const nameInput = signupForm.name;
// const addressInput = signupForm.address;
const cityInput = signupForm.city;
const stateInput = signupForm.state;
const zipcodeInput = signupForm.zipcode;
const phonenumInput = signupForm.phonenum;
const emailInput = signupForm.email;
const birthdateInput = signupForm.birthdate;
const msgInput = signupForm.msg;
const submitButton = document.getElementById("submitButton");
hasError = false;

submitButton.addEventListener("click",function(e){
    e.preventDefault();
    const isName = /^[a-zA-Z]+\s[a-zA-Z]+$/.test(nameInput.value);

    if(nameInput.value.trim() ==""){
        const nameGroup = document.getElementById("nameGroup");
        const nameMessage = document.querySelector("#nameGroup .message");
        nameGroup.classList.add("error");
        nameMessage.textContent = "Name is required";
        hasError = true;
    } else if(!isName){
        const nameGroup = document.getElementById("nameGroup");
        const nameMessage = document.querySelector("#nameGroup .message"); 
        nameGroup.classList.add("error");
        nameMessage.textContent = "Must be letters only";
        hasError = true;
    } 
    const iscity = /^[a-zA-Z]+$/.test(cityInput.value);
    if(cityInput.value.trim() ==""){
        const cityGroup = document.getElementById("cityGroup");
        const cityMessage = document.querySelector("#cityGroup .message");
        cityGroup.classList.add("error");
        cityMessage.textContent = "City is required";
        hasError = true;
    }else if(!iscity){
        const cityGroup = document.getElementById("cityGroup");
        const cityMessage = document.querySelector("#cityGroup .message"); 
        cityGroup.classList.add("error");
        cityMessage.textContent = "Must be in one word";
        hasError = true;
    } 

    const isstate = /^\d{2}$/.test(stateInput.value);
    if(stateInput.value.trim() ==""){
        const stateGroup = document.getElementById("stateGroup");
        const stateMessage = document.querySelector("#stateGroup .message");
        stateGroup.classList.add("error");
        stateMessage.textContent = "State is required";
        hasError = true;
    }else if(!isstate){
        const stateGroup = document.getElementById("stateGroup");
        const stateMessage = document.querySelector("#stateGroup .message"); 
        stateGroup.classList.add("error");
        stateMessage.textContent = "Must be in two number";
        hasError = true;
    } 
    const isZip  =/^\d{5}(-\d{4})?$/.test(zipcodeInput.value);
    if(zipcodeInput.value.trim() ==""){
        const zipcodeGroup = document.getElementById("zipcodeGroup");
        const zipcodeMessage = document.querySelector("#zipcodeGroup .message");
        zipcodeGroup.classList.add("error");
        zipcodeMessage.classList.remove('hidden');
        zipcodeMessage.textContent = "zipcode is required";
        hasError = true;
    }else if(!isZip){
        const zipcodeGroup = document.getElementById("zipcodeGroup");
        const zipcodeMessage = document.querySelector("#zipcodeGroup .message"); 
        zipcodeGroup.classList.add("error");
        zipcodeMessage.textContent = "Must be in Zip code format";
        hasError = true;
    }
    const isphone= /^\d{10}$/.test(phonenumInput.value);
    if(phonenumInput.value == ""){
        const phonenumGroup = document.getElementById("phonenumGroup");
        const phonenumMessage = document.querySelector("#phonenumGroup .message");
        phonenumGroup.classList.add("error");
        phonenumMessage.textContent = "Phone Number is required";
        hasError = true;
    }else if(!isphone){
        const phonenumGroup = document.getElementById("phonenumGroup");
        const phonenumMessage = document.querySelector("#phonenumGroup .message");
        phonenumGroup.classList.add("error");
         phonenumMessage.textContent = "Phone Number must be 10 Digits required";
        hasError = true;
    }

    if(emailInput.value == ""){
        const emailGroup = document.getElementById("emailGroup");
        const emailMessage = document.querySelector("#emailGroup .message");
        emailGroup.classList.add("error");
        emailMessage.textContent = "Email is required";
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

    const birthdateGroup = document.getElementById("birthdateGroup");
    const birthdateMessage = document.querySelector("#birthdateGroup .message");
    
    if(birthdateInput.value === "") {
        birthdateGroup.classList.add("error");
        hasError = true;
        birthdateMessage.textContent = "Birth Date is required";
    }
    const todayTimestamp = Date.now();
    const inputTimestamp = Date.parse(birthdateInput.value);
    if (inputTimestamp > todayTimestamp) {
        birthdateGroup.classList.add("error");
        birthdateMessage.textContent = "Birth Date can't be in the future";
        hasError = true;
    }
    
    if(msgInput.value.trim() == ""){
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


/**
 * Created in PhpStorm
 * @author Cody Zipp
 * @date 5/1/2020
 * @version 1.0
 * validation.js - client-side validation
 * team-brian
 */
document.getElementById("syllabus-gen").onsubmit = validate;

function validate() {

    let isValid = true;

    //Clear all error messages
    let errors =document.getElementsByClassName("err");
    for(let i=0; i<errors.length; i++){
        errors[i].style.visibility = "hidden";
    }
    //check first name X
    let first = document.getElementById("firstName").value;
    if(first=="") {
        let errFirst = document.getElementById("err-fname");
        errFirst.style.visibility = "visible";
        isValid = false;
    }
    //check last name X
    let last = document.getElementById("lastName").value;
    if(last=="") {
        let errLast = document.getElementById("err-lname");
        errLast.style.visibility = "visible";
        isValid = false;
    }

    //check boxes office hours
    let check = document.getElementsByName("office-hrs[]");
    let count = 0;
    for(let i = 0; i < check.length; i++){
        if(check[i].checked){
            count++;
        }
    }
    if(count == 0) {
        let errCheck = document.getElementById("err-office-hrs");
        errCheck.style.visibility = "visible";
        isValid = false;
    }

    //check email X
    let emailRegex = "^([\w\d\-\.]+)@{1}(([\w\d\-]{1,67})|([\w\d\-]+\.[\w\d\-]{1,67}))\.(([a-zA-Z\d]{2,4})(\.[a-zA-Z\d]{2})?)$"
    let email = document.getElementById("email").value;
    if(email=="" || email.match(emailRegex)) {
        let errEmail = document.getElementById("err-email");
        errEmail.style.visibility = "visible";
        isValid = false;
    }

    //check course number X
    let course = document.getElementById("course").value;
    if(course=="") {
        let errCourse = document.getElementById("err-course");
        errCourse.style.visibility = "visible";
        isValid = false;
    }

    //check size
    let credit = document.getElementById("credit").value;
    if(credit == "none") {
        let errCredit = document.getElementById("err-credit");
        errCredit.style.visibility = "visible";
        isValid = false;
    }

    //check boxes meeting hours
    let box = document.getElementsByName("meeting-hrs[]");
    let num = 0;
    for(let i = 0; i < box.length; i++){
        if(box[i].checked){
            num++;
        }
    }
    if(num == 0) {
        let errBox = document.getElementById("err-meeting-hrs");
        errBox.style.visibility = "visible";
        isValid = false;
    }

    //check location X
    let location = document.getElementById("location").value;
    if(location=="") {
        let errLocation = document.getElementById("err-location");
        errLocation.style.visibility = "visible";
        isValid = false;
    }







    //check method (pickup or delivery)
    // let method = document.getElementsByName("method");
    // let methodValue = "";
    // for(let i = 0; i < method.length; i++) {
    //     if(method[i].checked) {
    //         methodValue = method[i].value;
    //     }
    // }
    // if (methodValue == "") {
    //     let errMethod = document.getElementById("err-method");
    //     errMethod.style.visibility = "visible";
    //     isValid = false;
    // }
    // //address
    // let address = document.getElementById("address").value;
    //
    // if(address === "" && methodValue =="delivery"){
    //     let errAddress = document.getElementById("err-address");
    //     errAddress.style.visibility = "visible";
    //     isValid = false;
    // }


    return isValid;
}

export const validate = () => {

    const form = document.querySelector('.mform.full-width-labels, .mform');
    const phoneInput = document.getElementById('id_profile_field_phonenumber');
    const dayInput = document.getElementById('id_profile_field_dataofbirth_day');
    const monthInput = document.getElementById('id_profile_field_dataofbirth_month');
    const yearInput = document.getElementById('id_profile_field_dataofbirth_year');
    const occupationInput = document.getElementById('id_profile_field_occupation');
    const genderInput = document.getElementById('id_profile_field_gender');
    const genderOtherInput = document.getElementById("fitem_id_profile_field_gender_other");
    const occupationOtherInput = document.getElementById("fitem_id_profile_field_occupation_other");
    const occupationSocialMediaInput1 = document.getElementById('fitem_id_profile_field_occupation_socialmedia1');
    const occupationSocialMediaInput2 = document.getElementById('fitem_id_profile_field_occupation_socialmedia2');
    const occupationSocialMediaInput3 = document.getElementById('fitem_id_profile_field_occupation_socialmedia3');
    const occupationSocialMediaInput4 = document.getElementById('fitem_id_profile_field_occupation_socialmedia4');

    form.addEventListener('submit', function(event) {
        const phoneNumber = libphonenumber.parsePhoneNumberFromString(phoneInput.value, 'BR');
        
        if(!phoneNumber || !phoneNumber.isValid()){
            event.preventDefault();
            alert('Digite um número de telefone válido.');
            phoneInput.focus();
            return false;
        }

        if(!EighteenYearsPassed(dayInput.value,monthInput.value,yearInput.value)){
            event.preventDefault();
            alert('É necessário ter 18 anos ou mais para se registrar neste site.');
            return false;
        }
    });

    occupationInput.addEventListener("change", function() {
        if (occupationInput.value === "Outro") {
            occupationOtherInput.style.display = "flex"; // Show the hidden field
            occupationOtherInput.focus();
        } else {
            occupationOtherInput.style.display = "none"; // Hide the field if another option is selected
            const occupationText = occupationOtherInput.querySelector("#id_profile_field_occupation_other");
            occupationText.value = "";
        }
    });

    occupationInput.addEventListener("change", function() {
        if (occupationInput.value.includes("Trabalhador(a)"))  {
            occupationSocialMediaInput1.style.display = "flex"; // Show the hidden field
            occupationSocialMediaInput1.focus();
            occupationSocialMediaInput2.style.display = "flex"; // Show the hidden field
            occupationSocialMediaInput3.style.display = "flex"; // Show the hidden field
            occupationSocialMediaInput4.style.display = "flex"; // Show the hidden field
        } else {
            occupationSocialMediaInput1.style.display = "none"; // Hide the field if another option is selected
            const occupationSocialMediaText1 = occupationSocialMediaInput1.querySelector("#id_profile_field_occupation_socialmedia1");
            occupationSocialMediaText1.value = "";
            occupationSocialMediaInput2.style.display = "none"; // Hide the field if another option is selected
            const occupationSocialMediaText2 = occupationSocialMediaInput2.querySelector("#id_profile_field_occupation_socialmedia2");
            occupationSocialMediaText2.value = "";
            occupationSocialMediaInput3.style.display = "none"; // Hide the field if another option is selected
            const occupationSocialMediaText3 = occupationSocialMediaInput3.querySelector("#id_profile_field_occupation_socialmedia3");
            occupationSocialMediaText3.value = "";
            occupationSocialMediaInput4.style.display = "none"; // Hide the field if another option is selected
            const occupationSocialMediaText = occupationSocialMediaInput1.querySelector("#id_profile_field_occupation_socialmedia4");
            occupationSocialMediaText.value = "";
        }
    });

    genderInput.addEventListener("change", function() {
        if (genderInput.value === "Outros") {
            genderOtherInput.style.display = "flex"; // Show the hidden field
            genderOtherInput.focus();
        } else {
            genderOtherInput.style.display = "none"; // Hide the field if another option is selected
            const genderText = occupationOtherInput.querySelector("#id_profile_field_gender_other");
            genderText.value = "";
        }
    });
};

function EighteenYearsPassed(day, month, year) {
    // Convert strings to integers
    const dayInt = parseInt(day, 10);
    const monthInt = parseInt(month, 10) - 1; // Month is 0-indexed in JavaScript Date
    const yearInt = parseInt(year, 10);
  
    // Create a date object for the input date
    const inputDate = new Date(yearInt, monthInt, dayInt);
    // Get the current date
    const currentDate = new Date();
  
    // Calculate the date exactly 18 years ago
    const date18YearsAgo = new Date();
    date18YearsAgo.setFullYear(currentDate.getFullYear() - 18);
  
    // Check if the input date is on or before the date 18 years ago
    return inputDate <= date18YearsAgo;
  }
export const validate = () => {

    const form = document.querySelector('.mform.full-width-labels, .mform');
    const phoneInput = document.getElementById('id_profile_field_phonenumber');
    const dayInput = document.getElementById('id_profile_field_dataofbirth_day');
    const monthInput = document.getElementById('id_profile_field_dataofbirth_month');
    const yearInput = document.getElementById('id_profile_field_dataofbirth_year');
    const occupationInput = document.getElementById('id_profile_field_occupation');
    const genderInput = document.getElementById('id_profile_field_gender');
    const cpfInput = document.getElementById('id_profile_field_cpf_number');
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

        if (!isValidCPFFormat(cpfInput.value)) {
            event.preventDefault();
            alert('Digite um CPF válido.');
            cpfInput.focus();
            return false;
        }
    });
    occupationInput.addEventListener("change", function () {
        const value = occupationInput.value;
    
        const isOutro = value === "Outro";
        occupationOtherInput.style.display = isOutro ? "flex" : "none";
    
        if (!isOutro) {
            const occupationText = occupationOtherInput.querySelector("#id_profile_field_occupation_other");
            if (occupationText) occupationText.value = "";
        } else {
            occupationOtherInput.focus();
        }
    
        const isTrabalhador = value.includes("Trabalhador(a)");
        const socialMediaFields = [
            occupationSocialMediaInput1,
            occupationSocialMediaInput2,
            occupationSocialMediaInput3,
            occupationSocialMediaInput4
        ];
    
        socialMediaFields.forEach((field, index) => {
            const input = field.querySelector(`#id_profile_field_occupation_socialmedia${index + 1}`);
            if (isTrabalhador) {
                field.style.display = "flex";
                if (index === 0) field.focus();
            } else {
                field.style.display = "none";
                if (input) input.value = "";
            }
        });
    });
    

    genderInput.addEventListener("change", function() {
        if (genderInput.value === "Outros") {
            genderOtherInput.style.display = "flex";
            genderOtherInput.focus();
        } else {
            genderOtherInput.style.display = "none";
            const genderText = occupationOtherInput.querySelector("#id_profile_field_gender_other");
            genderText.value = "";
        }
    });
    
};

function EighteenYearsPassed(day, month, year) {
  
    const dayInt = parseInt(day, 10);
    const monthInt = parseInt(month, 10) - 1; 
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

  function isValidCPFFormat(cpf) {
    const regex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
    return regex.test(cpf);
  }
  
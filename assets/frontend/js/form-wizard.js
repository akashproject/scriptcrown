$(function() {

    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepFormPanelClass: 'form-wizard',
        stepFormPanels: document.querySelectorAll('.form-wizard'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };
    
});

let wizard_step = 1;
jQuery('.js-btn-next').on('click',function(){
    if($("#lead-capture-full-screen-form .form-wizard.step-"+wizard_step+" input").valid()){
        wizard_step++;
        jQuery(".form-wizard").removeClass("js-active");
        jQuery(".form-wizard.step-"+wizard_step).addClass("js-active");
    }
    if($("#lead-capture-full-screen-form .form-wizard.step-"+wizard_step+" radio").valid()){
        wizard_step++;
        jQuery(".form-wizard").removeClass("js-active");
        jQuery(".form-wizard.step-"+wizard_step).addClass("js-active");
    }
    if($("#lead-capture-full-screen-form .form-wizard.step-"+wizard_step+" checkbox").valid()){
        wizard_step++;
        jQuery(".form-wizard").removeClass("js-active");
        jQuery(".form-wizard.step-"+wizard_step).addClass("js-active");
    }
});

jQuery('.js-btn-prev').on('click',function(){
    wizard_step--;
    jQuery(".form-wizard").removeClass("js-active");
    jQuery(".form-wizard.step-"+wizard_step).addClass("js-active");
});

jQuery("#lead-capture-full-screen-form").validate({
    rules: {
        business_type: {
            required: true,
        }
    },
    // messages: {
    //     company_name: {
    //         required: "Please enter business name",
    //     },
    //     business_type:{
    //         required: "Select your business type",
    //     }
    // }
});

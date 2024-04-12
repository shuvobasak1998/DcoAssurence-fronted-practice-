// Function to handle item selection
function selectItem(className) {
  const items = document.querySelectorAll("." + className);

  items.forEach((item) => {
    item.addEventListener("click", (event) => {
      // Remove 'active' class from all items
      items.forEach((item) => item.classList.remove("selected"));

      // Add 'active' class to the last clicked item
      event.currentTarget.classList.add("selected");
      // nextBtn.removeAttribute("disabled");
    });
  });
}

// Call the selectItem function with the desired class name
selectItem("step-1-select-item");
selectItem("regime-actuel-item");
selectItem("qui-souhaitez-vous-item");

selectItem("opts");
selectItem("auto-select-item");
selectItem("moto-select-item");
selectItem("moto-step-2-item");
selectItem("enable-select-3");
selectItem("enable-select-7");
selectItem("enable-select-6");
selectItem("enable-select-10");
selectItem("enable-select-11");
selectItem("enable-select");
selectItem("option-select-item-5");
selectItem("option-select-item-6");
// selectItem("option-select-item-10");
selectItem("option-select-item-first");
selectItem("option-select-item-2");
selectItem("option-select-item");
selectItem("assurance-habitation-select");
selectItem("recherchez-votre-voiture-select-item");



// Function to show the popup
function showPopup(message) {
  const popup = document.querySelector(".popup");
  const popupContent = document.querySelector(".popup-content");
  popupContent.textContent = message;
  popup.classList.add("show");

  // Hide the popup after 3 seconds
  setTimeout(function() {
    popup.classList.remove("show");
  }, 3000);
}






const quiSouhaitezItems = Array.from(
  document.querySelectorAll(".qui-souhaitez-vous-item")
);

const activeItem = document.querySelector(".has-input");

const peopleNumberInput = document.querySelector(".popup-input");
quiSouhaitezItems.forEach((element) => {
  element.addEventListener("click", (e) => {
    peopleNumberInput.classList.remove("active");
  });
});
activeItem.addEventListener("click", (e) => {
  peopleNumberInput.classList.add("active");
});

// Get all the card elements
var cards = document.querySelectorAll(".card");

// Store the selected user plan and its duration (monthly or yearly)
let userplan = "";
let userplanDurations = "Monthly plan";

// Get the yearly plan price elements and its unit (yr or mo)
var yearlyPlanPrice = document.getElementsByClassName("yearly-description");
var Yearlyoffer = document.querySelectorAll(".yearly-offer");
var yrunit = document.querySelectorAll(".yr");
let PlanPrice = "";

const formSteps = document.querySelectorAll(".form-step");

for (let i = 0; i < formSteps.length; i++) {
  formSteps[i].style.display = "none";
}

var currentStep = 0;

formSteps[currentStep].style.display = "block";

const stepIndicators = document.querySelectorAll(".step-indicator");
stepIndicators[currentStep].classList.add("active");
const nextBtn = document.querySelector(".next-step");

let sexItems = Array.from(document.querySelectorAll(".step-1-select-item"));
nextBtn.addEventListener("click", (e) => {
  e.preventDefault();

  let switchButtons = document.querySelector(".buttons");

  if (currentStep === 2) {
    nextBtn.innerHTML = "OBTENIR MON TARIF";
    nextBtn.addEventListener("click", (e) => {
      e.preventDefault();
      let stepsForm = document.querySelector("#steps-form");
      stepsForm.submit();
    });
  }

  if (currentStep === 0) {
    switchButtons.classList.add("around");
  }
  if (currentStep == 3) {
    // nextBtn.style.display = "none";
    backBtn.style.display = "none";
  }
  if (currentStep === 0 && userplan == "") {
    nextBtn.disabled ? true : false;
  }

  // var UserPlanSelected = document.getElementsByClassName('plan-selected')[0];
  // UserPlanSelected.innerHTML = userplan ? `${userplan.charAt(0).toUpperCase() + userplan.slice(1)} (${userplanDurations})` : '';
  // finalPlanPrice.innerHTML = PlanPrice;

  backBtn.style.display = "block";
  let valid = true;
  const inputs = form.querySelectorAll("input[required]");
  inputs.forEach(function (input) {
    if (!input.checkValidity()) {
      valid = false;
      input.style.border = "1px solid red";
    } else {
      input.style.border = "";
    }
  });

  if (valid) {
    if (currentStep === 0) {
      // Check if any radio button is checked in step 1
      const selectedRadio = sexItems.find((item) =>
        item.querySelector("input[type='radio']").checked
      );

      // If no radio button is checked, display a pop-up message
      if (!selectedRadio) {
        showPopup("Choisissez votre genre, s'il vous plaît");
        return;
      }
    }
  } else {
    showPopup("Please fill out all required fields.");
    if (currentStep === 0) return;
  }

  if (currentStep === formSteps.length - 1) return;
  formSteps[currentStep].style.display = "none";
  stepIndicators[currentStep].classList.add("active");
  currentStep++;
  formSteps[currentStep].style.display = "block";
  stepIndicators[currentStep].classList.add("active");
});

const backBtn = document.querySelector(".go-back-button");
backBtn.addEventListener("click", (e) => {
  e.preventDefault();

  if (currentStep === 0) return;
  nextBtn.innerHTML = "Suivant";
  formSteps[currentStep].style.display = "none";
  stepIndicators[currentStep].classList.remove("active");
  currentStep--;
  formSteps[currentStep].style.display = "block";
  stepIndicators[currentStep].classList.add("active");
});

const form = document.querySelector(".user-input");
var finalPlanPrice = document.getElementsByClassName("final-plan-price")[0];
var addfinal = document.getElementsByClassName("user-selected-add-ons")[0];





// Get all the items with class "animal"
const animalItems = document.getElementsByClassName("animal-item");


// Get the form step element
const animalformStep = document.querySelector(".animal-form-step-2");

// Loop through each item
for (let i = 0; i < animalItems.length; i++) {
  // Add a click event listener to each item
  animalItems[i].addEventListener("click", function() {
    const sex = this.getAttribute("data-sex"); // Get the value of data-sex attribute

    if (sex === "chien") {
     
      const chienContent = document.getElementById("chien-content"); // Get the chien content element
      animalformStep.innerHTML = chienContent.innerHTML; 
    } else if (sex === "chat") {
      

      const chatContent = document.getElementById("chat-content"); // Get the chat content element
      animalformStep.innerHTML = chatContent.innerHTML; // Set the form step content to chat content
    }
  });
}




function showItem(event, parameter, activeClass) {
  var element = event.currentTarget;
  
  if (element && element.classList.contains('selected')) {
    element.classList.remove(activeClass);
  } else {
    element.classList.add(activeClass);
  }

  var elements;
  if (parameter.startsWith('#')) {
    // If parameter starts with '#', treat it as an ID
    var elementById = document.getElementById(parameter.substr(1));
    if (elementById) {
      if (elementById.classList.contains('selected')) {
        elementById.classList.remove(activeClass);
      } else {
        elementById.classList.add(activeClass);
      }
    }
  } else if (parameter.startsWith('.')) {
    // If parameter starts with '.', treat it as a class
    elements = document.getElementsByClassName(parameter.substr(1));
    for (var i = 0; i < elements.length; i++) {
      var currentElement = elements[i];
      if (currentElement.classList.contains('selected')) {
        currentElement.classList.remove(activeClass);
      } else {
        currentElement.classList.add(activeClass);
      }
    }
  }

  var targetElement = document.querySelector(parameter);
  if (targetElement && element.classList.contains('selected')) {
    targetElement.classList.add(activeClass);
  } else {
    targetElement.classList.remove(activeClass);
  }
}







// function showItem(event, parameter, activeClass) {
//   var element = event.currentTarget;
  
//   if (!element.classList.contains('selected')) {
//     var targetElement = document.querySelector(parameter);
//     if (targetElement) {
//       targetElement.classList.remove(activeClass);
//     }
//   } else {
//     element.classList.toggle(activeClass);
//   }
  
 



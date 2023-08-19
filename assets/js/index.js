// Burger navigation

const burger = document.querySelector(".navigation__burger");

const navSlide = () => {
        const nav = document.querySelector(".navigation__links");
        nav.classList.toggle("nav-active");
        burger.classList.toggle("toggle");
    }

burger.addEventListener("click", navSlide);


    // Geting scheduled classes on the fly
    let daySelected = document.querySelectorAll(".js-day-selected");
    const classesInfo = document.querySelector(".js-schedule-classes");
    let singleDaySelected = document.querySelectorAll(".js-day-selected");

    const d = new Date();
    let day = d.getDay();
    let currentDay;

    if (day === 1){
        currentDay = "Monday"  
    } else if (day === 2){
        currentDay = "Tuesday" 
    } else if (day === 3){
        currentDay = "Wednesday"
    } else if (day === 4){
        currentDay = "Thursday"
    } else if (day === 5){
        currentDay = "Friday"
    } else if (day === 6){
        currentDay = "Saturday"
    } else{
        currentDay = "Sunday"
    }

    let dayToSearch = currentDay;

    singleDaySelected.forEach(day => {
        
        if(day.innerHTML === currentDay) {
           day.classList.add("js-class__item__active");
        }
    })

   // Fetch classes

const fetchClasses = (dayToSearch) => { 
    fetch(`${gymData.root_url}/wp-json/wp/v2/schedule?search=${dayToSearch}`)
    .then((response) => response.json())
    .then((data) => {

        classesInfo.innerHTML =
        `
        ${data.map(item => 
            item.acf.classs.map(info =>  `
            <div class="schedule__bar">
                <div class="row">
                    <div class="col-12 col-md-3 mt-2 schedule__class">
                        <p class="schedule__small__heading">Name of class</p>
                        <h5>${info.name_of_class[0].post_title}</h5>
                    </div>
                    <div class="col-12 col-md-4 mt-2  schedule__class"">
                        <p class="schedule__small__heading">Time</p>
                        <h5>${info.start_time} - ${info.end_time}</h5>
                    </div>
                    <div class="col-12 col-md-3 mt-2 schedule__class">
                    <p class="schedule__small__heading">Your coach</p>
                        <h5>${info.coach[0].post_title}</h5>
                    </div>
                    <div class="col-12 col-md-2 mt-4 mb-4 schedule__class">
                        <a href="/contact" class="schedule__btn w-100 text-cemter">Join Now</a>
                    </div>
                </div>
            </div>`
        ).join(''))}`;
    });
};

fetchClasses(dayToSearch);

daySelected.forEach(item => {
    item.addEventListener("click", () => {
    document.querySelector(".js-class__item__active")?.classList.remove("js-class__item__active");
    item.classList.add("js-class__item__active");
    dayToSearch = item.innerHTML;
    fetchClasses(dayToSearch);
    })
})


// BMI Calculator

// Grab calculation button
let calculateBtn = document.querySelector(".js-calculate-btn");
  
    const calculateBMI = () => {
        // Grab fields
        let weight = parseInt(document.querySelector("#weight").value);         
        let height = parseInt(document.querySelector("#height").value);
        let bmiResult = document.querySelector("#js-bmi-result");
        let weightResult = document.querySelector("#js-weight-result");

        // Checking the user providing a proper
        // value or not
        if (height === "" || isNaN(height)) 
        bmiResult.innerHTML = "Provide a valid infomation!";

        else if (weight === "" || isNaN(weight)) 
        weightResult.innerHTML = "Provide a valid infomation!";

        // If both input is valid, calculate the bmi
        else {

            // Fixing upto 2 decimal places
            let bmi = (weight / ((height * height) 
            / 10000)).toFixed(2);
        
            // Dividing as per the bmi conditions
            if (bmi < 18.6) {
                bmiResult.innerHTML =`${bmi}`;
                weightResult.innerHTML = "Under Weight";
            }
             else if (bmi >= 18.6 && bmi < 24.9) {
                bmiResult.innerHTML = `${bmi}`;
                weightResult.innerHTML = "Normal";
            }
            else {
                bmiResult.innerHTML = `${bmi}`;
                weightResult.innerHTML = "Over Weight";
            }
        }
    }

    // Pass function
    calculateBtn.addEventListener("click", calculateBMI);



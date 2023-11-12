// const icon = document.querySelector(".icon");
// const boxright = document.querySelector(".boxphai");

// icon.addEventListener("click",function (){
//     boxright.classList.toggle("is_show");
// });

// document.body.addEventListener("click",function (e) {
//     if(!e.target.classList.contains("is_show") && e.target.matches(".is_show") == false){
//         boxright.classList.remove("is_show");
//     }
// })

const icon = document.querySelector(".icon");
const boxright = document.querySelector(".boxphai");

icon.addEventListener("click", function () {
    boxright.classList.toggle("is_show");
});

document.body.addEventListener("click", function (e) {
    let target = e.target;
    
    // Kiểm tra nếu phần tử được click hoặc các phần tử cha của nó chứa class "is_show"
    if (!target.classList.contains("is_show") && !target.closest(".is_show")) {
        boxright.classList.remove("is_show");
    }
});


console.log(icon,boxright);
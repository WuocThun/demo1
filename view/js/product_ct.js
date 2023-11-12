function setupWeb () {
    const colors = document.querySelectorAll(".color-item");
  
  colors.forEach(item => {
    item.addEventListener('click', function (e) {
      // Loại bỏ class "color_js" từ tất cả các item
      colors.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove("color_js");
        }
      });
  
      // Thêm hoặc loại bỏ class "color_js" cho item hiện tại
      e.target.classList.toggle("color_js");
    });
  });
  
  let number = document.querySelector(".number");
  const plus = document.querySelector(".plus")
  const minus = document.querySelector(".minus")
  let content = parseInt(number.textContent);
  
  console.log(number)
  
  plus.addEventListener("click",function() {
      content = content + 1;
      number.textContent = content;
  })
  
  minus.addEventListener("click",function() {
      content = content - 1;
      if(content <= 0) {
          content = 0;
      }
      number.textContent = content;
  })
  
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    setupWeb(); // Gọi hàm hoặc khối mã của bạn ở đây
  });
  
  
  
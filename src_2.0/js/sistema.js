let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open"); 
  menuBtnChange();//calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

let tab = document.querySelectorAll(".tab-s");

for (let i = 0; i < tab.length; i++) {
    tab[i].onclick = function() {
        let j = 0;
        while(j < tab.length) {
            tab[j++].className = 'tab-s';
        }
        tab[i].className = 'tab-s active';
    }   
}
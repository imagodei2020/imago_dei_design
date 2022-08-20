function dropdownMenu(){
  const x = document.getElementById("dropdown_click");
  if(x.className === "main_nav_items"){
    x.className += " responsive";
    /* Change main_nav_items to main_nav_items.responsive */
  }else{
    x.className = "main_nav_items";
  }

}

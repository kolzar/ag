function fChangeColor1() {
  let spanTag = document.getElementById("a1");
  
  if (spanTag.style.color === "white") {
    spanTag.style.color = "red";
  } else {
    spanTag.style.color = "white";
  }
}

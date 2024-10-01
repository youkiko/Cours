const hamburger = document.querySelector("#hamburger");
const ulMobile = document.querySelector("#navmobile");
const nav = document.querySelector("nav");
const main = document.querySelector("#acc");
const div = document.querySelector("#hub");
const tb = document.querySelector("#tb");
const texte = document.querySelector("#texte");
const bande = document.querySelector("#bande");
var url = document.location.href;
console.log(url.split("/").pop().split(".")[0]);
const page = url.split("/").pop().split(".")[0];
const but = document.getElementById("but");


but.addEventListener("click", () => {
  // window.location.href = 'https://google.fr'
  const a = document.createElement("a");
  a.setAttribute("href", "https://example.org");
  a.setAttribute("target", "_blank");
  a.click();
});

document.addEventListener("DOMContentLoaded", () => {
  if (page === "") nav.style.display = "none";
  texte.style.paddingTop = `${nav.offsetHeight + 5}px`;
  ulMobile.style.minHeight = `${window.innerHeight - nav.offsetHeight}px`;
  ulMobile.style.marginTop = `${nav.offsetHeight}px`;
  main.style.paddingTop = `${nav.offsetHeight}px`;
  tb.style.paddingTop = `${nav.offsetHeight + 5}px`;
});
hamburger.addEventListener("click", () => {
  ulMobile.classList.toggle("toggled");
  const toggleNav = [
    { transform: "translate(100%)" },
    { transform: "translate(0)" },
  ];
  const options = {
    fill: "forwards",
    duration: 1000,
  };
  if (ulMobile.classList.contains("toggled")) {
    ulMobile.animate(toggleNav, options);
  } else {
    ulMobile.animate(toggleNav.reverse(), { ...options, duration: 1000 });
  }
});

document.addEventListener("click", (event) => {
  if (!hamburger.contains(event.target)) {
    if (ulMobile.classList.contains("toggled")) {
      ulMobile.classList.remove("toggled");
      ulMobile.animate(
        [{ transform: "translate(0)" }, { transform: "translate(100%)" }],
        { fill: "forwards", duration: 1000 }
      );
    }
  }
});

window.addEventListener("scroll", (event) => {
  //   console.log(scrollY);
  if (window.scrollY > 10) {
    // console.log(window.scrollY);
    if (ulMobile.classList.contains("toggled")) {
      ulMobile.classList.remove("toggled");
      ulMobile.animate(
        [{ transform: "translate(0)" }, { transform: "translate(100%)" }],
        { fill: "forwards", duration: 500 }
      );
    }
  }
});

// window.addEventListener("scroll", () => {
//   if (window.scrollY > 10) nav.style.opacity = "0";
//   else if (window.scrollY === 0) nav.style.opacity = "1";
// });

window.addEventListener("resize", () => {
  texte.style.paddingTop = `${nav.offsetHeight + 5}px`;
  tb.style.paddingTop = `${nav.offsetHeight + 5}px`;
  main.style.paddingTop = `${nav.offsetHeight + 5}px`;
  if (ulMobile.classList.contains("toggled"))
    ulMobile.classList.remove("toggled");
  {
    ulMobile.animate(
      [{ transform: "translate(0)" }, { transform: "translate(100%)" }],
      { fill: "forwards", duration: 0 }
    );
  }
});

window.addEventListener("resize", () => {
  ulMobile.style.marginTop = `${nav.offsetHeight}px`;
});

window.addEventListener("resize", () => {
  ulMobile.style.minHeight = `${window.innerHeight - nav.offsetHeight}px`;
});

window.addEventListener("resize", () => {});

window.addEventListener("scroll", () => {
  //   console.log(scrollY);
  if (window.scrollY > 3) {
    nav.style.display = "flex";
  } else if (window.scrollY === 0) nav.style.display = "none";
});

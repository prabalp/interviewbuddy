(() => {
  "use strict";
  ((e, t) => {
    const n = document.querySelector(e),
      s = document.querySelector(t);
    n.addEventListener("click", () => s.classList.toggle("togglenav"));
  })("#menuToggle", "#menuToggleMenu"),
    (() => {
      const e = (e, t) => {
          const n = document.getElementsByClassName("infratabs__btns--btn"),
            s = document.getElementsByClassName("infratab");
          for (let e = 0; e < n.length; e++)
            (n[e].className = n[e].className.replace(" tab--active", "")),
              (s[e].style.display = "none");
          (document.getElementById(t).style.display = "flex"),
            (e.className += " tab--active");
        },
        t = document.querySelectorAll(".infratabs__btns--btn");
      e(t[0], t[0].dataset.tab);
      for (let n = 0; n < t.length; n++)
        t[n].addEventListener("click", () => e(t[n], t[n].dataset.tab));
    })(),
    (function (e) {
      let t,
        n = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
      const s = document.querySelector(e);
      n && (t = document.querySelector(n)),
        s.addEventListener("submit", (e) => {
          e.preventDefault();
        });
    })("#subscribeForm", "#subscribeFormSubmit");
  const e = document.querySelector("#businessForm");
  document.querySelector("#businessFormSubmit");
  e.addEventListener("submit", (e) => {
    e.preventDefault();
  });
})();

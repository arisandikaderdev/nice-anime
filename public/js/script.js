function addlink() {
  return {
    field: [
      {
        id: Date.now,
        label: 1,
      },
    ],
  };
}

function slideAuto() {
  let right = 0;

  setInterval(() => {
    const viewWidth = window.innerWidth;
    const hero = document.querySelector(".slide-container");
    const heroWidth = hero.offsetWidth;

    if (right >= heroWidth - viewWidth) {
      right = 0 - viewWidth;
    }
    right += viewWidth;
    hero.style.right = right.toString() + "px";
  }, 4000);
}

slideAuto();

const imgSelect = document.querySelector("#imgSelect");
imgSelect.onchange = function (e) {
  const img = document.querySelector("#img");
  url = URL.createObjectURL(e.target.files[0]);

  img.src = url;
};

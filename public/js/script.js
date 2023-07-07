const imgSelect = document.querySelector("#imgSelect");
imgSelect.onchange = function (e) {
  const img = document.querySelector("#img");
  url = URL.createObjectURL(e.target.files[0]);

  img.src = url;
};

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

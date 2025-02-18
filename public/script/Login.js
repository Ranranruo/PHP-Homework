const $$input = document.querySelectorAll("input");

$$input.forEach(el => el.addEventListener("change", (e) => {
  const id = e.target.id;
  state[id] = e.target.value;
}));

const initState = {
  username: "",
  password: ""
}

const state = new Proxy(initState, {
  async set(target, props, value) {
    target[props] = value;
    await render();
  }
})


const render = async () => {
  Object.entries(state).forEach(([props, value]) => {
    const $input = document.querySelector(`#${props}`);
    if(value != "")
      $input.classList.add("active");
    else
      $input.classList.remove("active");
  })
};
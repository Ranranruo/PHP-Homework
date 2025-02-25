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
  async set(target, prop, value) {
    if(!(prop in target)) throw new Error("Cannot add new property to state")
    target[prop] = value;
    await render();
  }, 
  deleteProperty(target, prop) {
    throw new Error(`Cannot delete property '${prop} from state'`)
  } 
})


const render = async () => {
  Object.entries(state).forEach(([prop, value]) => {
    const $input = document.querySelector(`#${prop}`);
    if(value != "")
      $input.classList.add("active");
    else
      $input.classList.remove("active");
  })
};


render();
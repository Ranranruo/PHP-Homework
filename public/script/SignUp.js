import * as regexs from "./lib/Validation.js";
import { createDeepProxy } from "./lib/Proxy.js";

const $$input = document.querySelectorAll("input");
const $submit = document.querySelector("#submit");
const $eye = document.querySelector("#eye");
const $password = document.querySelector("#password");

// 유효성 검사 설정
const validationConfig = {
    username: {
        minLength: 6, // 최소 길이
        maxLength: 18, // 최대 길이
        requireSpecialSymbols: false, // 특수기호가 포함 되어 있어야 하는지 여부
        requireNumbers: false, // 숫자가 포함 되어 있어야 하는지 여부
        allowKorean: false // 한국어가 사용가능한지 여부
    },
    displayname: {
        minLength: 2,
        maxLength: 20,
        requireSpecialSymbols: false,
        requireNumbers: false,
        allowKorean: true
    },
    password: {
        minLength: 8,
        maxLength: 20,
        requireSpecialSymbols: true,
        requireNumbers: true,
        allowKorean: false
    }
}

const initState = {
    username: {
        value: "",
        valid: null,
        message: ""
    },
    displayname: {
        value: "",
        valid: null,
        message: "" 
    },
    password: {
        value: "",
        valid: null, 
        message: ""
    }
}

const reRenderProps = ["value"]

const state = createDeepProxy(initState, {
    allValid: false,
    passwordHide: true,
    get(target, prop) {
        if(prop === "allValid") return this.allValid;
        if(prop === "passwordHide") return this.passwordHide;
        return target[prop];
    },
    async set(target, prop, value) {
        if(prop === "allValid") return this.allValid = value;
        if(prop === "passwordHide") return this.passwordHide = value;

        if(!(prop in target)) throw new Error("Cannot add new property to state")
        target[prop] = value;
        if(reRenderProps.includes(prop)) {
            validateState();
            await render();
        }
    }, 
    deleteProperty(target, prop) {
        throw new Error(`Cannot delete property '${prop} from state'`);
    }
});

const validateState = () => {
    Object.entries(state).forEach(([prop, {value, valid}]) => {
        const rule = validationConfig[prop];
        const length = value.length;
        state[prop].valid = false;
        if(value === "") {
            state[prop].valid = null;
            return
        }
        else if (regexs.koreanRegex.test(value) && !rule.allowKorean)
            state[prop].message = `${prop} cannot include Korean characters.`;
        else if(length < rule.minLength || length > rule.maxLength)
            state[prop].message = `${prop} must be between ${rule.minLength} and ${rule.maxLength} characters.`;
        else if(!regexs.specialSymbolsRegex.test(value) && rule.requireSpecialSymbols)
            state[prop].message = `${prop} must include a special symbols.`;
        else if(!regexs.numbersRegex.test(value) && rule.requireNumbers)
            state[prop].message = `${prop} must include a number.`;
        else {
            state[prop].valid = true;
        }

        if(prop == "username") {
            
        }
    });
    state.allValid = Object.values(state).find(object => !object.valid) === undefined;
}

const render = async () => {
    // input
    Object.entries(state).forEach(([prop, {value, valid, message}]) => {
        const $input = document.querySelector(`.input:has(#${prop})`);
        const className = valid == null ? "" : valid ? "active" : "disabled";
        $input.classList = "input " + className;
        
        if(valid === false) {
            const $message = $input.querySelector(".message");
            $message.innerText = message;
        }
    });

    // signup button
    if(state.allValid) 
        $submit.classList.add("active");
    else $submit.classList.remove("active");

}

$$input.forEach($input => $input.addEventListener("input", async (event) => {
    const id = event.target.id;
    const value = event.target.value;

    state[id].value = value;
}));

// password hide
$eye.addEventListener("click", (event) => {
    const newType = $password.type === "text" ? "password" : "text";
    $password.type = newType;
});

// submit
$submit.addEventListener("click", (event) => {
    if(state.allValid) return true;
    const message = Object.entries(state).reduce((acc, [key, object], idx, arr) => {
        if(object.valid !== true) {
            if(idx == arr.length - 1) return `${acc} ${key}`;
            else return `${acc} ${key},`;
        }
        return acc;
    }, 'Enter valid');
    alert(message);
    event.preventDefault();
});

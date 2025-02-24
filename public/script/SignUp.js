const $$input = document.querySelectorAll("input");

const checkSpecialSymbols = /[^a-zA-Z0-9\sㄱ-ㅎ가-힣]/;
const checkKorean = /[ㄱ-ㅎ가-힣]/;

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

$$input.forEach($input => $input.addEventListener("change", (event) => {
    const id = event.target.id;
    const value = event.target.value;

    initState[id].value = value;
}));

const state = new Proxy(initState, {
    async set(target, prop, value) {
        if(!(prop in target)) throw new Error("Cannot add new property to state")
        target[prop] = value;
        validateState();
        await render();
    },
    deleteProperty(target, prop) {
        throw new Error(`Cannot delete property '${prop} from state'`)
    }
})

const validateState = () => {
    Object.entries(state).forEach(([prop, {value, valid}]) => {
        const rule = validationConfig[prop];
        const length = value.length;
        if(length < rule.minLength || length > value)
            state[prop].message = `${prop} must be between ${rule.minLength} and ${rule.maxLength} characters.`;
        else if()
    });
}

const render = async () => {
    Object.entries(state).forEach(([prop, {value, valid}]) => {
        const $input = document.querySelector(`.input:has(#${prop})`);
        const className = valid == null ? "" : valid ? "active" : "disabled";
        $input.classList = "input " + className;
    });
}
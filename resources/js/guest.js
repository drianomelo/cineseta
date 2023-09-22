const input = document.querySelectorAll("input");

const handleFocus = ({ target }) => {
    const label = target.previousElementSibling;
    label.classList.add("label");
    label.classList.remove("text-gray-l");
    label.classList.add("text-blue-30");
};

const handleFocusOut = ({ target }) => {
    if (target.value === "") {
        const label = target.previousElementSibling;
        label.classList.remove("label");
        label.classList.remove("text-blue-30");
        label.classList.add("text-gray-l");
    } else {
        const label = target.previousElementSibling;
        label.classList.remove("text-blue-30");
        label.classList.add("text-gray-l");
    }
};

input.forEach((input) => {
    input.addEventListener("focus", handleFocus);
    input.addEventListener("focusout", handleFocusOut);
});

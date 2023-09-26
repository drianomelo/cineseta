const input = document.querySelectorAll("input");

const handleFocus = ({ target }) => {
    const label = target.previousElementSibling;
    const group = label.parentNode.parentNode.parentNode;
    const titleGroup = group.querySelector("h2");
    label.classList.add("label");
    label.classList.remove("text-gray-l");
    label.classList.add("text-blue-30");
    group.classList.remove("border-gray-l");
    group.classList.add("border-blue-30");
    titleGroup.classList.remove("text-gray-l");
    titleGroup.classList.add("text-blue-30");
};

const handleFocusOut = ({ target }) => {
    const label = target.previousElementSibling;
    const group = label.parentNode.parentNode.parentNode;
    const titleGroup = group.querySelector("h2");
    if (target.value === "") {
        label.classList.remove("label");
        label.classList.remove("text-blue-30");
        label.classList.add("text-gray-l");
        group.classList.remove("border-blue-30");
        group.classList.add("border-gray-l");
        titleGroup.classList.remove("text-blue-30");
        titleGroup.classList.add("text-gray-l");
    } else {
        label.classList.remove("text-blue-30");
        label.classList.add("text-gray-l");
        group.classList.remove("border-blue-30");
        group.classList.add("border-gray-l");
        titleGroup.classList.remove("text-blue-30");
        titleGroup.classList.add("text-gray-l");
    }
};

input.forEach((input) => {
    input.addEventListener("focus", handleFocus);
    input.addEventListener("focusout", handleFocusOut);
});

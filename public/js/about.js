document.addEventListener("DOMContentLoaded", function () {
const links = document.querySelectorAll(".navbar nav a");
links.forEach(function (link) {
link.addEventListener("click", function (event) {
const targetId = link.getAttribute("href");
if (targetId && targetId.startsWith("#")) {
const target = document.querySelector(targetId);
if (target) {
event.preventDefault();
target.scrollIntoView({
behavior: "smooth",
block: "start"
});
history.replaceState(null, "", targetId);
}
}
});
});
});
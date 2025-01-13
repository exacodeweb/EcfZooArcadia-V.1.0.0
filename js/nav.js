document.addEventListener("DOMContentLoaded", () => {
  const nav = document.querySelector("nav");

  const timeConfig = {
    dayStart: 6,
    nightStart: 14
  };

  const now = new Date();
  const hour = now.getHours();

  if (hour >= timeConfig.nightStart || hour < timeConfig.dayStart) {
    nav.classList.add("night-mode");
  } else {
    nav.classList.remove("night-mode");
  }
});
document.addEventListener("DOMContentLoaded", () => {
  const neonElement = document.querySelector(".neon");

  const timeConfig = {
    dayStart: 6,
    nightStart: 19
  };

  const now = new Date();
  const hour = now.getHours();

  if (hour >= timeConfig.nightStart || hour < timeConfig.dayStart) {
    neonElement.classList.add("night-mode");
  } else {
    neonElement.classList.remove("night-mode");
  }
});
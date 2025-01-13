document.addEventListener("DOMContentLoaded", () => {
  const dayInput = document.getElementById("day-start");
  const nightInput = document.getElementById("night-start");
  const saveButton = document.getElementById("save-config");

  const loadConfig = () => {
    const config = JSON.parse(localStorage.getItem("timeConfig"));
    if (config) {
      dayInput.value = config.dayStart;
      nightInput.value = config.nightStart;
    }
  };

  const saveConfig = () => {
    const config = {
      dayStart: parseInt(dayInput.value, 10),
      nightStart: parseInt(nightInput.value, 10)
    };
    localStorage.setItem("timeConfig", JSON.stringify(config));
    alert("Configuration sauvegardée !");
    applyStyle(config);
  };

  const applyStyle = (config) => {
    const now = new Date();
    const hour = now.getHours();

    if (hour >= config.nightStart || hour < config.dayStart) {
      document.body.classList.add("night-mode");
    } else {
      document.body.classList.remove("night-mode");
    }
  };

  loadConfig();
  saveButton.addEventListener("click", saveConfig);

  const config = JSON.parse(localStorage.getItem("timeConfig")) || { dayStart: 6, nightStart: 18 };
  applyStyle(config);
});
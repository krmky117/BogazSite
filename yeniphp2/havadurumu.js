const api = "9af75ee123e34885b4482031242412";
const city = "BURSA"; 

fetch(`http://api.weatherapi.com/v1/current.json?key=${api}&q=${city}&lang=tr`)
  .then((response) => response.json())
  .then((data) => {
    console.log(data);

    const havadurumu = document.getElementById("weather");
    if (data && data.current) {
      const temp = data.current.temp_c;
      const condition = data.current.condition.text;
      const icon = data.current.condition.icon;

      havadurumu.innerHTML = `
                <h2>${city} için Hava Durumu</h2>
                <p>Sıcaklık: ${temp}°C</p>
                <p>Durum: ${condition}</p>
                <img src="https:${icon}" alt="${condition}">
            `;
    } else {
      havadurumu.innerHTML = `<p>Hava durumu bilgisi alınamadı.</p>`;
    }
  })


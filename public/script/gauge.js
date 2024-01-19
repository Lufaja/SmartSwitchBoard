const engine_temp = document.getElementById("engine-temp");

new Chart(engine_temp, {
    type: "line",
    data: {
        labels: [5+'m',4+'m',3+'m',2+'m',1+'m',0+'m'],
        indexAxis: 140,
        datasets: [{
        label: 'Engine temp.',
        data: [38,46,57,81,90,90],
        borderColor: "#f36717",
        backgroundColor: [
            '#f36717',
            ],
        fill: false
        }]
    },
    
    options: {
        legend: {
            display: false,
        },
        scales: {
                y: {
                    suggestedMin: 60,
                    suggestedMax: 120
                },
                x: {
                    suggestedMin: 0,
                    suggestedMax: 6
                }
                } 
            },
    });

const bar = document.getElementById("myChart");

const labels = "L";
new Chart(bar, {
    type: "bar",
    data: {
        labels: labels,
        datasets: [{
            label: 'benzine',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
            '#f36717',
            ],
            borderColor: [
            '#f36717',
            ],
            borderWidth: 1
        }]
    },
    
    options: {
        legend: {
            display: false,
        },
        scales: {
            y: {
                suggestedMin: 0,
                suggestedMax: 100
            },
            x: {
                suggestedMin: 0,
                suggestedMax: 1
            },
            r: {
                ticks: {
                    backdropPadding:{
                        x: 0,
                    }
                }
            }
        } 
    },
    });

    const gaugeElement = document.querySelector(".gauge");

    function setGaugeValue(gauge, value) {
        if (value < 0 || value > 100){
            return
        }            

        
        if(value >= 80){
            gauge.querySelector(".gauge__fill__80-100").style.transform = `rotate(${value / 100 / 2}turn)`;
            gauge.querySelector(".gauge__fill").style.transform = `rotate(${ 80 / 100 / 2}turn)`;
        }
        else{
            gauge.querySelector(".gauge__fill").style.transform = `rotate(${value / 100 / 2}turn)`;
        }

        gauge.querySelector(".gauge__pin").style.transform = `rotate(${value * 1.8 - 90}deg)`;
        gauge.querySelector(".gauge__cover").textContent = `${Math.round(value)}%`;
        console.log(value);
        if(value > 79){
            gauge.querySelector(".gauge__cover").style.color = `red`;
            gauge.querySelector(".gauge__cover").style.fontWeight = `bold`;
        }else{
            gauge.querySelector(".gauge__cover").style.color = `black`;
        }
    }

    
    setGaugeValue(gaugeElement, Math.floor(Math.random() * 101));
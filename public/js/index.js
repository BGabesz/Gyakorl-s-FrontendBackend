$(function () {
      const myAjax = new MyAjax();
      const osztalyTomb=["1A","1B","1C","2A","2B","2C","3A","3B","3C","4A","4B","4C","5A","5B","5C","6A","6B","6C"];
      
    $(".kuld").on("click", () => {
        console.log($(".osztalyValaszt option:selected").text());
        console.log($(".tevekenyseg  option:selected").text());
        apiVegpont="/api/bejegyzes"
        szoveg={
            osztaly: $(".osztalyValaszt option:selected").text(),
            tevekenyseg: $(".tevekenysegValaszt").val(),
        }
        myAjax.adatkuldes(apiVegpont, szoveg);
    });
    apiVegpont="/api/bejegyzesek"
    myAjax.adatbeolvas(apiVegpont, false,tablazatbaRak);
    
    apiVegpont="/api/chartshoz"
    myAjax.adatbeolvas(apiVegpont, false,diagramm);
    
    function tablazatbaRak(tomb){
      console.log(tomb);
        const szuloElem = $(".tablazat table");

        const sablonElem = $("footer .bejegyzes ");
        sablonElem.show();
        szuloElem.empty();
        szuloElem.append("<tr><th>Osztály</th><th>Tevékenység</th><th>Pont</th><th>Státusz</th></tr>");
        tomb.forEach(function (elem) {
            console.log(elem);
            let node = sablonElem.clone().appendTo(szuloElem);
            new Bejegyzes(node, elem);
        });
        sablonElem.hide();
        $("footer .bejegyzes").hide();
    }

    function megjelenit2(tomb){
        console.log(tomb);
    }

    apiVegpont="/api/chartshoz"
    myAjax.adatbeolvas(apiVegpont, false,diagramm);
    function diagramm(tomb){
      
        console.log(tomb);
        var tomb1=[];
        tomb1.push([]);
        tomb1[0].push('Osztály','Pontszám',{ role: 'style' });
        for (let index = 1; index < tomb.length+1; index++) {
            let tomb3=[];
            tomb1.push(tomb3);
            tomb1[index].push(tomb[index-1].osztaly_id,parseInt(tomb[index-1].pontszam),'green');
        }
        console.log(tomb1);
        const barChart = {
            chart: null,
            data: tomb1,
            element: '#bar-chart',
            options:  {
              title: 'Pontszámok osztályonként',
              width: 500,
              height: 300
            }
          };
          console.log(barChart);
          const init = () => {
            barChart.chart = new google.visualization.BarChart(document.querySelector(barChart.element));
            barChart.chart.draw(google.visualization.arrayToDataTable(barChart.data),barChart.options);
          };
          google.charts.load('current', {packages: ['corechart'],callback: init});
          
  }
  
  osztalyFeltolt(osztalyTomb);
  function osztalyFeltolt(tomb){
    szoveg="<option value=osszes>Válassz osztályt!</option><option value=osszes>Összes</option>";
    for (let index = 0; index < tomb.length; index++) {
      szoveg+='<option value='+tomb[index]+'><p>' +tomb[index]+"</p></option>";
    }
    $('.osztalyValaszt').html(szoveg);
    $('.osztalyszures').html(szoveg);
  }

  apiVegpont="/api/tevekenysegek"
  myAjax.adatbeolvas(apiVegpont, false,tevekenysegFeltolt);
  function tevekenysegFeltolt(tomb){
    szoveg="<option value=valasztas>Válassz tevékenységet!</option>";
    for (let index = 0; index < tomb.length; index++) {
      szoveg+='<option class="a" value='+index+'><p>' +tomb[index].tevekenyseg_nev+"</p></option>";
    }
    $('.tevekenysegValaszt').html(szoveg);
  }
  $(".osztalyszures").on("input", () => {
    console.log($('.osztalyszures').val());
    apiVegpont="/api/bejegyzesek2?id="+$('.osztalyszures').val();
    myAjax.adatbeolvas(apiVegpont, false,tablazatbaRak);
});
});
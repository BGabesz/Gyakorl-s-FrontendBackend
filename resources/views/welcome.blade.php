<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../js/ajax.js"></script>
        <script src="../js/bejegyzes.js"></script>
        <script src="../js/index.js"></script>
        <link href="../css/index.css" rel="stylesheet" type="text/css" />
        <title>Kizolditjuk a foldet</title>
    </head>
    <body>
        <header>
            <h1>Kizöldítjük a földet!</h1>
        </header>
        <section>
            <form >
                <fieldset>
                    <legend>Mit tettél ma a Földért?</legend>
                    <select class="osztalyValaszt">
                        {{-- <option value="valasztas">Válassz osztályt!</option>
                        <option value="1A">1A</option>
                        <option value="1B">1B</option>
                        <option value="1C">1C</option>
                        <option value="2A">2A</option>
                        <option value="2B">2B</option>
                        <option value="2C">2C</option>
                        <option value="3A">3A</option>
                        <option value="3B">3B</option>
                        <option value="3C">3C</option>
                        <option value="4A">4A</option>
                        <option value="4B">4B</option>
                        <option value="4C">4C</option>
                        <option value="5A">5A</option>
                        <option value="5B">5B</option>
                        <option value="5C">5C</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="6C">6C</option> --}}
                    </select>
                    <select class="tevekenysegValaszt">
                        {{-- <option >Válassz tevékenységet!</option>
                        <option value="4">rollerrel jöttem iskolába</option>
                        <option value="5">10 km-t gyalogoltam buszozás helyett</option>
                        <option value="6">ültettem fát</option>
                        <option value="7">ültettem virágot</option>
                        <option value="8">ültettem egyéb növényt</option>
                        <option value="9">kevesebb vizet használtam a fürdéshez</option>
                        <option value="10">összeszedtem a szemetet egy közterületen</option>
                        <option value="11">tartós szatyorba vásároltam, nem nylonba</option>
                        <option value="12">nem használtam egyszer használatos műanyagot</option>
                        <option value="13">tartós csomagolású terméket vásároltam pl üvegbe vettem a tejet, nem használtam pet palackot</option>
                        <option value="14">környezetbarát csomagolású terméket vásároltam</option>
                        <option value="15">kevesebb húst ettem a héten</option>
                        <option value="16">ökológiai gazdaságból származó élelmiszert vettem</option>
                        <option value="17">kirándultam, szabadban töltöttem időt a héten</option>
                        <option value="18">kevesebb ruhát/terméket vásároltam a héten, hogy fenntarthatóbb legyen a környeztünk!</option>
                        <option value="19">önkénteskedtem a Greenpeace-nél, vagy más zöld szervezetnél</option> --}}
                    </select>
                    <input class="kuld" type="button" value="Küld">
                </fieldset>
            </form> 
            <br>
            <select class="osztalyszures">
            </select>
            <div class="tablazat">
                <table>
                    {{-- <tr>
                        <th>Osztály</th>
                        <th>Tevékenység</th>
                        <th>Pont</th>
                        <th>Státusz</th>
                      </tr>
                      <tr>
                        <td>5C</td>
                        <td>Kerékpárral jöttem iskolába</td>
                        <td>10</td>
                        <td>Jóváhagyásra vár</td>
                      </tr>
                      <tr>
                        <td>3C</td>
                        <td>Rollerrel jöttem iskolába</td>
                        <td>3</td>
                        <td>Elfogadva</td>
                      </tr> --}}
                </table>
            </div>
            {{-- <button id="update-pie-chart">Update Data</button> --}}
            {{-- <div id="pie-chart"></div>
            <div id="line-chart"></div> --}}
            <div id="bar-chart"></div>

            <!-- https://developers.google.com/chart/interactive/docs/quick_start -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        </section>
        <footer>
            <table>
                <tr class="bejegyzes">
                    <td class="osztaly">3C</td>
                    <td class="tevekenyseg">Rollerrel jöttem iskolába</td>
                    <td class="pont">3</td>
                    <td class="status">Elfogadva</td>
                  </tr>
            </table>
        </footer>
    </body>
</html>

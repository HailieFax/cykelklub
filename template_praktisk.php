        <?php if ( get_field( 'beregner' ) ): ?>

        <div id="beregner__container">
            <div class="beregner__section">
                <h2>Find din cykelstørrelse</h2>
                <p>Racercykler har større stel end andre cykler, som citybikes og MTB. Derfor er det vigtigt at du får den korrekte størrelse, og undgår skader på sigt.</p>
                <p>Det skal dog siges, at det er andre faktorer som spiller ind, og derfor anbefaler vi at i spørge os eller en cykelhandler</p>
                <p>Brug eventuelt vores beregner, eller fin din størrelse i tabellen herunder.</p>
            </div>

            <div class="beregner__section">
                <form class="beregner__form">
                    <input id="skridtlaengde" type="number" name="skridtlaengde" placeholder="skridtlængde" min="60" max="110">
                    <div>
                        <button class="btn" onClick="strRacerCykel(); return false;">Beregn</button>
                        <div id="resultat"></div>
                    </div>
                </form>
                
            </div>
        </div>
        <!-- TABEL START -->
        <table>
            <thead>
                <tr class="row-1">
                    <th class="column-1">Skridtlængde</th><th class="column-2">Citybikes</th><th class="column-3">&nbsp;</th><th class="column-4">Racercykler</th><th class="column-5">&nbsp;</th><th class="column-6">Mountainbikes</th><th class="column-7">&nbsp;</th>
                </tr>
            </thead>
            <tbody class="row-hover">
                <tr class="row-2">
                    <td class="column-1">60 cm</td><td class="column-2">35.6 cm</td><td class="column-3">14.0"</td><td class="column-4">39.6 cm</td><td class="column-5">15.6"</td><td class="column-6">31.6 cm</td><td class="column-7">12.4"</td>
                </tr>
                <tr class="row-3">
                    <td class="column-1">61 cm</td><td class="column-2">36.3 cm</td><td class="column-3">14.3"</td><td class="column-4">40.3 cm</td><td class="column-5">15.9"</td><td class="column-6">32.3 cm</td><td class="column-7">12.7"</td>
                </tr>
                <tr class="row-4">
                    <td class="column-1">62 cm</td><td class="column-2">36.9 cm</td><td class="column-3">14.5"</td><td class="column-4">40.9 cm</td><td class="column-5">16.1"</td><td class="column-6">32.9 cm</td><td class="column-7">13.0"</td>
                </tr>
                <tr class="row-5">
                    <td class="column-1">63 cm</td><td class="column-2">37.6 cm</td><td class="column-3">14.8"</td><td class="column-4">41.6 cm</td><td class="column-5">16.4"</td><td class="column-6">33.6 cm</td><td class="column-7">13.2"</td>
                </tr>
                <tr class="row-6">
                    <td class="column-1">64 cm</td><td class="column-2">38.2 cm</td><td class="column-3">15.1"</td><td class="column-4">42.2 cm</td><td class="column-5">16.6"</td><td class="column-6">34.2 cm</td><td class="column-7">13.5"</td>
                </tr>
                <tr class="row-7">
                    <td class="column-1">65 cm</td><td class="column-2">38.9 cm</td><td class="column-3">15.3"</td><td class="column-4">42.9 cm</td><td class="column-5">16.9"</td><td class="column-6">34.9 cm</td><td class="column-7">13.7"</td>
                </tr>
                <tr class="row-8">
                    <td class="column-1">66 cm</td><td class="column-2">39.6 cm</td><td class="column-3">15.6"</td><td class="column-4">43.6 cm</td><td class="column-5">17.1"</td><td class="column-6">35.6 cm</td><td class="column-7">14.0"</td>
                </tr>
                <tr class="row-9">
                    <td class="column-1">67 cm</td><td class="column-2">40.2 cm</td><td class="column-3">15.8"</td><td class="column-4">44.2 cm</td><td class="column-5">17.4"</td><td class="column-6">36.2 cm</td><td class="column-7">14.3"</td>
                </tr>
                <tr class="row-10">
                    <td class="column-1">68 cm</td><td class="column-2">40.9 cm</td><td class="column-3">16.1"</td><td class="column-4">44.9 cm</td><td class="column-5">17.7"</td><td class="column-6">36.9 cm</td><td class="column-7">14.5"</td>
                </tr>
                <tr class="row-11">
                    <td class="column-1">69 cm</td><td class="column-2">41.5 cm</td><td class="column-3">16.4"</td><td class="column-4">45.5 cm</td><td class="column-5">17.9"</td><td class="column-6">37.5 cm</td><td class="column-7">14.8"</td>
                </tr>
                <tr class="row-12">
                    <td class="column-1">70 cm</td><td class="column-2">42.2 cm</td><td class="column-3">16.6"</td><td class="column-4">46.2 cm</td><td class="column-5">18.2"</td><td class="column-6">38.2 cm</td><td class="column-7">15.0"</td>
                </tr>
                <tr class="row-13">
                    <td class="column-1">71 cm</td><td class="column-2">42.9 cm</td><td class="column-3">16.9"</td><td class="column-4">46.9 cm</td><td class="column-5">18.4"</td><td class="column-6">38.9 cm</td><td class="column-7">15.3"</td>
                </tr>
                <tr class="row-14">
                    <td class="column-1">72 cm</td><td class="column-2">43.5 cm</td><td class="column-3">17.1"</td><td class="column-4">47.5 cm</td><td class="column-5">18.7"</td><td class="column-6">39.5 cm</td><td class="column-7">15.6"</td>
                </tr>
                <tr class="row-15">
                    <td class="column-1">73 cm</td><td class="column-2">44.2 cm</td><td class="column-3">17.4"</td><td class="column-4">48.2 cm</td><td class="column-5">19.0"</td><td class="column-6">40.2 cm</td><td class="column-7">15.8"</td>
                </tr>
                <tr class="row-16">
                    <td class="column-1">74 cm</td><td class="column-2">44.8 cm</td><td class="column-3">17.7"</td><td class="column-4">48.8 cm</td><td class="column-5">19.2"</td><td class="column-6">40.8 cm</td><td class="column-7">16.1"</td>
                </tr>
                <tr class="row-17">
                    <td class="column-1">75 cm</td><td class="column-2">45.5 cm</td><td class="column-3">17.9"</td><td class="column-4">49.5 cm</td><td class="column-5">19.5"</td><td class="column-6">41.5 cm</td><td class="column-7">16.3"</td>
                </tr>
                <tr class="row-18">
                    <td class="column-1">76 cm</td><td class="column-2">46.2 cm</td><td class="column-3">18.2"</td><td class="column-4">50.2 cm</td><td class="column-5">19.7"</td><td class="column-6">42.2 cm</td><td class="column-7">16.6"</td>
                </tr>
                <tr class="row-19">
                    <td class="column-1">77 cm</td><td class="column-2">46.8 cm</td><td class="column-3">18.4"</td><td class="column-4">50.8 cm</td><td class="column-5">20.0"</td><td class="column-6">42.8 cm</td><td class="column-7">16.9"</td>
                </tr>
                <tr class="row-20">
                    <td class="column-1">78 cm</td><td class="column-2">47.5 cm</td><td class="column-3">18.7"</td><td class="column-4">51.5 cm</td><td class="column-5">20.3"</td><td class="column-6">43.5 cm</td><td class="column-7">17.1"</td>
                </tr>
                <tr class="row-21">
                    <td class="column-1">79 cm</td><td class="column-2">48.1 cm</td><td class="column-3">19.0"</td><td class="column-4">52.1 cm</td><td class="column-5">20.5"</td><td class="column-6">44.1 cm</td><td class="column-7">17.4"</td>
                </tr>
                <tr class="row-22">
                    <td class="column-1">80 cm</td><td class="column-2">48.8 cm</td><td class="column-3">19.2"</td><td class="column-4">52.8 cm</td><td class="column-5">20.8"</td><td class="column-6">44.8 cm</td><td class="column-7">17.6"</td>
                </tr>
                <tr class="row-23">
                    <td class="column-1">81 cm</td><td class="column-2">49.5 cm</td><td class="column-3">19.5"</td><td class="column-4">53.5 cm</td><td class="column-5">21.0"</td><td class="column-6">45.5 cm</td><td class="column-7">17.9"</td>
                </tr>
                <tr class="row-24">
                    <td class="column-1">82 cm</td><td class="column-2">50.1 cm</td><td class="column-3">19.7"</td><td class="column-4">54.1 cm</td><td class="column-5">21.3"</td><td class="column-6">46.1 cm</td><td class="column-7">18.2"</td>
                </tr>
                <tr class="row-25">
                    <td class="column-1">83 cm</td><td class="column-2">50.8 cm</td><td class="column-3">20.0"</td><td class="column-4">54.8 cm</td><td class="column-5">21.6"</td><td class="column-6">46.8 cm</td><td class="column-7">18.4"</td>
                </tr>
                <tr class="row-26">
                    <td class="column-1">84 cm</td><td class="column-2">51.4 cm</td><td class="column-3">20.3"</td><td class="column-4">55.4 cm</td><td class="column-5">21.8"</td><td class="column-6">47.4 cm</td><td class="column-7">18.7"</td>
                </tr>
                <tr class="row-27">
                    <td class="column-1">85 cm</td><td class="column-2">52.1 cm</td><td class="column-3">20.5"</td><td class="column-4">56.1 cm</td><td class="column-5">22.1"</td><td class="column-6">48.1 cm</td><td class="column-7">18.9"</td>
                </tr>
                <tr class="row-28">
                    <td class="column-1">86 cm</td><td class="column-2">52.8 cm</td><td class="column-3">20.8"</td><td class="column-4">56.8 cm</td><td class="column-5">22.3"</td><td class="column-6">48.8 cm</td><td class="column-7">19.2"</td>
                </tr>
                <tr class="row-29">
                    <td class="column-1">87 cm</td><td class="column-2">53.4 cm</td><td class="column-3">21.0"</td><td class="column-4">57.4 cm</td><td class="column-5">22.6"</td><td class="column-6">49.4 cm</td><td class="column-7">19.5"</td>
                </tr>
                <tr class="row-30">
                    <td class="column-1">88 cm</td><td class="column-2">54.1 cm</td><td class="column-3">21.3"</td><td class="column-4">58.1 cm</td><td class="column-5">22.9"</td><td class="column-6">50.1 cm</td><td class="column-7">19.7"</td>
                </tr>
                <tr class="row-31">
                    <td class="column-1">89 cm</td><td class="column-2">54.7 cm</td><td class="column-3">21.6"</td><td class="column-4">58.7 cm</td><td class="column-5">23.1"</td><td class="column-6">50.7 cm</td><td class="column-7">20.0"</td>
                </tr>
                <tr class="row-32">
                    <td class="column-1">90 cm</td><td class="column-2">55.4 cm</td><td class="column-3">21.8"</td><td class="column-4">59.4 cm</td><td class="column-5">23.4"</td><td class="column-6">51.4 cm</td><td class="column-7">20.2"</td>
                </tr>
                <tr class="row-33">
                    <td class="column-1">91 cm</td><td class="column-2">56.1 cm</td><td class="column-3">22.1"</td><td class="column-4">60.1 cm</td><td class="column-5">23.6"</td><td class="column-6">52.1 cm</td><td class="column-7">20.5"</td>
                </tr>
                <tr class="row-34">
                    <td class="column-1">92 cm</td><td class="column-2">56.7 cm</td><td class="column-3">22.3"</td><td class="column-4">60.7 cm</td><td class="column-5">23.9"</td><td class="column-6">52.7 cm</td><td class="column-7">20.8"</td>
                </tr>
                <tr class="row-35">
                    <td class="column-1">93 cm</td><td class="column-2">57.4 cm</td><td class="column-3">22.6"</td><td class="column-4">61.4 cm</td><td class="column-5">24.2"</td><td class="column-6">53.4 cm</td><td class="column-7">21.0"</td>
                </tr>
                <tr class="row-36">
                    <td class="column-1">94 cm</td><td class="column-2">58.0 cm</td><td class="column-3">22.9"</td><td class="column-4">62.0 cm</td><td class="column-5">24.4"</td><td class="column-6">54.0 cm</td><td class="column-7">21.3"</td>
                </tr>
                <tr class="row-37">
                    <td class="column-1">95 cm</td><td class="column-2">58.7 cm</td><td class="column-3">23.1"</td><td class="column-4">62.7 cm</td><td class="column-5">24.7"</td><td class="column-6">54.7 cm</td><td class="column-7">21.5"</td>
                </tr>
                <tr class="row-38">
                    <td class="column-1">96 cm</td><td class="column-2">59.4 cm</td><td class="column-3">23.4"</td><td class="column-4">63.4 cm</td><td class="column-5">24.9"</td><td class="column-6">55.4 cm</td><td class="column-7">21.8"</td>
                </tr>
                <tr class="row-39">
                    <td class="column-1">97 cm</td><td class="column-2">60.0 cm</td><td class="column-3">23.6"</td><td class="column-4">64.0 cm</td><td class="column-5">25.2"</td><td class="column-6">56.0 cm</td><td class="column-7">22.1"</td>
                </tr>
                <tr class="row-40">
                    <td class="column-1">98 cm</td><td class="column-2">60.7 cm</td><td class="column-3">23.9"</td><td class="column-4">64.7 cm</td><td class="column-5">25.5"</td><td class="column-6">56.7 cm</td><td class="column-7">22.3"</td>
                </tr>
                <tr class="row-41">
                    <td class="column-1">99 cm</td><td class="column-2">61.3 cm</td><td class="column-3">24.1"</td><td class="column-4">65.3 cm</td><td class="column-5">25.7"</td><td class="column-6">57.3 cm</td><td class="column-7">22.6"</td>
                </tr>
                <tr class="row-42">
                    <td class="column-1">100 cm</td><td class="column-2">62.0 cm</td><td class="column-3">24.4"</td><td class="column-4">66.0 cm</td><td class="column-5">26.0"</td><td class="column-6">58.0 cm</td><td class="column-7">22.8"</td>
                </tr>
                <tr class="row-43">
                    <td class="column-1">101 cm</td><td class="column-2">62.7 cm</td><td class="column-3">24.7"</td><td class="column-4">66.7 cm</td><td class="column-5">26.2"</td><td class="column-6">58.7 cm</td><td class="column-7">23.1"</td>
                </tr>
                <tr class="row-44">
                    <td class="column-1">102 cm</td><td class="column-2">63.3 cm</td><td class="column-3">24.9"</td><td class="column-4">67.3 cm</td><td class="column-5">26.5"</td><td class="column-6">59.3 cm</td><td class="column-7">23.4"</td>
                </tr>
                <tr class="row-45">
                    <td class="column-1">103 cm</td><td class="column-2">64.0 cm</td><td class="column-3">25.2"</td><td class="column-4">68.0 cm</td><td class="column-5">26.8"</td><td class="column-6">60.0 cm</td><td class="column-7">23.6"</td>
                </tr>
                <tr class="row-46">
                    <td class="column-1">104 cm</td><td class="column-2">64.6 cm</td><td class="column-3">25.4"</td><td class="column-4">68.6 cm</td><td class="column-5">27.0"</td><td class="column-6">60.6 cm</td><td class="column-7">23.9"</td>
                </tr>
                <tr class="row-47">
                    <td class="column-1">105 cm</td><td class="column-2">65.3 cm</td><td class="column-3">25.7"</td><td class="column-4">69.3 cm</td><td class="column-5">27.3"</td><td class="column-6">61.3 cm</td><td class="column-7">24.1"</td>
                </tr>
                <tr class="row-48">
                    <td class="column-1">106 cm</td><td class="column-2">66.0 cm</td><td class="column-3">26.0"</td><td class="column-4">70.0 cm</td><td class="column-5">27.5"</td><td class="column-6">62.0 cm</td><td class="column-7">24.4"</td>
                </tr>
                <tr class="row-49">
                    <td class="column-1">107 cm</td><td class="column-2">66.6 cm</td><td class="column-3">26.2"</td><td class="column-4">70.6 cm</td><td class="column-5">27.8"</td><td class="column-6">62.6 cm</td><td class="column-7">24.7"</td>
                </tr>
                <tr class="row-50">
                    <td class="column-1">108 cm</td><td class="column-2">67.3 cm</td><td class="column-3">26.5"</td><td class="column-4">71.3 cm</td><td class="column-5">28.1"</td><td class="column-6">63.3 cm</td><td class="column-7">24.9"</td>
                </tr>
                <tr class="row-51">
                    <td class="column-1">109 cm</td><td class="column-2">67.9 cm</td><td class="column-3">26.7"</td><td class="column-4">71.9 cm</td><td class="column-5">28.3"</td><td class="column-6">63.9 cm</td><td class="column-7">25.2"</td>
                </tr>
                <tr class="row-52">
                    <td class="column-1">110 cm</td><td class="column-2">68.6 cm</td><td class="column-3">27.0"</td><td class="column-4">72.6 cm</td><td class="column-5">28.6"</td><td class="column-6">64.6 cm</td><td class="column-7">25.4"</td>
                </tr>
            </tbody>
        </table>
        <!-- TABEL SLUT -->
        <div class="pdf__container">
        <a class="btn pdf" href="http://jesp883f.web.eadania.dk/cykelklub/wp-content/uploads/2020/06/cykelstørrelser.pdf">Download som .pdf</a>
        </div>
        <?php else: // field_name returned false ?>
        
        <p>Beregner ikke fundet</p>
        
        <?php endif; // end of if field_name logic ?>

<x-layout>

    <!--MESSAGGIO SCOREVOLE-->

    <div id="animated-text-strip">
        <span class="marquee">SCONTI DEL 50% SU TUTTI I LIBRI&nbsp;</span>
        <span class="marquee">SCONTI DEL 50% SU TUTTI I LIBRI&nbsp;</span>
        <span class="marquee">SCONTI DEL 50% SU TUTTI I LIBRI&nbsp;</span>
        <span class="marquee">SCONTI DEL 50% SU TUTTI I LIBRI&nbsp;</span>
    </div>

    <!--CALENDARIO DIV SINISTRA-->

    <div class="Pcontenitore">

        <div class="F1contenitore">

            <div class="contianer">
                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker"> May </span>
                        <div class="year-picker" id="year-picker">
                            <span class="year-change" id="pre-year">
                                <pre></pre>
                            </span>
                            <span id="year">2020 </span>
                            <span class="year-change" id="next-year">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>

                    <div class="calendar-body">
                        <div class="calendar-week-days">
                            <div>DOMENICA</div>
                            <div>LUNEDI</div>
                            <div>MARTEDI</div>
                            <div>MERCOLEDI</div>
                            <div>GIOVEDI</div>
                            <div>VENERDI</div>
                            <div>SABATO</div>
                        </div>
                        <div class="calendar-days">
                        </div>
                    </div>
                    <div class="calendar-footer">
                    </div>
                    <div class="date-time-formate">
                        <br>
                        <div class="day-text-formate"><!--SCRIVI QUI QUALCOSA--></div>
                        <div class="date-time-value">
                            <div class="time-formate">02:51:20</div>
                            <div class="date-formate">23 - july - 2022</div>
                        </div>
                    </div>
                    <div class="month-list"></div>
                </div>
            </div>

         
        </div>

        <!--IMMAGINE CAMBIA DIV DESTRA-->

        <div class="F2contenitore">
            
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner">

                     <!--IMMAGINE 1-->

                    <div class="carousel-item active">

                        <div class="card mb-3 " style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://m.media-amazon.com/images/I/719CeDchSsL._AC_UF1000,1000_QL80_.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">LETTURA LIBRO CON AUTORE</h5>
                                  <p class="card-text">Il giorno 22 Marzo 2024 ore 18:00 alla Feltrinelli di Bari lo scrittore Dan Brown leggera un estratto del suo libro più famoso. <br>Per assistere al evento bisogna prenotarsi al numero: 0123456789 <br> sito :www.prenotaevento.it </p>
                                  <p class="card-text"><small class="text-body-secondary">Posti disponibili: 50</small></p>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>

                     <!--IMMAGINE 2-->

                    <div class="carousel-item">

                        <div class="card mb-3 " style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://cdn.robadadonne.it/wp-content/uploads/sites/8/2015/03/i-pilastri-della-terra1-640x980.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">LETTURA LIBRO CON AUTORE</h5>
                                  <p class="card-text">Il giorno 16 Aprile 2024 ore 18:00 alla Feltrinelli di Bari lo scrittore Ken Follett leggera un estratto del suo libro più famoso. <br>Per assistere al evento bisogna prenotarsi al numero: 0123456789 <br> sito :www.prenotaevento.it </p>
                                  <p class="card-text"><small class="text-body-secondary">Posti disponibili: 50</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                     <!--IMMAGINE 3-->

                    <div class="carousel-item">

                        <div class="card mb-3 " style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://m.media-amazon.com/images/I/51ERRBRL10L.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">LETTURA LIBRO CON AUTORE</h5>
                                  <p class="card-text">Il giorno 20 Aprile 2024 ore 18:00 alla Feltrinelli di Bari lo scrittore Licia Troisi leggera un estratto del suo libro più famoso. <br>Per assistere al evento bisogna prenotarsi al numero: 0123456789 <br> sito :www.prenotaevento.it </p>
                                  <p class="card-text"><small class="text-body-secondary">Posti disponibili: 50</small></p>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>

                    <!--IMMAGINE 4-->

                    <div class="carousel-item">

                        <div class="card mb-3 " style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://images-eu.ssl-images-amazon.com/images/I/61sKDZBIS-L._AC_UL600_SR600,600_.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">LETTURA LIBRO CON AUTORE</h5>
                                  <p class="card-text">Il giorno 10 Maggio 2024 ore 18:00 alla Feltrinelli di Bari lo scrittore Fabio Volo leggera un estratto del suo libro più famoso. <br>Per assistere al evento bisogna prenotarsi al numero: 0123456789 <br> sito :www.prenotaevento.it </p>
                                  <p class="card-text"><small class="text-body-secondary">Posti disponibili: 50</small></p>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                    </div>

                    <!--IMMAGINE 5-->

                    <div class="carousel-item">

                        <div class="card mb-3 " style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://m.media-amazon.com/images/I/71+pKvL865L._AC_UF1000,1000_QL80_.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">LETTURA LIBRO CON AUTORE</h5>
                                  <p class="card-text">Il giorno 20 Maggio 2024 ore 18:00 alla Feltrinelli di Bari lo scrittore Chiara Gamberale leggera un estratto del suo libro più famoso. <br>Per assistere al evento bisogna prenotarsi al numero: 0123456789 <br> sito :www.prenotaevento.it </p>
                                  <p class="card-text"><small class="text-body-secondary">Posti disponibili: 50</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>



        
            
            
    </div>



</x-layout>

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
                    <div class="carousel-item active">
                        <img src="https://m.media-amazon.com/images/I/719CeDchSsL._AC_UF1000,1000_QL80_.jpg"  class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.robadadonne.it/wp-content/uploads/sites/8/2015/03/i-pilastri-della-terra1-640x980.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://m.media-amazon.com/images/I/51ERRBRL10L.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images-eu.ssl-images-amazon.com/images/I/61sKDZBIS-L._AC_UL600_SR600,600_.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.mondadori.it/content/uploads/2023/11/978880475386HIG.JPG" class="d-block w-100" alt="...">
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

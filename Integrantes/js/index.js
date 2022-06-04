class MyContent extends HTMLElement {

    
    connectedCallback(){
        this.innerHTML =  `
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }

        h1,
        h2 {color: #4ad295;}

        h5 {font-style: oblique;}

        a,li {
            font-family: Nunito;
            font-size: 110%;
            color: black;
        }
        .logo-header img {
            width: 50px;
        }
        .header {
            background-color: #C5F7EF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .5rem 2rem;
        }

        .menu ul {
            display: flex;
            align-items: center;
        }
        .menu li {
            margin-right: 1.5rem;
        }
        .menu a:hover {
            color: #4ad295;
        }

        .menu li:last-child {
            background-color: #4ad295;
            border: 2px solid #4ad295;
            padding: .25rem .75rem;
            border-radius: .2rem;
        }
        .menu li:last-child:hover {
            background: transparent;
            border: 2px solid #4ad295;
        }

        /* Footer */
        footer {
            background: #C5F7EF;
            padding: 60px 0 30px 0;
            margin: 0;
            overflow: hidden;
        }

        .contenedor-footer {
            display: flex;
            width: 90%;
            justify-content: space-evenly;
            margin: auto;
            padding-bottom: 50px;
            border-bottom: 1px solid #ccc;
        }

        .content-foo {
            text-align: center;
        }

        .content-foo h4 {
            color: black;
            border-bottom: 3px solid #4ad295;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .content-foo p {
            color: black;
        }

        .titulo-final {
            text-align: center;
            font-size: 24px;
            margin: 20px 0 0 0;
            color: black;
        }

        .slider {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .slider ul {
            display: flex;
            padding: 0;
            width: 400%;
            animation: cambio 20s infinite alternate linear;
        }

        .slider li {
            width: 100%;
            list-style: none;
        }

        .slider img {
            width: 100%;
            height: 60%;
        }

        @keyframes cambio {
            0% {margin-left: 0;}
            20% {margin-left: 0;}
            25% {margin-left: -100%;}
            45% {margin-left: -100%;}
            50% {margin-left: -200%;}
            70% {margin-left: -200%;}
            75% {margin-left: -300%;}
            100% {margin-left: -300%;}
        }

        .parent {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 1fr;
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {grid-area: 1 / 2 / 2 / 3;}
        .div2 {grid-area: 1 / 1 / 2 / 2;}

        .cont {
            margin: 5%;
        }
    </style>
    <header class="header">
        <div class="logo-header">
            <img src="images/perro.png">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="index.html"><b>INICIO</b></a> </li>
                <li><a href="Condiciones.html"><b>CONDICIONES</b></a></li>
                <li><a href="Somos.html"><b>QUIENES SOMOS</b></a></li>
                <li><a href="adopcion.html"><b>MASCOTAS</b></a></li>
            </ul>
        </nav>
    </header>

    <div class="cont">
        <h1>Adopción de Mascotas</h1>
        <h5>Ayuda a salvar vidas</h5>
        <br>
        <div class="parent">
            <div class="div1">
                <div class="slider">
                    <ul>
                        <li><img src="images/ima1.jpg"></li>
                        <li><img src="images/ima2.jpg"></li>
                        <li><img src="images/ima4.jpg"></li>
                        <li><img src="images/ima3.jpg"></li>
                    </ul>
                </div>
            </div>
            <div class="div2" align="center">
                La adopción de mascotas es el mayor acto de amor y solidaridad que puedes hacer por un animal. Sobre
                todo,
                si ha sido rescatado de las calles y necesita un hogar. Tú puedes hacer la diferencia al adoptar y
                brindarle
                una mejor calidad de vida. Además, podrás disfrutar de todos los beneficios de tener una mascota.
                <br><br>
                <div align="justify">
                    <h2><b>¿Por qué Adoptar?</b></h2>
                    <ul>
                        <li>Salvas una vida.</li>
                        <li>No apoyarás a tiendas que las venden.</li>
                        </li>Te hacen compañía. Tener una mascota hará que nunca te sientas solo.</li>
                        <li>Te mantienen activo.</li>
                        <li>Le das oportunidad a otros.</li>
                        <li>Te ayudan a distraerte.</li>
                        <li>Te brindan amor incondicional</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>098296312</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>grupo2@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>Santo Domingo</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Erika | Hector | Wilmer | Jordan </h2>
    </footer>
        `;
    }
}

customElements.define('my-content', MyContent);
